<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// On étend la classe AbstractController pour bénéficier des méthodes et propriétés de cette classe dans notre controller
class ArticleController extends AbstractController
{
/*
----------------------------------------------------------------------------------------------------------------------
---------------------------------                  SHOW ALL ARTICLES               -----------------------------------
----------------------------------------------------------------------------------------------------------------------
*/
    // Je génère une url pour la route dont le nom est "article_index"
    // Je passe en parametre de la méthode une variable $request, précédée par le nom de la classe que je veux utiliser.
    // Symfony va créer automatiquement l'instance de la classe dans ma variable
    /**
     * @Route("/", name="article_index", methods={"GET","POST"})
     * @param ArticleRepository $articleRepository
     * @param CategoriesRepository $categoriesRepository
     * @return Response
     */

    // Fonction pour afficher tout les Articles et toutes les Catégories.
    public function index(ArticleRepository $articleRepository, CategoriesRepository $categoriesRepository): Response
    {
        // J'appelle la méthode findAll du Repository.
        // Cette méthode est censée nous retourner tous éléments de l'Entité.
        // Elle va donc executer une requete SELECT en base de données.
        $categorie = $categoriesRepository->findAll();
        $article = $articleRepository->findAll();

        // J'utilise la méthode render pour appeler un fichier Twig et le compiler en html.
        // Et je lui envoie mes variable qui contiennent mes formulaires.
        return $this->render('article/index.html.twig', [
            'articles' => $article,
            'categories' => $categorie,
        ]);
    }


/*
----------------------------------------------------------------------------------------------------------------------
---------------------------------                CREATE NEW ARTICLE                -----------------------------------
----------------------------------------------------------------------------------------------------------------------
*/
    // Je crée une nouvelle route (url) pour créer un Article.
    /**
     * @Route("/new", name="article_new", methods={"GET","POST"})
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */

    // Je crée une fonction pour créer un article.
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Je crée un nouvelle article en créant une nouvelle instance de celui-ci.
        $article = new Article();

        // Grâce à la méthode "createForm" je crée le constructeur de mon formulaire article
        // que j'ai crée dans l'ArticleType, et je lui associe mon Entité Article vide.
        $form = $this->createForm(ArticleType::class, $article);

        // Je récupère les données de la requête et j'associe à mon formulaire.
        $form->handleRequest($request);

        // Si les données de mon formulaire sont valides (que les types rentrés dans les inputs sont bons et
        // que tous les champs obligatoires sont remplis) alors : ->
        if ($form->isSubmitted() && $form->isValid()) {

            // Ici je récupère les données de mon champs 'img' que je stocke dans une variable $imageFile
            $imageFile = $form['img']->getData();

            // j'applique une vérification à mon image.
            if($imageFile){

                // En gros je récupère le nom de mon image.
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);

                // Je vérifie qu'il n'y à pas de caractère spéciaux et je crée un nouveau nom.
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);

                // Je précise ici qu'il faut que le nouveau nom soit unique.
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            }

            // -> J'enregistre en BDD ma variable $article qui n'est plus vide.
            // Je la stock grâce à la méthode "persist".
            $entityManager->persist($article);

            // J'envoie et enregistre en BDD grâce à "flush".
            $entityManager->flush();

            // Je redirige toute les infos sur la route "article_index" qui est ma page d'accueil.
            // Pour permettre au nouvel article de s'afficher.
            return $this->redirectToRoute('article_index');
        }

        // Et je retourne un fichier twig, dans lequel j'envoie ma variable $article et je crée également la vue de mon formulaire.
        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

/*
----------------------------------------------------------------------------------------------------------------------
---------------------------------                SHOW ONE ARTICLE                  -----------------------------------
----------------------------------------------------------------------------------------------------------------------
*/

    // Je me sert d'une wildcard pour afficher un seul article.
    // J'indique dans les parametres que j'aurais besoin de la méthode GET pour récupérer l'id d'un article.
    /**
     * @Route("/{id}", name="article_show", methods={"GET"})
     * @param Article $article
     * @return Response
     */

    // Je crée ma fonction pour l'affiche d'un seul article.
    public function show(Article $article): Response
    {
        // Grâce à la wildcard et la méthode GET, je récupère l'identifiant de mon article qui se trouve dans l'url,
        // et je retourne un fichier twig dans lequel j'envoie la variable $article qui correspondra à l'id dans l'url.
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }
/*
----------------------------------------------------------------------------------------------------------------------
---------------------------------                  EDIT ONE ARTICLE                -----------------------------------
----------------------------------------------------------------------------------------------------------------------
*/
    // Modifier une article grâce à une wildcard et la méthode GET et/ou POST avec une nouvelle route.
    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Article $article
     * @return Response
     */

    // Je crée ma fonction pour afficher un article et le modfiier.
    public function edit(Request $request, Article $article): Response
    {
        // Grâce à la méthode "createForm" je crée le gabarit de mon formulaire article.
        // Je lui associe mon Entité Article qui n'est pas vide grâce à l'id récupéré dans l'url.
        $form = $this->createForm(ArticleType::class, $article);

        // Je récupère les données de la requête et j'associe à mon formulaire.
        $form->handleRequest($request);

        // Si les donneés de mon formulaire sont valide :
        if ($form->isSubmitted() && $form->isValid()) {

            // La méthode récupère l'objet gestionnaire d'entités de Doctrine.
            // Il est responsable de l'enregistrement des objets
            // Et de leur récupération dans la base de données.
            $this->getDoctrine()->getManager()->flush();

            // Je redirige les informations sur l'url avec le nom "article_index"
            // qui est ma page d'accueil. Pour que la mise à jour soit visible.
            return $this->redirectToRoute('article_index');
        }

        // Je retourne un fichier twig avec le formulaire ArticleType, mais aussi ma variable article non vide.
        // Elle devrait être afficher dans mon formulaire.
        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

/*
----------------------------------------------------------------------------------------------------------------------
---------------------------------                DELETE ARTICLE                -----------------------------------
----------------------------------------------------------------------------------------------------------------------
*/
    // Ici aussi je me sert d'une wildcard pour afficher un seul article.
    // J'indique dans les parametres que j'aurais besoin de la méthode DELETE pour supprimer un article via son id.
    /**
     * @Route("/{id}", name="article_delete", methods={"DELETE"})
     * @param Request $request
     * @param Article $article
     * @return Response
     */

    // Je crée la fonction pour supprimer un article.
    public function delete(Request $request, Article $article): Response
    {
        // On récupère les infos du jetons CSRF propre à chaque article grâce à la méthode "get('token')".
        // On récupère l'id de l'article à supprimer grâce à la méthode "getId".
        // Si toutes les conditions sont remplis on peut effectué la suppression de l'article.
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {

            // Grâce à entityManager on récupère l'objet "Doctrine".
            // Qui récupère et enregistre(flush) les données dans la BDD.
            $entityManager = $this->getDoctrine()->getManager();

            // J'utilise l'entityManager avec la méthode remove supprimer l'article.
            $entityManager->remove($article);

            // Et je valide la suppression en BDD avec la méthode flush.
            $entityManager->flush();
        }

        // Je redirige les informations sur l'url avec le nom "article_index"
        // Pour que la mise à jour soit visible sur ma page d'accueil.
        return $this->redirectToRoute('article_index');
    }
}



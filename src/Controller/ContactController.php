<?php


namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ArticleRepository;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// On étend la classe AbstractController pour bénéficier des méthodes et propriétés de cette classe dans notre controller
class ContactController extends AbstractController
{
    // Je génère une url pour la route dont le nom est "article_index" le même que dans le ArticleController
    // Je passe en parametre de la méthode des variables, précédée par le nom de la classe que je veux utiliser.
    // Symfony va créer automatiquement l'instance de la classe dans mes variables.
    /**
     * @Route("/", name="article_index", methods={"GET","POST"})
     * @param ArticleRepository $articleRepository
     * @param CategoriesRepository $categoriesRepository
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param \Swift_Mailer $mailer
     * @return RedirectResponse|Response
     */

    // Je crée une fonction pour envoyer un email de contact.
    public function sendMail(ArticleRepository $articleRepository, CategoriesRepository $categoriesRepository,Request $request, EntityManagerInterface $entityManager, \Swift_Mailer $mailer)
    {
        // J'appelle la méthode findAll du Repository pour retourner tous éléments de l'Entité.
        // Elle va donc executer une requete SELECT en base de données.
        $categorie = $categoriesRepository->findAll();
        $article = $articleRepository->findAll();

        // Je crée un nouveau contact vide (une nouvelle instance de la classe contact)
        $contact = new Contact();

        // Grâce à la méthode "createForm" je crée le constructeur de mon formulaire
        // Je lui associe mon Entité Contact vide.
        $form = $this->createForm(ContactType::class, $contact);

        // Si je suis sur une méthode POST, donc qu'un formulaire a été envoyé.
        if ($request->isMethod('Post')) {

            // Je récupère les données de la requête et j'associe à mon formulaire.
            $form->handleRequest($request);

            //isSubmitted = si un form est envoyé / isValid = si il est valide
            if ($form->isSubmitted() && $form->isValid()) {

                // Grâce à entityManager on récupère l'objet "Doctrine".
                // Qui récupère et enregistre(flush) les données dans la BDD.
                $entityManager = $this->getDoctrine()->getManager();

                // avec persist = on le stock
                $entityManager->persist($contact);

                // avec flush = on l'enregistre en BDD
                $entityManager->flush();

                // Je crée un nouveau message vide que je stock dans ma variable message.
                $message = (new \Swift_Message())

                    // Je détermine les parametres d'envoie du mail. Comme le sujet / l'adresse de l'expéditeur / Le destinataire.
                        ->setSubject('Demande de contact')
                        ->setFrom('laurent.eldin@lapiscine.pro')
                        ->setTo('eldin.laurent@gmail.com')

                    // Je défini le message qui sera adressé dans le mail.
                    // Je concatène avec les méthodes "get" de mon Entité Contact.
                    // Qui récupère les informations envoyées en BDD.
                        ->setBody('Vous avez une demande de contact. Nom: '.$contact->getFirstname().' , '.$contact->getLastname().'. Tel: '.$contact->getPhone().' ; mail: '.$contact->getEmail().'. Sujet: '.$contact->getTopic().'. Message: ' .$contact->getMessage(). '.','text/html');

                // Grâce à la méthode "Send" du bundle Swiftmailer que j'ai placé en parametre
                // Je lui demande d'envoyer ma variable $message qui n'est plus vide.
                $mailer->send($message);

                // Si cela réussis je demande un message "flash" de confirmation pour confirmer à l'utilisateur l'envoie de sa demande.
                $this->addFlash('success', 'Votre demande a été envoyé avec succès.');

                // Et redirige les informations vers la page "article_index" pour qu'elles soient dans l'url
                return $this->redirectToRoute('article_index');
            }
        }

        // Puis je retourne un fichier twig, dans lequel j'envoie mes variable et la création de mon formulaire.
        return $this->render('article/index.html.twig', [
            'forms' => $form->createView(),
            'articles' => $article,
            'categories' => $categorie
        ]);
    }
}
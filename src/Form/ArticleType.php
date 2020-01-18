<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categories;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', EntityType::class, [

                // Je sélectionne l'entité Categories car ma relation fait référence à la catégorie de l'article.
                'class' => Categories::class,

                // J'utilise un "choice_label" pour avoir une LISTE des éléments existant dans l'entité Catégorie.
                'choice_label' => 'libelle',

                // J'utilise un label pour modifier le nom de l'input dans le formulaire.
                'label' => "Catégorie de l'article"
            ])
            ->add('title', TextareaType::class, [
                'label' => "Titre de l'article",

                // J'utilise ici ckEditor pour avoir un éditeur de texte.
                // Pas besoin donc de passer par le HTML direct pour la mise en forme.
                'attr' => array('class' => 'ckeditor')
            ])
            ->add('text', TextareaType::class, [
                'label' => "Contenu de l'article",
                'attr' => array('class' => 'ckeditor')
            ])
            // Ici on définie un TYPE : FileType, pour dire qu'on attend un fichier.
            ->add('img', FileType::class, [
                'label' => 'Image ou photo',
            ])
        ;
    }

    // La méthode "configureOptions" permet de créer un système d'options.
    // Les options requises, les valeurs par défaut, la validation (type, valeur).
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categories;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', EntityType::class, [
                'class' => Categories::class,
                'choice_label' => 'libelle',
                'label' => "Catégorie de l'article"
            ])
            ->add('title', TextareaType::class, [
                'label' => "Titre de l'article",
                'attr' => array('class' => 'ckeditor')
            ])
            ->add('text', TextareaType::class, [
                'label' => "Contenu de l'article",
                'attr' => array('class' => 'ckeditor')
            ])
            ->add('img', FileType::class, [
                'label' => 'Image ou photo',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}

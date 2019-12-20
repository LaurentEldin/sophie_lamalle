<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'Nom'])
            ->add('lastname', TextType::class, ['label' => 'Prénom'])
            ->add('phone', TextType::class, ['label' => 'Téléphone'])
            ->add('email', EmailType::class, ['label' => 'Email'])
            ->add('topic', TextType::class, [
                'label' => 'Sujet',
                'attr' => array('class' => 'topic')
                ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => array('class' => 'contactmail',
                    'rows' => "8")
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

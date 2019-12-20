<?php


namespace App\Controller;


use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function showIndex()
    {
        $form = $this->createForm(ContactType::class);
        return $this->render('public/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
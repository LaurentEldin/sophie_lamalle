<?php


namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return RedirectResponse|Response
     */
    public function sendMail(Request $request, EntityManagerInterface $entityManager)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if($form->isSubmitted() &&  $form->isValid()){

            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/index.html.twig', [
            'forms' => $form->createView()
        ]);
    }
}
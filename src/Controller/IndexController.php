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

            $data = $form->getData();

            $contact->setFirstname($data['firstname']);
            $contact->setLastname($data['lastname']);
            $contact->setPhone($data['phone']);
            $contact->setEmail($data['email']);
            $contact->setTopic($data['topic']);
            $contact->setMessage($data['message']);

            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('public/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
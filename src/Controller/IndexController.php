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
     * @param \Swift_Mailer $mailer
     * @return RedirectResponse|Response
     */
    public function sendMail(Request $request, EntityManagerInterface $entityManager, \Swift_Mailer $mailer)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        if ($request->isMethod('Post')) {

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($contact);
                $entityManager->flush();

                $message = (new \Swift_Message('You Got Mail!'))
                        ->setSubject('Demande de contact')
                        ->setFrom('laurent.eldin@lapiscine.pro')
                        ->setTo('eldin.laurent@gmail.com')
                        ->setBody('Vous avez une demande de contact. Nom: '.$contact->getFirstname().' , '.$contact->getLastname().'. Tel: '.$contact->getPhone().' ; mail: '.$contact->getEmail().'. Sujet: '.$contact->getTopic().'. Message: ' .$contact->getMessage(). '.','text/html');
                $mailer->send($message);

                return $this->redirectToRoute('index');
            }
        }

        return $this->render('public/index.html.twig', [
            'forms' => $form->createView()
        ]);
    }
}
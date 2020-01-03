<?php


namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function showIndex()
    {
        $contact = New ContactType();

        $form = $this->createForm(ContactType::class);
        if($form->isSubmitted() &&  $form->isValid()){
            $firstname = $form['firstname']->getData();
            $lastname = $form['lastname']->getData();
            $phone = $form['phone']->getData();
            $email = $form['email']->getData();
            $topic = $form['topic']->getData();
            $message = $form['message']->getData();
            # set form data
            $contact->setFirstname($firstname);
            $contact->setLastame($lastname);
            $contact->setPhone($phone);
            $contact->setEmail($email);
            $contact->setTopic($topic);
            $contact->setMessage($message);
            # finally add data in database
            $sn = $this->getDoctrine()->getManager();
            $sn -> persist($contact);
            $sn -> flush();
        }

        return $this->render('public/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
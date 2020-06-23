<?php

namespace App\Controller;


use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_page")
     */
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {

        $contact = new Contact();
        $formContact = $this->createForm(ContactType::class, $contact);
        $formContact->handleRequest($request);
        if ($formContact->isSubmitted() && $formContact->isValid()){

            $message = (new \Swift_Message('Demande de renseignement'))
            ->setFrom('from@gmail.com')
            ->setTo($contact->getEmail())
            ->setBody($this->renderView('home_page/notification.html.twig', [
                'contact' => $contact
                ]), 'text/html');

                $mailer->send($message); 
                return $this->render('home_page/index.html.twig');
        }

        return $this->render('home_page/contact.html.twig', [
            "formContact" => $formContact->createView()
        ]);
    }
}
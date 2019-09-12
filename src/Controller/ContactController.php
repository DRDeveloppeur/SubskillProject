<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\NotificationContact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, NotificationContact $notification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notification->notify($contact);
            $this->addFlash('success', 'Votre message as bien été envoyé');

            return $this->redirectToRoute('home', [
                'current_page' => 'contact',
                'form' => $form->createView(),
            ]);
        }

        return $this->render('contact/index.html.twig', [
            'current_page' => 'contact',
            'form' => $form->createView(),
        ]);
    }
}

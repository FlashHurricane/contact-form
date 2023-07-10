<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Contacter;
use App\Factory\ContactFactory;
use App\Form\Type\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ContacterController extends AbstractController
{

    #[Route('/show', name: 'create_message')]
    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager){
        $contacter = new Contacter();

        $form = $this->createForm(ContacterFormType::class, $contacter);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($contacter);
            $entityManager->flush();

            return new Response('Köszönjük szépen a kérdésedet. Válaszunkkal hamarosan keresünk a megadott e-mail címen');

        }else{
            $this->addFlash('hiba', "Hiba! Kérjük töltsd ki az
            összes mezőt!");
        }

        return new Response($twig->render('contacter/show.html.twig', [
            'contacter_form' => $form->createView(),
        ]));
    }
}
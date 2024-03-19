<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Service\MailService;
use App\Security\EmailVerifier;
use App\Form\RegistrationFormType;
use Symfony\Component\Mime\Address;
use Symfony\Component\Form\FormError;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager , MailService $mail): Response
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
//  var_dump(password_verify('Dosana','$2y$13$MHTxv7PwxdOqPVvqIFizaO2cF3nO3FmzUpXU7Jc8cSIAILwHRTm6S'));
        if ($form->isSubmitted() && $form->isValid()) {

            $mailInput=$form->get('email')->getData();

if($entityManager->getRepository(Utilisateur::class)->findOneBy(['email'=> $mailInput])){

echo "<div class='alert alert-danger bg-transparent'> Vous êtes déjà inscrit! </div>";
}else{ 
    // Pour hasher le mot de passe en ligne de commande, pour des tests, ne le faites pas en production! : 
    // php bin/console security:hash-password!
            $user->setPassword(
                $userPasswordHasher->hashPassword($user,
                // pour recupere mp en clair : 
                // 'PlainPassword'=nom du champ
                    $form->get('plainPassword')->getData()
                )
               
            );

            $entityManager->persist($user);
            $entityManager->flush();
        };
            // generate a signed url and email it to the user
            $email=$this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('lsf.tdg@gmail.com', 'developpeur web'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
                    ->context([
                      'mail'=>'lsf.tdg@gmail.com', 
                       
                    ])
            );
        $mail->sendMail('gg@gm.fr', 'please','gg','hh', null);
           return $this->redirectToRoute('app_page1');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'alert'=>$alert??null,
        ]);
    
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre email est vérifié!');

        return $this->redirectToRoute('app_register');
    }
}

<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class SecurityController extends Controller
{
    public function testAction()
    {
        print '<pre>';
        print_r($this->getUser());
        print '</pre>';
        die;
    }

    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $registeredUsername = $request->get('username');

        return $this->render(
            'AppBundle::login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'registered_username' => $registeredUsername,
                'error'         => $error,
            )
        );
    }

    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());

            $user->setPassword($password);
            $user->setTurns('1000');
            $user->setProtectedTurns('500');
            $user->setLevel('1');
            $user->setXp('0');
            $user->setSystem('1');
            $user->setXCoord('10');
            $user->setYCoord('10');
            $user->setLastAction(new \DateTime);
            $user->setDocked(FALSE);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('login', array('username' => $user->getUsername()));
        }

        return $this->render(
            'AppBundle::register.html.twig',
            array('form' => $form->createView())
        );
    }
}

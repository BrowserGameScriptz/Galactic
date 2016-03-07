<?php

namespace GalacticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NavigationController extends Controller
{
	//We set this here so it can be used between functions.
	protected $user;

    public function moveUpAction($yCoord)
    {
		$this->user = $this->getUser();

		if($yCoord == $this->user->getYCoord())
		{
			if ($yCoord > 1)
			{
				$this->user->setYCoord(--$yCoord);
				$this->moveSuccess();
			}
			else
			{
				$this->setFlashIllegalMove();
			}
		}

		return $this->redirectToRoute('home');
    }

    public function moveDownAction($yCoord)
    {
		$this->user = $this->getUser();		
		$system = $this->getDoctrine()->getRepository('GalacticBundle:System')->find($this->user->getSystem());
		
		if($yCoord == $this->user->getYCoord())
		{
			if ($yCoord < $system->getSize())
			{
				$this->user->setYCoord(++$yCoord);
				$this->moveSuccess();
			}
			else
			{
				$this->setFlashIllegalMove();
			}
		}

		return $this->redirectToRoute('home');
    }

    public function moveLeftAction($xCoord)
    {
		$this->user = $this->getUser();
		
		if($xCoord == $this->user->getXCoord())
		{
			if ($xCoord > 1)
			{
				$this->user->setXCoord(--$xCoord);
				$this->moveSuccess();
			}
			else
			{
				$this->setFlashIllegalMove();
			}
		}

		return $this->redirectToRoute('home');

    }

    public function moveRightAction($xCoord)
    {
		$this->user = $this->getUser();
		$system = $this->getDoctrine()->getRepository('GalacticBundle:System')->find($this->user->getSystem());

		if($xCoord == $this->user->getXCoord())
		{
			if ($xCoord < $system->getSize())
			{
				$this->user->setXCoord(++$xCoord);
				$this->moveSuccess();
			}
			else
			{
				$this->setFlashIllegalMove();
			}
		}

		return $this->redirectToRoute('home');
    }

    private function moveSuccess()
    {
        $this->user->setXP($this->user->getXp() + 1);
		$this->user->setTurns($this->user->getTurns() - 1);

		//Save user data
		$em = $this->getDoctrine()->getManager();
		$em->persist($this->user);
		$em->flush();
    }

    private function setFlashIllegalMove()
    {
        $this->get('session')->getFlashBag()->add('notice', 'Unable to move there.');
    }
}

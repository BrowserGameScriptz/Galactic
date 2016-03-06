<?php

namespace GalacticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NavigationController extends Controller
{
	protected $system_size;
	protected $user;

	public function __construct()
	{
		//Change to get value from db for current user system.
		$this->system_size = 20;
	}

    public function moveUpAction()
    {
		$this->user = $this->getUser();
    	$y_coord = $this->user->getYCoord();

    	if ($y_coord < $this->system_size)
    	{
    		$this->user->getYCoord($y_coord++);
            $this->moveSuccess(1);
    	}
    	else
    	{
    		// Can't move up
    	}
    }

    public function moveDownAction()
    {
		$this->user = $this->getUser();
    	$y_coord = $this->user->getYCoord();

    	if ($y_coord > 1)
    	{
    		$this->user->setYCoord($y_coord--);
            $this->moveSuccess(1);
    	}
    	else
    	{
    		// Can't move down
    	}

    }

    public function moveLeftAction()
    {
		$this->user = $this->getUser();
    	$x_coord = $this->user->getXCoord();

    	if ($x_coord > 1)
    	{
    		$this->user->setXCoord($x_coord--);
            $this->moveSuccess(1);
    	}
    	else
    	{
    		// Can't move left
    	}

    }

    public function moveRightAction()
    {
		$this->user = $this->getUser();
    	$x_coord = $this->user->getXCoord();

    	if ($x_coord < $this->system_size)
    	{
    		$this->user->setXCoord($x_coord++);
            $this->moveSuccess(1);
    	}
    	else
    	{
    		// Can't move right
    	}
    }

    private function moveSuccess($xp)
    {
        $this->user->setXP($this->user->getXP() + 1);
    }
}

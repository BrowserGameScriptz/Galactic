<?php

namespace GalacticBundle\Entity;

/**
 * Sector
 */
class Sector
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $system;

    /**
     * @var int
     */
    private $xCoord;

    /**
     * @var int
     */
    private $yCoord;

    /**
     * @var int
     */
    private $type;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set system
     *
     * @param integer $system
     *
     * @return Sector
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return int
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set xCoord
     *
     * @param integer $xCoord
     *
     * @return Sector
     */
    public function setXCoord($xCoord)
    {
        $this->xCoord = $xCoord;

        return $this;
    }

    /**
     * Get xCoord
     *
     * @return int
     */
    public function getXCoord()
    {
        return $this->xCoord;
    }

    /**
     * Set yCoord
     *
     * @param integer $yCoord
     *
     * @return Sector
     */
    public function setYCoord($yCoord)
    {
        $this->yCoord = $yCoord;

        return $this;
    }

    /**
     * Get yCoord
     *
     * @return int
     */
    public function getYCoord()
    {
        return $this->yCoord;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Sector
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }
}

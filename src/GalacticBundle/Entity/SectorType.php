<?php

namespace GalacticBundle\Entity;

/**
 * SectorType
 */
class SectorType
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $visibility;

    /**
     * @var int
     */
    private $speed;


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
     * Set name
     *
     * @param string $name
     *
     * @return SectorType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set visibility
     *
     * @param integer $visibility
     *
     * @return SectorType
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return SectorType
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }
}

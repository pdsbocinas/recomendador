<?php

namespace AppBundle\Entity;

/**
 * Cancha
 */
class Cancha
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $ancho;

    /**
     * @var string
     */
    private $largo;


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
     * Set ancho
     *
     * @param integer $ancho
     *
     * @return Cancha
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;

        return $this;
    }

    /**
     * Get ancho
     *
     * @return int
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set largo
     *
     * @param string $largo
     *
     * @return Cancha
     */
    public function setLargo($largo)
    {
        $this->largo = $largo;

        return $this;
    }

    /**
     * Get largo
     *
     * @return string
     */
    public function getLargo()
    {
        return $this->largo;
    }
}


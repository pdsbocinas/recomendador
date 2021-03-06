<?php

namespace AppBundle\Entity;

/**
 * Destinos
 */
class Destinos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $destino;

    /**
     * @var string
     */
    private $dia;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set destino
     *
     * @param string $destino
     *
     * @return Destinos
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set dia
     *
     * @param string $dia
     *
     * @return Destinos
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return string
     */
    public function getDia()
    {
        return $this->dia;
    }
}

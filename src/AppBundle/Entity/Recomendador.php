<?php

namespace AppBundle\Entity;

/**
 * Recomendador
 */
class Recomendador
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $day;

    /**
     * @var string
     */
    private $place;

    /**
     * @var \DateTime
     */
    private $entryDate;

    /**
     * @var \DateTime
     */
    private $outputDay;


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
     * Set day
     *
     * @param integer $day
     *
     * @return Recomendador
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return integer
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Recomendador
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set entryDate
     *
     * @param \DateTime $entryDate
     *
     * @return Recomendador
     */
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    /**
     * Get entryDate
     *
     * @return \DateTime
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Set outputDay
     *
     * @param \DateTime $outputDay
     *
     * @return Recomendador
     */
    public function setOutputDay($outputDay)
    {
        $this->outputDay = $outputDay;

        return $this;
    }

    /**
     * Get outputDay
     *
     * @return \DateTime
     */
    public function getOutputDay()
    {
        return $this->outputDay;
    }
}

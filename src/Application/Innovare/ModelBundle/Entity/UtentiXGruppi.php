<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtentiXGruppi
 */
class UtentiXGruppi
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Gruppi
     */
    private $gruppo;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\ResponsabileRilevazione
     */
    private $utente;


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
     * Set gruppo
     *
     * @param \Application\Innovare\ModelBundle\Entity\Gruppi $gruppo
     * @return UtentiXGruppi
     */
    public function setGruppo(\Application\Innovare\ModelBundle\Entity\Gruppi $gruppo = null)
    {
        $this->gruppo = $gruppo;

        return $this;
    }

    /**
     * Get gruppo
     *
     * @return \Application\Innovare\ModelBundle\Entity\Gruppi 
     */
    public function getGruppo()
    {
        return $this->gruppo;
    }

    /**
     * Set utente
     *
     * @param \Application\Innovare\ModelBundle\Entity\ResponsabileRilevazione $utente
     * @return UtentiXGruppi
     */
    public function setUtente(\Application\Innovare\ModelBundle\Entity\ResponsabileRilevazione $utente = null)
    {
        $this->utente = $utente;

        return $this;
    }

    /**
     * Get utente
     *
     * @return \Application\Innovare\ModelBundle\Entity\ResponsabileRilevazione 
     */
    public function getUtente()
    {
        return $this->utente;
    }
}

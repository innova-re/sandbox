<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gruppi
 */
class Gruppi
{
    /**
     * @var string
     */
    private $gruppo;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set gruppo
     *
     * @param string $gruppo
     * @return Gruppi
     */
    public function setGruppo($gruppo)
    {
        $this->gruppo = $gruppo;

        return $this;
    }

    /**
     * Get gruppo
     *
     * @return string 
     */
    public function getGruppo()
    {
        return $this->gruppo;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}

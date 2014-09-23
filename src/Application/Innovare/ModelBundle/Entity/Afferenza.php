<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afferenza
 */
class Afferenza
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Ente
     */
    private $idEnte;


    /**
     * Set nome
     *
     * @param string $nome
     * @return Afferenza
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     * @return Afferenza
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
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

    /**
     * Set idEnte
     *
     * @param \Application\Innovare\ModelBundle\Entity\Ente $idEnte
     * @return Afferenza
     */
    public function setIdEnte(\Application\Innovare\ModelBundle\Entity\Ente $idEnte = null)
    {
        $this->idEnte = $idEnte;

        return $this;
    }

    /**
     * Get idEnte
     *
     * @return \Application\Innovare\ModelBundle\Entity\Ente 
     */
    public function getIdEnte()
    {
        return $this->idEnte;
    }
}

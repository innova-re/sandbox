<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 */
class Area
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
    private $idArea;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Afferenza
     */
    private $idAfferenza;


    /**
     * Set nome
     *
     * @param string $nome
     * @return Area
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
     * @return Area
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
     * Get idArea
     *
     * @return integer 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }


    /**
     * Set idAfferenza
     *
     * @param \Application\Innovare\ModelBundle\Entity\Afferenza $idAfferenza
     * @return Area
     */
    public function setIdAfferenza(\Application\Innovare\ModelBundle\Entity\Afferenza $idAfferenza = null)
    {
        $this->idAfferenza = $idAfferenza;

        return $this;
    }

    /**
     * Get idAfferenza
     *
     * @return \Application\Innovare\ModelBundle\Entity\Afferenza 
     */
    public function getIdAfferenza()
    {
        return $this->idAfferenza;
    }

    
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->nome;
    }  
}

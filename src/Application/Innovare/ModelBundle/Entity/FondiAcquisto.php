<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FondiAcquisto
 */
class FondiAcquisto
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
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idStrumento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idStrumento = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return FondiAcquisto
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
     * @return FondiAcquisto
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
     * Set note
     *
     * @param string $note
     * @return FondiAcquisto
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
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
     * Add idStrumento
     *
     * @param \Application\Innovare\ModelBundle\Entity\Strumenti $idStrumento
     * @return FondiAcquisto
     */
    public function addIdStrumento(\Application\Innovare\ModelBundle\Entity\Strumenti $idStrumento)
    {
        $this->idStrumento[] = $idStrumento;

        return $this;
    }

    /**
     * Remove idStrumento
     *
     * @param \Application\Innovare\ModelBundle\Entity\Strumenti $idStrumento
     */
    public function removeIdStrumento(\Application\Innovare\ModelBundle\Entity\Strumenti $idStrumento)
    {
        $this->idStrumento->removeElement($idStrumento);
    }

    /**
     * Get idStrumento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdStrumento()
    {
        return $this->idStrumento;
    }
}

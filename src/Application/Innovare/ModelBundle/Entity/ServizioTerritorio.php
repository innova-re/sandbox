<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServizioTerritorio
 */
class ServizioTerritorio
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idLaboratorio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLaboratorio = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return ServizioTerritorio
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
     * @return ServizioTerritorio
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
     * Add idLaboratorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return ServizioTerritorio
     */
    public function addIdLaboratorio(\Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio)
    {
        $this->idLaboratorio[] = $idLaboratorio;

        return $this;
    }

    /**
     * Remove idLaboratorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     */
    public function removeIdLaboratorio(\Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio)
    {
        $this->idLaboratorio->removeElement($idLaboratorio);
    }

    /**
     * Get idLaboratorio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdLaboratorio()
    {
        return $this->idLaboratorio;
    }
}

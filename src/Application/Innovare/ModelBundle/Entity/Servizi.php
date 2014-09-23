<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servizi
 */
class Servizi
{
    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $strumentiUtilizzati;

    /**
     * @var string
     */
    private $noteStrumentiUtilizzati;

    /**
     * @var string
     */
    private $paroleChiave;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\CategoriaServizio
     */
    private $idCategoriaServizio;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Laboratorio
     */
    private $idLaboratorio;


    /**
     * Set descrizione
     *
     * @param string $descrizione
     * @return Servizi
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
     * Set nome
     *
     * @param string $nome
     * @return Servizi
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
     * Set strumentiUtilizzati
     *
     * @param string $strumentiUtilizzati
     * @return Servizi
     */
    public function setStrumentiUtilizzati($strumentiUtilizzati)
    {
        $this->strumentiUtilizzati = $strumentiUtilizzati;

        return $this;
    }

    /**
     * Get strumentiUtilizzati
     *
     * @return string 
     */
    public function getStrumentiUtilizzati()
    {
        return $this->strumentiUtilizzati;
    }

    /**
     * Set noteStrumentiUtilizzati
     *
     * @param string $noteStrumentiUtilizzati
     * @return Servizi
     */
    public function setNoteStrumentiUtilizzati($noteStrumentiUtilizzati)
    {
        $this->noteStrumentiUtilizzati = $noteStrumentiUtilizzati;

        return $this;
    }

    /**
     * Get noteStrumentiUtilizzati
     *
     * @return string 
     */
    public function getNoteStrumentiUtilizzati()
    {
        return $this->noteStrumentiUtilizzati;
    }

    /**
     * Set paroleChiave
     *
     * @param string $paroleChiave
     * @return Servizi
     */
    public function setParoleChiave($paroleChiave)
    {
        $this->paroleChiave = $paroleChiave;

        return $this;
    }

    /**
     * Get paroleChiave
     *
     * @return string 
     */
    public function getParoleChiave()
    {
        return $this->paroleChiave;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Servizi
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
     * Set idCategoriaServizio
     *
     * @param \Application\Innovare\ModelBundle\Entity\CategoriaServizio $idCategoriaServizio
     * @return Servizi
     */
    public function setIdCategoriaServizio(\Application\Innovare\ModelBundle\Entity\CategoriaServizio $idCategoriaServizio = null)
    {
        $this->idCategoriaServizio = $idCategoriaServizio;

        return $this;
    }

    /**
     * Get idCategoriaServizio
     *
     * @return \Application\Innovare\ModelBundle\Entity\CategoriaServizio 
     */
    public function getIdCategoriaServizio()
    {
        return $this->idCategoriaServizio;
    }

    /**
     * Set idLaboratorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return Servizi
     */
    public function setIdLaboratorio(\Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio = null)
    {
        $this->idLaboratorio = $idLaboratorio;

        return $this;
    }

    /**
     * Get idLaboratorio
     *
     * @return \Application\Innovare\ModelBundle\Entity\Laboratorio 
     */
    public function getIdLaboratorio()
    {
        return $this->idLaboratorio;
    }
}

<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmbitoIntervento
 */
class AmbitoIntervento
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
     * @var string
     */
    private $nomeWeb;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Macroarea
     */
    private $idMacroarea;


    /**
     * Set nome
     *
     * @param string $nome
     * @return AmbitoIntervento
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
     * @return AmbitoIntervento
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
     * @return AmbitoIntervento
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
     * Set nomeWeb
     *
     * @param string $nomeWeb
     * @return AmbitoIntervento
     */
    public function setNomeWeb($nomeWeb)
    {
        $this->nomeWeb = $nomeWeb;

        return $this;
    }

    /**
     * Get nomeWeb
     *
     * @return string 
     */
    public function getNomeWeb()
    {
        return $this->nomeWeb;
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
     * Set idMacroarea
     *
     * @param \Application\Innovare\ModelBundle\Entity\Macroarea $idMacroarea
     * @return AmbitoIntervento
     */
    public function setIdMacroarea(\Application\Innovare\ModelBundle\Entity\Macroarea $idMacroarea = null)
    {
        $this->idMacroarea = $idMacroarea;

        return $this;
    }

    /**
     * Get idMacroarea
     *
     * @return \Application\Innovare\ModelBundle\Entity\Macroarea 
     */
    public function getIdMacroarea()
    {
        return $this->idMacroarea;
    }
}

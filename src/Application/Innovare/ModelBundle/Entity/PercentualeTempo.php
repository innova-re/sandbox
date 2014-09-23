<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PercentualeTempo
 */
class PercentualeTempo
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
    private $percentuale;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nome
     *
     * @param string $nome
     * @return PercentualeTempo
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
     * @return PercentualeTempo
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
     * @return PercentualeTempo
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
     * Set percentuale
     *
     * @param integer $percentuale
     * @return PercentualeTempo
     */
    public function setPercentuale($percentuale)
    {
        $this->percentuale = $percentuale;

        return $this;
    }

    /**
     * Get percentuale
     *
     * @return integer 
     */
    public function getPercentuale()
    {
        return $this->percentuale;
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

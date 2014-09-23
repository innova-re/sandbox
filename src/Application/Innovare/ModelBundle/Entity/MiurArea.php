<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiurArea
 */
class MiurArea
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
    private $nomeWeb;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nome
     *
     * @param string $nome
     * @return MiurArea
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
     * @return MiurArea
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
     * Set nomeWeb
     *
     * @param string $nomeWeb
     * @return MiurArea
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
     * Set note
     *
     * @param string $note
     * @return MiurArea
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
}

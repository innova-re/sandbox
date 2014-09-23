<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiurSsd
 */
class MiurSsd
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $nomeWeb;

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
     * @var \Application\Innovare\ModelBundle\Entity\MiurArea
     */
    private $idMiurArea;


    /**
     * Set nome
     *
     * @param string $nome
     * @return MiurSsd
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
     * Set nomeWeb
     *
     * @param string $nomeWeb
     * @return MiurSsd
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
     * Set descrizione
     *
     * @param string $descrizione
     * @return MiurSsd
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
     * @return MiurSsd
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
     * Set idMiurArea
     *
     * @param \Application\Innovare\ModelBundle\Entity\MiurArea $idMiurArea
     * @return MiurSsd
     */
    public function setIdMiurArea(\Application\Innovare\ModelBundle\Entity\MiurArea $idMiurArea = null)
    {
        $this->idMiurArea = $idMiurArea;

        return $this;
    }

    /**
     * Get idMiurArea
     *
     * @return \Application\Innovare\ModelBundle\Entity\MiurArea 
     */
    public function getIdMiurArea()
    {
        return $this->idMiurArea;
    }
}

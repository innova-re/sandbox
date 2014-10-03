<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaboratorioTecnici
 */
class LaboratorioTecnici
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $cognome;

    /**
     * @var string
     */
    private $matricola;

    /**
     * @var string
     */
    private $noteTecnico;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Laboratorio
     *
     * @ORM\ManyToOne(targetEntity="Application\Innovare\ModelBundle\Entity\Laboratorio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_laboratorio", referencedColumnName="id_laboratorio")
     * })
     */
    private $idLaboratorio;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\PercentualeTempo
     */
    private $idPercentualeTempoDedicato;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\TipologiaContratto
     */
    private $idTipologiaContratto;


    /**
     * Set nome
     *
     * @param string $nome
     * @return LaboratorioTecnici
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
     * Set cognome
     *
     * @param string $cognome
     * @return LaboratorioTecnici
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string 
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set matricola
     *
     * @param string $matricola
     * @return LaboratorioTecnici
     */
    public function setMatricola($matricola)
    {
        $this->matricola = $matricola;

        return $this;
    }

    /**
     * Get matricola
     *
     * @return string 
     */
    public function getMatricola()
    {
        return $this->matricola;
    }

    /**
     * Set noteTecnico
     *
     * @param string $noteTecnico
     * @return LaboratorioTecnici
     */
    public function setNoteTecnico($noteTecnico)
    {
        $this->noteTecnico = $noteTecnico;

        return $this;
    }

    /**
     * Get noteTecnico
     *
     * @return string 
     */
    public function getNoteTecnico()
    {
        return $this->noteTecnico;
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
     * Set idLaboratorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return LaboratorioTecnici
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

    /**
     * Set idPercentualeTempoDedicato
     *
     * @param \Application\Innovare\ModelBundle\Entity\PercentualeTempo $idPercentualeTempoDedicato
     * @return LaboratorioTecnici
     */
    public function setIdPercentualeTempoDedicato(\Application\Innovare\ModelBundle\Entity\PercentualeTempo $idPercentualeTempoDedicato = null)
    {
        $this->idPercentualeTempoDedicato = $idPercentualeTempoDedicato;

        return $this;
    }

    /**
     * Get idPercentualeTempoDedicato
     *
     * @return \Application\Innovare\ModelBundle\Entity\PercentualeTempo 
     */
    public function getIdPercentualeTempoDedicato()
    {
        return $this->idPercentualeTempoDedicato;
    }

    /**
     * Set idTipologiaContratto
     *
     * @param \Application\Innovare\ModelBundle\Entity\TipologiaContratto $idTipologiaContratto
     * @return LaboratorioTecnici
     */
    public function setIdTipologiaContratto(\Application\Innovare\ModelBundle\Entity\TipologiaContratto $idTipologiaContratto = null)
    {
        $this->idTipologiaContratto = $idTipologiaContratto;

        return $this;
    }

    /**
     * Get idTipologiaContratto
     *
     * @return \Application\Innovare\ModelBundle\Entity\TipologiaContratto 
     */
    public function getIdTipologiaContratto()
    {
        return $this->idTipologiaContratto;
    }
}

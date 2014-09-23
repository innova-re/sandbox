<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaboratorioResponsabile
 */
class LaboratorioResponsabile
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
    private $qualifica;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $contattiLaboratorio;

    /**
     * @var boolean
     */
    private $idFotoLaboratorio;

    /**
     * @var string
     */
    private $noteSuPossibiliFuturiServizi;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Laboratorio
     */
    private $idLaboratorio;


    /**
     * Set nome
     *
     * @param string $nome
     * @return LaboratorioResponsabile
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
     * @return LaboratorioResponsabile
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
     * @return LaboratorioResponsabile
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
     * Set qualifica
     *
     * @param string $qualifica
     * @return LaboratorioResponsabile
     */
    public function setQualifica($qualifica)
    {
        $this->qualifica = $qualifica;

        return $this;
    }

    /**
     * Get qualifica
     *
     * @return string 
     */
    public function getQualifica()
    {
        return $this->qualifica;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return LaboratorioResponsabile
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return LaboratorioResponsabile
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set contattiLaboratorio
     *
     * @param string $contattiLaboratorio
     * @return LaboratorioResponsabile
     */
    public function setContattiLaboratorio($contattiLaboratorio)
    {
        $this->contattiLaboratorio = $contattiLaboratorio;

        return $this;
    }

    /**
     * Get contattiLaboratorio
     *
     * @return string 
     */
    public function getContattiLaboratorio()
    {
        return $this->contattiLaboratorio;
    }

    /**
     * Set idFotoLaboratorio
     *
     * @param boolean $idFotoLaboratorio
     * @return LaboratorioResponsabile
     */
    public function setIdFotoLaboratorio($idFotoLaboratorio)
    {
        $this->idFotoLaboratorio = $idFotoLaboratorio;

        return $this;
    }

    /**
     * Get idFotoLaboratorio
     *
     * @return boolean 
     */
    public function getIdFotoLaboratorio()
    {
        return $this->idFotoLaboratorio;
    }

    /**
     * Set noteSuPossibiliFuturiServizi
     *
     * @param string $noteSuPossibiliFuturiServizi
     * @return LaboratorioResponsabile
     */
    public function setNoteSuPossibiliFuturiServizi($noteSuPossibiliFuturiServizi)
    {
        $this->noteSuPossibiliFuturiServizi = $noteSuPossibiliFuturiServizi;

        return $this;
    }

    /**
     * Get noteSuPossibiliFuturiServizi
     *
     * @return string 
     */
    public function getNoteSuPossibiliFuturiServizi()
    {
        return $this->noteSuPossibiliFuturiServizi;
    }

    /**
     * Set idLaboratorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return LaboratorioResponsabile
     */
    public function setIdLaboratorio(\Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio)
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

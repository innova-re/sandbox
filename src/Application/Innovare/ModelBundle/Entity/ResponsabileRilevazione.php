<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsabileRilevazione
 */
class ResponsabileRilevazione
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
    private $telefono;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $codiceFiscale;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nome
     *
     * @param string $nome
     * @return ResponsabileRilevazione
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
     * @return ResponsabileRilevazione
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
     * @return ResponsabileRilevazione
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
     * @return ResponsabileRilevazione
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
     * Set telefono
     *
     * @param string $telefono
     * @return ResponsabileRilevazione
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
     * Set email
     *
     * @param string $email
     * @return ResponsabileRilevazione
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
     * Set note
     *
     * @param string $note
     * @return ResponsabileRilevazione
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
     * Set password
     *
     * @param string $password
     * @return ResponsabileRilevazione
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set codiceFiscale
     *
     * @param string $codiceFiscale
     * @return ResponsabileRilevazione
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;

        return $this;
    }

    /**
     * Get codiceFiscale
     *
     * @return string 
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
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

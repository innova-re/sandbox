<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegioneProvincia
 */
class RegioneProvincia
{
    /**
     * @var integer
     */
    private $codiceRipartizione;

    /**
     * @var string
     */
    private $codiceNuts12006;

    /**
     * @var string
     */
    private $codiceNuts12010;

    /**
     * @var string
     */
    private $ripartizioneGeograficaMaiuscolo;

    /**
     * @var string
     */
    private $ripartizioneGeografica;

    /**
     * @var integer
     */
    private $codiceRegione;

    /**
     * @var string
     */
    private $codiceNuts22006A;

    /**
     * @var string
     */
    private $codiceNuts22010A;

    /**
     * @var string
     */
    private $denominazioneRegioneMaiuscolo;

    /**
     * @var string
     */
    private $denominazioneRegione;

    /**
     * @var string
     */
    private $codiceNuts32006;

    /**
     * @var string
     */
    private $codiceNuts32010;

    /**
     * @var string
     */
    private $denominazioneProvincia;

    /**
     * @var string
     */
    private $siglaAutomobilistica;

    /**
     * @var integer
     */
    private $codiceProvincia;


    /**
     * Set codiceRipartizione
     *
     * @param integer $codiceRipartizione
     * @return RegioneProvincia
     */
    public function setCodiceRipartizione($codiceRipartizione)
    {
        $this->codiceRipartizione = $codiceRipartizione;

        return $this;
    }

    /**
     * Get codiceRipartizione
     *
     * @return integer 
     */
    public function getCodiceRipartizione()
    {
        return $this->codiceRipartizione;
    }

    /**
     * Set codiceNuts12006
     *
     * @param string $codiceNuts12006
     * @return RegioneProvincia
     */
    public function setCodiceNuts12006($codiceNuts12006)
    {
        $this->codiceNuts12006 = $codiceNuts12006;

        return $this;
    }

    /**
     * Get codiceNuts12006
     *
     * @return string 
     */
    public function getCodiceNuts12006()
    {
        return $this->codiceNuts12006;
    }

    /**
     * Set codiceNuts12010
     *
     * @param string $codiceNuts12010
     * @return RegioneProvincia
     */
    public function setCodiceNuts12010($codiceNuts12010)
    {
        $this->codiceNuts12010 = $codiceNuts12010;

        return $this;
    }

    /**
     * Get codiceNuts12010
     *
     * @return string 
     */
    public function getCodiceNuts12010()
    {
        return $this->codiceNuts12010;
    }

    /**
     * Set ripartizioneGeograficaMaiuscolo
     *
     * @param string $ripartizioneGeograficaMaiuscolo
     * @return RegioneProvincia
     */
    public function setRipartizioneGeograficaMaiuscolo($ripartizioneGeograficaMaiuscolo)
    {
        $this->ripartizioneGeograficaMaiuscolo = $ripartizioneGeograficaMaiuscolo;

        return $this;
    }

    /**
     * Get ripartizioneGeograficaMaiuscolo
     *
     * @return string 
     */
    public function getRipartizioneGeograficaMaiuscolo()
    {
        return $this->ripartizioneGeograficaMaiuscolo;
    }

    /**
     * Set ripartizioneGeografica
     *
     * @param string $ripartizioneGeografica
     * @return RegioneProvincia
     */
    public function setRipartizioneGeografica($ripartizioneGeografica)
    {
        $this->ripartizioneGeografica = $ripartizioneGeografica;

        return $this;
    }

    /**
     * Get ripartizioneGeografica
     *
     * @return string 
     */
    public function getRipartizioneGeografica()
    {
        return $this->ripartizioneGeografica;
    }

    /**
     * Set codiceRegione
     *
     * @param integer $codiceRegione
     * @return RegioneProvincia
     */
    public function setCodiceRegione($codiceRegione)
    {
        $this->codiceRegione = $codiceRegione;

        return $this;
    }

    /**
     * Get codiceRegione
     *
     * @return integer 
     */
    public function getCodiceRegione()
    {
        return $this->codiceRegione;
    }

    /**
     * Set codiceNuts22006A
     *
     * @param string $codiceNuts22006A
     * @return RegioneProvincia
     */
    public function setCodiceNuts22006A($codiceNuts22006A)
    {
        $this->codiceNuts22006A = $codiceNuts22006A;

        return $this;
    }

    /**
     * Get codiceNuts22006A
     *
     * @return string 
     */
    public function getCodiceNuts22006A()
    {
        return $this->codiceNuts22006A;
    }

    /**
     * Set codiceNuts22010A
     *
     * @param string $codiceNuts22010A
     * @return RegioneProvincia
     */
    public function setCodiceNuts22010A($codiceNuts22010A)
    {
        $this->codiceNuts22010A = $codiceNuts22010A;

        return $this;
    }

    /**
     * Get codiceNuts22010A
     *
     * @return string 
     */
    public function getCodiceNuts22010A()
    {
        return $this->codiceNuts22010A;
    }

    /**
     * Set denominazioneRegioneMaiuscolo
     *
     * @param string $denominazioneRegioneMaiuscolo
     * @return RegioneProvincia
     */
    public function setDenominazioneRegioneMaiuscolo($denominazioneRegioneMaiuscolo)
    {
        $this->denominazioneRegioneMaiuscolo = $denominazioneRegioneMaiuscolo;

        return $this;
    }

    /**
     * Get denominazioneRegioneMaiuscolo
     *
     * @return string 
     */
    public function getDenominazioneRegioneMaiuscolo()
    {
        return $this->denominazioneRegioneMaiuscolo;
    }

    /**
     * Set denominazioneRegione
     *
     * @param string $denominazioneRegione
     * @return RegioneProvincia
     */
    public function setDenominazioneRegione($denominazioneRegione)
    {
        $this->denominazioneRegione = $denominazioneRegione;

        return $this;
    }

    /**
     * Get denominazioneRegione
     *
     * @return string 
     */
    public function getDenominazioneRegione()
    {
        return $this->denominazioneRegione;
    }

    /**
     * Set codiceNuts32006
     *
     * @param string $codiceNuts32006
     * @return RegioneProvincia
     */
    public function setCodiceNuts32006($codiceNuts32006)
    {
        $this->codiceNuts32006 = $codiceNuts32006;

        return $this;
    }

    /**
     * Get codiceNuts32006
     *
     * @return string 
     */
    public function getCodiceNuts32006()
    {
        return $this->codiceNuts32006;
    }

    /**
     * Set codiceNuts32010
     *
     * @param string $codiceNuts32010
     * @return RegioneProvincia
     */
    public function setCodiceNuts32010($codiceNuts32010)
    {
        $this->codiceNuts32010 = $codiceNuts32010;

        return $this;
    }

    /**
     * Get codiceNuts32010
     *
     * @return string 
     */
    public function getCodiceNuts32010()
    {
        return $this->codiceNuts32010;
    }

    /**
     * Set denominazioneProvincia
     *
     * @param string $denominazioneProvincia
     * @return RegioneProvincia
     */
    public function setDenominazioneProvincia($denominazioneProvincia)
    {
        $this->denominazioneProvincia = $denominazioneProvincia;

        return $this;
    }

    /**
     * Get denominazioneProvincia
     *
     * @return string 
     */
    public function getDenominazioneProvincia()
    {
        return $this->denominazioneProvincia;
    }

    /**
     * Set siglaAutomobilistica
     *
     * @param string $siglaAutomobilistica
     * @return RegioneProvincia
     */
    public function setSiglaAutomobilistica($siglaAutomobilistica)
    {
        $this->siglaAutomobilistica = $siglaAutomobilistica;

        return $this;
    }

    /**
     * Get siglaAutomobilistica
     *
     * @return string 
     */
    public function getSiglaAutomobilistica()
    {
        return $this->siglaAutomobilistica;
    }

    /**
     * Get codiceProvincia
     *
     * @return integer 
     */
    public function getCodiceProvincia()
    {
        return $this->codiceProvincia;
    }
}

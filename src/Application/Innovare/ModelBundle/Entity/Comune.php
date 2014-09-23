<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comune
 */
class Comune
{
    /**
     * @var integer
     */
    private $codiceRegione;

    /**
     * @var integer
     */
    private $codiceComune;

    /**
     * @var integer
     */
    private $codiceIstatComuneFormatoAlfanumerico;

    /**
     * @var integer
     */
    private $codiceIstatComuneFormatoNumerico;

    /**
     * @var integer
     */
    private $codiceIstatComune103ProvinceFormatoNumerico;

    /**
     * @var integer
     */
    private $codiceIstatComune107ProvinceFormatoNumerico;

    /**
     * @var string
     */
    private $denominazioneItalianoTedesco;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $nomeTedesco;

    /**
     * @var integer
     */
    private $comuneCapoluogoProvincia;

    /**
     * @var integer
     */
    private $zonaAltimetrica;

    /**
     * @var integer
     */
    private $altitudineDelCentroInMetri;

    /**
     * @var integer
     */
    private $comuneLitoraneo;

    /**
     * @var string
     */
    private $comuneMontano;

    /**
     * @var integer
     */
    private $codiceSistemaLocaleDelLavoro2001;

    /**
     * @var string
     */
    private $denominazioneSistemaLocaleDelLavoro2001;

    /**
     * @var string
     */
    private $superficieTerritorialeTotaleKmq;

    /**
     * @var integer
     */
    private $popolazioneLegale200121102001;

    /**
     * @var integer
     */
    private $popolazioneResidenteAl31122008;

    /**
     * @var integer
     */
    private $popolazioneResidenteAl31122009;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\RegioneProvincia
     */
    private $codiceProvincia;


    /**
     * Set codiceRegione
     *
     * @param integer $codiceRegione
     * @return Comune
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
     * Set codiceComune
     *
     * @param integer $codiceComune
     * @return Comune
     */
    public function setCodiceComune($codiceComune)
    {
        $this->codiceComune = $codiceComune;

        return $this;
    }

    /**
     * Get codiceComune
     *
     * @return integer 
     */
    public function getCodiceComune()
    {
        return $this->codiceComune;
    }

    /**
     * Set codiceIstatComuneFormatoAlfanumerico
     *
     * @param integer $codiceIstatComuneFormatoAlfanumerico
     * @return Comune
     */
    public function setCodiceIstatComuneFormatoAlfanumerico($codiceIstatComuneFormatoAlfanumerico)
    {
        $this->codiceIstatComuneFormatoAlfanumerico = $codiceIstatComuneFormatoAlfanumerico;

        return $this;
    }

    /**
     * Get codiceIstatComuneFormatoAlfanumerico
     *
     * @return integer 
     */
    public function getCodiceIstatComuneFormatoAlfanumerico()
    {
        return $this->codiceIstatComuneFormatoAlfanumerico;
    }

    /**
     * Set codiceIstatComuneFormatoNumerico
     *
     * @param integer $codiceIstatComuneFormatoNumerico
     * @return Comune
     */
    public function setCodiceIstatComuneFormatoNumerico($codiceIstatComuneFormatoNumerico)
    {
        $this->codiceIstatComuneFormatoNumerico = $codiceIstatComuneFormatoNumerico;

        return $this;
    }

    /**
     * Get codiceIstatComuneFormatoNumerico
     *
     * @return integer 
     */
    public function getCodiceIstatComuneFormatoNumerico()
    {
        return $this->codiceIstatComuneFormatoNumerico;
    }

    /**
     * Set codiceIstatComune103ProvinceFormatoNumerico
     *
     * @param integer $codiceIstatComune103ProvinceFormatoNumerico
     * @return Comune
     */
    public function setCodiceIstatComune103ProvinceFormatoNumerico($codiceIstatComune103ProvinceFormatoNumerico)
    {
        $this->codiceIstatComune103ProvinceFormatoNumerico = $codiceIstatComune103ProvinceFormatoNumerico;

        return $this;
    }

    /**
     * Get codiceIstatComune103ProvinceFormatoNumerico
     *
     * @return integer 
     */
    public function getCodiceIstatComune103ProvinceFormatoNumerico()
    {
        return $this->codiceIstatComune103ProvinceFormatoNumerico;
    }

    /**
     * Set codiceIstatComune107ProvinceFormatoNumerico
     *
     * @param integer $codiceIstatComune107ProvinceFormatoNumerico
     * @return Comune
     */
    public function setCodiceIstatComune107ProvinceFormatoNumerico($codiceIstatComune107ProvinceFormatoNumerico)
    {
        $this->codiceIstatComune107ProvinceFormatoNumerico = $codiceIstatComune107ProvinceFormatoNumerico;

        return $this;
    }

    /**
     * Get codiceIstatComune107ProvinceFormatoNumerico
     *
     * @return integer 
     */
    public function getCodiceIstatComune107ProvinceFormatoNumerico()
    {
        return $this->codiceIstatComune107ProvinceFormatoNumerico;
    }

    /**
     * Set denominazioneItalianoTedesco
     *
     * @param string $denominazioneItalianoTedesco
     * @return Comune
     */
    public function setDenominazioneItalianoTedesco($denominazioneItalianoTedesco)
    {
        $this->denominazioneItalianoTedesco = $denominazioneItalianoTedesco;

        return $this;
    }

    /**
     * Get denominazioneItalianoTedesco
     *
     * @return string 
     */
    public function getDenominazioneItalianoTedesco()
    {
        return $this->denominazioneItalianoTedesco;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Comune
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
     * Set nomeTedesco
     *
     * @param string $nomeTedesco
     * @return Comune
     */
    public function setNomeTedesco($nomeTedesco)
    {
        $this->nomeTedesco = $nomeTedesco;

        return $this;
    }

    /**
     * Get nomeTedesco
     *
     * @return string 
     */
    public function getNomeTedesco()
    {
        return $this->nomeTedesco;
    }

    /**
     * Set comuneCapoluogoProvincia
     *
     * @param integer $comuneCapoluogoProvincia
     * @return Comune
     */
    public function setComuneCapoluogoProvincia($comuneCapoluogoProvincia)
    {
        $this->comuneCapoluogoProvincia = $comuneCapoluogoProvincia;

        return $this;
    }

    /**
     * Get comuneCapoluogoProvincia
     *
     * @return integer 
     */
    public function getComuneCapoluogoProvincia()
    {
        return $this->comuneCapoluogoProvincia;
    }

    /**
     * Set zonaAltimetrica
     *
     * @param integer $zonaAltimetrica
     * @return Comune
     */
    public function setZonaAltimetrica($zonaAltimetrica)
    {
        $this->zonaAltimetrica = $zonaAltimetrica;

        return $this;
    }

    /**
     * Get zonaAltimetrica
     *
     * @return integer 
     */
    public function getZonaAltimetrica()
    {
        return $this->zonaAltimetrica;
    }

    /**
     * Set altitudineDelCentroInMetri
     *
     * @param integer $altitudineDelCentroInMetri
     * @return Comune
     */
    public function setAltitudineDelCentroInMetri($altitudineDelCentroInMetri)
    {
        $this->altitudineDelCentroInMetri = $altitudineDelCentroInMetri;

        return $this;
    }

    /**
     * Get altitudineDelCentroInMetri
     *
     * @return integer 
     */
    public function getAltitudineDelCentroInMetri()
    {
        return $this->altitudineDelCentroInMetri;
    }

    /**
     * Set comuneLitoraneo
     *
     * @param integer $comuneLitoraneo
     * @return Comune
     */
    public function setComuneLitoraneo($comuneLitoraneo)
    {
        $this->comuneLitoraneo = $comuneLitoraneo;

        return $this;
    }

    /**
     * Get comuneLitoraneo
     *
     * @return integer 
     */
    public function getComuneLitoraneo()
    {
        return $this->comuneLitoraneo;
    }

    /**
     * Set comuneMontano
     *
     * @param string $comuneMontano
     * @return Comune
     */
    public function setComuneMontano($comuneMontano)
    {
        $this->comuneMontano = $comuneMontano;

        return $this;
    }

    /**
     * Get comuneMontano
     *
     * @return string 
     */
    public function getComuneMontano()
    {
        return $this->comuneMontano;
    }

    /**
     * Set codiceSistemaLocaleDelLavoro2001
     *
     * @param integer $codiceSistemaLocaleDelLavoro2001
     * @return Comune
     */
    public function setCodiceSistemaLocaleDelLavoro2001($codiceSistemaLocaleDelLavoro2001)
    {
        $this->codiceSistemaLocaleDelLavoro2001 = $codiceSistemaLocaleDelLavoro2001;

        return $this;
    }

    /**
     * Get codiceSistemaLocaleDelLavoro2001
     *
     * @return integer 
     */
    public function getCodiceSistemaLocaleDelLavoro2001()
    {
        return $this->codiceSistemaLocaleDelLavoro2001;
    }

    /**
     * Set denominazioneSistemaLocaleDelLavoro2001
     *
     * @param string $denominazioneSistemaLocaleDelLavoro2001
     * @return Comune
     */
    public function setDenominazioneSistemaLocaleDelLavoro2001($denominazioneSistemaLocaleDelLavoro2001)
    {
        $this->denominazioneSistemaLocaleDelLavoro2001 = $denominazioneSistemaLocaleDelLavoro2001;

        return $this;
    }

    /**
     * Get denominazioneSistemaLocaleDelLavoro2001
     *
     * @return string 
     */
    public function getDenominazioneSistemaLocaleDelLavoro2001()
    {
        return $this->denominazioneSistemaLocaleDelLavoro2001;
    }

    /**
     * Set superficieTerritorialeTotaleKmq
     *
     * @param string $superficieTerritorialeTotaleKmq
     * @return Comune
     */
    public function setSuperficieTerritorialeTotaleKmq($superficieTerritorialeTotaleKmq)
    {
        $this->superficieTerritorialeTotaleKmq = $superficieTerritorialeTotaleKmq;

        return $this;
    }

    /**
     * Get superficieTerritorialeTotaleKmq
     *
     * @return string 
     */
    public function getSuperficieTerritorialeTotaleKmq()
    {
        return $this->superficieTerritorialeTotaleKmq;
    }

    /**
     * Set popolazioneLegale200121102001
     *
     * @param integer $popolazioneLegale200121102001
     * @return Comune
     */
    public function setPopolazioneLegale200121102001($popolazioneLegale200121102001)
    {
        $this->popolazioneLegale200121102001 = $popolazioneLegale200121102001;

        return $this;
    }

    /**
     * Get popolazioneLegale200121102001
     *
     * @return integer 
     */
    public function getPopolazioneLegale200121102001()
    {
        return $this->popolazioneLegale200121102001;
    }

    /**
     * Set popolazioneResidenteAl31122008
     *
     * @param integer $popolazioneResidenteAl31122008
     * @return Comune
     */
    public function setPopolazioneResidenteAl31122008($popolazioneResidenteAl31122008)
    {
        $this->popolazioneResidenteAl31122008 = $popolazioneResidenteAl31122008;

        return $this;
    }

    /**
     * Get popolazioneResidenteAl31122008
     *
     * @return integer 
     */
    public function getPopolazioneResidenteAl31122008()
    {
        return $this->popolazioneResidenteAl31122008;
    }

    /**
     * Set popolazioneResidenteAl31122009
     *
     * @param integer $popolazioneResidenteAl31122009
     * @return Comune
     */
    public function setPopolazioneResidenteAl31122009($popolazioneResidenteAl31122009)
    {
        $this->popolazioneResidenteAl31122009 = $popolazioneResidenteAl31122009;

        return $this;
    }

    /**
     * Get popolazioneResidenteAl31122009
     *
     * @return integer 
     */
    public function getPopolazioneResidenteAl31122009()
    {
        return $this->popolazioneResidenteAl31122009;
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
     * Set codiceProvincia
     *
     * @param \Application\Innovare\ModelBundle\Entity\RegioneProvincia $codiceProvincia
     * @return Comune
     */
    public function setCodiceProvincia(\Application\Innovare\ModelBundle\Entity\RegioneProvincia $codiceProvincia = null)
    {
        $this->codiceProvincia = $codiceProvincia;

        return $this;
    }

    /**
     * Get codiceProvincia
     *
     * @return \Application\Innovare\ModelBundle\Entity\RegioneProvincia 
     */
    public function getCodiceProvincia()
    {
        return $this->codiceProvincia;
    }
}

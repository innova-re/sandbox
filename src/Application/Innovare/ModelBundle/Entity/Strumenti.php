<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Strumenti
 */
class Strumenti
{
    /**
     * @var string
     */
    private $tipologia;

    /**
     * @var string
     */
    private $marca;

    /**
     * @var string
     */
    private $modello;

    /**
     * @var boolean
     */
    private $equipaggiamento;

    /**
     * @var integer
     */
    private $idStrumento;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $numeroInventario;

    /**
     * @var string
     */
    private $ubicazione;

    /**
     * @var string
     */
    private $annoAcquisto;

    /**
     * @var string
     */
    private $costoAcquisto;

    /**
     * @var string
     */
    private $proprieta;

    /**
     * @var string
     */
    private $descrizioneDelloStrumento;

    /**
     * @var string
     */
    private $noteAggiuntive;

    /**
     * @var boolean
     */
    private $utilizzatoDaParteDiTerzi;

    /**
     * @var string
     */
    private $condizioneUtilizzo;

    /**
     * @var string
     */
    private $requisitiUtilizzo;

    /**
     * @var string
     */
    private $consumabili;

    /**
     * @var string
     */
    private $manutenzione;

    /**
     * @var string
     */
    private $noteManutenzione;

    /**
     * @var string
     */
    private $garanzia;

    /**
     * @var string
     */
    private $noteGaranzia;

    /**
     * @var string
     */
    private $motivoDelNonUtilizzo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\GradoUtilizzo
     */
    private $idGradoUtilizzo;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\TipologiaUtilizzo
     */
    private $idTipologiaUtilizzo;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\CategoriaStrumento
     */
    private $idCategoria;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Laboratorio
     */
    private $idLaboratorio;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\TipologiaStrumenti
     */
    private $idTipologiaStrumento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idFondiAcquisto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFondiAcquisto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tipologia
     *
     * @param string $tipologia
     * @return Strumenti
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    /**
     * Get tipologia
     *
     * @return string 
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Strumenti
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modello
     *
     * @param string $modello
     * @return Strumenti
     */
    public function setModello($modello)
    {
        $this->modello = $modello;

        return $this;
    }

    /**
     * Get modello
     *
     * @return string 
     */
    public function getModello()
    {
        return $this->modello;
    }

    /**
     * Set equipaggiamento
     *
     * @param boolean $equipaggiamento
     * @return Strumenti
     */
    public function setEquipaggiamento($equipaggiamento)
    {
        $this->equipaggiamento = $equipaggiamento;

        return $this;
    }

    /**
     * Get equipaggiamento
     *
     * @return boolean 
     */
    public function getEquipaggiamento()
    {
        return $this->equipaggiamento;
    }

    /**
     * Set idStrumento
     *
     * @param integer $idStrumento
     * @return Strumenti
     */
    public function setIdStrumento($idStrumento)
    {
        $this->idStrumento = $idStrumento;

        return $this;
    }

    /**
     * Get idStrumento
     *
     * @return integer 
     */
    public function getIdStrumento()
    {
        return $this->idStrumento;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Strumenti
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
     * Set numeroInventario
     *
     * @param string $numeroInventario
     * @return Strumenti
     */
    public function setNumeroInventario($numeroInventario)
    {
        $this->numeroInventario = $numeroInventario;

        return $this;
    }

    /**
     * Get numeroInventario
     *
     * @return string 
     */
    public function getNumeroInventario()
    {
        return $this->numeroInventario;
    }

    /**
     * Set ubicazione
     *
     * @param string $ubicazione
     * @return Strumenti
     */
    public function setUbicazione($ubicazione)
    {
        $this->ubicazione = $ubicazione;

        return $this;
    }

    /**
     * Get ubicazione
     *
     * @return string 
     */
    public function getUbicazione()
    {
        return $this->ubicazione;
    }

    /**
     * Set annoAcquisto
     *
     * @param string $annoAcquisto
     * @return Strumenti
     */
    public function setAnnoAcquisto($annoAcquisto)
    {
        $this->annoAcquisto = $annoAcquisto;

        return $this;
    }

    /**
     * Get annoAcquisto
     *
     * @return string 
     */
    public function getAnnoAcquisto()
    {
        return $this->annoAcquisto;
    }

    /**
     * Set costoAcquisto
     *
     * @param string $costoAcquisto
     * @return Strumenti
     */
    public function setCostoAcquisto($costoAcquisto)
    {
        $this->costoAcquisto = $costoAcquisto;

        return $this;
    }

    /**
     * Get costoAcquisto
     *
     * @return string 
     */
    public function getCostoAcquisto()
    {
        return $this->costoAcquisto;
    }

    /**
     * Set proprieta
     *
     * @param string $proprieta
     * @return Strumenti
     */
    public function setProprieta($proprieta)
    {
        $this->proprieta = $proprieta;

        return $this;
    }

    /**
     * Get proprieta
     *
     * @return string 
     */
    public function getProprieta()
    {
        return $this->proprieta;
    }

    /**
     * Set descrizioneDelloStrumento
     *
     * @param string $descrizioneDelloStrumento
     * @return Strumenti
     */
    public function setDescrizioneDelloStrumento($descrizioneDelloStrumento)
    {
        $this->descrizioneDelloStrumento = $descrizioneDelloStrumento;

        return $this;
    }

    /**
     * Get descrizioneDelloStrumento
     *
     * @return string 
     */
    public function getDescrizioneDelloStrumento()
    {
        return $this->descrizioneDelloStrumento;
    }

    /**
     * Set noteAggiuntive
     *
     * @param string $noteAggiuntive
     * @return Strumenti
     */
    public function setNoteAggiuntive($noteAggiuntive)
    {
        $this->noteAggiuntive = $noteAggiuntive;

        return $this;
    }

    /**
     * Get noteAggiuntive
     *
     * @return string 
     */
    public function getNoteAggiuntive()
    {
        return $this->noteAggiuntive;
    }

    /**
     * Set utilizzatoDaParteDiTerzi
     *
     * @param boolean $utilizzatoDaParteDiTerzi
     * @return Strumenti
     */
    public function setUtilizzatoDaParteDiTerzi($utilizzatoDaParteDiTerzi)
    {
        $this->utilizzatoDaParteDiTerzi = $utilizzatoDaParteDiTerzi;

        return $this;
    }

    /**
     * Get utilizzatoDaParteDiTerzi
     *
     * @return boolean 
     */
    public function getUtilizzatoDaParteDiTerzi()
    {
        return $this->utilizzatoDaParteDiTerzi;
    }

    /**
     * Set condizioneUtilizzo
     *
     * @param string $condizioneUtilizzo
     * @return Strumenti
     */
    public function setCondizioneUtilizzo($condizioneUtilizzo)
    {
        $this->condizioneUtilizzo = $condizioneUtilizzo;

        return $this;
    }

    /**
     * Get condizioneUtilizzo
     *
     * @return string 
     */
    public function getCondizioneUtilizzo()
    {
        return $this->condizioneUtilizzo;
    }

    /**
     * Set requisitiUtilizzo
     *
     * @param string $requisitiUtilizzo
     * @return Strumenti
     */
    public function setRequisitiUtilizzo($requisitiUtilizzo)
    {
        $this->requisitiUtilizzo = $requisitiUtilizzo;

        return $this;
    }

    /**
     * Get requisitiUtilizzo
     *
     * @return string 
     */
    public function getRequisitiUtilizzo()
    {
        return $this->requisitiUtilizzo;
    }

    /**
     * Set consumabili
     *
     * @param string $consumabili
     * @return Strumenti
     */
    public function setConsumabili($consumabili)
    {
        $this->consumabili = $consumabili;

        return $this;
    }

    /**
     * Get consumabili
     *
     * @return string 
     */
    public function getConsumabili()
    {
        return $this->consumabili;
    }

    /**
     * Set manutenzione
     *
     * @param string $manutenzione
     * @return Strumenti
     */
    public function setManutenzione($manutenzione)
    {
        $this->manutenzione = $manutenzione;

        return $this;
    }

    /**
     * Get manutenzione
     *
     * @return string 
     */
    public function getManutenzione()
    {
        return $this->manutenzione;
    }

    /**
     * Set noteManutenzione
     *
     * @param string $noteManutenzione
     * @return Strumenti
     */
    public function setNoteManutenzione($noteManutenzione)
    {
        $this->noteManutenzione = $noteManutenzione;

        return $this;
    }

    /**
     * Get noteManutenzione
     *
     * @return string 
     */
    public function getNoteManutenzione()
    {
        return $this->noteManutenzione;
    }

    /**
     * Set garanzia
     *
     * @param string $garanzia
     * @return Strumenti
     */
    public function setGaranzia($garanzia)
    {
        $this->garanzia = $garanzia;

        return $this;
    }

    /**
     * Get garanzia
     *
     * @return string 
     */
    public function getGaranzia()
    {
        return $this->garanzia;
    }

    /**
     * Set noteGaranzia
     *
     * @param string $noteGaranzia
     * @return Strumenti
     */
    public function setNoteGaranzia($noteGaranzia)
    {
        $this->noteGaranzia = $noteGaranzia;

        return $this;
    }

    /**
     * Get noteGaranzia
     *
     * @return string 
     */
    public function getNoteGaranzia()
    {
        return $this->noteGaranzia;
    }

    /**
     * Set motivoDelNonUtilizzo
     *
     * @param string $motivoDelNonUtilizzo
     * @return Strumenti
     */
    public function setMotivoDelNonUtilizzo($motivoDelNonUtilizzo)
    {
        $this->motivoDelNonUtilizzo = $motivoDelNonUtilizzo;

        return $this;
    }

    /**
     * Get motivoDelNonUtilizzo
     *
     * @return string 
     */
    public function getMotivoDelNonUtilizzo()
    {
        return $this->motivoDelNonUtilizzo;
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
     * Set idGradoUtilizzo
     *
     * @param \Application\Innovare\ModelBundle\Entity\GradoUtilizzo $idGradoUtilizzo
     * @return Strumenti
     */
    public function setIdGradoUtilizzo(\Application\Innovare\ModelBundle\Entity\GradoUtilizzo $idGradoUtilizzo = null)
    {
        $this->idGradoUtilizzo = $idGradoUtilizzo;

        return $this;
    }

    /**
     * Get idGradoUtilizzo
     *
     * @return \Application\Innovare\ModelBundle\Entity\GradoUtilizzo 
     */
    public function getIdGradoUtilizzo()
    {
        return $this->idGradoUtilizzo;
    }

    /**
     * Set idTipologiaUtilizzo
     *
     * @param \Application\Innovare\ModelBundle\Entity\TipologiaUtilizzo $idTipologiaUtilizzo
     * @return Strumenti
     */
    public function setIdTipologiaUtilizzo(\Application\Innovare\ModelBundle\Entity\TipologiaUtilizzo $idTipologiaUtilizzo = null)
    {
        $this->idTipologiaUtilizzo = $idTipologiaUtilizzo;

        return $this;
    }

    /**
     * Get idTipologiaUtilizzo
     *
     * @return \Application\Innovare\ModelBundle\Entity\TipologiaUtilizzo 
     */
    public function getIdTipologiaUtilizzo()
    {
        return $this->idTipologiaUtilizzo;
    }

    /**
     * Set idCategoria
     *
     * @param \Application\Innovare\ModelBundle\Entity\CategoriaStrumento $idCategoria
     * @return Strumenti
     */
    public function setIdCategoria(\Application\Innovare\ModelBundle\Entity\CategoriaStrumento $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \Application\Innovare\ModelBundle\Entity\CategoriaStrumento 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idLaboratorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return Strumenti
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
     * Set idTipologiaStrumento
     *
     * @param \Application\Innovare\ModelBundle\Entity\TipologiaStrumenti $idTipologiaStrumento
     * @return Strumenti
     */
    public function setIdTipologiaStrumento(\Application\Innovare\ModelBundle\Entity\TipologiaStrumenti $idTipologiaStrumento = null)
    {
        $this->idTipologiaStrumento = $idTipologiaStrumento;

        return $this;
    }

    /**
     * Get idTipologiaStrumento
     *
     * @return \Application\Innovare\ModelBundle\Entity\TipologiaStrumenti 
     */
    public function getIdTipologiaStrumento()
    {
        return $this->idTipologiaStrumento;
    }

    /**
     * Add idFondiAcquisto
     *
     * @param \Application\Innovare\ModelBundle\Entity\FondiAcquisto $idFondiAcquisto
     * @return Strumenti
     */
    public function addIdFondiAcquisto(\Application\Innovare\ModelBundle\Entity\FondiAcquisto $idFondiAcquisto)
    {
        $this->idFondiAcquisto[] = $idFondiAcquisto;

        return $this;
    }

    /**
     * Remove idFondiAcquisto
     *
     * @param \Application\Innovare\ModelBundle\Entity\FondiAcquisto $idFondiAcquisto
     */
    public function removeIdFondiAcquisto(\Application\Innovare\ModelBundle\Entity\FondiAcquisto $idFondiAcquisto)
    {
        $this->idFondiAcquisto->removeElement($idFondiAcquisto);
    }

    /**
     * Get idFondiAcquisto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdFondiAcquisto()
    {
        return $this->idFondiAcquisto;
    }
}

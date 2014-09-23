<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratorio
 */
class Laboratorio
{
    /**
     * @var string
     */
    private $notaEnte;

    /**
     * @var string
     */
    private $notaAfferenza;

    /**
     * @var string
     */
    private $notaArea;

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
    private $paroleChiave;

    /**
     * @var string
     */
    private $sede;

    /**
     * @var string
     */
    private $edificio;

    /**
     * @var string
     */
    private $ubicazione;

    /**
     * @var string
     */
    private $piano;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $numeroCivico;

    /**
     * @var string
     */
    private $gpsLatitudine;

    /**
     * @var string
     */
    private $gpsLongitudine;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $sitoweb;

    /**
     * @var boolean
     */
    private $idRegolamentoAccesso;

    /**
     * @var string
     */
    private $infoRegolamentoAccesso;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $codice;

    /**
     * @var \DateTime
     */
    private $createAt;

    /**
     * @var \DateTime
     */
    private $dataAggiornamentoRilevazione;

    /**
     * @var \DateTime
     */
    private $updateAt;

    /**
     * @var string
     */
    private $descrizioneWeb;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var boolean
     */
    private $pubblicare;

    /**
     * @var string
     */
    private $stanza;

    /**
     * @var string
     */
    private $commentiRilevazione;

    /**
     * @var integer
     */
    private $idUtente;

    /**
     * @var string
     */
    private $parolaChiave1;

    /**
     * @var string
     */
    private $parolaChiave2;

    /**
     * @var string
     */
    private $parolaChiave3;

    /**
     * @var string
     */
    private $parolaChiave4;

    /**
     * @var string
     */
    private $parolaChiave5;

    /**
     * @var \DateTime
     */
    private $dataPrimaRilevazione;

    /**
     * @var string
     */
    private $percorsoGps;

    /**
     * @var integer
     */
    private $idLaboratorio;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\RegioneProvincia
     */
    private $idProvincia;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Comune
     */
    private $idComune;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\AnagraficaRilevatori
     */
    private $idAnagraficaRilevatore;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\ResponsabileRilevazione
     */
    private $idResponsabileMappatura;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Area
     */
    private $idArea;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Ente
     */
    private $idEnte;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Afferenza
     */
    private $idAfferenza;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idServizioTerritorio;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idAttivitaDidattica;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idAttivitaRicerca;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idServizioTerritorio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idAttivitaDidattica = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idAttivitaRicerca = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set notaEnte
     *
     * @param string $notaEnte
     * @return Laboratorio
     */
    public function setNotaEnte($notaEnte)
    {
        $this->notaEnte = $notaEnte;

        return $this;
    }

    /**
     * Get notaEnte
     *
     * @return string 
     */
    public function getNotaEnte()
    {
        return $this->notaEnte;
    }

    /**
     * Set notaAfferenza
     *
     * @param string $notaAfferenza
     * @return Laboratorio
     */
    public function setNotaAfferenza($notaAfferenza)
    {
        $this->notaAfferenza = $notaAfferenza;

        return $this;
    }

    /**
     * Get notaAfferenza
     *
     * @return string 
     */
    public function getNotaAfferenza()
    {
        return $this->notaAfferenza;
    }

    /**
     * Set notaArea
     *
     * @param string $notaArea
     * @return Laboratorio
     */
    public function setNotaArea($notaArea)
    {
        $this->notaArea = $notaArea;

        return $this;
    }

    /**
     * Get notaArea
     *
     * @return string 
     */
    public function getNotaArea()
    {
        return $this->notaArea;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Laboratorio
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
     * @return Laboratorio
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
     * Set paroleChiave
     *
     * @param string $paroleChiave
     * @return Laboratorio
     */
    public function setParoleChiave($paroleChiave)
    {
        $this->paroleChiave = $paroleChiave;

        return $this;
    }

    /**
     * Get paroleChiave
     *
     * @return string 
     */
    public function getParoleChiave()
    {
        return $this->paroleChiave;
    }

    /**
     * Set sede
     *
     * @param string $sede
     * @return Laboratorio
     */
    public function setSede($sede)
    {
        $this->sede = $sede;

        return $this;
    }

    /**
     * Get sede
     *
     * @return string 
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set edificio
     *
     * @param string $edificio
     * @return Laboratorio
     */
    public function setEdificio($edificio)
    {
        $this->edificio = $edificio;

        return $this;
    }

    /**
     * Get edificio
     *
     * @return string 
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * Set ubicazione
     *
     * @param string $ubicazione
     * @return Laboratorio
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
     * Set piano
     *
     * @param string $piano
     * @return Laboratorio
     */
    public function setPiano($piano)
    {
        $this->piano = $piano;

        return $this;
    }

    /**
     * Get piano
     *
     * @return string 
     */
    public function getPiano()
    {
        return $this->piano;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Laboratorio
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set numeroCivico
     *
     * @param string $numeroCivico
     * @return Laboratorio
     */
    public function setNumeroCivico($numeroCivico)
    {
        $this->numeroCivico = $numeroCivico;

        return $this;
    }

    /**
     * Get numeroCivico
     *
     * @return string 
     */
    public function getNumeroCivico()
    {
        return $this->numeroCivico;
    }

    /**
     * Set gpsLatitudine
     *
     * @param string $gpsLatitudine
     * @return Laboratorio
     */
    public function setGpsLatitudine($gpsLatitudine)
    {
        $this->gpsLatitudine = $gpsLatitudine;

        return $this;
    }

    /**
     * Get gpsLatitudine
     *
     * @return string 
     */
    public function getGpsLatitudine()
    {
        return $this->gpsLatitudine;
    }

    /**
     * Set gpsLongitudine
     *
     * @param string $gpsLongitudine
     * @return Laboratorio
     */
    public function setGpsLongitudine($gpsLongitudine)
    {
        $this->gpsLongitudine = $gpsLongitudine;

        return $this;
    }

    /**
     * Get gpsLongitudine
     *
     * @return string 
     */
    public function getGpsLongitudine()
    {
        return $this->gpsLongitudine;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Laboratorio
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
     * Set sitoweb
     *
     * @param string $sitoweb
     * @return Laboratorio
     */
    public function setSitoweb($sitoweb)
    {
        $this->sitoweb = $sitoweb;

        return $this;
    }

    /**
     * Get sitoweb
     *
     * @return string 
     */
    public function getSitoweb()
    {
        return $this->sitoweb;
    }

    /**
     * Set idRegolamentoAccesso
     *
     * @param boolean $idRegolamentoAccesso
     * @return Laboratorio
     */
    public function setIdRegolamentoAccesso($idRegolamentoAccesso)
    {
        $this->idRegolamentoAccesso = $idRegolamentoAccesso;

        return $this;
    }

    /**
     * Get idRegolamentoAccesso
     *
     * @return boolean 
     */
    public function getIdRegolamentoAccesso()
    {
        return $this->idRegolamentoAccesso;
    }

    /**
     * Set infoRegolamentoAccesso
     *
     * @param string $infoRegolamentoAccesso
     * @return Laboratorio
     */
    public function setInfoRegolamentoAccesso($infoRegolamentoAccesso)
    {
        $this->infoRegolamentoAccesso = $infoRegolamentoAccesso;

        return $this;
    }

    /**
     * Get infoRegolamentoAccesso
     *
     * @return string 
     */
    public function getInfoRegolamentoAccesso()
    {
        return $this->infoRegolamentoAccesso;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Laboratorio
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
     * Set codice
     *
     * @param string $codice
     * @return Laboratorio
     */
    public function setCodice($codice)
    {
        $this->codice = $codice;

        return $this;
    }

    /**
     * Get codice
     *
     * @return string 
     */
    public function getCodice()
    {
        return $this->codice;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Laboratorio
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set dataAggiornamentoRilevazione
     *
     * @param \DateTime $dataAggiornamentoRilevazione
     * @return Laboratorio
     */
    public function setDataAggiornamentoRilevazione($dataAggiornamentoRilevazione)
    {
        $this->dataAggiornamentoRilevazione = $dataAggiornamentoRilevazione;

        return $this;
    }

    /**
     * Get dataAggiornamentoRilevazione
     *
     * @return \DateTime 
     */
    public function getDataAggiornamentoRilevazione()
    {
        return $this->dataAggiornamentoRilevazione;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return Laboratorio
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime 
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set descrizioneWeb
     *
     * @param string $descrizioneWeb
     * @return Laboratorio
     */
    public function setDescrizioneWeb($descrizioneWeb)
    {
        $this->descrizioneWeb = $descrizioneWeb;

        return $this;
    }

    /**
     * Get descrizioneWeb
     *
     * @return string 
     */
    public function getDescrizioneWeb()
    {
        return $this->descrizioneWeb;
    }

    /**
     * Set cap
     *
     * @param string $cap
     * @return Laboratorio
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string 
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set pubblicare
     *
     * @param boolean $pubblicare
     * @return Laboratorio
     */
    public function setPubblicare($pubblicare)
    {
        $this->pubblicare = $pubblicare;

        return $this;
    }

    /**
     * Get pubblicare
     *
     * @return boolean 
     */
    public function getPubblicare()
    {
        return $this->pubblicare;
    }

    /**
     * Set stanza
     *
     * @param string $stanza
     * @return Laboratorio
     */
    public function setStanza($stanza)
    {
        $this->stanza = $stanza;

        return $this;
    }

    /**
     * Get stanza
     *
     * @return string 
     */
    public function getStanza()
    {
        return $this->stanza;
    }

    /**
     * Set commentiRilevazione
     *
     * @param string $commentiRilevazione
     * @return Laboratorio
     */
    public function setCommentiRilevazione($commentiRilevazione)
    {
        $this->commentiRilevazione = $commentiRilevazione;

        return $this;
    }

    /**
     * Get commentiRilevazione
     *
     * @return string 
     */
    public function getCommentiRilevazione()
    {
        return $this->commentiRilevazione;
    }

    /**
     * Set idUtente
     *
     * @param integer $idUtente
     * @return Laboratorio
     */
    public function setIdUtente($idUtente)
    {
        $this->idUtente = $idUtente;

        return $this;
    }

    /**
     * Get idUtente
     *
     * @return integer 
     */
    public function getIdUtente()
    {
        return $this->idUtente;
    }

    /**
     * Set parolaChiave1
     *
     * @param string $parolaChiave1
     * @return Laboratorio
     */
    public function setParolaChiave1($parolaChiave1)
    {
        $this->parolaChiave1 = $parolaChiave1;

        return $this;
    }

    /**
     * Get parolaChiave1
     *
     * @return string 
     */
    public function getParolaChiave1()
    {
        return $this->parolaChiave1;
    }

    /**
     * Set parolaChiave2
     *
     * @param string $parolaChiave2
     * @return Laboratorio
     */
    public function setParolaChiave2($parolaChiave2)
    {
        $this->parolaChiave2 = $parolaChiave2;

        return $this;
    }

    /**
     * Get parolaChiave2
     *
     * @return string 
     */
    public function getParolaChiave2()
    {
        return $this->parolaChiave2;
    }

    /**
     * Set parolaChiave3
     *
     * @param string $parolaChiave3
     * @return Laboratorio
     */
    public function setParolaChiave3($parolaChiave3)
    {
        $this->parolaChiave3 = $parolaChiave3;

        return $this;
    }

    /**
     * Get parolaChiave3
     *
     * @return string 
     */
    public function getParolaChiave3()
    {
        return $this->parolaChiave3;
    }

    /**
     * Set parolaChiave4
     *
     * @param string $parolaChiave4
     * @return Laboratorio
     */
    public function setParolaChiave4($parolaChiave4)
    {
        $this->parolaChiave4 = $parolaChiave4;

        return $this;
    }

    /**
     * Get parolaChiave4
     *
     * @return string 
     */
    public function getParolaChiave4()
    {
        return $this->parolaChiave4;
    }

    /**
     * Set parolaChiave5
     *
     * @param string $parolaChiave5
     * @return Laboratorio
     */
    public function setParolaChiave5($parolaChiave5)
    {
        $this->parolaChiave5 = $parolaChiave5;

        return $this;
    }

    /**
     * Get parolaChiave5
     *
     * @return string 
     */
    public function getParolaChiave5()
    {
        return $this->parolaChiave5;
    }

    /**
     * Set dataPrimaRilevazione
     *
     * @param \DateTime $dataPrimaRilevazione
     * @return Laboratorio
     */
    public function setDataPrimaRilevazione($dataPrimaRilevazione)
    {
        $this->dataPrimaRilevazione = $dataPrimaRilevazione;

        return $this;
    }

    /**
     * Get dataPrimaRilevazione
     *
     * @return \DateTime 
     */
    public function getDataPrimaRilevazione()
    {
        return $this->dataPrimaRilevazione;
    }

    /**
     * Set percorsoGps
     *
     * @param string $percorsoGps
     * @return Laboratorio
     */
    public function setPercorsoGps($percorsoGps)
    {
        $this->percorsoGps = $percorsoGps;

        return $this;
    }

    /**
     * Get percorsoGps
     *
     * @return string 
     */
    public function getPercorsoGps()
    {
        return $this->percorsoGps;
    }

    /**
     * Get idLaboratorio
     *
     * @return integer 
     */
    public function getIdLaboratorio()
    {
        return $this->idLaboratorio;
    }

    /**
     * Set idProvincia
     *
     * @param \Application\Innovare\ModelBundle\Entity\RegioneProvincia $idProvincia
     * @return Laboratorio
     */
    public function setIdProvincia(\Application\Innovare\ModelBundle\Entity\RegioneProvincia $idProvincia = null)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * Get idProvincia
     *
     * @return \Application\Innovare\ModelBundle\Entity\RegioneProvincia 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set idComune
     *
     * @param \Application\Innovare\ModelBundle\Entity\Comune $idComune
     * @return Laboratorio
     */
    public function setIdComune(\Application\Innovare\ModelBundle\Entity\Comune $idComune = null)
    {
        $this->idComune = $idComune;

        return $this;
    }

    /**
     * Get idComune
     *
     * @return \Application\Innovare\ModelBundle\Entity\Comune 
     */
    public function getIdComune()
    {
        return $this->idComune;
    }

    /**
     * Set idAnagraficaRilevatore
     *
     * @param \Application\Innovare\ModelBundle\Entity\AnagraficaRilevatori $idAnagraficaRilevatore
     * @return Laboratorio
     */
    public function setIdAnagraficaRilevatore(\Application\Innovare\ModelBundle\Entity\AnagraficaRilevatori $idAnagraficaRilevatore = null)
    {
        $this->idAnagraficaRilevatore = $idAnagraficaRilevatore;

        return $this;
    }

    /**
     * Get idAnagraficaRilevatore
     *
     * @return \Application\Innovare\ModelBundle\Entity\AnagraficaRilevatori 
     */
    public function getIdAnagraficaRilevatore()
    {
        return $this->idAnagraficaRilevatore;
    }

    /**
     * Set idResponsabileMappatura
     *
     * @param \Application\Innovare\ModelBundle\Entity\ResponsabileRilevazione $idResponsabileMappatura
     * @return Laboratorio
     */
    public function setIdResponsabileMappatura(\Application\Innovare\ModelBundle\Entity\ResponsabileRilevazione $idResponsabileMappatura = null)
    {
        $this->idResponsabileMappatura = $idResponsabileMappatura;

        return $this;
    }

    /**
     * Get idResponsabileMappatura
     *
     * @return \Application\Innovare\ModelBundle\Entity\ResponsabileRilevazione 
     */
    public function getIdResponsabileMappatura()
    {
        return $this->idResponsabileMappatura;
    }

    /**
     * Set idArea
     *
     * @param \Application\Innovare\ModelBundle\Entity\Area $idArea
     * @return Laboratorio
     */
    public function setIdArea(\Application\Innovare\ModelBundle\Entity\Area $idArea = null)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return \Application\Innovare\ModelBundle\Entity\Area 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * Set idEnte
     *
     * @param \Application\Innovare\ModelBundle\Entity\Ente $idEnte
     * @return Laboratorio
     */
    public function setIdEnte(\Application\Innovare\ModelBundle\Entity\Ente $idEnte = null)
    {
        $this->idEnte = $idEnte;

        return $this;
    }

    /**
     * Get idEnte
     *
     * @return \Application\Innovare\ModelBundle\Entity\Ente 
     */
    public function getIdEnte()
    {
        return $this->idEnte;
    }

    /**
     * Set idAfferenza
     *
     * @param \Application\Innovare\ModelBundle\Entity\Afferenza $idAfferenza
     * @return Laboratorio
     */
    public function setIdAfferenza(\Application\Innovare\ModelBundle\Entity\Afferenza $idAfferenza = null)
    {
        $this->idAfferenza = $idAfferenza;

        return $this;
    }

    /**
     * Get idAfferenza
     *
     * @return \Application\Innovare\ModelBundle\Entity\Afferenza 
     */
    public function getIdAfferenza()
    {
        return $this->idAfferenza;
    }

    /**
     * Add idServizioTerritorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\ServizioTerritorio $idServizioTerritorio
     * @return Laboratorio
     */
    public function addIdServizioTerritorio(\Application\Innovare\ModelBundle\Entity\ServizioTerritorio $idServizioTerritorio)
    {
        $this->idServizioTerritorio[] = $idServizioTerritorio;

        return $this;
    }

    /**
     * Remove idServizioTerritorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\ServizioTerritorio $idServizioTerritorio
     */
    public function removeIdServizioTerritorio(\Application\Innovare\ModelBundle\Entity\ServizioTerritorio $idServizioTerritorio)
    {
        $this->idServizioTerritorio->removeElement($idServizioTerritorio);
    }

    /**
     * Get idServizioTerritorio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdServizioTerritorio()
    {
        return $this->idServizioTerritorio;
    }

    /**
     * Add idAttivitaDidattica
     *
     * @param \Application\Innovare\ModelBundle\Entity\AttivitaDidattica $idAttivitaDidattica
     * @return Laboratorio
     */
    public function addIdAttivitaDidattica(\Application\Innovare\ModelBundle\Entity\AttivitaDidattica $idAttivitaDidattica)
    {
        $this->idAttivitaDidattica[] = $idAttivitaDidattica;

        return $this;
    }

    /**
     * Remove idAttivitaDidattica
     *
     * @param \Application\Innovare\ModelBundle\Entity\AttivitaDidattica $idAttivitaDidattica
     */
    public function removeIdAttivitaDidattica(\Application\Innovare\ModelBundle\Entity\AttivitaDidattica $idAttivitaDidattica)
    {
        $this->idAttivitaDidattica->removeElement($idAttivitaDidattica);
    }

    /**
     * Get idAttivitaDidattica
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdAttivitaDidattica()
    {
        return $this->idAttivitaDidattica;
    }

    /**
     * Add idAttivitaRicerca
     *
     * @param \Application\Innovare\ModelBundle\Entity\AttivitaRicerca $idAttivitaRicerca
     * @return Laboratorio
     */
    public function addIdAttivitaRicerca(\Application\Innovare\ModelBundle\Entity\AttivitaRicerca $idAttivitaRicerca)
    {
        $this->idAttivitaRicerca[] = $idAttivitaRicerca;

        return $this;
    }

    /**
     * Remove idAttivitaRicerca
     *
     * @param \Application\Innovare\ModelBundle\Entity\AttivitaRicerca $idAttivitaRicerca
     */
    public function removeIdAttivitaRicerca(\Application\Innovare\ModelBundle\Entity\AttivitaRicerca $idAttivitaRicerca)
    {
        $this->idAttivitaRicerca->removeElement($idAttivitaRicerca);
    }

    /**
     * Get idAttivitaRicerca
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdAttivitaRicerca()
    {
        return $this->idAttivitaRicerca;
    }
}

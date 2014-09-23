<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaboratorioUtilizzatori
 */
class LaboratorioUtilizzatori
{
    /**
     * @var integer
     */
    private $professori;

    /**
     * @var integer
     */
    private $ricercatori;

    /**
     * @var integer
     */
    private $tecnici;

    /**
     * @var integer
     */
    private $assegnisti;

    /**
     * @var integer
     */
    private $borsistiContrattisti;

    /**
     * @var integer
     */
    private $dottorandiSpecializzandi;

    /**
     * @var integer
     */
    private $studenti;

    /**
     * @var integer
     */
    private $altriUtilizzatori;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Laboratorio
     */
    private $idLaboratorio;


    /**
     * Set professori
     *
     * @param integer $professori
     * @return LaboratorioUtilizzatori
     */
    public function setProfessori($professori)
    {
        $this->professori = $professori;

        return $this;
    }

    /**
     * Get professori
     *
     * @return integer 
     */
    public function getProfessori()
    {
        return $this->professori;
    }

    /**
     * Set ricercatori
     *
     * @param integer $ricercatori
     * @return LaboratorioUtilizzatori
     */
    public function setRicercatori($ricercatori)
    {
        $this->ricercatori = $ricercatori;

        return $this;
    }

    /**
     * Get ricercatori
     *
     * @return integer 
     */
    public function getRicercatori()
    {
        return $this->ricercatori;
    }

    /**
     * Set tecnici
     *
     * @param integer $tecnici
     * @return LaboratorioUtilizzatori
     */
    public function setTecnici($tecnici)
    {
        $this->tecnici = $tecnici;

        return $this;
    }

    /**
     * Get tecnici
     *
     * @return integer 
     */
    public function getTecnici()
    {
        return $this->tecnici;
    }

    /**
     * Set assegnisti
     *
     * @param integer $assegnisti
     * @return LaboratorioUtilizzatori
     */
    public function setAssegnisti($assegnisti)
    {
        $this->assegnisti = $assegnisti;

        return $this;
    }

    /**
     * Get assegnisti
     *
     * @return integer 
     */
    public function getAssegnisti()
    {
        return $this->assegnisti;
    }

    /**
     * Set borsistiContrattisti
     *
     * @param integer $borsistiContrattisti
     * @return LaboratorioUtilizzatori
     */
    public function setBorsistiContrattisti($borsistiContrattisti)
    {
        $this->borsistiContrattisti = $borsistiContrattisti;

        return $this;
    }

    /**
     * Get borsistiContrattisti
     *
     * @return integer 
     */
    public function getBorsistiContrattisti()
    {
        return $this->borsistiContrattisti;
    }

    /**
     * Set dottorandiSpecializzandi
     *
     * @param integer $dottorandiSpecializzandi
     * @return LaboratorioUtilizzatori
     */
    public function setDottorandiSpecializzandi($dottorandiSpecializzandi)
    {
        $this->dottorandiSpecializzandi = $dottorandiSpecializzandi;

        return $this;
    }

    /**
     * Get dottorandiSpecializzandi
     *
     * @return integer 
     */
    public function getDottorandiSpecializzandi()
    {
        return $this->dottorandiSpecializzandi;
    }

    /**
     * Set studenti
     *
     * @param integer $studenti
     * @return LaboratorioUtilizzatori
     */
    public function setStudenti($studenti)
    {
        $this->studenti = $studenti;

        return $this;
    }

    /**
     * Get studenti
     *
     * @return integer 
     */
    public function getStudenti()
    {
        return $this->studenti;
    }

    /**
     * Set altriUtilizzatori
     *
     * @param integer $altriUtilizzatori
     * @return LaboratorioUtilizzatori
     */
    public function setAltriUtilizzatori($altriUtilizzatori)
    {
        $this->altriUtilizzatori = $altriUtilizzatori;

        return $this;
    }

    /**
     * Get altriUtilizzatori
     *
     * @return integer 
     */
    public function getAltriUtilizzatori()
    {
        return $this->altriUtilizzatori;
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
     * @return LaboratorioUtilizzatori
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
}

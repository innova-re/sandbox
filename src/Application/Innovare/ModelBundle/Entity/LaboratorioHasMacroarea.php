<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaboratorioHasMacroarea
 */
class LaboratorioHasMacroarea
{
    /**
     * @var \Application\Innovare\ModelBundle\Entity\Macroarea
     */
    private $idMacroarea;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\AmbitoIntervento
     */
    private $idAmbitoIntervento;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Laboratorio
     */
    private $idLaboratorio;


    /**
     * Set idMacroarea
     *
     * @param \Application\Innovare\ModelBundle\Entity\Macroarea $idMacroarea
     * @return LaboratorioHasMacroarea
     */
    public function setIdMacroarea(\Application\Innovare\ModelBundle\Entity\Macroarea $idMacroarea)
    {
        $this->idMacroarea = $idMacroarea;

        return $this;
    }

    /**
     * Get idMacroarea
     *
     * @return \Application\Innovare\ModelBundle\Entity\Macroarea 
     */
    public function getIdMacroarea()
    {
        return $this->idMacroarea;
    }

    /**
     * Set idAmbitoIntervento
     *
     * @param \Application\Innovare\ModelBundle\Entity\AmbitoIntervento $idAmbitoIntervento
     * @return LaboratorioHasMacroarea
     */
    public function setIdAmbitoIntervento(\Application\Innovare\ModelBundle\Entity\AmbitoIntervento $idAmbitoIntervento)
    {
        $this->idAmbitoIntervento = $idAmbitoIntervento;

        return $this;
    }

    /**
     * Get idAmbitoIntervento
     *
     * @return \Application\Innovare\ModelBundle\Entity\AmbitoIntervento 
     */
    public function getIdAmbitoIntervento()
    {
        return $this->idAmbitoIntervento;
    }

    /**
     * Set idLaboratorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return LaboratorioHasMacroarea
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

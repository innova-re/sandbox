<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LaboratorioHasMiur
 */
class LaboratorioHasMiur
{
    /**
     * @var \Application\Innovare\ModelBundle\Entity\MiurSsd
     */
    private $idMiurSsd;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Laboratorio
     */
    private $idLaboratorio;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\MiurArea
     */
    private $idMiurArea;


    /**
     * Set idMiurSsd
     *
     * @param \Application\Innovare\ModelBundle\Entity\MiurSsd $idMiurSsd
     * @return LaboratorioHasMiur
     */
    public function setIdMiurSsd(\Application\Innovare\ModelBundle\Entity\MiurSsd $idMiurSsd)
    {
        $this->idMiurSsd = $idMiurSsd;

        return $this;
    }

    /**
     * Get idMiurSsd
     *
     * @return \Application\Innovare\ModelBundle\Entity\MiurSsd 
     */
    public function getIdMiurSsd()
    {
        return $this->idMiurSsd;
    }

    /**
     * Set idLaboratorio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Laboratorio $idLaboratorio
     * @return LaboratorioHasMiur
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

    /**
     * Set idMiurArea
     *
     * @param \Application\Innovare\ModelBundle\Entity\MiurArea $idMiurArea
     * @return LaboratorioHasMiur
     */
    public function setIdMiurArea(\Application\Innovare\ModelBundle\Entity\MiurArea $idMiurArea)
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

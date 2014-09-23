<?php

namespace Application\Innovare\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiziHasMacroarea
 */
class ServiziHasMacroarea
{
    /**
     * @var \Application\Innovare\ModelBundle\Entity\AmbitoIntervento
     */
    private $idAmbitoIntervento;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Macroarea
     */
    private $idMacroarea;

    /**
     * @var \Application\Innovare\ModelBundle\Entity\Servizi
     */
    private $idServizio;


    /**
     * Set idAmbitoIntervento
     *
     * @param \Application\Innovare\ModelBundle\Entity\AmbitoIntervento $idAmbitoIntervento
     * @return ServiziHasMacroarea
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
     * Set idMacroarea
     *
     * @param \Application\Innovare\ModelBundle\Entity\Macroarea $idMacroarea
     * @return ServiziHasMacroarea
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
     * Set idServizio
     *
     * @param \Application\Innovare\ModelBundle\Entity\Servizi $idServizio
     * @return ServiziHasMacroarea
     */
    public function setIdServizio(\Application\Innovare\ModelBundle\Entity\Servizi $idServizio)
    {
        $this->idServizio = $idServizio;

        return $this;
    }

    /**
     * Get idServizio
     *
     * @return \Application\Innovare\ModelBundle\Entity\Servizi 
     */
    public function getIdServizio()
    {
        return $this->idServizio;
    }
}

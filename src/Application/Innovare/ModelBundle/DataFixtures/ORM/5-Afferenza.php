<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/5-Afferenza.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Application\Innovare\ModelBundle\Entity\Afferenza;
use Application\Innovare\ModelBundle\Entity\Ente;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixturesInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Fixture for the Afferenza Entity
 */
class LoadAfferenzaData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 5;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $entes = $manager->getRepository('ApplicationInnovareModelBundle:Ente')->findAll();

        $afferenzas = array(
            array('Cesar', 'Cesar', 1),
            array('Polilab', 'Polilab', 1),
            array('Dipartimento Universitario', 'Dipartimento Universitario', 1),
            array('Laboratori didattici', 'Laboratori didattici', 1),
            array('Consorzi interdipartimentali', 'Consorzi interdipartimentali', 1),
            array('Altro (specificare nelle note)', 'Altro (specificare nelle note)', 1),
            array('Afferenza_SardegnaRicerche1', 'Afferenza_SardegnaRicerche1', 2),
            array('Afferenza_SardegnaRicerche2', 'Afferenza_SardegnaRicerche2', 2),
        );

        foreach ($afferenzas as $key => $value) {
            $afferenza = new Afferenza();
            $afferenza->setNome($value[0]);
            $afferenza->setDescrizione($value[1]);
            $afferenza->setIdEnte($entes[$value[2] - 1]);
            $manager->persist($afferenza);
        }
        $manager->flush();
    }
}

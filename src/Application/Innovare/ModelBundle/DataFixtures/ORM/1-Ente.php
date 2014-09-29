<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/1-Ente.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Application\Innovare\ModelBundle\Entity\Ente;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixturesInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Fixture for the Ente Entity
 */
class LoadEnteData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $entes = array(
            array('Universita Degli Studi di Cagliari', 'Universita degli Studi di Cagliari'),
            array('Sardegnaricerche', 'Sardegnaricerche'),
            array('Universita Degli Studi di Sassari', 'Universita Degli Studi di Sassari')
        );

        foreach ($entes as $key => $value) {
            $ente = new Ente();
            $ente->setNome($value[0]);
            $ente->setDescrizione($value[1]);
            $manager->persist($ente);
        }
        $manager->flush();
    }
}

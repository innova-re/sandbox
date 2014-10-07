<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/3-Ente.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\Ente;

/*
 * Fixture for the Ente Entity
 */
class LoadEnteData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $entes = array(
            array('Universita Degli Studi di Cagliari', 'Universita degli Studi di Cagliari'),
            array('Universita Degli Studi di Sassari', 'Universita Degli Studi di Sassari'),
            array('Sardegna Ricerche', 'Sardegna Ricerche'),
            array('CNR', 'CNR'),
            array('Centri di Competenza', 'Centri di Competenza'),
            array('Centri di Ricerca', 'Centri di Ricerca'),
            array('Consorzi Interuniversitari', 'Consorzi Interuniversitari'),
        );

        foreach ($entes as $key => $value) {
            $ente = new Ente();
            $ente->setNome($value[0]);
            $ente->setDescrizione($value[1]);
            $manager->persist($ente);
        }
        $manager->flush();

        $this->addReference('entes', $ente);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}

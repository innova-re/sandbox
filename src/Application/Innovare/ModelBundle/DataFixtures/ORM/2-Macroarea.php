<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/10-Macroareas.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\Macroarea;

/*
 * Fixture for the Macroarea Entity
 */
class LoadMacroareData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $macroareas = array(
            1 => 'Agroalimentare',
            2 => 'Biosanitario',
            3 => 'Costruzioni e Beni Culturali',
            4 => 'Energia, Materiali e Ambienti',
            5 => 'ICT e Design',
            6 => 'Scienze della Vita',
        );

        foreach ($macroareas as $key => $value) {
            $macroarea = new Macroarea();
            $macroarea->setNome($value);
            $manager->persist($macroarea);
        }

        $manager->flush();
    }
}

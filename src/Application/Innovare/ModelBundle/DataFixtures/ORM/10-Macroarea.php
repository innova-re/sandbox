<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/10-Macroareas.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Application\Innovare\ModelBundle\Entity\Macroarea;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixturesInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Fixture for the Macroarea Entity
 */
class LoadMacroareData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
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

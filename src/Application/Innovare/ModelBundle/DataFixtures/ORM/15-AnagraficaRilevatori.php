<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/15-AnagraficaRivelatori.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Application\Innovare\ModelBundle\Entity\AnagraficaRilevatori;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixturesInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Fixture for the AnagraficaRilevatori Entity
 */
class LoadAnagraficaRivelatoriData implements FixtureInterface
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
            array('Luca', 'Devola', '15971', 'CAT. D', '0706758443', 'luca.devola@unica.it'),
            array('Alessandra', 'Zedda', '11111', 'CAT. D', '0706758443', 'alezedda@unica.it'),
            array('Davide', 'Espa', '123456', 'CAT. D', '0706758443', 'd.espa@unica.it'),
            array('Luigi', 'Besalduch', '123456', 'CAT. D', '0706758431', 'besalduch@unica.it'),
            array('Sandrina', 'Lampis', '123456', 'CAT. D', '0706758443', 's.lampis@unica.it'),
            array('Rita', 'Pillai', '123456', 'CAT. D', '0706758431', 'rpillai@unica.it'),
            array('Gianmarco', 'Angius', '123456', 'CAT. D', '0706758443', 'g.angius@unica.it'),
            array('Ernesto', 'Pacchiarotti', '123456', 'CAT. D', '0706758431', 'e.pacchiarotti@unica.it'),
        );

        foreach ($macroareas as $key => $value) {
            $anagraficaRilevatori = new AnagraficaRilevatori();
            $anagraficaRilevatori->setNome($value[0]);
            $anagraficaRilevatori->setCognome($value[1]);
            $anagraficaRilevatori->setMatricola($value[2]);
            $anagraficaRilevatori->setQualifica($value[3]);
            $anagraficaRilevatori->setTelefono($value[4]);
            $anagraficaRilevatori->setEmail($value[5]);
            $manager->persist($anagraficaRilevatori);
        }

        $manager->flush();
    }
}

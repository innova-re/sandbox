<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/1-AnagraficaRivelatori.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\AnagraficaRilevatori;

/*
 * Fixture for the AnagraficaRilevatori Entity
 */
class LoadAnagraficaRivelatoriData extends AbstractFixture implements OrderedFixtureInterface
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
        $macroareas = array(
            array('Rita', 'Pillai', '13990', 'CAT. D', '0706758431', 'rpillai@unica.it'),
            array('Elisabetta', 'Murru', '10333', 'CAT. D', '0706758447', 'memurru@unica.it'),
            array('Marta', 'Costa', '22158', 'CAT. D', '0706758431', 'marta.costa@unica.it'),
            array('Lucia', 'Frau', '18054', 'CAT. D', '0706758447', 'lfrau@unica.it'),
            array('Davide', 'Espa', '20050', 'CAT. D', '0706758445', 'd.espa@unica.it'),
            array('Sandrina', 'Lampis', '20109', 'CAT. D', '0706758445', 's.lampis@unica.it'),
            array('Cristiana', 'Figus', '30005', 'CAT. D', '0706758690', 'cristiana.figus@unica.it'),
            array('Mauro', 'Aresti', '21479', 'CAT. D', '0706758690', 'arestimauro@unica.it'),
            array('Luigi', 'Besalduch', '22479', 'CAT. D', '0706758451', 'besalduch@unica.it'),
            array('Alessandra', 'Zedda', '32235', 'CAT. D', '0706758690', 'alezedda@unica.it'),
            array('Ernesto', 'Pacchiarotti', '32530', 'CAT. D', '0706758431', 'e.pacchiarotti@unica.it'),
            array('Gianmarco', 'Angius', '18439', 'CAT. D', '0706758431', 'g.angius@unica.it'),
            array('Massimiliano', 'Picconi', '10331', 'CAT. D', '0706758443', 'mpicconi@unica.it'),
            array('Luca', 'Devola', '15971', 'CAT. D', '0706758443', 'luca.devola@unica.it'),
            array('Antonio', 'Pierro', '31099', 'CAT. D', '0706758443', 'antonio.pierro@unica.it'),
            array('Luisa', 'Deias', '14120', 'CAT. D', '0706758443', 'luisa.deias@unica.it'),
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

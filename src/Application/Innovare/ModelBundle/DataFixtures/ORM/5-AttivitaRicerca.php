<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/3-AttivitaDidattica.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\AttivitaRicerca;

/*
 * Fixture for the AttivitaRicerca Entity
 */
class LoadAttivitaRicercaData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $attivitaRicercas = array(
            array('Collaborazioni Universitarie - Progetti Nazionali'),
            array('Collaborazioni Universitarie - Progetti Internazionali'),
        );

        foreach ($attivitaRicercas as $key => $value) {
            $attivitaRicerca = new AttivitaRicerca();
            $attivitaRicerca->setNome($value[0]);
            $manager->persist($attivitaRicerca);
        }
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4;
    }
}

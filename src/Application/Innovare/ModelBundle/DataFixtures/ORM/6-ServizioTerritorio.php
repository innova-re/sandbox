<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/3-AttivitaDidattica.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\ServizioTerritorio;

/*
 * Fixture for the ServizioTerritorio Entity
 */
class LoadServizioTerritorioData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $servizioTerritorios = array(
            array('Prestazioni a pagamento'),
            array('Convenzioni'),
        );

        foreach ($servizioTerritorios as $key => $value) {
            $servizioTerritorio = new ServizioTerritorio();
            $servizioTerritorio->setNome($value[0]);
            $manager->persist($servizioTerritorio);
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

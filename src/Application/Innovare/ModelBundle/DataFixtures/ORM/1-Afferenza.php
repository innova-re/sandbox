<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/1-Afferenza.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Application\Innovare\ModelBundle\Entity\Afferenza;
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
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $afferenzas = array('Cesar', 'Polilab', 'Dipartimento Universitario');

        foreach ($afferenzas as $key => $value) {
            $afferenza = new Afferenza();
            $afferenza->setNome($value);
            $afferenza->setDescrizione($value);
            $manager->persist($afferenza);
        }
        $manager->flush();
    }
}

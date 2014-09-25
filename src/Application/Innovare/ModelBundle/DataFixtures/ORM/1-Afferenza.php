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
        $afferenza1 = new Afferenza();
        $afferenza1->setNome('Cesar');
        $afferenza1->setDescrizione('Cesar');

        $afferenza2 = new Afferenza();
        $afferenza2->setNome('Polilab');
        $afferenza2->setDescrizione('Polilab');

        $afferenza2 = new Afferenza();
        $afferenza2->setNome('Dipartimento Universitario');
        $afferenza2->setDescrizione('Dipartimento Universitario');

        $manager->persist($afferenza1);
        $manager->persist($afferenza2);
        $manager->flush();
    }
}

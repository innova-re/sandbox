<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/4-AttivitaDidattica.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\AttivitaDidattica;

/*
 * Fixture for the AttivitaDidattica Entity
 */
class LoadAttivitaDidatticaData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $attivitaDidatticas = array(
            array('Didattica Universitaria'),
            array('Didattica Scuole Superiori'),
            array('Formazione'),
        );

        foreach ($attivitaDidatticas as $key => $value) {
            $attivitaDidattica = new AttivitaDidattica();
            $attivitaDidattica->setNome($value[0]);
            $manager->persist($attivitaDidattica);
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

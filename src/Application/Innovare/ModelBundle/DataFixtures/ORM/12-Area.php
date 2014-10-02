<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/12-Area.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\Area;
use Application\Innovare\ModelBundle\Entity\Afferenza;

/*
 * Fixture for the Area Entity
 */
class LoadAreaData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 12;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $afferenzas = $manager->getRepository('ApplicationInnovareModelBundle:Afferenza')->findAll();

        // TODO instead of specifying the external key number I should set the name from the "Ente.nome" Entity
        $areas = array(
            array('Dipartimento UNO', 'descrizione dipartimento', 1),
            array('Dipartimento 2', 'descrizione dipartimento', 1),
            array('Dipartimento 888', 'descrizione dipartimento', 1),
            array('Laboratorio didattico 1', '', 4),
            array('Area_SardegnaRicerche1', '', 8)
        );

        foreach ($areas as $key => $value) {
            $area = new Area();
            $area->setNome($value[0]);
            $area->setDescrizione($value[1]);
            $area->setIdAfferenza($afferenzas[$value[2] - 1]);
            $manager->persist($area);
        }
        $manager->flush();
    }
}

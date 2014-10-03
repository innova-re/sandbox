<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/10-AmbitoIntervento.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\AmbitoIntervento;
use Application\Innovare\ModelBundle\Entity\Macroarea;

/*
 * Fixture for the AmbitoIntervento Entity
 */
class LoadAmbitoInterventoData extends AbstractFixture implements OrderedFixtureInterface
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
        $macroareas = $manager->getRepository('ApplicationInnovareModelBundle:Macroarea')->findAll();

        $ambitoInterventos = array(
            array('Sistemi informativi', 1),
            array('Reti di calcolatori', 1),
            array('Acque e vita', 2)
        );

        foreach ($ambitoInterventos as $key => $value) {
            $ambitoIntervento = new AmbitoIntervento();
            $ambitoIntervento->setNome($value[0]);
            $ambitoIntervento->setIdMacroarea($macroareas[$value[1]]);
            $manager->persist($ambitoIntervento);
        }

        $manager->flush();
    }
}

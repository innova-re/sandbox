<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/8-FondiAcquisto.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\FondiAcquisto;

/*
 * Fixture for the FondiAcquisto Entity
 */
class LoadFondiAcquistoData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $fondiAcquistos = array(
            array('Fondi Comunitari (VII Programma Quadro o altro)'),
            array('Fondi Nazionali (Sir, Prin, Firb, L. 6/2000)'),
            array('Fondi Regionali (P.O.R. 2000-2006; L.R.7/2007)'),
            array('Fondi Regionali (P.O.R. 2000-2006; L.R.7/2007)'),
            array('Fondi di Dipartimento – Conto Terzi'),
        );

        foreach ($fondiAcquistos as $key => $value) {
            $fondiAcquisto = new FondiAcquisto();
            $fondiAcquisto->setNome($value[0]);
            $manager->persist($fondiAcquisto);
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

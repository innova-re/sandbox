<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/13-Laboratorio.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\Laboratorio;

/*
 * Fixture for the Laboratorio Entity
 */
class LoadLaboratorioData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 13;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $areas = array(
            array(
                'Laboratorio di Indagini Sperimentali, Fisiologia e Fisiopatologia del muscolo in modelli animali e nell\'uomo.',
                'Studio degli aspetti fisiologici delle strutture contrattili molecolari. Determinazione di parametri meccanici e di controllo della performance motoria muscolare su preparati muscolari isolati per la determinazione delle relazioni tensione-lunghezza, forza-velocità , lavoro e potenza di un muscolo, nonchÃ© le modalitÃ  di controllo (miogeno, nervoso e ormonale).',
                'performance motoria muscolare; tensione-lunghezza; forza-velocità .',
                'Istituti biologici',
                'via porcell, 4',
                39.2221520,
                9.1152070,
                'http://dipartimenti.unica.it/scienzebiomediche/',
                0,
                'DISB_27',
                '09124',
                0,
            ),
        );

        foreach ($areas as $key => $value) {
            $lab = new Laboratorio();
            $lab->setNome($value[0]);
            $lab->setDescrizione($value[1]);
            $lab->setParoleChiave($value[2]);
            $lab->setUbicazione($value[3]);
            $lab->setIndirizzo($value[4]);
            $lab->setGpsLatitudine($value[5]);
            $lab->setGpsLongitudine($value[6]);
            $lab->setSitoweb($value[7]);
            $lab->setIdRegolamentoAccesso($value[8]);
            $lab->setCodice($value[9]);
            $lab->setDataAggiornamentoRilevazione(new \DateTime("now"));
            $lab->setCap($value[10]);
            $lab->setPubblicare($value[11]);
            $manager->persist($lab);
        }
        $manager->flush();
    }
}

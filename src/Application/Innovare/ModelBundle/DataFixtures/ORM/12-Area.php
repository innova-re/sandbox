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
        // UniCA --> Dipartimento Universitario
            array('Dipartimento di Filologia, Letteratura e Linguistica', 'descrizione dipartimento', 1),
            array('Dipartimento di Fisica', 'descrizione dipartimento', 1),
            array('Dipartimento di Giurisprudenza', 'descrizione dipartimento', 1),
            array('Dipartimento di Ingegneria  Civile, Ambientale  e Architettura', 'descrizione dipartimento', 1),
            array('Dipartimento di Ingegneria Elettrica ed Elettronica', 'descrizione dipartimento', 1),
            array('Dipartimento di Ingegneria Meccanica, Chimica e dei Materiali', 'descrizione dipartimento', 1),
            array('Dipartimento di Matematica e Informatica', 'descrizione dipartimento', 1),
            array('Dipartimento di Pedagogia, Psicologia, Filosofia', 'descrizione dipartimento', 1),
            array('Dipartimento di Sanità Pubblica, Medicina Clinica e Molecolare', 'descrizione dipartimento', 1),
            array('Dipartimento di Scienze Biomediche', 'descrizione dipartimento', 1),
            array('Dipartimento di Scienze Chimiche e Geologiche', 'descrizione dipartimento', 1),
            array('Dipartimento di Scienze Chirurgiche', 'descrizione dipartimento', 1),
            array('Dipartimento di Scienze della Vita ed dell’Ambiente', 'descrizione dipartimento', 1),
            array('Dipartimento di Scienze Economiche e Aziendali', 'descrizione dipartimento', 1),
            array('Dipartimento di Scienze Mediche “Mario Aresu”', 'descrizione dipartimento', 1),
            array('Dipartimento di Scienze Sociali e delle Istituzioni', 'descrizione dipartimento', 1),
            array('Dipartimento di Storia, Beni Culturali e Territorio', 'descrizione dipartimento', 1),
        // UniCA --> Laboratorio Didattico
            array('Polo Umanistico', 'descrizione polo', 2),
            array('Polo Scienze Sociali', 'descrizione polo', 2),
            array('Polo Ingegneria e Architettura', 'descrizione polo', 2),
            array('Polo Scientifico', 'descrizione polo', 2),
        // UniCA --> CeSAR
            array('Area tematica I: Nanomateriali e nanotecnologie per l’ICT, le energie rinnovabili, l’ambiente e la biomedicina', 'descrizione area tematica', 3),
            array('Area tematica II: Sintesi, Caratterizzazione, Formulazione e Veicolazione di molecole e sistemi biologicamente attivi', 'descrizione area tematica', 3),
            array('Area tematica III: Ambiente e Sviluppo Eco-sostenibile', 'descrizione area tematica', 3),
            array('Area tematica IV: Discipline omiche', 'descrizione area tematica', 3),
            array('Area tematica V: Discipline Morfo-Funzionali', 'descrizione area tematica', 3),
            array('Area tematica VI: Discipline specialistiche', 'descrizione area tematica', 3),
        // UniCA --> PoliLab
            array('Filiera 1. Riqualificazione Ambientale', 'descrizione filiera', 4),
            array('Filiera 2. Recupero del Paesaggio Architettura e Beni Culturali', 'descrizione filiera', 4),
            array('Filiera 3. Prove sui Materiali', 'descrizione filiera', 4),
            array('Filiera 4. Efficienza Energetica', 'descrizione filiera', 4),
            array('Filiera 5. Ergonomia e Fattori Umani nei Sistemi di Trasporto e dell’Industria', 'descrizione filiera', 4),
        // Ente --> Afferenza
            array('Area_CeSAR_UniSS', 'descrizione area', 7)
            array('Area_Sardegna_Ricerche', 'descrizione area', 8)
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

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
        // Macroaree:
        //    1 => 'Agroalimentare',
        //    2 => 'Biosanitario',
        //    3 => 'Costruzioni e Beni Culturali',
        //    4 => 'Energia, Materiali e Ambienti',
        //    5 => 'ICT e Design',
        //    6 => 'Scienze della Vita',

        $ambitoInterventos = array(
            
            //Agroalimentare
            array('Agronomico', 1),
            array('Alimentare', 1),
            array('Vivaistico', 1),
            array('Zoologico', 1),
            //Biosanitario
            array('Medicina dello sport', 2),
            array('Medicina legale', 2),
            array('Medicina del lavoro', 2),
            array('Diagnostico', 2),
            array('Fisica sanitaria e radioprotezione', 2),
            //Costruzioni e Beni Culturali
            array('Idraulica', 3),
            array('Archeologia', 3),
            array('Architettura', 3),
            array('Topografia e Cartografia', 3),
            array('Riqualificazione ambientale', 3),
            array('Igiene e Sicurezza', 3),
            array('Caratterizzazione Ambientale', 3),
            array('Recupero del Paesaggio e dei Beni Culturali', 3),
            array('Diagnostica Geo-Fisica', 3),
            array('Progettazione Urbana Sostenibile', 3),
            array('Efficienza Energetica', 3),
            array('Progettazione e taratura di sistemi di misura e sensori', 3),
            array('Ergonomia e Fattori Umani nei Sistemi di Trasporto e nell’Industria', 3),
            array('Analisi Acustiche', 3),
            array('Biomeccanica ed Ergonomia Industriale', 3),
            //Energia, Materiali e Ambienti
            array('Generazione Elettrica', 4),
            array('Chimica di Processo', 4),
            array('Analisi Ambientali', 4),
            array('Riciclaggio e Recupero di Materia ed  Energia dai Rifiuti', 4),
            array('Industria Manifatturiera', 4),
            array('Energia Alternativa e Rinnovabile', 4),
            array('Sintesi e analisi dei materiali', 4),
            //ICT e Design
            array('Sistemi Embedded', 5),
            array('Digital Signal Processing', 5),
            array('Microelettronica', 5),
            array('Robotica', 5),
            array('Internet delle cose', 5),
            array('Cloud computing', 5),
            array('Brain to computer interface (BCI)', 5),
            array('Dispositivi elettromedicali', 5),
            array('A.I. and Pattern recognition', 5),
            array('Sicurezza reti informatiche', 5),
            array('Intelligenza d’ambiente', 5),
            array('Bioinformatica', 5),
            array('Telemedicina', 5),
            array('Open source', 5),
            array('Affidabilità e Diagnostica dei Comportamenti Elettronici', 5),
            array('Biometria', 5),
            array('Azionamenti e macchine elettroniche', 5),
            array('Compatibilità elettromagnetica', 5),
            array('Sistemi telecomunicazione', 5),
            array('Misure elettroniche', 5),
            array('Elettronica di potenza', 5),
            array('Automazione', 5),
            //Scienze della Vita
            array('Farmaceutico', 6),
            array('Cosmetico', 6),
            array('Biomedicina', 6),
            array('Biotecnologie', 6),
            array('Microbiologia', 6),
            array('Bioingegneria', 6),
            array('Nanotecnologie', 6),
            array('Zootecnologie', 6),

            

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

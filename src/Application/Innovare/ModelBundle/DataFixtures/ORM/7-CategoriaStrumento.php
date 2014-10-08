<?php
// src/Appication/Innovare/ModelBundle/DataFixtures/ORM/7-CategoriaStrumento.php

namespace Application\Innovare\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Application\Innovare\ModelBundle\Entity\CategoriaStrumento;

/*
 * Fixture for the CategoriaStrumento Entity
 */
class LoadCategoriaStrumentoData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $categoriaStrumentos = array(
            array('Analizzatori','Esempio: sistema di combustione elementare, analizzatore Hg, analizzatore NH3, analizzatore PO4'),
            array('Analizzatori di particelle','Esempio: citofluorimetro, citofluorimetro sorter, coulter counter, analizzatore di nanoparticelle DLS'),
            array('Attrezzature officina','Esempio: aspiratore, saldatrice'),
            array('Autoclave',' '),
            array('Bilance','Esempio: elettrobilancia, termobilancia'),
            array('Campionatori','Esempio: campionatori d\'aria'),
            array('Carotatrici',' '),
            array('Centrifughe','Esempio: centrifughe, ultracentrifughe, centrifughe da banco'),
            array('Classificatori','Esempio: idrocicloni, tavole idrauliche, setacci'),
            array('Concentratori','Esempio: concentratore, liofilizzatore, evaporatore, atomizzatore'),
            array('Convertitori/Macchine ad azionamenti elettrici','Esempio: banchi dinamometrici, carichi elettronici, freni dinamometrici'),
            array('Cromatografi','Esempio: HPLC, FPLC, cromatografo ionico, sistema di purificazione proteine, elettroforesi'),
            array('Diffrattometri','Esempio: XRD, XRF, SAXS'),            
            array('Estrattori','Esempio: impianto supercritico, estrattore automatico di acidi nucleici, estrattore French press, estrattore Bead Beater, estrattore semiautomatico di acidi nucleici'),
            array('Forni','Esempio: forno, muffola, termostato, microonde'),
            array('Macchine elettriche','Esempio: gruppo elettrogeno, elettropompa, pompa'),
            array('Metalizzatori','Esempio: metallizzatore o sputter, dip coater, spin coater'),
            array('Magnetometri','Esempio: squid'),
            array('Reattori','Esempio: impianti catalitici, reattori'),
            array('Microscopi','Esempio: microscopi ottici, elettronici, forza atomica, confocale'),
            array('Misuratori elettrochimici','Esempio: potenziostato, galvanostato, voltammetrica ciclica, polarografo, impedenziometro'),
            array('Misuratori di grandezze fisiche','Esempio: reometri, viscosimetri, osmometro, igrometro, ossigrafo, calorimetro, metabolimetro, porosimetro, BET, eliostereopicnometro'),
            array('Modelli fisici','Esempio: canale di vetro'),
            array('Pastigliatrice',' '),
            array('Presse',' '),
            array('Purificatori','Esempio: distillatori, millipore, distillatore di NH3'),
            array('Rivelatori','Esempio: scintillometro, scintillatore, magnetoscopio'),
            array('Sensori biomeccanici','Esempio: '),
            array('Sequenziatori','Esempio: '),
            array('Categoria','Esempio: '),

        );

        foreach ($categoriaStrumentos as $key => $value) {
            $categoriaStrumento = new CategoriaStrumento();
            $categoriaStrumento->setNome($value[0]);
            $categoriaStrumento->setDescrizione($value[1]);
            $manager->persist($categoriaStrumento);
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

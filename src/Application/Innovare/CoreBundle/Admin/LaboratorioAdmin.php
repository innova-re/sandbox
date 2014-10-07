<?php

namespace Application\Innovare\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Translation\TranslatorInterface;

class LaboratorioAdmin extends Admin
{
    public $supportsPreviewMode = true;

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('notaEnte')
            ->add('notaAfferenza')
            ->add('notaArea')
            ->add('nome')
            ->add('descrizione')
            ->add('paroleChiave')
            ->add('sede')
            ->add('edificio')
            ->add('ubicazione')
            ->add('piano')
            ->add('indirizzo')
            ->add('numeroCivico')
            ->add('gpsLatitudine')
            ->add('gpsLongitudine')
            ->add('telefono')
            ->add('sitoweb')
            ->add('idRegolamentoAccesso')
            ->add('infoRegolamentoAccesso')
            ->add('note')
            ->add('codice')
            ->add('createAt')
            ->add('dataAggiornamentoRilevazione')
            ->add('updateAt')
            ->add('descrizioneWeb')
            ->add('cap')
            ->add('pubblicare')
            ->add('stanza')
            ->add('commentiRilevazione')
            ->add('idUtente')
            ->add('parolaChiave1')
            ->add('parolaChiave2')
            ->add('parolaChiave3')
            ->add('parolaChiave4')
            ->add('parolaChiave5')
            ->add('dataPrimaRilevazione')
            ->add('percorsoGps')
            ->add('idLaboratorio')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nome')
            ->add('descrizione')
            ->add('paroleChiave')
            ->add('indirizzo')
            ->add('idRegolamentoAccesso', null, array(
                'translation_domain' => 'ApplicationInnovareCoreBundle',
                'label' => 'label.laboratorio.idRegolamentoAccesso'
            ))
            ->add('pubblicare', null, array(
                'translation_domain' => 'ApplicationInnovareCoreBundle',
                'label' => 'label.laboratorio.pubblicare'
            ))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('idArea')
            ->add('nome', 'text', array(
                'translation_domain' => 'ApplicationInnovareCoreBundle',
                'attr' => array('placeholder' => 'placeholder.laboratorio.nome'),
            ))
            ->add('descrizione', 'text', array(
                'translation_domain' => 'ApplicationInnovareCoreBundle',
                'attr' => array('placeholder' => 'placeholder.laboratorio.notaAfferenza')
            ))
            ->add('paroleChiave')
            ->add('sede')
            ->add('edificio')
            ->add('ubicazione')
            ->add('piano')
            ->add('indirizzo')
            ->add('numeroCivico')
            ->add('gpsLatitudine')
            ->add('gpsLongitudine')
            ->add('telefono')
            ->add('sitoweb')
            ->add('idRegolamentoAccesso')
            ->add('infoRegolamentoAccesso')
            ->add('note')
            ->add('codice')
            ->add('createAt', 'date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('dataAggiornamentoRilevazione', 'date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('updateAt', 'date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('descrizioneWeb')
            ->add('cap')
            ->add('pubblicare')
            ->add('stanza')
            ->add('commentiRilevazione')
            # TODO it should be automatically added or taken from anagraficaRivelatori
            ->add('idUtente', 'hidden')
            ->add('parolaChiave1')
            ->add('parolaChiave2')
            ->add('parolaChiave3')
            ->add('parolaChiave4')
            ->add('parolaChiave5')
            ->add('dataPrimaRilevazione', 'date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('percorsoGps')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('notaEnte')
            ->add('notaAfferenza')
            ->add('notaArea')
            ->add('nome')
            ->add('descrizione')
            ->add('paroleChiave')
            ->add('sede')
            ->add('edificio')
            ->add('ubicazione')
            ->add('piano')
            ->add('indirizzo')
            ->add('numeroCivico')
            ->add('gpsLatitudine')
            ->add('gpsLongitudine')
            ->add('telefono')
            ->add('sitoweb')
            ->add('idRegolamentoAccesso')
            ->add('infoRegolamentoAccesso')
            ->add('note')
            ->add('codice')
            ->add('createAt')
            ->add('dataAggiornamentoRilevazione')
            ->add('updateAt')
            ->add('descrizioneWeb')
            ->add('cap')
            ->add('pubblicare')
            ->add('stanza')
            ->add('commentiRilevazione')
            ->add('parolaChiave1')
            ->add('parolaChiave2')
            ->add('parolaChiave3')
            ->add('parolaChiave4')
            ->add('parolaChiave5')
            ->add('dataPrimaRilevazione')
            ->add('percorsoGps')
        ;
    }
}

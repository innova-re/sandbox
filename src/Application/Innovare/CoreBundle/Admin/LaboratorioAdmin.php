<?php

namespace Application\Innovare\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

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
}

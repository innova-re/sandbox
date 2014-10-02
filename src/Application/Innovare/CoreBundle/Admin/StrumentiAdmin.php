<?php

namespace Application\Innovare\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class StrumentiAdmin extends Admin
{
    public $supportsPreviewMode = true;

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipologia')
            ->add('marca')
            ->add('modello')
            ->add('equipaggiamento')
            ->add('idStrumento')
            ->add('nome')
            ->add('numeroInventario')
            ->add('ubicazione')
            ->add('annoAcquisto')
            ->add('costoAcquisto')
            ->add('proprieta')
            ->add('descrizioneDelloStrumento')
            ->add('noteAggiuntive')
            ->add('utilizzatoDaParteDiTerzi')
            ->add('condizioneUtilizzo')
            ->add('requisitiUtilizzo')
            ->add('consumabili')
            ->add('manutenzione')
            ->add('noteManutenzione')
            ->add('garanzia')
            ->add('noteGaranzia')
            ->add('motivoDelNonUtilizzo')
            ->add('id')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipologia')
            ->add('marca')
            ->add('modello')
            ->add('equipaggiamento')
            ->add('idStrumento')
            ->add('nome')
            ->add('numeroInventario')
            ->add('ubicazione')
            ->add('annoAcquisto')
            ->add('costoAcquisto')
            ->add('proprieta')
            ->add('descrizioneDelloStrumento')
            ->add('noteAggiuntive')
            ->add('utilizzatoDaParteDiTerzi')
            ->add('condizioneUtilizzo')
            ->add('requisitiUtilizzo')
            ->add('consumabili')
            ->add('manutenzione')
            ->add('noteManutenzione')
            ->add('garanzia')
            ->add('noteGaranzia')
            ->add('motivoDelNonUtilizzo')
            ->add('id')
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
            ->add('tipologia')
            ->add('marca')
            ->add('modello')
            ->add('equipaggiamento')
            ->add('idStrumento')
            ->add('nome')
            ->add('numeroInventario')
            ->add('ubicazione')
            ->add('annoAcquisto')
            ->add('costoAcquisto')
            ->add('proprieta')
            ->add('descrizioneDelloStrumento')
            ->add('noteAggiuntive')
            ->add('utilizzatoDaParteDiTerzi')
            ->add('condizioneUtilizzo')
            ->add('requisitiUtilizzo')
            ->add('consumabili')
            ->add('manutenzione')
            ->add('noteManutenzione')
            ->add('garanzia')
            ->add('noteGaranzia')
            ->add('motivoDelNonUtilizzo')
            ->add('id')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tipologia')
            ->add('marca')
            ->add('modello')
            ->add('equipaggiamento')
            ->add('idStrumento')
            ->add('nome')
            ->add('numeroInventario')
            ->add('ubicazione')
            ->add('annoAcquisto')
            ->add('costoAcquisto')
            ->add('proprieta')
            ->add('descrizioneDelloStrumento')
            ->add('noteAggiuntive')
            ->add('utilizzatoDaParteDiTerzi')
            ->add('condizioneUtilizzo')
            ->add('requisitiUtilizzo')
            ->add('consumabili')
            ->add('manutenzione')
            ->add('noteManutenzione')
            ->add('garanzia')
            ->add('noteGaranzia')
            ->add('motivoDelNonUtilizzo')
            ->add('id')
        ;
    }
}

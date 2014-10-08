<?php

namespace Application\Innovare\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AmbitoInterventoAdmin extends Admin
{
    public $supportsPreviewMode = true;

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nome')
            ->add('descrizione')
            ->add('note')
            ->add('nomeWeb')
            ->add('idMacroarea')
            ->add('id')

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
            ->add('note')
            ->add('nomeWeb')
            # TODO the label should be taken from translations
            ->add('idMacroarea', 'text', array('label' => 'Macroarea'))
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
            ->add('nome')
            ->add('descrizione')
            ->add('note')
            ->add('nomeWeb')
            ->add('idMacroarea')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nome')
            ->add('descrizione')
            ->add('note')
            ->add('nomeWeb')
            ->add('idMacroarea')
        ;
    }
}

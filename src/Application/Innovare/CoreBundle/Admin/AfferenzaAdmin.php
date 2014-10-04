<?php

namespace Application\Innovare\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AfferenzaAdmin extends Admin
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
            ->add('idEnte')
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
            # TODO the label should be taken from translations
            ->add('idEnte', 'text', array('label' => 'Ente'))
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
        # TODO I should avoid to set every time translation_domain by using setDefaultOptions
        $formMapper
            ->add('nome', 'text', array(
                'translation_domain' => 'ApplicationInnovareCoreBundle',
                'attr' => array('placeholder' => 'placeholder.afferenza.nome')
            ))
            ->add('descrizione', 'text', array(
                'translation_domain' => 'ApplicationInnovareCoreBundle',
                'attr' => array('placeholder' => 'placeholder.afferenza.descrizione')
            ))
            ->add('idEnte')
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
            ->add('idEnte', 'text', array('label' => 'Ente'))
        ;
    }
}

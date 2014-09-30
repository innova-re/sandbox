<?php

namespace Application\Innovare\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AnagraficaRilevatoriAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nome')
            ->add('cognome')
            ->add('matricola')
            ->add('qualifica')
            ->add('telefono')
            ->add('email')
            ->add('note')
            ->add('codiceFiscale')
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
            ->add('cognome')
            ->add('matricola')
            ->add('qualifica')
            ->add('telefono')
            ->add('email')
            ->add('note')
            ->add('codiceFiscale')
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
            ->add('nome')
            ->add('cognome')
            ->add('matricola')
            ->add('qualifica')
            ->add('telefono')
            ->add('email')
            ->add('note')
            ->add('codiceFiscale')
            ->add('id')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nome')
            ->add('cognome')
            ->add('matricola')
            ->add('qualifica')
            ->add('telefono')
            ->add('email')
            ->add('note')
            ->add('codiceFiscale')
            ->add('id')
        ;
    }
}

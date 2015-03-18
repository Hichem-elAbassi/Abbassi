<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Blitz\BackOfficeBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProjetsAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('titre', 'text', array('label' => 'Titre du projet'))
            ->add('description', 'text', array('label' => 'Description'))
            ->add('etat', 'text', array('label' => 'Etat d"avancement'))
            ->add('description', 'text', array('label' => 'Description'))
           // ->add('author', 'entity', array('class' => 'Blitz\BackOfficeBundle\Entity\Utilisateurs'))
           //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titre')
            ->add('etat')
            ->add('description')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('titre')
            ->add('description')
            ->add('etat')
            ->add('categorie')
            
        ;
    }
}
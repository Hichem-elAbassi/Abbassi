<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Blitz\BackOfficeBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UtilisateursAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom', 'text', array('label' => 'Nom'))
            ->add('prenom', 'text', array('label' => 'Prenom'))
            ->add('age', 'integer', array('label' => 'Age'))
            ->add('sexe', 'text', array('label' => 'Genre'))
            ->add('adresse', 'text', array('label' => 'Adresse'))
            ->add('email', 'text', array('label' => 'E-Mail'))
            ->add('password', 'text', array('label' => 'mot de passe'))
            ->add('type', 'text', array('label' => 'type'))
            ->add('photoprofil', 'text', array('label' => 'Photo'))
           // ->add('author', 'entity', array('class' => 'Blitz\BackOfficeBundle\Entity\Utilisateurs'))
           //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('password')
            ->add('type')
            ->add('photoprofil')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('photoprofil')
            ->add('type')
            ->addIdentifier('email')
            ->add('password')
            
        ;
    }
}
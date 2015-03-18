<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Blitz\BackOfficeBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CvAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('skills', 'text', array('label' => 'Competances'))
            ->add('certifications', 'text', array('label' => 'Certifications'))
            ->add('education', 'text', array('label' => 'Education'))
            ->add('experiences', 'text', array('label' => 'Experiences professionelles'))
           // ->add('author', 'entity', array('class' => 'Blitz\BackOfficeBundle\Entity\Utilisateurs'))
           //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
             ->add('skills')
            ->add('certifications')
            ->add('education')
            ->add('experiences')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('skills')
            ->add('certifications')
            ->add('education')
            ->add('experiences')
            
        ;
    }
}
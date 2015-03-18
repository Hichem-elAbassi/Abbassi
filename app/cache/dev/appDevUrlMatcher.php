<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // blitz_back_office_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blitz_back_office_homepage')), array (  '_controller' => 'Blitz\\BackOfficeBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                // sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/admin/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                }

                if (0 === strpos($pathinfo, '/admin/blitz/backoffice')) {
                    if (0 === strpos($pathinfo, '/admin/blitz/backoffice/transactions')) {
                        // admin_blitz_backoffice_transactions_list
                        if ($pathinfo === '/admin/blitz/backoffice/transactions/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.transactions',  '_sonata_name' => 'admin_blitz_backoffice_transactions_list',  '_route' => 'admin_blitz_backoffice_transactions_list',);
                        }

                        // admin_blitz_backoffice_transactions_create
                        if ($pathinfo === '/admin/blitz/backoffice/transactions/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.transactions',  '_sonata_name' => 'admin_blitz_backoffice_transactions_create',  '_route' => 'admin_blitz_backoffice_transactions_create',);
                        }

                        // admin_blitz_backoffice_transactions_batch
                        if ($pathinfo === '/admin/blitz/backoffice/transactions/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.transactions',  '_sonata_name' => 'admin_blitz_backoffice_transactions_batch',  '_route' => 'admin_blitz_backoffice_transactions_batch',);
                        }

                        // admin_blitz_backoffice_transactions_edit
                        if (preg_match('#^/admin/blitz/backoffice/transactions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_transactions_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.transactions',  '_sonata_name' => 'admin_blitz_backoffice_transactions_edit',));
                        }

                        // admin_blitz_backoffice_transactions_delete
                        if (preg_match('#^/admin/blitz/backoffice/transactions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_transactions_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.transactions',  '_sonata_name' => 'admin_blitz_backoffice_transactions_delete',));
                        }

                        // admin_blitz_backoffice_transactions_show
                        if (preg_match('#^/admin/blitz/backoffice/transactions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_transactions_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.transactions',  '_sonata_name' => 'admin_blitz_backoffice_transactions_show',));
                        }

                        // admin_blitz_backoffice_transactions_export
                        if ($pathinfo === '/admin/blitz/backoffice/transactions/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.transactions',  '_sonata_name' => 'admin_blitz_backoffice_transactions_export',  '_route' => 'admin_blitz_backoffice_transactions_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/blitz/backoffice/projets')) {
                        // admin_blitz_backoffice_projets_list
                        if ($pathinfo === '/admin/blitz/backoffice/projets/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.projets',  '_sonata_name' => 'admin_blitz_backoffice_projets_list',  '_route' => 'admin_blitz_backoffice_projets_list',);
                        }

                        // admin_blitz_backoffice_projets_create
                        if ($pathinfo === '/admin/blitz/backoffice/projets/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.projets',  '_sonata_name' => 'admin_blitz_backoffice_projets_create',  '_route' => 'admin_blitz_backoffice_projets_create',);
                        }

                        // admin_blitz_backoffice_projets_batch
                        if ($pathinfo === '/admin/blitz/backoffice/projets/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.projets',  '_sonata_name' => 'admin_blitz_backoffice_projets_batch',  '_route' => 'admin_blitz_backoffice_projets_batch',);
                        }

                        // admin_blitz_backoffice_projets_edit
                        if (preg_match('#^/admin/blitz/backoffice/projets/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_projets_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.projets',  '_sonata_name' => 'admin_blitz_backoffice_projets_edit',));
                        }

                        // admin_blitz_backoffice_projets_delete
                        if (preg_match('#^/admin/blitz/backoffice/projets/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_projets_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.projets',  '_sonata_name' => 'admin_blitz_backoffice_projets_delete',));
                        }

                        // admin_blitz_backoffice_projets_show
                        if (preg_match('#^/admin/blitz/backoffice/projets/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_projets_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.projets',  '_sonata_name' => 'admin_blitz_backoffice_projets_show',));
                        }

                        // admin_blitz_backoffice_projets_export
                        if ($pathinfo === '/admin/blitz/backoffice/projets/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.projets',  '_sonata_name' => 'admin_blitz_backoffice_projets_export',  '_route' => 'admin_blitz_backoffice_projets_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/blitz/backoffice/utilisateurs')) {
                        // admin_blitz_backoffice_utilisateurs_list
                        if ($pathinfo === '/admin/blitz/backoffice/utilisateurs/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.utilisateurs',  '_sonata_name' => 'admin_blitz_backoffice_utilisateurs_list',  '_route' => 'admin_blitz_backoffice_utilisateurs_list',);
                        }

                        // admin_blitz_backoffice_utilisateurs_create
                        if ($pathinfo === '/admin/blitz/backoffice/utilisateurs/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.utilisateurs',  '_sonata_name' => 'admin_blitz_backoffice_utilisateurs_create',  '_route' => 'admin_blitz_backoffice_utilisateurs_create',);
                        }

                        // admin_blitz_backoffice_utilisateurs_batch
                        if ($pathinfo === '/admin/blitz/backoffice/utilisateurs/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.utilisateurs',  '_sonata_name' => 'admin_blitz_backoffice_utilisateurs_batch',  '_route' => 'admin_blitz_backoffice_utilisateurs_batch',);
                        }

                        // admin_blitz_backoffice_utilisateurs_edit
                        if (preg_match('#^/admin/blitz/backoffice/utilisateurs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_utilisateurs_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.utilisateurs',  '_sonata_name' => 'admin_blitz_backoffice_utilisateurs_edit',));
                        }

                        // admin_blitz_backoffice_utilisateurs_delete
                        if (preg_match('#^/admin/blitz/backoffice/utilisateurs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_utilisateurs_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.utilisateurs',  '_sonata_name' => 'admin_blitz_backoffice_utilisateurs_delete',));
                        }

                        // admin_blitz_backoffice_utilisateurs_show
                        if (preg_match('#^/admin/blitz/backoffice/utilisateurs/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_utilisateurs_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.utilisateurs',  '_sonata_name' => 'admin_blitz_backoffice_utilisateurs_show',));
                        }

                        // admin_blitz_backoffice_utilisateurs_export
                        if ($pathinfo === '/admin/blitz/backoffice/utilisateurs/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.utilisateurs',  '_sonata_name' => 'admin_blitz_backoffice_utilisateurs_export',  '_route' => 'admin_blitz_backoffice_utilisateurs_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/blitz/backoffice/groupes')) {
                        // admin_blitz_backoffice_groupes_list
                        if ($pathinfo === '/admin/blitz/backoffice/groupes/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.groupes',  '_sonata_name' => 'admin_blitz_backoffice_groupes_list',  '_route' => 'admin_blitz_backoffice_groupes_list',);
                        }

                        // admin_blitz_backoffice_groupes_create
                        if ($pathinfo === '/admin/blitz/backoffice/groupes/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.groupes',  '_sonata_name' => 'admin_blitz_backoffice_groupes_create',  '_route' => 'admin_blitz_backoffice_groupes_create',);
                        }

                        // admin_blitz_backoffice_groupes_batch
                        if ($pathinfo === '/admin/blitz/backoffice/groupes/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.groupes',  '_sonata_name' => 'admin_blitz_backoffice_groupes_batch',  '_route' => 'admin_blitz_backoffice_groupes_batch',);
                        }

                        // admin_blitz_backoffice_groupes_edit
                        if (preg_match('#^/admin/blitz/backoffice/groupes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_groupes_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.groupes',  '_sonata_name' => 'admin_blitz_backoffice_groupes_edit',));
                        }

                        // admin_blitz_backoffice_groupes_delete
                        if (preg_match('#^/admin/blitz/backoffice/groupes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_groupes_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.groupes',  '_sonata_name' => 'admin_blitz_backoffice_groupes_delete',));
                        }

                        // admin_blitz_backoffice_groupes_show
                        if (preg_match('#^/admin/blitz/backoffice/groupes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_groupes_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.groupes',  '_sonata_name' => 'admin_blitz_backoffice_groupes_show',));
                        }

                        // admin_blitz_backoffice_groupes_export
                        if ($pathinfo === '/admin/blitz/backoffice/groupes/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.groupes',  '_sonata_name' => 'admin_blitz_backoffice_groupes_export',  '_route' => 'admin_blitz_backoffice_groupes_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/blitz/backoffice/cv')) {
                        // admin_blitz_backoffice_cv_list
                        if ($pathinfo === '/admin/blitz/backoffice/cv/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_blitz_backoffice_cv_list',  '_route' => 'admin_blitz_backoffice_cv_list',);
                        }

                        // admin_blitz_backoffice_cv_create
                        if ($pathinfo === '/admin/blitz/backoffice/cv/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_blitz_backoffice_cv_create',  '_route' => 'admin_blitz_backoffice_cv_create',);
                        }

                        // admin_blitz_backoffice_cv_batch
                        if ($pathinfo === '/admin/blitz/backoffice/cv/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_blitz_backoffice_cv_batch',  '_route' => 'admin_blitz_backoffice_cv_batch',);
                        }

                        // admin_blitz_backoffice_cv_edit
                        if (preg_match('#^/admin/blitz/backoffice/cv/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_cv_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_blitz_backoffice_cv_edit',));
                        }

                        // admin_blitz_backoffice_cv_delete
                        if (preg_match('#^/admin/blitz/backoffice/cv/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_cv_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_blitz_backoffice_cv_delete',));
                        }

                        // admin_blitz_backoffice_cv_show
                        if (preg_match('#^/admin/blitz/backoffice/cv/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blitz_backoffice_cv_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_blitz_backoffice_cv_show',));
                        }

                        // admin_blitz_backoffice_cv_export
                        if ($pathinfo === '/admin/blitz/backoffice/cv/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.cv',  '_sonata_name' => 'admin_blitz_backoffice_cv_export',  '_route' => 'admin_blitz_backoffice_cv_export',);
                        }

                    }

                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

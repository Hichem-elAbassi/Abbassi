<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_0198e81dec3def286300db58538785c33644a7ea6f6da837cd5fb6f924414778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getrender_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
                echo "<div class=\"row\">";
            }
            // line 3
            echo "
    ";
            // line 5
            echo "    ";
            $context["row_started"] = false;
            // line 6
            echo "    ";
            $context["row_col_filled"] = 0;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 9
                echo "        ";
                $context["form_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups", array()), $context["code"], array(), "array");
                // line 10
                echo "
        ";
                // line 12
                echo "        ";
                $context["group_class"] = (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array()), "col-md-12")) : ("col-md-12"));
                // line 13
                echo "        ";
                $context["group_size"] = strtr((isset($context["group_class"]) ? $context["group_class"] : $this->getContext($context, "group_class")), array("col-xs-" => "", "col-sm-" => "", "col-md-" => "", "col-lg-" => ""));
                // line 14
                echo "        ";
                $context["row_col_filled"] = ((isset($context["row_col_filled"]) ? $context["row_col_filled"] : $this->getContext($context, "row_col_filled")) + (isset($context["group_size"]) ? $context["group_size"] : $this->getContext($context, "group_size")));
                // line 15
                echo "        ";
                if ( !(isset($context["row_started"]) ? $context["row_started"] : $this->getContext($context, "row_started"))) {
                    // line 16
                    echo "            ";
                    $context["row_started"] = true;
                    // line 17
                    echo "            <div class=\"row\">
        ";
                } elseif ((                // line 18
(isset($context["row_started"]) ? $context["row_started"] : $this->getContext($context, "row_started")) && ((isset($context["row_col_filled"]) ? $context["row_col_filled"] : $this->getContext($context, "row_col_filled")) > 12))) {
                    // line 19
                    echo "            ";
                    $context["row_col_filled"] = 0;
                    // line 20
                    echo "            </div><div class=\"row\">
        ";
                }
                // line 22
                echo "
            <div class=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["group_class"]) ? $context["group_class"] : $this->getContext($context, "group_class")), "html", null, true);
                echo "\">
                <div class=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "box_class", array()), "html", null, true);
                echo "\">
                    <div class=\"box-header\">
                        <h4 class=\"box-title\">
                            ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "name", array()), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "translation_domain", array())), "method"), "html", null, true);
                echo "
                        </h4>
                    </div>
                    ";
                // line 31
                echo "                    <div class=\"box-body\">
                        <div class=\"sonata-ba-collapsed-fields\">
                            ";
                // line 33
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array()) != false)) {
                    // line 34
                    echo "                                <p>";
                    echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array());
                    echo "</p>
                            ";
                }
                // line 36
                echo "
                            ";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 38
                    echo "                                ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                        // line 39
                        echo "                                    ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                        echo "
                                ";
                    }
                    // line 41
                    echo "                            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 42
                    echo "                                <em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</em>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                        </div>
                    </div>
                    ";
                // line 47
                echo "                </div>
            </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
            // line 51
            echo "    ";
            if ((isset($context["row_started"]) ? $context["row_started"] : $this->getContext($context, "row_started"))) {
                echo "</div>";
            }
            // line 52
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
                echo "</div>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 52,  165 => 51,  163 => 50,  155 => 47,  151 => 44,  142 => 42,  137 => 41,  131 => 39,  128 => 38,  123 => 37,  120 => 36,  114 => 34,  112 => 33,  108 => 31,  102 => 27,  96 => 24,  92 => 23,  89 => 22,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 10,  56 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  40 => 3,  35 => 2,  21 => 1,);
    }
}

<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_d35d4ca25a8b0714e4cbd9acb7969572d1351aa88a633c2197a9b803d73ee06e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8fe5e7170903eb35f16238dc38f9548e20724f75f84875bd39786cf1ca44071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fe5e7170903eb35f16238dc38f9548e20724f75f84875bd39786cf1ca44071->enter($__internal_c8fe5e7170903eb35f16238dc38f9548e20724f75f84875bd39786cf1ca44071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_d257a7eaf3f4636861b1435f2952279a679a39186c79ea84a0932650b0bbe429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d257a7eaf3f4636861b1435f2952279a679a39186c79ea84a0932650b0bbe429->enter($__internal_d257a7eaf3f4636861b1435f2952279a679a39186c79ea84a0932650b0bbe429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e"] ?? $this->getContext($context, "__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e"] ?? $this->getContext($context, "__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8fe5e7170903eb35f16238dc38f9548e20724f75f84875bd39786cf1ca44071->leave($__internal_c8fe5e7170903eb35f16238dc38f9548e20724f75f84875bd39786cf1ca44071_prof);

        
        $__internal_d257a7eaf3f4636861b1435f2952279a679a39186c79ea84a0932650b0bbe429->leave($__internal_d257a7eaf3f4636861b1435f2952279a679a39186c79ea84a0932650b0bbe429_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_15dd4cfe2f660ce36655a0699469bc5453bc7d65eae75f353bbcb9d67bdf18ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15dd4cfe2f660ce36655a0699469bc5453bc7d65eae75f353bbcb9d67bdf18ae->enter($__internal_15dd4cfe2f660ce36655a0699469bc5453bc7d65eae75f353bbcb9d67bdf18ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2304b0fc302e8e3d9134fdb9e8b8d100c0f8be6df4c1df93e5214615088eb0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2304b0fc302e8e3d9134fdb9e8b8d100c0f8be6df4c1df93e5214615088eb0b1->enter($__internal_2304b0fc302e8e3d9134fdb9e8b8d100c0f8be6df4c1df93e5214615088eb0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_2304b0fc302e8e3d9134fdb9e8b8d100c0f8be6df4c1df93e5214615088eb0b1->leave($__internal_2304b0fc302e8e3d9134fdb9e8b8d100c0f8be6df4c1df93e5214615088eb0b1_prof);

        
        $__internal_15dd4cfe2f660ce36655a0699469bc5453bc7d65eae75f353bbcb9d67bdf18ae->leave($__internal_15dd4cfe2f660ce36655a0699469bc5453bc7d65eae75f353bbcb9d67bdf18ae_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c2068ecb8568ae51878a7a7e0b9ecff4245e56ef17c966123774bbb13eb14e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2068ecb8568ae51878a7a7e0b9ecff4245e56ef17c966123774bbb13eb14e28->enter($__internal_c2068ecb8568ae51878a7a7e0b9ecff4245e56ef17c966123774bbb13eb14e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_a70373f08c54e3886581f59ab7e128420afd269304ce45cf72f034a9adfeecbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70373f08c54e3886581f59ab7e128420afd269304ce45cf72f034a9adfeecbe->enter($__internal_a70373f08c54e3886581f59ab7e128420afd269304ce45cf72f034a9adfeecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_a70373f08c54e3886581f59ab7e128420afd269304ce45cf72f034a9adfeecbe->leave($__internal_a70373f08c54e3886581f59ab7e128420afd269304ce45cf72f034a9adfeecbe_prof);

        
        $__internal_c2068ecb8568ae51878a7a7e0b9ecff4245e56ef17c966123774bbb13eb14e28->leave($__internal_c2068ecb8568ae51878a7a7e0b9ecff4245e56ef17c966123774bbb13eb14e28_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c73774f30e4c026ece265b3050f617c61020cb1b62867a55e322c9475dffd1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73774f30e4c026ece265b3050f617c61020cb1b62867a55e322c9475dffd1ae->enter($__internal_c73774f30e4c026ece265b3050f617c61020cb1b62867a55e322c9475dffd1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_52ff1a0f767a16bef77f070005906fe2029fb4d334e355de242a6ad82d6de60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ff1a0f767a16bef77f070005906fe2029fb4d334e355de242a6ad82d6de60d->enter($__internal_52ff1a0f767a16bef77f070005906fe2029fb4d334e355de242a6ad82d6de60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e"] ?? $this->getContext($context, "__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_52ff1a0f767a16bef77f070005906fe2029fb4d334e355de242a6ad82d6de60d->leave($__internal_52ff1a0f767a16bef77f070005906fe2029fb4d334e355de242a6ad82d6de60d_prof);

        
        $__internal_c73774f30e4c026ece265b3050f617c61020cb1b62867a55e322c9475dffd1ae->leave($__internal_c73774f30e4c026ece265b3050f617c61020cb1b62867a55e322c9475dffd1ae_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_32d342e96453f4f176204d40d0e36fb88b2413c538ef0502881cb18512b7b906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d342e96453f4f176204d40d0e36fb88b2413c538ef0502881cb18512b7b906->enter($__internal_32d342e96453f4f176204d40d0e36fb88b2413c538ef0502881cb18512b7b906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a4a5aa31c6ad56bae7a424491314a039452fa81444b99d763be1b246d32dd421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a5aa31c6ad56bae7a424491314a039452fa81444b99d763be1b246d32dd421->enter($__internal_a4a5aa31c6ad56bae7a424491314a039452fa81444b99d763be1b246d32dd421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 4
($context["__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e"] ?? $this->getContext($context, "__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e")));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
($context["__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e"] ?? $this->getContext($context, "__internal_e5e0fe6911a3ab091668a15e85120c1537b149baec8995105f99dad42d4d273e")));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_a4a5aa31c6ad56bae7a424491314a039452fa81444b99d763be1b246d32dd421->leave($__internal_a4a5aa31c6ad56bae7a424491314a039452fa81444b99d763be1b246d32dd421_prof);

        
        $__internal_32d342e96453f4f176204d40d0e36fb88b2413c538ef0502881cb18512b7b906->leave($__internal_32d342e96453f4f176204d40d0e36fb88b2413c538ef0502881cb18512b7b906_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_9bc3aab425c2ef2f2c8e53f3fc170330585769420bb0c9a339d21d25861a34ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc3aab425c2ef2f2c8e53f3fc170330585769420bb0c9a339d21d25861a34ed->enter($__internal_9bc3aab425c2ef2f2c8e53f3fc170330585769420bb0c9a339d21d25861a34ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_e1e5008a68be926f75367b80f45ffc072a6ecf8d5690757a6f4e6751610e89eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e5008a68be926f75367b80f45ffc072a6ecf8d5690757a6f4e6751610e89eb->enter($__internal_e1e5008a68be926f75367b80f45ffc072a6ecf8d5690757a6f4e6751610e89eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 46
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 47
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 48
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 49
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 50
        echo "
            ";
        
        $__internal_e1e5008a68be926f75367b80f45ffc072a6ecf8d5690757a6f4e6751610e89eb->leave($__internal_e1e5008a68be926f75367b80f45ffc072a6ecf8d5690757a6f4e6751610e89eb_prof);

        
        $__internal_9bc3aab425c2ef2f2c8e53f3fc170330585769420bb0c9a339d21d25861a34ed->leave($__internal_9bc3aab425c2ef2f2c8e53f3fc170330585769420bb0c9a339d21d25861a34ed_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_08debee2d3d7325eaf9deea23cfea8f2dc0d36fc62fbab4c3568e3c5c4929cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08debee2d3d7325eaf9deea23cfea8f2dc0d36fc62fbab4c3568e3c5c4929cd0->enter($__internal_08debee2d3d7325eaf9deea23cfea8f2dc0d36fc62fbab4c3568e3c5c4929cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_2946bb62482d1693ddbb0fb8cc76da90dde6a2d5eb6f2d284a53aec2774178c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2946bb62482d1693ddbb0fb8cc76da90dde6a2d5eb6f2d284a53aec2774178c2->enter($__internal_2946bb62482d1693ddbb0fb8cc76da90dde6a2d5eb6f2d284a53aec2774178c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 61
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 62
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 63
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 64
        echo "
    ";
        
        $__internal_2946bb62482d1693ddbb0fb8cc76da90dde6a2d5eb6f2d284a53aec2774178c2->leave($__internal_2946bb62482d1693ddbb0fb8cc76da90dde6a2d5eb6f2d284a53aec2774178c2_prof);

        
        $__internal_08debee2d3d7325eaf9deea23cfea8f2dc0d36fc62fbab4c3568e3c5c4929cd0->leave($__internal_08debee2d3d7325eaf9deea23cfea8f2dc0d36fc62fbab4c3568e3c5c4929cd0_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_111e9466158c1a913d82ce76f0f7971783e2c3b67d41e377ffdd6d3c4deb3e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111e9466158c1a913d82ce76f0f7971783e2c3b67d41e377ffdd6d3c4deb3e8e->enter($__internal_111e9466158c1a913d82ce76f0f7971783e2c3b67d41e377ffdd6d3c4deb3e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_82875f10e5df96f1bd7d559398d8f5b736c8ea1077d962dd937672d37a2cd654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82875f10e5df96f1bd7d559398d8f5b736c8ea1077d962dd937672d37a2cd654->enter($__internal_82875f10e5df96f1bd7d559398d8f5b736c8ea1077d962dd937672d37a2cd654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_82875f10e5df96f1bd7d559398d8f5b736c8ea1077d962dd937672d37a2cd654->leave($__internal_82875f10e5df96f1bd7d559398d8f5b736c8ea1077d962dd937672d37a2cd654_prof);

        
        $__internal_111e9466158c1a913d82ce76f0f7971783e2c3b67d41e377ffdd6d3c4deb3e8e->leave($__internal_111e9466158c1a913d82ce76f0f7971783e2c3b67d41e377ffdd6d3c4deb3e8e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 69,  268 => 68,  257 => 64,  255 => 63,  254 => 62,  253 => 61,  252 => 60,  251 => 59,  249 => 57,  240 => 56,  229 => 50,  227 => 49,  226 => 48,  225 => 47,  224 => 46,  223 => 45,  222 => 44,  219 => 43,  216 => 42,  213 => 41,  204 => 40,  194 => 56,  188 => 52,  186 => 40,  181 => 37,  173 => 34,  169 => 32,  167 => 4,  165 => 32,  163 => 31,  157 => 28,  151 => 24,  149 => 4,  148 => 24,  140 => 22,  136 => 21,  133 => 20,  124 => 19,  111 => 15,  110 => 4,  108 => 15,  105 => 14,  103 => 13,  94 => 12,  76 => 10,  58 => 9,  48 => 7,  46 => 5,  45 => 4,  44 => 5,  43 => 4,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/show.html.twig");
    }
}

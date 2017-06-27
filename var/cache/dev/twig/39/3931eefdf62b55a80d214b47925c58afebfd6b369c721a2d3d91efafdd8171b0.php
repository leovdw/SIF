<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_15041b33cb59408766c107673cdad730efb2db85b731d579c2c717768103a039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c8e31cedbd5b1454ac75acae63e05dd159400e07ef3768d737ed1714dbba43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c8e31cedbd5b1454ac75acae63e05dd159400e07ef3768d737ed1714dbba43->enter($__internal_c4c8e31cedbd5b1454ac75acae63e05dd159400e07ef3768d737ed1714dbba43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_d6881f245a3d111120c40487303322c06b5fd473f606623e8104ef76cf5eb9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6881f245a3d111120c40487303322c06b5fd473f606623e8104ef76cf5eb9e3->enter($__internal_d6881f245a3d111120c40487303322c06b5fd473f606623e8104ef76cf5eb9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_4de2ef89b0c80ffc3560ee43bbebf754ede0319a78cc9e35f7c7890a3ab77d48"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_4de2ef89b0c80ffc3560ee43bbebf754ede0319a78cc9e35f7c7890a3ab77d48"] ?? $this->getContext($context, "__internal_4de2ef89b0c80ffc3560ee43bbebf754ede0319a78cc9e35f7c7890a3ab77d48"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_4de2ef89b0c80ffc3560ee43bbebf754ede0319a78cc9e35f7c7890a3ab77d48"] ?? $this->getContext($context, "__internal_4de2ef89b0c80ffc3560ee43bbebf754ede0319a78cc9e35f7c7890a3ab77d48"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c8e31cedbd5b1454ac75acae63e05dd159400e07ef3768d737ed1714dbba43->leave($__internal_c4c8e31cedbd5b1454ac75acae63e05dd159400e07ef3768d737ed1714dbba43_prof);

        
        $__internal_d6881f245a3d111120c40487303322c06b5fd473f606623e8104ef76cf5eb9e3->leave($__internal_d6881f245a3d111120c40487303322c06b5fd473f606623e8104ef76cf5eb9e3_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_20bbd8702fce3d4c958e81acc70d40f09002503650ebd1c123f507dbd212cad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bbd8702fce3d4c958e81acc70d40f09002503650ebd1c123f507dbd212cad7->enter($__internal_20bbd8702fce3d4c958e81acc70d40f09002503650ebd1c123f507dbd212cad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_40cbc58d05e32d3aa5a233c25657c2f66303325789cec93a9d0961b8b0c9b3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cbc58d05e32d3aa5a233c25657c2f66303325789cec93a9d0961b8b0c9b3fd->enter($__internal_40cbc58d05e32d3aa5a233c25657c2f66303325789cec93a9d0961b8b0c9b3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_40cbc58d05e32d3aa5a233c25657c2f66303325789cec93a9d0961b8b0c9b3fd->leave($__internal_40cbc58d05e32d3aa5a233c25657c2f66303325789cec93a9d0961b8b0c9b3fd_prof);

        
        $__internal_20bbd8702fce3d4c958e81acc70d40f09002503650ebd1c123f507dbd212cad7->leave($__internal_20bbd8702fce3d4c958e81acc70d40f09002503650ebd1c123f507dbd212cad7_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6ee48ee8fd0cdeb5aab62eb11dd3f1d83053c51662fe5cc6b7542bb82113ba26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee48ee8fd0cdeb5aab62eb11dd3f1d83053c51662fe5cc6b7542bb82113ba26->enter($__internal_6ee48ee8fd0cdeb5aab62eb11dd3f1d83053c51662fe5cc6b7542bb82113ba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_b8f7dd25c3e60e8c0c0da93ba64173f1335fcb20dac7fe1f0fe92898dd04e973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f7dd25c3e60e8c0c0da93ba64173f1335fcb20dac7fe1f0fe92898dd04e973->enter($__internal_b8f7dd25c3e60e8c0c0da93ba64173f1335fcb20dac7fe1f0fe92898dd04e973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_b8f7dd25c3e60e8c0c0da93ba64173f1335fcb20dac7fe1f0fe92898dd04e973->leave($__internal_b8f7dd25c3e60e8c0c0da93ba64173f1335fcb20dac7fe1f0fe92898dd04e973_prof);

        
        $__internal_6ee48ee8fd0cdeb5aab62eb11dd3f1d83053c51662fe5cc6b7542bb82113ba26->leave($__internal_6ee48ee8fd0cdeb5aab62eb11dd3f1d83053c51662fe5cc6b7542bb82113ba26_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_23b45c4f3526157b61f9fdbefca182bbbdbcde2a53e59bd18313da2f1e197de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b45c4f3526157b61f9fdbefca182bbbdbcde2a53e59bd18313da2f1e197de3->enter($__internal_23b45c4f3526157b61f9fdbefca182bbbdbcde2a53e59bd18313da2f1e197de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_a780cbcfc894df2c11aa7e76b78473616d896caf52ca2211b673d6795672fb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a780cbcfc894df2c11aa7e76b78473616d896caf52ca2211b673d6795672fb36->enter($__internal_a780cbcfc894df2c11aa7e76b78473616d896caf52ca2211b673d6795672fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_4de2ef89b0c80ffc3560ee43bbebf754ede0319a78cc9e35f7c7890a3ab77d48"] ?? $this->getContext($context, "__internal_4de2ef89b0c80ffc3560ee43bbebf754ede0319a78cc9e35f7c7890a3ab77d48")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a780cbcfc894df2c11aa7e76b78473616d896caf52ca2211b673d6795672fb36->leave($__internal_a780cbcfc894df2c11aa7e76b78473616d896caf52ca2211b673d6795672fb36_prof);

        
        $__internal_23b45c4f3526157b61f9fdbefca182bbbdbcde2a53e59bd18313da2f1e197de3->leave($__internal_23b45c4f3526157b61f9fdbefca182bbbdbcde2a53e59bd18313da2f1e197de3_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_6bb98278210ff4af714b082801d6ce0e48e134c9e8d20099c8a07a4a48f8e32c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb98278210ff4af714b082801d6ce0e48e134c9e8d20099c8a07a4a48f8e32c->enter($__internal_6bb98278210ff4af714b082801d6ce0e48e134c9e8d20099c8a07a4a48f8e32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_bab7e326fd0b627c7917e0be7aa8ab4e9b14874e117104646f87d38791bc8648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab7e326fd0b627c7917e0be7aa8ab4e9b14874e117104646f87d38791bc8648->enter($__internal_bab7e326fd0b627c7917e0be7aa8ab4e9b14874e117104646f87d38791bc8648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_bab7e326fd0b627c7917e0be7aa8ab4e9b14874e117104646f87d38791bc8648->leave($__internal_bab7e326fd0b627c7917e0be7aa8ab4e9b14874e117104646f87d38791bc8648_prof);

        
        $__internal_6bb98278210ff4af714b082801d6ce0e48e134c9e8d20099c8a07a4a48f8e32c->leave($__internal_6bb98278210ff4af714b082801d6ce0e48e134c9e8d20099c8a07a4a48f8e32c_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_816015bd3e8c109603a020520ee788e2a599a5d3256e9d5e5f9c5801bff8ba52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816015bd3e8c109603a020520ee788e2a599a5d3256e9d5e5f9c5801bff8ba52->enter($__internal_816015bd3e8c109603a020520ee788e2a599a5d3256e9d5e5f9c5801bff8ba52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_03e10c8ce169b2ff04de5b6e2420df821cc3e74d618ea0d03ec3a0d02c5b6339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e10c8ce169b2ff04de5b6e2420df821cc3e74d618ea0d03ec3a0d02c5b6339->enter($__internal_03e10c8ce169b2ff04de5b6e2420df821cc3e74d618ea0d03ec3a0d02c5b6339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_03e10c8ce169b2ff04de5b6e2420df821cc3e74d618ea0d03ec3a0d02c5b6339->leave($__internal_03e10c8ce169b2ff04de5b6e2420df821cc3e74d618ea0d03ec3a0d02c5b6339_prof);

        
        $__internal_816015bd3e8c109603a020520ee788e2a599a5d3256e9d5e5f9c5801bff8ba52->leave($__internal_816015bd3e8c109603a020520ee788e2a599a5d3256e9d5e5f9c5801bff8ba52_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_588abc9d395aa4f89e34ecae4f9ba73f45bca77923bbaf65d1d5db7c0c7c8703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588abc9d395aa4f89e34ecae4f9ba73f45bca77923bbaf65d1d5db7c0c7c8703->enter($__internal_588abc9d395aa4f89e34ecae4f9ba73f45bca77923bbaf65d1d5db7c0c7c8703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_e1c6173517d3a4615c3aaa1876f814b82261aa914aeaa656a3ce19fcd91f1301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c6173517d3a4615c3aaa1876f814b82261aa914aeaa656a3ce19fcd91f1301->enter($__internal_e1c6173517d3a4615c3aaa1876f814b82261aa914aeaa656a3ce19fcd91f1301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_e1c6173517d3a4615c3aaa1876f814b82261aa914aeaa656a3ce19fcd91f1301->leave($__internal_e1c6173517d3a4615c3aaa1876f814b82261aa914aeaa656a3ce19fcd91f1301_prof);

        
        $__internal_588abc9d395aa4f89e34ecae4f9ba73f45bca77923bbaf65d1d5db7c0c7c8703->leave($__internal_588abc9d395aa4f89e34ecae4f9ba73f45bca77923bbaf65d1d5db7c0c7c8703_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/new.html.twig");
    }
}

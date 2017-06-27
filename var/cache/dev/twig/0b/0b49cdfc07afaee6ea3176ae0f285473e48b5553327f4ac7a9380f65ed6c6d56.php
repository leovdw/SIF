<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_afac39731d2fb3b068bbb33c45e9950e71142563ee0bc4712f7529f1dc483df8 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9462ddb6cf017d6a7b68c342e1da90b7f6465d9ed5b01e96446fe4b0ed3bf0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9462ddb6cf017d6a7b68c342e1da90b7f6465d9ed5b01e96446fe4b0ed3bf0a8->enter($__internal_9462ddb6cf017d6a7b68c342e1da90b7f6465d9ed5b01e96446fe4b0ed3bf0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_3606141cfca5c53aa06f46fcb74114c475ef81b3dd7fbab8c8837e4efb14e067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3606141cfca5c53aa06f46fcb74114c475ef81b3dd7fbab8c8837e4efb14e067->enter($__internal_3606141cfca5c53aa06f46fcb74114c475ef81b3dd7fbab8c8837e4efb14e067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_1803f0e8472c4fcd3b106737cd4b82e2fb0c17ff9583dc34cbbb9357a49e6500"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_1803f0e8472c4fcd3b106737cd4b82e2fb0c17ff9583dc34cbbb9357a49e6500"] ?? $this->getContext($context, "__internal_1803f0e8472c4fcd3b106737cd4b82e2fb0c17ff9583dc34cbbb9357a49e6500"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_1803f0e8472c4fcd3b106737cd4b82e2fb0c17ff9583dc34cbbb9357a49e6500"] ?? $this->getContext($context, "__internal_1803f0e8472c4fcd3b106737cd4b82e2fb0c17ff9583dc34cbbb9357a49e6500"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9462ddb6cf017d6a7b68c342e1da90b7f6465d9ed5b01e96446fe4b0ed3bf0a8->leave($__internal_9462ddb6cf017d6a7b68c342e1da90b7f6465d9ed5b01e96446fe4b0ed3bf0a8_prof);

        
        $__internal_3606141cfca5c53aa06f46fcb74114c475ef81b3dd7fbab8c8837e4efb14e067->leave($__internal_3606141cfca5c53aa06f46fcb74114c475ef81b3dd7fbab8c8837e4efb14e067_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c262a44f6cab409014e3886a51e4e98edb3caaf309cae569ce38f9869cb4f3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c262a44f6cab409014e3886a51e4e98edb3caaf309cae569ce38f9869cb4f3b8->enter($__internal_c262a44f6cab409014e3886a51e4e98edb3caaf309cae569ce38f9869cb4f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ac1660e96fb28e641c1cc2d93ff4abcd0705770aad0672e4751f5838151a8849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1660e96fb28e641c1cc2d93ff4abcd0705770aad0672e4751f5838151a8849->enter($__internal_ac1660e96fb28e641c1cc2d93ff4abcd0705770aad0672e4751f5838151a8849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_ac1660e96fb28e641c1cc2d93ff4abcd0705770aad0672e4751f5838151a8849->leave($__internal_ac1660e96fb28e641c1cc2d93ff4abcd0705770aad0672e4751f5838151a8849_prof);

        
        $__internal_c262a44f6cab409014e3886a51e4e98edb3caaf309cae569ce38f9869cb4f3b8->leave($__internal_c262a44f6cab409014e3886a51e4e98edb3caaf309cae569ce38f9869cb4f3b8_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ae298e9d415958dba9b4600568d0d22d0990ead5d0750db61380da9770515b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae298e9d415958dba9b4600568d0d22d0990ead5d0750db61380da9770515b2e->enter($__internal_ae298e9d415958dba9b4600568d0d22d0990ead5d0750db61380da9770515b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_42919d23934b2c81627b007bc7f80d38673013fa0f3ac7f3df3ce8995f7a3653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42919d23934b2c81627b007bc7f80d38673013fa0f3ac7f3df3ce8995f7a3653->enter($__internal_42919d23934b2c81627b007bc7f80d38673013fa0f3ac7f3df3ce8995f7a3653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_42919d23934b2c81627b007bc7f80d38673013fa0f3ac7f3df3ce8995f7a3653->leave($__internal_42919d23934b2c81627b007bc7f80d38673013fa0f3ac7f3df3ce8995f7a3653_prof);

        
        $__internal_ae298e9d415958dba9b4600568d0d22d0990ead5d0750db61380da9770515b2e->leave($__internal_ae298e9d415958dba9b4600568d0d22d0990ead5d0750db61380da9770515b2e_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8869c6116cbc268775ecf8808b5ca39b214ff07e36fe05d87fe39d4a8d39a50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8869c6116cbc268775ecf8808b5ca39b214ff07e36fe05d87fe39d4a8d39a50c->enter($__internal_8869c6116cbc268775ecf8808b5ca39b214ff07e36fe05d87fe39d4a8d39a50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_fbfe955eae0d71c2f3b2c31fc579d1912313b73ea02a6e5641d8d6bd25f1d0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfe955eae0d71c2f3b2c31fc579d1912313b73ea02a6e5641d8d6bd25f1d0ab->enter($__internal_fbfe955eae0d71c2f3b2c31fc579d1912313b73ea02a6e5641d8d6bd25f1d0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_1803f0e8472c4fcd3b106737cd4b82e2fb0c17ff9583dc34cbbb9357a49e6500"] ?? $this->getContext($context, "__internal_1803f0e8472c4fcd3b106737cd4b82e2fb0c17ff9583dc34cbbb9357a49e6500")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fbfe955eae0d71c2f3b2c31fc579d1912313b73ea02a6e5641d8d6bd25f1d0ab->leave($__internal_fbfe955eae0d71c2f3b2c31fc579d1912313b73ea02a6e5641d8d6bd25f1d0ab_prof);

        
        $__internal_8869c6116cbc268775ecf8808b5ca39b214ff07e36fe05d87fe39d4a8d39a50c->leave($__internal_8869c6116cbc268775ecf8808b5ca39b214ff07e36fe05d87fe39d4a8d39a50c_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_d567bc54ebe3d950918aeae772a6b614e28964179c8c8a5235a1e06ed5b1f950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d567bc54ebe3d950918aeae772a6b614e28964179c8c8a5235a1e06ed5b1f950->enter($__internal_d567bc54ebe3d950918aeae772a6b614e28964179c8c8a5235a1e06ed5b1f950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f3cd15fdae6526ae4361256a35151049a6b9ff38dac39f6908179ea0d4259979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cd15fdae6526ae4361256a35151049a6b9ff38dac39f6908179ea0d4259979->enter($__internal_f3cd15fdae6526ae4361256a35151049a6b9ff38dac39f6908179ea0d4259979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_f3cd15fdae6526ae4361256a35151049a6b9ff38dac39f6908179ea0d4259979->leave($__internal_f3cd15fdae6526ae4361256a35151049a6b9ff38dac39f6908179ea0d4259979_prof);

        
        $__internal_d567bc54ebe3d950918aeae772a6b614e28964179c8c8a5235a1e06ed5b1f950->leave($__internal_d567bc54ebe3d950918aeae772a6b614e28964179c8c8a5235a1e06ed5b1f950_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_a1581a6d3d124c55ace2e92533c32317f150d31ae20732b2b02d85dcaab37c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1581a6d3d124c55ace2e92533c32317f150d31ae20732b2b02d85dcaab37c40->enter($__internal_a1581a6d3d124c55ace2e92533c32317f150d31ae20732b2b02d85dcaab37c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_26ab8773434f0ac65d2773aa50de3a2f810dfeaab2b7fcc4c27001bc6725e728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ab8773434f0ac65d2773aa50de3a2f810dfeaab2b7fcc4c27001bc6725e728->enter($__internal_26ab8773434f0ac65d2773aa50de3a2f810dfeaab2b7fcc4c27001bc6725e728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_26ab8773434f0ac65d2773aa50de3a2f810dfeaab2b7fcc4c27001bc6725e728->leave($__internal_26ab8773434f0ac65d2773aa50de3a2f810dfeaab2b7fcc4c27001bc6725e728_prof);

        
        $__internal_a1581a6d3d124c55ace2e92533c32317f150d31ae20732b2b02d85dcaab37c40->leave($__internal_a1581a6d3d124c55ace2e92533c32317f150d31ae20732b2b02d85dcaab37c40_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_50fae03ff28bc88e0f93d631ed3bfda51e5a26fdcc53f9f4bb25862aa63e6e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fae03ff28bc88e0f93d631ed3bfda51e5a26fdcc53f9f4bb25862aa63e6e4a->enter($__internal_50fae03ff28bc88e0f93d631ed3bfda51e5a26fdcc53f9f4bb25862aa63e6e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_144da9add2c6088af1b21c3dd276f583e41ec733101e4b18cea9ca46fdbaaf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144da9add2c6088af1b21c3dd276f583e41ec733101e4b18cea9ca46fdbaaf86->enter($__internal_144da9add2c6088af1b21c3dd276f583e41ec733101e4b18cea9ca46fdbaaf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_144da9add2c6088af1b21c3dd276f583e41ec733101e4b18cea9ca46fdbaaf86->leave($__internal_144da9add2c6088af1b21c3dd276f583e41ec733101e4b18cea9ca46fdbaaf86_prof);

        
        $__internal_50fae03ff28bc88e0f93d631ed3bfda51e5a26fdcc53f9f4bb25862aa63e6e4a->leave($__internal_50fae03ff28bc88e0f93d631ed3bfda51e5a26fdcc53f9f4bb25862aa63e6e4a_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a87870c13a2ff8cd9440e400a014cb363cd98fd54ea5a929e87f6ffb86ca6fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87870c13a2ff8cd9440e400a014cb363cd98fd54ea5a929e87f6ffb86ca6fe5->enter($__internal_a87870c13a2ff8cd9440e400a014cb363cd98fd54ea5a929e87f6ffb86ca6fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_be4acda17464eddbfb1739f71c61599946fbf45f66851fdf2402ff0aec7a7875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4acda17464eddbfb1739f71c61599946fbf45f66851fdf2402ff0aec7a7875->enter($__internal_be4acda17464eddbfb1739f71c61599946fbf45f66851fdf2402ff0aec7a7875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

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
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_be4acda17464eddbfb1739f71c61599946fbf45f66851fdf2402ff0aec7a7875->leave($__internal_be4acda17464eddbfb1739f71c61599946fbf45f66851fdf2402ff0aec7a7875_prof);

        
        $__internal_a87870c13a2ff8cd9440e400a014cb363cd98fd54ea5a929e87f6ffb86ca6fe5->leave($__internal_a87870c13a2ff8cd9440e400a014cb363cd98fd54ea5a929e87f6ffb86ca6fe5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
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
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

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

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/edit.html.twig");
    }
}

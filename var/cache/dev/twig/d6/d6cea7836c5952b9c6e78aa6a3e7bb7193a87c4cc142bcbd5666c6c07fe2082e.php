<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_ecbe3d5a5f8b9f2cc76586a3b89b6f4473ea872c2b5d72eed8c1f2a996744a70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f2124c852f87fdf71970018561a725a6a1396291dc66950ce1638912c05a4bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2124c852f87fdf71970018561a725a6a1396291dc66950ce1638912c05a4bd->enter($__internal_6f2124c852f87fdf71970018561a725a6a1396291dc66950ce1638912c05a4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_20a98b8dcb5f17f057200f80dd411e0e5ee3059724c5af5ae8d279a3f1ce9221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a98b8dcb5f17f057200f80dd411e0e5ee3059724c5af5ae8d279a3f1ce9221->enter($__internal_20a98b8dcb5f17f057200f80dd411e0e5ee3059724c5af5ae8d279a3f1ce9221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f2124c852f87fdf71970018561a725a6a1396291dc66950ce1638912c05a4bd->leave($__internal_6f2124c852f87fdf71970018561a725a6a1396291dc66950ce1638912c05a4bd_prof);

        
        $__internal_20a98b8dcb5f17f057200f80dd411e0e5ee3059724c5af5ae8d279a3f1ce9221->leave($__internal_20a98b8dcb5f17f057200f80dd411e0e5ee3059724c5af5ae8d279a3f1ce9221_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_838c734ccf6730a01d03a25ba520011798d0a576cf6cca7c082e9444d88ab38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838c734ccf6730a01d03a25ba520011798d0a576cf6cca7c082e9444d88ab38c->enter($__internal_838c734ccf6730a01d03a25ba520011798d0a576cf6cca7c082e9444d88ab38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_e40c996187179f5a64676db0aa7fa696344e07abd130ab9986823a45c160687c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40c996187179f5a64676db0aa7fa696344e07abd130ab9986823a45c160687c->enter($__internal_e40c996187179f5a64676db0aa7fa696344e07abd130ab9986823a45c160687c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_e40c996187179f5a64676db0aa7fa696344e07abd130ab9986823a45c160687c->leave($__internal_e40c996187179f5a64676db0aa7fa696344e07abd130ab9986823a45c160687c_prof);

        
        $__internal_838c734ccf6730a01d03a25ba520011798d0a576cf6cca7c082e9444d88ab38c->leave($__internal_838c734ccf6730a01d03a25ba520011798d0a576cf6cca7c082e9444d88ab38c_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_383b8a38ad8ba6920012204929a1110b3be0c497c488d5bf12641daad5fe6915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383b8a38ad8ba6920012204929a1110b3be0c497c488d5bf12641daad5fe6915->enter($__internal_383b8a38ad8ba6920012204929a1110b3be0c497c488d5bf12641daad5fe6915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_c4ac44e7af5a1b4edee4d78cfc8984c3cf1d214b9327130bda269593f3c9b968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ac44e7af5a1b4edee4d78cfc8984c3cf1d214b9327130bda269593f3c9b968->enter($__internal_c4ac44e7af5a1b4edee4d78cfc8984c3cf1d214b9327130bda269593f3c9b968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_c4ac44e7af5a1b4edee4d78cfc8984c3cf1d214b9327130bda269593f3c9b968->leave($__internal_c4ac44e7af5a1b4edee4d78cfc8984c3cf1d214b9327130bda269593f3c9b968_prof);

        
        $__internal_383b8a38ad8ba6920012204929a1110b3be0c497c488d5bf12641daad5fe6915->leave($__internal_383b8a38ad8ba6920012204929a1110b3be0c497c488d5bf12641daad5fe6915_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e071e60867535f1eac557de89d040502a94ce672edfb0e791e338a121a541767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e071e60867535f1eac557de89d040502a94ce672edfb0e791e338a121a541767->enter($__internal_e071e60867535f1eac557de89d040502a94ce672edfb0e791e338a121a541767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_52431014465444e9ca501a84d7a6bde210f3ceefd1043886882c1f08ae174ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52431014465444e9ca501a84d7a6bde210f3ceefd1043886882c1f08ae174ae6->enter($__internal_52431014465444e9ca501a84d7a6bde210f3ceefd1043886882c1f08ae174ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_52431014465444e9ca501a84d7a6bde210f3ceefd1043886882c1f08ae174ae6->leave($__internal_52431014465444e9ca501a84d7a6bde210f3ceefd1043886882c1f08ae174ae6_prof);

        
        $__internal_e071e60867535f1eac557de89d040502a94ce672edfb0e791e338a121a541767->leave($__internal_e071e60867535f1eac557de89d040502a94ce672edfb0e791e338a121a541767_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
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
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/exception.html.twig");
    }
}

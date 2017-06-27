<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0efb6d065da00fd21b179613212fa62f525d393978b2a1c07284d86773ab4241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e06e31291fbcc4c6e619f99db1c58efb480d3513929c839674bb1be820893e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e06e31291fbcc4c6e619f99db1c58efb480d3513929c839674bb1be820893e5->enter($__internal_9e06e31291fbcc4c6e619f99db1c58efb480d3513929c839674bb1be820893e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_39a047ec20e2551912a814fadf8699c90aa5c3c566d70e49f6fbd54aaf0851c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a047ec20e2551912a814fadf8699c90aa5c3c566d70e49f6fbd54aaf0851c4->enter($__internal_39a047ec20e2551912a814fadf8699c90aa5c3c566d70e49f6fbd54aaf0851c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e06e31291fbcc4c6e619f99db1c58efb480d3513929c839674bb1be820893e5->leave($__internal_9e06e31291fbcc4c6e619f99db1c58efb480d3513929c839674bb1be820893e5_prof);

        
        $__internal_39a047ec20e2551912a814fadf8699c90aa5c3c566d70e49f6fbd54aaf0851c4->leave($__internal_39a047ec20e2551912a814fadf8699c90aa5c3c566d70e49f6fbd54aaf0851c4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7a3d9a320a858cc9cc67e348b7a7bc24766cf2073b9d111fe54f893f828dfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a3d9a320a858cc9cc67e348b7a7bc24766cf2073b9d111fe54f893f828dfda->enter($__internal_b7a3d9a320a858cc9cc67e348b7a7bc24766cf2073b9d111fe54f893f828dfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_04e84f262434ca38162c02fa55864719c71ce651017432ca123b80b833064397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e84f262434ca38162c02fa55864719c71ce651017432ca123b80b833064397->enter($__internal_04e84f262434ca38162c02fa55864719c71ce651017432ca123b80b833064397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_04e84f262434ca38162c02fa55864719c71ce651017432ca123b80b833064397->leave($__internal_04e84f262434ca38162c02fa55864719c71ce651017432ca123b80b833064397_prof);

        
        $__internal_b7a3d9a320a858cc9cc67e348b7a7bc24766cf2073b9d111fe54f893f828dfda->leave($__internal_b7a3d9a320a858cc9cc67e348b7a7bc24766cf2073b9d111fe54f893f828dfda_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}

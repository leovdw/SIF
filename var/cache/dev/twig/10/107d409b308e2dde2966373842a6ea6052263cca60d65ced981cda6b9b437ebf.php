<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f21c8497237aad5b981b1eb860e4bad37b0e1268634648092a6e9dfa7024b24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d5721eca2b31098803cffb329065563ef0ae0236cd83a4f5acd4ae12b1793b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5721eca2b31098803cffb329065563ef0ae0236cd83a4f5acd4ae12b1793b58->enter($__internal_d5721eca2b31098803cffb329065563ef0ae0236cd83a4f5acd4ae12b1793b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_38663e24266cfc2dd38cd00ecc23aed7ca276892e24093bc8f6c81127791928e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38663e24266cfc2dd38cd00ecc23aed7ca276892e24093bc8f6c81127791928e->enter($__internal_38663e24266cfc2dd38cd00ecc23aed7ca276892e24093bc8f6c81127791928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5721eca2b31098803cffb329065563ef0ae0236cd83a4f5acd4ae12b1793b58->leave($__internal_d5721eca2b31098803cffb329065563ef0ae0236cd83a4f5acd4ae12b1793b58_prof);

        
        $__internal_38663e24266cfc2dd38cd00ecc23aed7ca276892e24093bc8f6c81127791928e->leave($__internal_38663e24266cfc2dd38cd00ecc23aed7ca276892e24093bc8f6c81127791928e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a815507373d1bf7d266def38d6690f8e6c503a20a66fd4689790e104ace1d2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a815507373d1bf7d266def38d6690f8e6c503a20a66fd4689790e104ace1d2da->enter($__internal_a815507373d1bf7d266def38d6690f8e6c503a20a66fd4689790e104ace1d2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a67a7e889f97525b27df1da49725dfb8fb7dc7a0c2fc68f8dfad109fd98c3ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67a7e889f97525b27df1da49725dfb8fb7dc7a0c2fc68f8dfad109fd98c3ae3->enter($__internal_a67a7e889f97525b27df1da49725dfb8fb7dc7a0c2fc68f8dfad109fd98c3ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a67a7e889f97525b27df1da49725dfb8fb7dc7a0c2fc68f8dfad109fd98c3ae3->leave($__internal_a67a7e889f97525b27df1da49725dfb8fb7dc7a0c2fc68f8dfad109fd98c3ae3_prof);

        
        $__internal_a815507373d1bf7d266def38d6690f8e6c503a20a66fd4689790e104ace1d2da->leave($__internal_a815507373d1bf7d266def38d6690f8e6c503a20a66fd4689790e104ace1d2da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}

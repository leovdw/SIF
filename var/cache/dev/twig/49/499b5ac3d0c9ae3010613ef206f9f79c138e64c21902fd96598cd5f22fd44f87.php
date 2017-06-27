<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8851698664da8fcf4ed57025ded49030bac54090150ed9ecdafcf87c6e136cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a612f3d9bafe669931adfc89eca7b6584edc5208c3fd1aae8ad1177af240c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a612f3d9bafe669931adfc89eca7b6584edc5208c3fd1aae8ad1177af240c1d->enter($__internal_9a612f3d9bafe669931adfc89eca7b6584edc5208c3fd1aae8ad1177af240c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_adbb6d2785cd87e3f99ffeb8c9e1e5a8869b2a62d5854ea0ea3b0cbe925a9399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbb6d2785cd87e3f99ffeb8c9e1e5a8869b2a62d5854ea0ea3b0cbe925a9399->enter($__internal_adbb6d2785cd87e3f99ffeb8c9e1e5a8869b2a62d5854ea0ea3b0cbe925a9399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9a612f3d9bafe669931adfc89eca7b6584edc5208c3fd1aae8ad1177af240c1d->leave($__internal_9a612f3d9bafe669931adfc89eca7b6584edc5208c3fd1aae8ad1177af240c1d_prof);

        
        $__internal_adbb6d2785cd87e3f99ffeb8c9e1e5a8869b2a62d5854ea0ea3b0cbe925a9399->leave($__internal_adbb6d2785cd87e3f99ffeb8c9e1e5a8869b2a62d5854ea0ea3b0cbe925a9399_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_69b8c19b7413f9382f0bc259ece6e4d084c612d18b0af85372322ca10a57d922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b8c19b7413f9382f0bc259ece6e4d084c612d18b0af85372322ca10a57d922->enter($__internal_69b8c19b7413f9382f0bc259ece6e4d084c612d18b0af85372322ca10a57d922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42f9ed62042b0b04b21aa0dfb1d7aa0475f1208c39315fb9252c23f438dcc02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f9ed62042b0b04b21aa0dfb1d7aa0475f1208c39315fb9252c23f438dcc02c->enter($__internal_42f9ed62042b0b04b21aa0dfb1d7aa0475f1208c39315fb9252c23f438dcc02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_42f9ed62042b0b04b21aa0dfb1d7aa0475f1208c39315fb9252c23f438dcc02c->leave($__internal_42f9ed62042b0b04b21aa0dfb1d7aa0475f1208c39315fb9252c23f438dcc02c_prof);

        
        $__internal_69b8c19b7413f9382f0bc259ece6e4d084c612d18b0af85372322ca10a57d922->leave($__internal_69b8c19b7413f9382f0bc259ece6e4d084c612d18b0af85372322ca10a57d922_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

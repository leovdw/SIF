<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_041f59428a2a78ac76585777557e9f7103bbe685199c279729c7543872abcacb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cfb215c2b7529abc040de68191e5d63af78525a850dc3f80bb4ff5a697630dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfb215c2b7529abc040de68191e5d63af78525a850dc3f80bb4ff5a697630dd->enter($__internal_8cfb215c2b7529abc040de68191e5d63af78525a850dc3f80bb4ff5a697630dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_84992b2b3414dc56f4b47e25133d4a812d4f029d79347b8d36ad113c9104fcfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84992b2b3414dc56f4b47e25133d4a812d4f029d79347b8d36ad113c9104fcfc->enter($__internal_84992b2b3414dc56f4b47e25133d4a812d4f029d79347b8d36ad113c9104fcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8cfb215c2b7529abc040de68191e5d63af78525a850dc3f80bb4ff5a697630dd->leave($__internal_8cfb215c2b7529abc040de68191e5d63af78525a850dc3f80bb4ff5a697630dd_prof);

        
        $__internal_84992b2b3414dc56f4b47e25133d4a812d4f029d79347b8d36ad113c9104fcfc->leave($__internal_84992b2b3414dc56f4b47e25133d4a812d4f029d79347b8d36ad113c9104fcfc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a79373e576e9ca5a2e9a384f5261a08de74e7f1122b9d8571ade67e8b6edfecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79373e576e9ca5a2e9a384f5261a08de74e7f1122b9d8571ade67e8b6edfecd->enter($__internal_a79373e576e9ca5a2e9a384f5261a08de74e7f1122b9d8571ade67e8b6edfecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5b12ddbe8571181b7e7816139ed2eb71513b8152be7a31c88c5cf6e23e874f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b12ddbe8571181b7e7816139ed2eb71513b8152be7a31c88c5cf6e23e874f88->enter($__internal_5b12ddbe8571181b7e7816139ed2eb71513b8152be7a31c88c5cf6e23e874f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5b12ddbe8571181b7e7816139ed2eb71513b8152be7a31c88c5cf6e23e874f88->leave($__internal_5b12ddbe8571181b7e7816139ed2eb71513b8152be7a31c88c5cf6e23e874f88_prof);

        
        $__internal_a79373e576e9ca5a2e9a384f5261a08de74e7f1122b9d8571ade67e8b6edfecd->leave($__internal_a79373e576e9ca5a2e9a384f5261a08de74e7f1122b9d8571ade67e8b6edfecd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5a83d714add5178671534605fda2b732806e26b0aa58b689af823d6e0e7c736f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a83d714add5178671534605fda2b732806e26b0aa58b689af823d6e0e7c736f->enter($__internal_5a83d714add5178671534605fda2b732806e26b0aa58b689af823d6e0e7c736f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_940831cb753b6993f4ef593021eb2edaeb865594e34660e68016b843ec52fb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940831cb753b6993f4ef593021eb2edaeb865594e34660e68016b843ec52fb97->enter($__internal_940831cb753b6993f4ef593021eb2edaeb865594e34660e68016b843ec52fb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_940831cb753b6993f4ef593021eb2edaeb865594e34660e68016b843ec52fb97->leave($__internal_940831cb753b6993f4ef593021eb2edaeb865594e34660e68016b843ec52fb97_prof);

        
        $__internal_5a83d714add5178671534605fda2b732806e26b0aa58b689af823d6e0e7c736f->leave($__internal_5a83d714add5178671534605fda2b732806e26b0aa58b689af823d6e0e7c736f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fa7d46b39fe9a0dddb19243c06b408709504c0264afc74922cfa0a83bad19326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7d46b39fe9a0dddb19243c06b408709504c0264afc74922cfa0a83bad19326->enter($__internal_fa7d46b39fe9a0dddb19243c06b408709504c0264afc74922cfa0a83bad19326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2ed56516de67f5d80b572947896d5c6405757e88fe724b72c5ad462be5d49e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed56516de67f5d80b572947896d5c6405757e88fe724b72c5ad462be5d49e9c->enter($__internal_2ed56516de67f5d80b572947896d5c6405757e88fe724b72c5ad462be5d49e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2ed56516de67f5d80b572947896d5c6405757e88fe724b72c5ad462be5d49e9c->leave($__internal_2ed56516de67f5d80b572947896d5c6405757e88fe724b72c5ad462be5d49e9c_prof);

        
        $__internal_fa7d46b39fe9a0dddb19243c06b408709504c0264afc74922cfa0a83bad19326->leave($__internal_fa7d46b39fe9a0dddb19243c06b408709504c0264afc74922cfa0a83bad19326_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}

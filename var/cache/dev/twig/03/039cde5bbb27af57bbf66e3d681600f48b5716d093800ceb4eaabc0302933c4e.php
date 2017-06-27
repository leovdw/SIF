<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6138b769017ded1a00807ab963b06e0693f65c98ce1ebd8670edcba354deedd4 extends Twig_Template
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
        $__internal_0c8ebe400fc0b3ee0c7b61da46461dac3dca924726be2d8ca3dce2329a7dc54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8ebe400fc0b3ee0c7b61da46461dac3dca924726be2d8ca3dce2329a7dc54e->enter($__internal_0c8ebe400fc0b3ee0c7b61da46461dac3dca924726be2d8ca3dce2329a7dc54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_af85ab15addc02ecc8986c60e53a54fa5d6c13405bf5ca34c740f92c5dd24557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af85ab15addc02ecc8986c60e53a54fa5d6c13405bf5ca34c740f92c5dd24557->enter($__internal_af85ab15addc02ecc8986c60e53a54fa5d6c13405bf5ca34c740f92c5dd24557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0c8ebe400fc0b3ee0c7b61da46461dac3dca924726be2d8ca3dce2329a7dc54e->leave($__internal_0c8ebe400fc0b3ee0c7b61da46461dac3dca924726be2d8ca3dce2329a7dc54e_prof);

        
        $__internal_af85ab15addc02ecc8986c60e53a54fa5d6c13405bf5ca34c740f92c5dd24557->leave($__internal_af85ab15addc02ecc8986c60e53a54fa5d6c13405bf5ca34c740f92c5dd24557_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_306b3c9b049aae2f7d73100e6f78e0fcb219a1fec3f34467976b9921f573c9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306b3c9b049aae2f7d73100e6f78e0fcb219a1fec3f34467976b9921f573c9d4->enter($__internal_306b3c9b049aae2f7d73100e6f78e0fcb219a1fec3f34467976b9921f573c9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_cbddc9386e16f42dc61939a9cc94a749c984eff6851a57b658d246f2abdb05c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbddc9386e16f42dc61939a9cc94a749c984eff6851a57b658d246f2abdb05c6->enter($__internal_cbddc9386e16f42dc61939a9cc94a749c984eff6851a57b658d246f2abdb05c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_cbddc9386e16f42dc61939a9cc94a749c984eff6851a57b658d246f2abdb05c6->leave($__internal_cbddc9386e16f42dc61939a9cc94a749c984eff6851a57b658d246f2abdb05c6_prof);

        
        $__internal_306b3c9b049aae2f7d73100e6f78e0fcb219a1fec3f34467976b9921f573c9d4->leave($__internal_306b3c9b049aae2f7d73100e6f78e0fcb219a1fec3f34467976b9921f573c9d4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b3126529965527a46e611d9ab16a5084b66862cbf16923aa63b6abd3a4c9d039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3126529965527a46e611d9ab16a5084b66862cbf16923aa63b6abd3a4c9d039->enter($__internal_b3126529965527a46e611d9ab16a5084b66862cbf16923aa63b6abd3a4c9d039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_050da1b2d4e351ac21623a2c564d63048ed44f59fa9116f7f0b28bb4032d2588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050da1b2d4e351ac21623a2c564d63048ed44f59fa9116f7f0b28bb4032d2588->enter($__internal_050da1b2d4e351ac21623a2c564d63048ed44f59fa9116f7f0b28bb4032d2588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_050da1b2d4e351ac21623a2c564d63048ed44f59fa9116f7f0b28bb4032d2588->leave($__internal_050da1b2d4e351ac21623a2c564d63048ed44f59fa9116f7f0b28bb4032d2588_prof);

        
        $__internal_b3126529965527a46e611d9ab16a5084b66862cbf16923aa63b6abd3a4c9d039->leave($__internal_b3126529965527a46e611d9ab16a5084b66862cbf16923aa63b6abd3a4c9d039_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_534447dc19dfe10c83715ac6162b2ba4ef233bd404af520952cc40ad42872afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534447dc19dfe10c83715ac6162b2ba4ef233bd404af520952cc40ad42872afa->enter($__internal_534447dc19dfe10c83715ac6162b2ba4ef233bd404af520952cc40ad42872afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0da3287dc0293993fade8a72161e838a9f5419a68aacc105d2acf7c1e6a38e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da3287dc0293993fade8a72161e838a9f5419a68aacc105d2acf7c1e6a38e40->enter($__internal_0da3287dc0293993fade8a72161e838a9f5419a68aacc105d2acf7c1e6a38e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0da3287dc0293993fade8a72161e838a9f5419a68aacc105d2acf7c1e6a38e40->leave($__internal_0da3287dc0293993fade8a72161e838a9f5419a68aacc105d2acf7c1e6a38e40_prof);

        
        $__internal_534447dc19dfe10c83715ac6162b2ba4ef233bd404af520952cc40ad42872afa->leave($__internal_534447dc19dfe10c83715ac6162b2ba4ef233bd404af520952cc40ad42872afa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}

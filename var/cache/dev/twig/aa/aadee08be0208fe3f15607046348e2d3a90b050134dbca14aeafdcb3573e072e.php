<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_0e109968e2b66a7cc82c692d09085e6d7d4f05fe6ef06d3a715418fe5e8ab322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_d657cec7668c3aaed907df20ebc9c081ef7b2790da38a1dc23aa0a62bc1fce14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d657cec7668c3aaed907df20ebc9c081ef7b2790da38a1dc23aa0a62bc1fce14->enter($__internal_d657cec7668c3aaed907df20ebc9c081ef7b2790da38a1dc23aa0a62bc1fce14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_58fd9329f2618ea47ee713d790a7a7bce6e8180f4a9afc55f369f6a1e57ad4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fd9329f2618ea47ee713d790a7a7bce6e8180f4a9afc55f369f6a1e57ad4b1->enter($__internal_58fd9329f2618ea47ee713d790a7a7bce6e8180f4a9afc55f369f6a1e57ad4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d657cec7668c3aaed907df20ebc9c081ef7b2790da38a1dc23aa0a62bc1fce14->leave($__internal_d657cec7668c3aaed907df20ebc9c081ef7b2790da38a1dc23aa0a62bc1fce14_prof);

        
        $__internal_58fd9329f2618ea47ee713d790a7a7bce6e8180f4a9afc55f369f6a1e57ad4b1->leave($__internal_58fd9329f2618ea47ee713d790a7a7bce6e8180f4a9afc55f369f6a1e57ad4b1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09df57d8066b4eb96d0cbfab1f4dae5e79f2284813cd358e45aca0bcf38aab41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09df57d8066b4eb96d0cbfab1f4dae5e79f2284813cd358e45aca0bcf38aab41->enter($__internal_09df57d8066b4eb96d0cbfab1f4dae5e79f2284813cd358e45aca0bcf38aab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4689b54eed50a9eb876b5f7f34f570c37b866c1ec2193f38cf8c0fe33648dc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4689b54eed50a9eb876b5f7f34f570c37b866c1ec2193f38cf8c0fe33648dc02->enter($__internal_4689b54eed50a9eb876b5f7f34f570c37b866c1ec2193f38cf8c0fe33648dc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4689b54eed50a9eb876b5f7f34f570c37b866c1ec2193f38cf8c0fe33648dc02->leave($__internal_4689b54eed50a9eb876b5f7f34f570c37b866c1ec2193f38cf8c0fe33648dc02_prof);

        
        $__internal_09df57d8066b4eb96d0cbfab1f4dae5e79f2284813cd358e45aca0bcf38aab41->leave($__internal_09df57d8066b4eb96d0cbfab1f4dae5e79f2284813cd358e45aca0bcf38aab41_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}

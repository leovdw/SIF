<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_0e4a0656ebd0e89dd701da0ab27d313fab6eb9f5788db5753ee656ae0bf49a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e1c39b90cd090f83fb88ce40cf943141965d7ade85661aef0e656186b2b32c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c39b90cd090f83fb88ce40cf943141965d7ade85661aef0e656186b2b32c68->enter($__internal_e1c39b90cd090f83fb88ce40cf943141965d7ade85661aef0e656186b2b32c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_cda43f95c3e932a57b0fad313dfd0e88281b42a2e5536e27f94bc0cca0bf80fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda43f95c3e932a57b0fad313dfd0e88281b42a2e5536e27f94bc0cca0bf80fe->enter($__internal_cda43f95c3e932a57b0fad313dfd0e88281b42a2e5536e27f94bc0cca0bf80fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c39b90cd090f83fb88ce40cf943141965d7ade85661aef0e656186b2b32c68->leave($__internal_e1c39b90cd090f83fb88ce40cf943141965d7ade85661aef0e656186b2b32c68_prof);

        
        $__internal_cda43f95c3e932a57b0fad313dfd0e88281b42a2e5536e27f94bc0cca0bf80fe->leave($__internal_cda43f95c3e932a57b0fad313dfd0e88281b42a2e5536e27f94bc0cca0bf80fe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_734d04c2e7ad80e677d591dd59490198100f823bbb825a9df77030bfbc67f6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734d04c2e7ad80e677d591dd59490198100f823bbb825a9df77030bfbc67f6e2->enter($__internal_734d04c2e7ad80e677d591dd59490198100f823bbb825a9df77030bfbc67f6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d9d5fe57f6a9cdc98b732fa45a978306e330737fc58937e7cc404c296c8d8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9d5fe57f6a9cdc98b732fa45a978306e330737fc58937e7cc404c296c8d8e2->enter($__internal_3d9d5fe57f6a9cdc98b732fa45a978306e330737fc58937e7cc404c296c8d8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3d9d5fe57f6a9cdc98b732fa45a978306e330737fc58937e7cc404c296c8d8e2->leave($__internal_3d9d5fe57f6a9cdc98b732fa45a978306e330737fc58937e7cc404c296c8d8e2_prof);

        
        $__internal_734d04c2e7ad80e677d591dd59490198100f823bbb825a9df77030bfbc67f6e2->leave($__internal_734d04c2e7ad80e677d591dd59490198100f823bbb825a9df77030bfbc67f6e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

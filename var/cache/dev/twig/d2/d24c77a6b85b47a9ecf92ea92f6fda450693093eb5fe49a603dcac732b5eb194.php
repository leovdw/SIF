<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_e9b8c967b64d576eec43c62eabf9851e11e3007f79062bca53d2d0be9f96b4b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd7cea748718e143955505a7e34586c1ad7f58aae01ba148347fd5cb84310815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7cea748718e143955505a7e34586c1ad7f58aae01ba148347fd5cb84310815->enter($__internal_dd7cea748718e143955505a7e34586c1ad7f58aae01ba148347fd5cb84310815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_7c31096b64d1a9c626948297c3c9e379acc5bdaa85e801823e4dacbdfcd179ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c31096b64d1a9c626948297c3c9e379acc5bdaa85e801823e4dacbdfcd179ed->enter($__internal_7c31096b64d1a9c626948297c3c9e379acc5bdaa85e801823e4dacbdfcd179ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_dd7cea748718e143955505a7e34586c1ad7f58aae01ba148347fd5cb84310815->leave($__internal_dd7cea748718e143955505a7e34586c1ad7f58aae01ba148347fd5cb84310815_prof);

        
        $__internal_7c31096b64d1a9c626948297c3c9e379acc5bdaa85e801823e4dacbdfcd179ed->leave($__internal_7c31096b64d1a9c626948297c3c9e379acc5bdaa85e801823e4dacbdfcd179ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}

<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_03711d3fb5c7f59231ab5247d0573fa5b05f91911321eda6484297bb1a1f6c5e extends Twig_Template
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
        $__internal_91243053a7406af028582b2c20e4980b64d2adf73d9246e5dcd020f428ba94bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91243053a7406af028582b2c20e4980b64d2adf73d9246e5dcd020f428ba94bf->enter($__internal_91243053a7406af028582b2c20e4980b64d2adf73d9246e5dcd020f428ba94bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_f6c6d2ea0a8d10eaa8bfefae255ceec3a3a6f62e7defeb806ef05f097eaf8852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c6d2ea0a8d10eaa8bfefae255ceec3a3a6f62e7defeb806ef05f097eaf8852->enter($__internal_f6c6d2ea0a8d10eaa8bfefae255ceec3a3a6f62e7defeb806ef05f097eaf8852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_91243053a7406af028582b2c20e4980b64d2adf73d9246e5dcd020f428ba94bf->leave($__internal_91243053a7406af028582b2c20e4980b64d2adf73d9246e5dcd020f428ba94bf_prof);

        
        $__internal_f6c6d2ea0a8d10eaa8bfefae255ceec3a3a6f62e7defeb806ef05f097eaf8852->leave($__internal_f6c6d2ea0a8d10eaa8bfefae255ceec3a3a6f62e7defeb806ef05f097eaf8852_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}

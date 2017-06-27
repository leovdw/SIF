<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_00e49927629f85eb7d178a0d2f6e6a0ecca5f84aa719abccfafb7f0abda68bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_044e91bee024ee114f6dc905d35a826398ca192e7e543a1b6f23058cf507444b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044e91bee024ee114f6dc905d35a826398ca192e7e543a1b6f23058cf507444b->enter($__internal_044e91bee024ee114f6dc905d35a826398ca192e7e543a1b6f23058cf507444b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_6d5b486668cb303a7fb059eea1bdd9952ad5584fa300fcf032fd8b4c3b2aa237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5b486668cb303a7fb059eea1bdd9952ad5584fa300fcf032fd8b4c3b2aa237->enter($__internal_6d5b486668cb303a7fb059eea1bdd9952ad5584fa300fcf032fd8b4c3b2aa237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044e91bee024ee114f6dc905d35a826398ca192e7e543a1b6f23058cf507444b->leave($__internal_044e91bee024ee114f6dc905d35a826398ca192e7e543a1b6f23058cf507444b_prof);

        
        $__internal_6d5b486668cb303a7fb059eea1bdd9952ad5584fa300fcf032fd8b4c3b2aa237->leave($__internal_6d5b486668cb303a7fb059eea1bdd9952ad5584fa300fcf032fd8b4c3b2aa237_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9aca917ebb30f6dea6a2876df99e3a0bedac0c0cbd8a5313a7bff762c354c402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aca917ebb30f6dea6a2876df99e3a0bedac0c0cbd8a5313a7bff762c354c402->enter($__internal_9aca917ebb30f6dea6a2876df99e3a0bedac0c0cbd8a5313a7bff762c354c402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99fba11f15374fe65a262e156cb8c3c5333bfba8e00942d51f192c6df8fd966e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fba11f15374fe65a262e156cb8c3c5333bfba8e00942d51f192c6df8fd966e->enter($__internal_99fba11f15374fe65a262e156cb8c3c5333bfba8e00942d51f192c6df8fd966e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_99fba11f15374fe65a262e156cb8c3c5333bfba8e00942d51f192c6df8fd966e->leave($__internal_99fba11f15374fe65a262e156cb8c3c5333bfba8e00942d51f192c6df8fd966e_prof);

        
        $__internal_9aca917ebb30f6dea6a2876df99e3a0bedac0c0cbd8a5313a7bff762c354c402->leave($__internal_9aca917ebb30f6dea6a2876df99e3a0bedac0c0cbd8a5313a7bff762c354c402_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}

<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9998f15a04d0780699c37904098ea88f9111dac9a21cc10859cb21e439f38d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7d28e79d8b24cae3c238bedd8cbd8093b6847b30f77d3a607ec6785069aca8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d28e79d8b24cae3c238bedd8cbd8093b6847b30f77d3a607ec6785069aca8bd->enter($__internal_7d28e79d8b24cae3c238bedd8cbd8093b6847b30f77d3a607ec6785069aca8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_fd575f6207979926d064e245695631a340b85c14b87ca985e2c805fd33d0ce6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd575f6207979926d064e245695631a340b85c14b87ca985e2c805fd33d0ce6b->enter($__internal_fd575f6207979926d064e245695631a340b85c14b87ca985e2c805fd33d0ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d28e79d8b24cae3c238bedd8cbd8093b6847b30f77d3a607ec6785069aca8bd->leave($__internal_7d28e79d8b24cae3c238bedd8cbd8093b6847b30f77d3a607ec6785069aca8bd_prof);

        
        $__internal_fd575f6207979926d064e245695631a340b85c14b87ca985e2c805fd33d0ce6b->leave($__internal_fd575f6207979926d064e245695631a340b85c14b87ca985e2c805fd33d0ce6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05f9867962c8c804a6af74ce197a75ed584bc02fadae297e7d15c9cf3290afbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f9867962c8c804a6af74ce197a75ed584bc02fadae297e7d15c9cf3290afbc->enter($__internal_05f9867962c8c804a6af74ce197a75ed584bc02fadae297e7d15c9cf3290afbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f6a576655a9482f2bd23a536af7df8fd67f594806391c51711aa27474618b230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a576655a9482f2bd23a536af7df8fd67f594806391c51711aa27474618b230->enter($__internal_f6a576655a9482f2bd23a536af7df8fd67f594806391c51711aa27474618b230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f6a576655a9482f2bd23a536af7df8fd67f594806391c51711aa27474618b230->leave($__internal_f6a576655a9482f2bd23a536af7df8fd67f594806391c51711aa27474618b230_prof);

        
        $__internal_05f9867962c8c804a6af74ce197a75ed584bc02fadae297e7d15c9cf3290afbc->leave($__internal_05f9867962c8c804a6af74ce197a75ed584bc02fadae297e7d15c9cf3290afbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}

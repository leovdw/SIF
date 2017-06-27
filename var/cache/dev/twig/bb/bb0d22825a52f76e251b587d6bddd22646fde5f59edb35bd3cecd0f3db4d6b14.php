<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cdb8e8c615fb3a7fe79c753897172f2418404608d9c34fb81a4835b6f683467d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b1d2d74b728682bfff07818428554bdb7efcc735915657c58a61bb2ad26eeb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1d2d74b728682bfff07818428554bdb7efcc735915657c58a61bb2ad26eeb9->enter($__internal_1b1d2d74b728682bfff07818428554bdb7efcc735915657c58a61bb2ad26eeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ee47075cf13352220351390bca013b4afa31eacbc607bf61f6537b0555451de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee47075cf13352220351390bca013b4afa31eacbc607bf61f6537b0555451de4->enter($__internal_ee47075cf13352220351390bca013b4afa31eacbc607bf61f6537b0555451de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b1d2d74b728682bfff07818428554bdb7efcc735915657c58a61bb2ad26eeb9->leave($__internal_1b1d2d74b728682bfff07818428554bdb7efcc735915657c58a61bb2ad26eeb9_prof);

        
        $__internal_ee47075cf13352220351390bca013b4afa31eacbc607bf61f6537b0555451de4->leave($__internal_ee47075cf13352220351390bca013b4afa31eacbc607bf61f6537b0555451de4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c05f9012b8239d8bd61d73a79eda6d4cef0890d16e96a928e0d4c5ebf303b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c05f9012b8239d8bd61d73a79eda6d4cef0890d16e96a928e0d4c5ebf303b39->enter($__internal_0c05f9012b8239d8bd61d73a79eda6d4cef0890d16e96a928e0d4c5ebf303b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f28c4aaa5dbfa4be8c23f8dc9cc673ab6544c0a7f9aadb949874e93ab6743c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28c4aaa5dbfa4be8c23f8dc9cc673ab6544c0a7f9aadb949874e93ab6743c11->enter($__internal_f28c4aaa5dbfa4be8c23f8dc9cc673ab6544c0a7f9aadb949874e93ab6743c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f28c4aaa5dbfa4be8c23f8dc9cc673ab6544c0a7f9aadb949874e93ab6743c11->leave($__internal_f28c4aaa5dbfa4be8c23f8dc9cc673ab6544c0a7f9aadb949874e93ab6743c11_prof);

        
        $__internal_0c05f9012b8239d8bd61d73a79eda6d4cef0890d16e96a928e0d4c5ebf303b39->leave($__internal_0c05f9012b8239d8bd61d73a79eda6d4cef0890d16e96a928e0d4c5ebf303b39_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_084b731527ba5242e982a97b5839ca05ce854cef718d2b01b3275ce9bea3951f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084b731527ba5242e982a97b5839ca05ce854cef718d2b01b3275ce9bea3951f->enter($__internal_084b731527ba5242e982a97b5839ca05ce854cef718d2b01b3275ce9bea3951f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25e874fbc795c73e4b2555e0160843520bb646f9f971c9a2ed545eb17f376d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e874fbc795c73e4b2555e0160843520bb646f9f971c9a2ed545eb17f376d72->enter($__internal_25e874fbc795c73e4b2555e0160843520bb646f9f971c9a2ed545eb17f376d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_25e874fbc795c73e4b2555e0160843520bb646f9f971c9a2ed545eb17f376d72->leave($__internal_25e874fbc795c73e4b2555e0160843520bb646f9f971c9a2ed545eb17f376d72_prof);

        
        $__internal_084b731527ba5242e982a97b5839ca05ce854cef718d2b01b3275ce9bea3951f->leave($__internal_084b731527ba5242e982a97b5839ca05ce854cef718d2b01b3275ce9bea3951f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

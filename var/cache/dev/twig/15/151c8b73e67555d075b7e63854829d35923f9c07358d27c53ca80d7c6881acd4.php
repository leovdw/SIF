<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_abf27d5cdbe84859fe56a39b644191f788f192833fcc2f0ca802aedb89ab2bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2352a6af5cabc7ad74a5349ab50942f26771698df8b6c22603ade44bb54b755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2352a6af5cabc7ad74a5349ab50942f26771698df8b6c22603ade44bb54b755->enter($__internal_a2352a6af5cabc7ad74a5349ab50942f26771698df8b6c22603ade44bb54b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5dbdd4804a5031ed437ed9956b042c757298016188e4ee757cc430b600872031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbdd4804a5031ed437ed9956b042c757298016188e4ee757cc430b600872031->enter($__internal_5dbdd4804a5031ed437ed9956b042c757298016188e4ee757cc430b600872031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2352a6af5cabc7ad74a5349ab50942f26771698df8b6c22603ade44bb54b755->leave($__internal_a2352a6af5cabc7ad74a5349ab50942f26771698df8b6c22603ade44bb54b755_prof);

        
        $__internal_5dbdd4804a5031ed437ed9956b042c757298016188e4ee757cc430b600872031->leave($__internal_5dbdd4804a5031ed437ed9956b042c757298016188e4ee757cc430b600872031_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_edace7d144151e8cfb512b18c9e74fa4b87a946d0d0afdcf992d66d93ffab1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edace7d144151e8cfb512b18c9e74fa4b87a946d0d0afdcf992d66d93ffab1e6->enter($__internal_edace7d144151e8cfb512b18c9e74fa4b87a946d0d0afdcf992d66d93ffab1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0c2088c538513af8059dd7109343e609d3499b5a9395ba674fde5a14232a549c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2088c538513af8059dd7109343e609d3499b5a9395ba674fde5a14232a549c->enter($__internal_0c2088c538513af8059dd7109343e609d3499b5a9395ba674fde5a14232a549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_0c2088c538513af8059dd7109343e609d3499b5a9395ba674fde5a14232a549c->leave($__internal_0c2088c538513af8059dd7109343e609d3499b5a9395ba674fde5a14232a549c_prof);

        
        $__internal_edace7d144151e8cfb512b18c9e74fa4b87a946d0d0afdcf992d66d93ffab1e6->leave($__internal_edace7d144151e8cfb512b18c9e74fa4b87a946d0d0afdcf992d66d93ffab1e6_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f87d77ce636d3017ffe6588927a6992dfa11a523ded98ff7161a9ecc709144d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f87d77ce636d3017ffe6588927a6992dfa11a523ded98ff7161a9ecc709144d->enter($__internal_1f87d77ce636d3017ffe6588927a6992dfa11a523ded98ff7161a9ecc709144d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73c3e492aa7f660d1d329c29daf6b46d8f4891a7206d9336680406219e8d22ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c3e492aa7f660d1d329c29daf6b46d8f4891a7206d9336680406219e8d22ae->enter($__internal_73c3e492aa7f660d1d329c29daf6b46d8f4891a7206d9336680406219e8d22ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_73c3e492aa7f660d1d329c29daf6b46d8f4891a7206d9336680406219e8d22ae->leave($__internal_73c3e492aa7f660d1d329c29daf6b46d8f4891a7206d9336680406219e8d22ae_prof);

        
        $__internal_1f87d77ce636d3017ffe6588927a6992dfa11a523ded98ff7161a9ecc709144d->leave($__internal_1f87d77ce636d3017ffe6588927a6992dfa11a523ded98ff7161a9ecc709144d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

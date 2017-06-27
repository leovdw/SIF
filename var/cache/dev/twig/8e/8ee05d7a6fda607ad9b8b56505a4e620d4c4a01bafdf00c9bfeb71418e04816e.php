<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_87f8aae60f5e3c547f9950ea862386c4c58063ef4ee5a502e805f9ed987669e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26bcaa9bc2a54621d314501051648b8e950cfe972d2d5d2afd9442aa40fcb898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26bcaa9bc2a54621d314501051648b8e950cfe972d2d5d2afd9442aa40fcb898->enter($__internal_26bcaa9bc2a54621d314501051648b8e950cfe972d2d5d2afd9442aa40fcb898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7003fe7b6557817cfe4247c6a6051474c03e5ae7d4f9744895941de2aea89c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7003fe7b6557817cfe4247c6a6051474c03e5ae7d4f9744895941de2aea89c85->enter($__internal_7003fe7b6557817cfe4247c6a6051474c03e5ae7d4f9744895941de2aea89c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26bcaa9bc2a54621d314501051648b8e950cfe972d2d5d2afd9442aa40fcb898->leave($__internal_26bcaa9bc2a54621d314501051648b8e950cfe972d2d5d2afd9442aa40fcb898_prof);

        
        $__internal_7003fe7b6557817cfe4247c6a6051474c03e5ae7d4f9744895941de2aea89c85->leave($__internal_7003fe7b6557817cfe4247c6a6051474c03e5ae7d4f9744895941de2aea89c85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e22de03d991ba120918eacfd30875fc374534ea6107d12dfbc1df2af7b64c9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22de03d991ba120918eacfd30875fc374534ea6107d12dfbc1df2af7b64c9af->enter($__internal_e22de03d991ba120918eacfd30875fc374534ea6107d12dfbc1df2af7b64c9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_903963b30ffdaf2451dfb0cad22b26bc49a70be853bf96609ca8febca91600ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903963b30ffdaf2451dfb0cad22b26bc49a70be853bf96609ca8febca91600ef->enter($__internal_903963b30ffdaf2451dfb0cad22b26bc49a70be853bf96609ca8febca91600ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_903963b30ffdaf2451dfb0cad22b26bc49a70be853bf96609ca8febca91600ef->leave($__internal_903963b30ffdaf2451dfb0cad22b26bc49a70be853bf96609ca8febca91600ef_prof);

        
        $__internal_e22de03d991ba120918eacfd30875fc374534ea6107d12dfbc1df2af7b64c9af->leave($__internal_e22de03d991ba120918eacfd30875fc374534ea6107d12dfbc1df2af7b64c9af_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fcae4d67807fd7a56e5b86a02d990dd3cb101f617dd06f29afb6e6274cf0e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcae4d67807fd7a56e5b86a02d990dd3cb101f617dd06f29afb6e6274cf0e95->enter($__internal_5fcae4d67807fd7a56e5b86a02d990dd3cb101f617dd06f29afb6e6274cf0e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ec5999d697286d519f01213ec4c65c3c2a6fa80c12a42b47728cc8f178716fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec5999d697286d519f01213ec4c65c3c2a6fa80c12a42b47728cc8f178716fc->enter($__internal_1ec5999d697286d519f01213ec4c65c3c2a6fa80c12a42b47728cc8f178716fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1ec5999d697286d519f01213ec4c65c3c2a6fa80c12a42b47728cc8f178716fc->leave($__internal_1ec5999d697286d519f01213ec4c65c3c2a6fa80c12a42b47728cc8f178716fc_prof);

        
        $__internal_5fcae4d67807fd7a56e5b86a02d990dd3cb101f617dd06f29afb6e6274cf0e95->leave($__internal_5fcae4d67807fd7a56e5b86a02d990dd3cb101f617dd06f29afb6e6274cf0e95_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

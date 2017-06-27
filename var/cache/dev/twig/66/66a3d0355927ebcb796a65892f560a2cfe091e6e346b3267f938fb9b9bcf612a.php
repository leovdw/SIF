<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_ff27380289eb04c4b392a06010a7c616dafe0017a4ada4d2fac41a176f6b4237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_577799299fed61fd9eca83cb199a831bcbcd72493c2173edbd3ff618f81d1c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577799299fed61fd9eca83cb199a831bcbcd72493c2173edbd3ff618f81d1c44->enter($__internal_577799299fed61fd9eca83cb199a831bcbcd72493c2173edbd3ff618f81d1c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_19be6156451132ab160ca4cdfee2a0399dc76c6c13c164a32d5f0324572b97fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19be6156451132ab160ca4cdfee2a0399dc76c6c13c164a32d5f0324572b97fa->enter($__internal_19be6156451132ab160ca4cdfee2a0399dc76c6c13c164a32d5f0324572b97fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_577799299fed61fd9eca83cb199a831bcbcd72493c2173edbd3ff618f81d1c44->leave($__internal_577799299fed61fd9eca83cb199a831bcbcd72493c2173edbd3ff618f81d1c44_prof);

        
        $__internal_19be6156451132ab160ca4cdfee2a0399dc76c6c13c164a32d5f0324572b97fa->leave($__internal_19be6156451132ab160ca4cdfee2a0399dc76c6c13c164a32d5f0324572b97fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d742eb24485d954d2fa75fb667fc2c7340b5a11521fd6720aa703237e3722e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d742eb24485d954d2fa75fb667fc2c7340b5a11521fd6720aa703237e3722e15->enter($__internal_d742eb24485d954d2fa75fb667fc2c7340b5a11521fd6720aa703237e3722e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6bdabcfb3653a372b7fcf89f1cff34104d8bd3fda97e20d1671b79423f9cce48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdabcfb3653a372b7fcf89f1cff34104d8bd3fda97e20d1671b79423f9cce48->enter($__internal_6bdabcfb3653a372b7fcf89f1cff34104d8bd3fda97e20d1671b79423f9cce48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6bdabcfb3653a372b7fcf89f1cff34104d8bd3fda97e20d1671b79423f9cce48->leave($__internal_6bdabcfb3653a372b7fcf89f1cff34104d8bd3fda97e20d1671b79423f9cce48_prof);

        
        $__internal_d742eb24485d954d2fa75fb667fc2c7340b5a11521fd6720aa703237e3722e15->leave($__internal_d742eb24485d954d2fa75fb667fc2c7340b5a11521fd6720aa703237e3722e15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6bd06f4035c9d1f7fb8f03e4dcc4042bd33f8ed4c9a8ccfd939c186be51b9210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd06f4035c9d1f7fb8f03e4dcc4042bd33f8ed4c9a8ccfd939c186be51b9210->enter($__internal_6bd06f4035c9d1f7fb8f03e4dcc4042bd33f8ed4c9a8ccfd939c186be51b9210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4cf2bd6d4d84cdfcdcd49ad7b0dd9d61faca1acf3e46014ae2d29320513b622f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf2bd6d4d84cdfcdcd49ad7b0dd9d61faca1acf3e46014ae2d29320513b622f->enter($__internal_4cf2bd6d4d84cdfcdcd49ad7b0dd9d61faca1acf3e46014ae2d29320513b622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4cf2bd6d4d84cdfcdcd49ad7b0dd9d61faca1acf3e46014ae2d29320513b622f->leave($__internal_4cf2bd6d4d84cdfcdcd49ad7b0dd9d61faca1acf3e46014ae2d29320513b622f_prof);

        
        $__internal_6bd06f4035c9d1f7fb8f03e4dcc4042bd33f8ed4c9a8ccfd939c186be51b9210->leave($__internal_6bd06f4035c9d1f7fb8f03e4dcc4042bd33f8ed4c9a8ccfd939c186be51b9210_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e4f3130172dec653e39a3552f0580c99a1c7eb8dc7a86c7b13e1961ade72e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4f3130172dec653e39a3552f0580c99a1c7eb8dc7a86c7b13e1961ade72e3d->enter($__internal_6e4f3130172dec653e39a3552f0580c99a1c7eb8dc7a86c7b13e1961ade72e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_265a578adc17519bb05756c1032b931e4c5aff6d8bd22d5e87ae6d65d77e2838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265a578adc17519bb05756c1032b931e4c5aff6d8bd22d5e87ae6d65d77e2838->enter($__internal_265a578adc17519bb05756c1032b931e4c5aff6d8bd22d5e87ae6d65d77e2838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_265a578adc17519bb05756c1032b931e4c5aff6d8bd22d5e87ae6d65d77e2838->leave($__internal_265a578adc17519bb05756c1032b931e4c5aff6d8bd22d5e87ae6d65d77e2838_prof);

        
        $__internal_6e4f3130172dec653e39a3552f0580c99a1c7eb8dc7a86c7b13e1961ade72e3d->leave($__internal_6e4f3130172dec653e39a3552f0580c99a1c7eb8dc7a86c7b13e1961ade72e3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

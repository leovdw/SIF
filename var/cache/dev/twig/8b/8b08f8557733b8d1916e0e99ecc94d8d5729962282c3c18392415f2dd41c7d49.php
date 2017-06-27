<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_4c26eda05a5640644a15776173c11d1798c38216625c9aae227df6be6c739337 extends Twig_Template
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
        $__internal_b4964440a34364219b1895aea016690b929eebfb2b4daf46d93b0089319e1cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4964440a34364219b1895aea016690b929eebfb2b4daf46d93b0089319e1cae->enter($__internal_b4964440a34364219b1895aea016690b929eebfb2b4daf46d93b0089319e1cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_884f0cd58a804cacff800a4e6f799163682a761481bb223c47f9a2f37d9e4ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884f0cd58a804cacff800a4e6f799163682a761481bb223c47f9a2f37d9e4ea2->enter($__internal_884f0cd58a804cacff800a4e6f799163682a761481bb223c47f9a2f37d9e4ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_b4964440a34364219b1895aea016690b929eebfb2b4daf46d93b0089319e1cae->leave($__internal_b4964440a34364219b1895aea016690b929eebfb2b4daf46d93b0089319e1cae_prof);

        
        $__internal_884f0cd58a804cacff800a4e6f799163682a761481bb223c47f9a2f37d9e4ea2->leave($__internal_884f0cd58a804cacff800a4e6f799163682a761481bb223c47f9a2f37d9e4ea2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_datetimetz.html.twig");
    }
}

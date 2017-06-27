<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_215bea88a33dbb6f3c9648856ff79677f1914e92aebb6c26bb2baede7d5a7b06 extends Twig_Template
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
        $__internal_3fb9b8826eaef2d3766a8f9dea5e9f7b56bba0e8920448363230118b58135981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb9b8826eaef2d3766a8f9dea5e9f7b56bba0e8920448363230118b58135981->enter($__internal_3fb9b8826eaef2d3766a8f9dea5e9f7b56bba0e8920448363230118b58135981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_017b111715d7cd37fb36a9b4959d7a8d6c4bf59f3db0032e21435ef31bf0fb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017b111715d7cd37fb36a9b4959d7a8d6c4bf59f3db0032e21435ef31bf0fb48->enter($__internal_017b111715d7cd37fb36a9b4959d7a8d6c4bf59f3db0032e21435ef31bf0fb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_3fb9b8826eaef2d3766a8f9dea5e9f7b56bba0e8920448363230118b58135981->leave($__internal_3fb9b8826eaef2d3766a8f9dea5e9f7b56bba0e8920448363230118b58135981_prof);

        
        $__internal_017b111715d7cd37fb36a9b4959d7a8d6c4bf59f3db0032e21435ef31bf0fb48->leave($__internal_017b111715d7cd37fb36a9b4959d7a8d6c4bf59f3db0032e21435ef31bf0fb48_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_date.html.twig");
    }
}

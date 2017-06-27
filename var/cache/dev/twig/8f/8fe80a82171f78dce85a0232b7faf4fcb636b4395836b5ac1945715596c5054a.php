<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_a6af083bf5caf38bab84cb772fc434e9eeb6351a7b9156a06f51534b2cf41c7c extends Twig_Template
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
        $__internal_bb460092b16d6cb9073d9a27c9d1d20f8db4a0780e2fbd6f94efc97a0c513e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb460092b16d6cb9073d9a27c9d1d20f8db4a0780e2fbd6f94efc97a0c513e70->enter($__internal_bb460092b16d6cb9073d9a27c9d1d20f8db4a0780e2fbd6f94efc97a0c513e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_b06266d955641bf19605d3efe0d40448094bf43bc6eba2a019b7ed06712888af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06266d955641bf19605d3efe0d40448094bf43bc6eba2a019b7ed06712888af->enter($__internal_b06266d955641bf19605d3efe0d40448094bf43bc6eba2a019b7ed06712888af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_bb460092b16d6cb9073d9a27c9d1d20f8db4a0780e2fbd6f94efc97a0c513e70->leave($__internal_bb460092b16d6cb9073d9a27c9d1d20f8db4a0780e2fbd6f94efc97a0c513e70_prof);

        
        $__internal_b06266d955641bf19605d3efe0d40448094bf43bc6eba2a019b7ed06712888af->leave($__internal_b06266d955641bf19605d3efe0d40448094bf43bc6eba2a019b7ed06712888af_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_smallint.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_smallint.html.twig");
    }
}

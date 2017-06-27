<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_ccbeacc03ba78c1a44e0c50c2432c35dea568362469371ce6acf12157434710e extends Twig_Template
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
        $__internal_044aefe65660c99f6874e2ff00d66382256985576f1026d6b7e6065cf9d44b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044aefe65660c99f6874e2ff00d66382256985576f1026d6b7e6065cf9d44b68->enter($__internal_044aefe65660c99f6874e2ff00d66382256985576f1026d6b7e6065cf9d44b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_506b863c583cf50b1fc59e8ab45708c42d732c8d9021708bb4e4e1ae77a4e72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506b863c583cf50b1fc59e8ab45708c42d732c8d9021708bb4e4e1ae77a4e72a->enter($__internal_506b863c583cf50b1fc59e8ab45708c42d732c8d9021708bb4e4e1ae77a4e72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_044aefe65660c99f6874e2ff00d66382256985576f1026d6b7e6065cf9d44b68->leave($__internal_044aefe65660c99f6874e2ff00d66382256985576f1026d6b7e6065cf9d44b68_prof);

        
        $__internal_506b863c583cf50b1fc59e8ab45708c42d732c8d9021708bb4e4e1ae77a4e72a->leave($__internal_506b863c583cf50b1fc59e8ab45708c42d732c8d9021708bb4e4e1ae77a4e72a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
", "EasyAdminBundle:default:field_integer.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_integer.html.twig");
    }
}

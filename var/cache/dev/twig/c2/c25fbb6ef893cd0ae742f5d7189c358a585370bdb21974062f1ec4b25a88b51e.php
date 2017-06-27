<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_0f66b95ff07a7d50f8882e463c66d72f9129bf8b249362c0b53c73a61a847d26 extends Twig_Template
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
        $__internal_9f848c7f20e3fa105d5bd82df70f8bb84b74103a9c7517de6cc2d7080cf84838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f848c7f20e3fa105d5bd82df70f8bb84b74103a9c7517de6cc2d7080cf84838->enter($__internal_9f848c7f20e3fa105d5bd82df70f8bb84b74103a9c7517de6cc2d7080cf84838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_e23b155f935c55a6c140df0ba46e87bf74e32dac4bd9a172ba4c0e63c816b35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23b155f935c55a6c140df0ba46e87bf74e32dac4bd9a172ba4c0e63c816b35e->enter($__internal_e23b155f935c55a6c140df0ba46e87bf74e32dac4bd9a172ba4c0e63c816b35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_9f848c7f20e3fa105d5bd82df70f8bb84b74103a9c7517de6cc2d7080cf84838->leave($__internal_9f848c7f20e3fa105d5bd82df70f8bb84b74103a9c7517de6cc2d7080cf84838_prof);

        
        $__internal_e23b155f935c55a6c140df0ba46e87bf74e32dac4bd9a172ba4c0e63c816b35e->leave($__internal_e23b155f935c55a6c140df0ba46e87bf74e32dac4bd9a172ba4c0e63c816b35e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_float.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_float.html.twig");
    }
}

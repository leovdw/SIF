<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_c4a84559e4b8bd2658423bc3755dcf456b5a5249bebbab129b0e1649e383ce11 extends Twig_Template
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
        $__internal_429b8ebd3ac77f0cc8c4eb3fb746bbdb21986a43d316899142f9cd377fc32416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429b8ebd3ac77f0cc8c4eb3fb746bbdb21986a43d316899142f9cd377fc32416->enter($__internal_429b8ebd3ac77f0cc8c4eb3fb746bbdb21986a43d316899142f9cd377fc32416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_d828d3db0b44c8a8886956931b42d06be4019164a85e449c507a0780d9597cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d828d3db0b44c8a8886956931b42d06be4019164a85e449c507a0780d9597cf2->enter($__internal_d828d3db0b44c8a8886956931b42d06be4019164a85e449c507a0780d9597cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_429b8ebd3ac77f0cc8c4eb3fb746bbdb21986a43d316899142f9cd377fc32416->leave($__internal_429b8ebd3ac77f0cc8c4eb3fb746bbdb21986a43d316899142f9cd377fc32416_prof);

        
        $__internal_d828d3db0b44c8a8886956931b42d06be4019164a85e449c507a0780d9597cf2->leave($__internal_d828d3db0b44c8a8886956931b42d06be4019164a85e449c507a0780d9597cf2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_string.html.twig");
    }
}

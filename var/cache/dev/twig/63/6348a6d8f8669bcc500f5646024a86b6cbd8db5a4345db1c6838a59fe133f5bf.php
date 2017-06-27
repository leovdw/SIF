<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_19b4b322b38dda34cd8e843ccadefe5adccc577fd5b2f39ff53ce84376c38311 extends Twig_Template
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
        $__internal_01cdba70b268ba63cf484eecc33e706a08f63ffb1ba6462ede1ea85dbfe7db9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cdba70b268ba63cf484eecc33e706a08f63ffb1ba6462ede1ea85dbfe7db9e->enter($__internal_01cdba70b268ba63cf484eecc33e706a08f63ffb1ba6462ede1ea85dbfe7db9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_30b3493feffc0435e152f645f0b94608d69bacc9fceb469e94845cd5d0a99ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b3493feffc0435e152f645f0b94608d69bacc9fceb469e94845cd5d0a99ad8->enter($__internal_30b3493feffc0435e152f645f0b94608d69bacc9fceb469e94845cd5d0a99ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_01cdba70b268ba63cf484eecc33e706a08f63ffb1ba6462ede1ea85dbfe7db9e->leave($__internal_01cdba70b268ba63cf484eecc33e706a08f63ffb1ba6462ede1ea85dbfe7db9e_prof);

        
        $__internal_30b3493feffc0435e152f645f0b94608d69bacc9fceb469e94845cd5d0a99ad8->leave($__internal_30b3493feffc0435e152f645f0b94608d69bacc9fceb469e94845cd5d0a99ad8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_datetime.html.twig");
    }
}

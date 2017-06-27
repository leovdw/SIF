<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_6914fc59ddf8086af6e08c623c312c4eccf5f245f9eb9a873a6317736de9e16c extends Twig_Template
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
        $__internal_4ddfef380be910cb502842cc88d3106cd7c2e61c98f813b47efbfac6acae7ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddfef380be910cb502842cc88d3106cd7c2e61c98f813b47efbfac6acae7ab2->enter($__internal_4ddfef380be910cb502842cc88d3106cd7c2e61c98f813b47efbfac6acae7ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_a6dea9685762848c158a376b4da12a61cbc1deb061233d563f50e6afddc41792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6dea9685762848c158a376b4da12a61cbc1deb061233d563f50e6afddc41792->enter($__internal_a6dea9685762848c158a376b4da12a61cbc1deb061233d563f50e6afddc41792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_4ddfef380be910cb502842cc88d3106cd7c2e61c98f813b47efbfac6acae7ab2->leave($__internal_4ddfef380be910cb502842cc88d3106cd7c2e61c98f813b47efbfac6acae7ab2_prof);

        
        $__internal_a6dea9685762848c158a376b4da12a61cbc1deb061233d563f50e6afddc41792->leave($__internal_a6dea9685762848c158a376b4da12a61cbc1deb061233d563f50e6afddc41792_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_bigint.html.twig");
    }
}

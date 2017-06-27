<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_23700d811ff6f69ddaa7cf6ca811189fca96d6c60a5610fdd50ef6c062f33586 extends Twig_Template
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
        $__internal_541860438ba5bd5d1eac861b391a23dec434645acfa05488da71ea05b4e2b97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541860438ba5bd5d1eac861b391a23dec434645acfa05488da71ea05b4e2b97f->enter($__internal_541860438ba5bd5d1eac861b391a23dec434645acfa05488da71ea05b4e2b97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_90cd3f0bff66d8834dddc29c4401f3b3443f593b05892e310e8aaf736cd21f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cd3f0bff66d8834dddc29c4401f3b3443f593b05892e310e8aaf736cd21f57->enter($__internal_90cd3f0bff66d8834dddc29c4401f3b3443f593b05892e310e8aaf736cd21f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_541860438ba5bd5d1eac861b391a23dec434645acfa05488da71ea05b4e2b97f->leave($__internal_541860438ba5bd5d1eac861b391a23dec434645acfa05488da71ea05b4e2b97f_prof);

        
        $__internal_90cd3f0bff66d8834dddc29c4401f3b3443f593b05892e310e8aaf736cd21f57->leave($__internal_90cd3f0bff66d8834dddc29c4401f3b3443f593b05892e310e8aaf736cd21f57_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
", "EasyAdminBundle:default:field_decimal.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_decimal.html.twig");
    }
}

<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_c52f319955db44d952b7f5f75e17b587c905377c7f54c5349f39540ef1720891 extends Twig_Template
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
        $__internal_1284ed5866643a7301f85e03966c40eae572e244b900abe0d8f5aa1d2295ca7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1284ed5866643a7301f85e03966c40eae572e244b900abe0d8f5aa1d2295ca7c->enter($__internal_1284ed5866643a7301f85e03966c40eae572e244b900abe0d8f5aa1d2295ca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_b2192322bd3b36406e350ccb6434ba4fca5152de8ce2f0a887efefe6d84b370c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2192322bd3b36406e350ccb6434ba4fca5152de8ce2f0a887efefe6d84b370c->enter($__internal_b2192322bd3b36406e350ccb6434ba4fca5152de8ce2f0a887efefe6d84b370c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_1284ed5866643a7301f85e03966c40eae572e244b900abe0d8f5aa1d2295ca7c->leave($__internal_1284ed5866643a7301f85e03966c40eae572e244b900abe0d8f5aa1d2295ca7c_prof);

        
        $__internal_b2192322bd3b36406e350ccb6434ba4fca5152de8ce2f0a887efefe6d84b370c->leave($__internal_b2192322bd3b36406e350ccb6434ba4fca5152de8ce2f0a887efefe6d84b370c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_boolean.html.twig");
    }
}

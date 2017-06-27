<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_b7b60ef09423d3c8078d1edcc3fc6ed41b5a4626f1148a088c322525afc5d15a extends Twig_Template
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
        $__internal_cbd16dbcbd80b46dc9a6ed902fcab7df159c13668951d08162b35fc371de4935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd16dbcbd80b46dc9a6ed902fcab7df159c13668951d08162b35fc371de4935->enter($__internal_cbd16dbcbd80b46dc9a6ed902fcab7df159c13668951d08162b35fc371de4935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_025ed586569e9c8b963727d13a6adef710dbccd7d8a26318ca1ce8fbe23507f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025ed586569e9c8b963727d13a6adef710dbccd7d8a26318ca1ce8fbe23507f4->enter($__internal_025ed586569e9c8b963727d13a6adef710dbccd7d8a26318ca1ce8fbe23507f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_cbd16dbcbd80b46dc9a6ed902fcab7df159c13668951d08162b35fc371de4935->leave($__internal_cbd16dbcbd80b46dc9a6ed902fcab7df159c13668951d08162b35fc371de4935_prof);

        
        $__internal_025ed586569e9c8b963727d13a6adef710dbccd7d8a26318ca1ce8fbe23507f4->leave($__internal_025ed586569e9c8b963727d13a6adef710dbccd7d8a26318ca1ce8fbe23507f4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_email.html.twig");
    }
}

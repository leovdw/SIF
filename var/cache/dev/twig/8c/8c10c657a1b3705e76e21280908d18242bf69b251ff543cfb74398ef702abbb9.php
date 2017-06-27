<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_f9f8a5b770d0e135786a6a05900eb33a4d779b37e834b55a6632a51f977545b4 extends Twig_Template
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
        $__internal_8d9e7e53611acbd98c6b7b0afeb9fdaa92cef17e2b579c9555d990a23f6d0fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9e7e53611acbd98c6b7b0afeb9fdaa92cef17e2b579c9555d990a23f6d0fb5->enter($__internal_8d9e7e53611acbd98c6b7b0afeb9fdaa92cef17e2b579c9555d990a23f6d0fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_912f7474b8c9bc3c21c50d9d4950298e7af1e83128fe94c536c9d529b23198c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912f7474b8c9bc3c21c50d9d4950298e7af1e83128fe94c536c9d529b23198c2->enter($__internal_912f7474b8c9bc3c21c50d9d4950298e7af1e83128fe94c536c9d529b23198c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8d9e7e53611acbd98c6b7b0afeb9fdaa92cef17e2b579c9555d990a23f6d0fb5->leave($__internal_8d9e7e53611acbd98c6b7b0afeb9fdaa92cef17e2b579c9555d990a23f6d0fb5_prof);

        
        $__internal_912f7474b8c9bc3c21c50d9d4950298e7af1e83128fe94c536c9d529b23198c2->leave($__internal_912f7474b8c9bc3c21c50d9d4950298e7af1e83128fe94c536c9d529b23198c2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
", "EasyAdminBundle:default:field_time.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_time.html.twig");
    }
}

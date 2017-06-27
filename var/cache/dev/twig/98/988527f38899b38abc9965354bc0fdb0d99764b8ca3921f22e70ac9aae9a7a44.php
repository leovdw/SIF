<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_d4817203ad5f10c7a7988ca95aa649fc98262eb07206b9f719d3139cf26426e2 extends Twig_Template
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
        $__internal_a1203936395fcd8089f90ccc5baef156a75a389940f8309b25d1e713ba9922cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1203936395fcd8089f90ccc5baef156a75a389940f8309b25d1e713ba9922cb->enter($__internal_a1203936395fcd8089f90ccc5baef156a75a389940f8309b25d1e713ba9922cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_eebe62e360b5ea6d5328570380ec648931c5e7f1cbe94d78e160e14ad2ed75a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebe62e360b5ea6d5328570380ec648931c5e7f1cbe94d78e160e14ad2ed75a6->enter($__internal_eebe62e360b5ea6d5328570380ec648931c5e7f1cbe94d78e160e14ad2ed75a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_a1203936395fcd8089f90ccc5baef156a75a389940f8309b25d1e713ba9922cb->leave($__internal_a1203936395fcd8089f90ccc5baef156a75a389940f8309b25d1e713ba9922cb_prof);

        
        $__internal_eebe62e360b5ea6d5328570380ec648931c5e7f1cbe94d78e160e14ad2ed75a6->leave($__internal_eebe62e360b5ea6d5328570380ec648931c5e7f1cbe94d78e160e14ad2ed75a6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_id.html.twig");
    }
}

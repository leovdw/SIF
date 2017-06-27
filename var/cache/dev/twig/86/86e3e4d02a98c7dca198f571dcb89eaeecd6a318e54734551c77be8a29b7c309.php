<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_bc9acbdfb75e02f58457176a86ea1c3b72257d439ef7ec54e2ac7f6e05662653 extends Twig_Template
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
        $__internal_354cab9ed8c457fe5c240ad9ddefce9f1f1ef9f9187e13a29ec4e4f6c563607d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354cab9ed8c457fe5c240ad9ddefce9f1f1ef9f9187e13a29ec4e4f6c563607d->enter($__internal_354cab9ed8c457fe5c240ad9ddefce9f1f1ef9f9187e13a29ec4e4f6c563607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5675aef0df3abcfb3fffe5b7e7c67f788c555962a4397e250a352608bfe319f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5675aef0df3abcfb3fffe5b7e7c67f788c555962a4397e250a352608bfe319f1->enter($__internal_5675aef0df3abcfb3fffe5b7e7c67f788c555962a4397e250a352608bfe319f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_354cab9ed8c457fe5c240ad9ddefce9f1f1ef9f9187e13a29ec4e4f6c563607d->leave($__internal_354cab9ed8c457fe5c240ad9ddefce9f1f1ef9f9187e13a29ec4e4f6c563607d_prof);

        
        $__internal_5675aef0df3abcfb3fffe5b7e7c67f788c555962a4397e250a352608bfe319f1->leave($__internal_5675aef0df3abcfb3fffe5b7e7c67f788c555962a4397e250a352608bfe319f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

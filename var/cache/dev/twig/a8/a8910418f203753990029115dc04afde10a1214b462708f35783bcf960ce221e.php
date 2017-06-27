<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4729d5d101eb83b6f6a3cda496a1ea4315247ca22e9e790827a8484243441877 extends Twig_Template
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
        $__internal_09a45f0a282290b07b06f155325b7d0849c41ea9f385ace9d04fea257d36354f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a45f0a282290b07b06f155325b7d0849c41ea9f385ace9d04fea257d36354f->enter($__internal_09a45f0a282290b07b06f155325b7d0849c41ea9f385ace9d04fea257d36354f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_18a278fdb3dd690d471a985cdee38410fa492aadf5448844f3ac518d3ecf3478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a278fdb3dd690d471a985cdee38410fa492aadf5448844f3ac518d3ecf3478->enter($__internal_18a278fdb3dd690d471a985cdee38410fa492aadf5448844f3ac518d3ecf3478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_09a45f0a282290b07b06f155325b7d0849c41ea9f385ace9d04fea257d36354f->leave($__internal_09a45f0a282290b07b06f155325b7d0849c41ea9f385ace9d04fea257d36354f_prof);

        
        $__internal_18a278fdb3dd690d471a985cdee38410fa492aadf5448844f3ac518d3ecf3478->leave($__internal_18a278fdb3dd690d471a985cdee38410fa492aadf5448844f3ac518d3ecf3478_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

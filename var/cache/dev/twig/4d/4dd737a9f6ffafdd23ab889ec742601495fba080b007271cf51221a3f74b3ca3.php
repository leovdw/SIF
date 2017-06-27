<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0a56dac1adab5ff1eb4a06a7b072061447ba2b9ee4998e9701058430bf9086b8 extends Twig_Template
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
        $__internal_3a8c6fddf06715d0c818340d101def9fe366563f443189a7a68faffacf2b8dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8c6fddf06715d0c818340d101def9fe366563f443189a7a68faffacf2b8dd1->enter($__internal_3a8c6fddf06715d0c818340d101def9fe366563f443189a7a68faffacf2b8dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d1792d3613bcdf9dc8989e5b4a725bdd489c6075fd30112016d6c3970dfb3a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1792d3613bcdf9dc8989e5b4a725bdd489c6075fd30112016d6c3970dfb3a08->enter($__internal_d1792d3613bcdf9dc8989e5b4a725bdd489c6075fd30112016d6c3970dfb3a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3a8c6fddf06715d0c818340d101def9fe366563f443189a7a68faffacf2b8dd1->leave($__internal_3a8c6fddf06715d0c818340d101def9fe366563f443189a7a68faffacf2b8dd1_prof);

        
        $__internal_d1792d3613bcdf9dc8989e5b4a725bdd489c6075fd30112016d6c3970dfb3a08->leave($__internal_d1792d3613bcdf9dc8989e5b4a725bdd489c6075fd30112016d6c3970dfb3a08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

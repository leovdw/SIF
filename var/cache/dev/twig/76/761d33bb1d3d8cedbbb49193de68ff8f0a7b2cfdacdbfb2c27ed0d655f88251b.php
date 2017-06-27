<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_751e53dee9c3944b54ae6a873c6a1fc2eebb3d60bad7b806b3e293a761381c45 extends Twig_Template
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
        $__internal_924c1ef2445c98bbde603bd0a0d707596c38db5a19936c363316ddcc758c5f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924c1ef2445c98bbde603bd0a0d707596c38db5a19936c363316ddcc758c5f82->enter($__internal_924c1ef2445c98bbde603bd0a0d707596c38db5a19936c363316ddcc758c5f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d2d4cc4cd6d2567c0ff9340eb523d7e1bb71ff2916f11249e1f0db9c8f72f23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d4cc4cd6d2567c0ff9340eb523d7e1bb71ff2916f11249e1f0db9c8f72f23a->enter($__internal_d2d4cc4cd6d2567c0ff9340eb523d7e1bb71ff2916f11249e1f0db9c8f72f23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_924c1ef2445c98bbde603bd0a0d707596c38db5a19936c363316ddcc758c5f82->leave($__internal_924c1ef2445c98bbde603bd0a0d707596c38db5a19936c363316ddcc758c5f82_prof);

        
        $__internal_d2d4cc4cd6d2567c0ff9340eb523d7e1bb71ff2916f11249e1f0db9c8f72f23a->leave($__internal_d2d4cc4cd6d2567c0ff9340eb523d7e1bb71ff2916f11249e1f0db9c8f72f23a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

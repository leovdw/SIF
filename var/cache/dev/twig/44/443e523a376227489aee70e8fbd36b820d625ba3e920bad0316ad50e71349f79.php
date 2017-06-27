<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0a094d30e884330be301b3eaa8001ad7df89dcd2d6f02eae0a69ae9d91c7f8da extends Twig_Template
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
        $__internal_319881aa8c024720d16536214b904f4bc3c3eff3dab08ab45494320b2a5c9663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319881aa8c024720d16536214b904f4bc3c3eff3dab08ab45494320b2a5c9663->enter($__internal_319881aa8c024720d16536214b904f4bc3c3eff3dab08ab45494320b2a5c9663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c7023e7c7b88108dcea95350b98d1e3a874ccf967d83ef9c4c200e842966ade8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7023e7c7b88108dcea95350b98d1e3a874ccf967d83ef9c4c200e842966ade8->enter($__internal_c7023e7c7b88108dcea95350b98d1e3a874ccf967d83ef9c4c200e842966ade8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_319881aa8c024720d16536214b904f4bc3c3eff3dab08ab45494320b2a5c9663->leave($__internal_319881aa8c024720d16536214b904f4bc3c3eff3dab08ab45494320b2a5c9663_prof);

        
        $__internal_c7023e7c7b88108dcea95350b98d1e3a874ccf967d83ef9c4c200e842966ade8->leave($__internal_c7023e7c7b88108dcea95350b98d1e3a874ccf967d83ef9c4c200e842966ade8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

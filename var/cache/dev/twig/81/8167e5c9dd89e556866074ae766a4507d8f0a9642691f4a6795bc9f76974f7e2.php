<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf3bed0461d62d0714ac440aacf9adcf27da905ba771274daabfeecf788a64b9 extends Twig_Template
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
        $__internal_9098ed552623f7763317a6d9d72d6c1190dc1725e8d56289acbc8ebfc471d001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9098ed552623f7763317a6d9d72d6c1190dc1725e8d56289acbc8ebfc471d001->enter($__internal_9098ed552623f7763317a6d9d72d6c1190dc1725e8d56289acbc8ebfc471d001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7ea7b0371b83027fd78ce149eade90cf6f4cba8d56d627526266ea704f290505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea7b0371b83027fd78ce149eade90cf6f4cba8d56d627526266ea704f290505->enter($__internal_7ea7b0371b83027fd78ce149eade90cf6f4cba8d56d627526266ea704f290505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9098ed552623f7763317a6d9d72d6c1190dc1725e8d56289acbc8ebfc471d001->leave($__internal_9098ed552623f7763317a6d9d72d6c1190dc1725e8d56289acbc8ebfc471d001_prof);

        
        $__internal_7ea7b0371b83027fd78ce149eade90cf6f4cba8d56d627526266ea704f290505->leave($__internal_7ea7b0371b83027fd78ce149eade90cf6f4cba8d56d627526266ea704f290505_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

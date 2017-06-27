<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_478c7644eca2946187ec5afd5858f46bc2ac90a418d2e81be50241298c7e4f70 extends Twig_Template
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
        $__internal_c41d225d639ceac90c7f28fc115cdf6230c0214277aff540c4b584d6059c2579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41d225d639ceac90c7f28fc115cdf6230c0214277aff540c4b584d6059c2579->enter($__internal_c41d225d639ceac90c7f28fc115cdf6230c0214277aff540c4b584d6059c2579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_9ee056fa03c95fd1a29c85db0e5010edc5f7ee829f4eb6c4c77c8a43f4e1980d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee056fa03c95fd1a29c85db0e5010edc5f7ee829f4eb6c4c77c8a43f4e1980d->enter($__internal_9ee056fa03c95fd1a29c85db0e5010edc5f7ee829f4eb6c4c77c8a43f4e1980d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_c41d225d639ceac90c7f28fc115cdf6230c0214277aff540c4b584d6059c2579->leave($__internal_c41d225d639ceac90c7f28fc115cdf6230c0214277aff540c4b584d6059c2579_prof);

        
        $__internal_9ee056fa03c95fd1a29c85db0e5010edc5f7ee829f4eb6c4c77c8a43f4e1980d->leave($__internal_9ee056fa03c95fd1a29c85db0e5010edc5f7ee829f4eb6c4c77c8a43f4e1980d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

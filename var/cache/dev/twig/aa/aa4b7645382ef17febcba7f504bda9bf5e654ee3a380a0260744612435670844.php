<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_60fdf5701ab3c46534ac5c2c2ee506f75bc43b3bb955e78db7f9be731a72e30f extends Twig_Template
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
        $__internal_445415e919ad0ff84be0756516cc66cf6ab727a44f2ab05cf910ab6b446278da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445415e919ad0ff84be0756516cc66cf6ab727a44f2ab05cf910ab6b446278da->enter($__internal_445415e919ad0ff84be0756516cc66cf6ab727a44f2ab05cf910ab6b446278da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d32d229d18c92876661d412edfd82bf9d335ad9e5c7f79cb671de1639e9cb4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32d229d18c92876661d412edfd82bf9d335ad9e5c7f79cb671de1639e9cb4d1->enter($__internal_d32d229d18c92876661d412edfd82bf9d335ad9e5c7f79cb671de1639e9cb4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_445415e919ad0ff84be0756516cc66cf6ab727a44f2ab05cf910ab6b446278da->leave($__internal_445415e919ad0ff84be0756516cc66cf6ab727a44f2ab05cf910ab6b446278da_prof);

        
        $__internal_d32d229d18c92876661d412edfd82bf9d335ad9e5c7f79cb671de1639e9cb4d1->leave($__internal_d32d229d18c92876661d412edfd82bf9d335ad9e5c7f79cb671de1639e9cb4d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

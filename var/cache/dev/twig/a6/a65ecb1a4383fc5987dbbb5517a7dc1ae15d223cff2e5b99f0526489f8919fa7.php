<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5cbb00e792771cda72567bc3373c4ab9b3f096055b519e4746a0012f2b84830b extends Twig_Template
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
        $__internal_3c5ca72721729d2b28820b433b917467092f62ab03abef3ddf335b981a5c2cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5ca72721729d2b28820b433b917467092f62ab03abef3ddf335b981a5c2cd0->enter($__internal_3c5ca72721729d2b28820b433b917467092f62ab03abef3ddf335b981a5c2cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_08f532f89ce1eebea872ee55820d86099da9ccb368ee5d3629017136ab5dca93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f532f89ce1eebea872ee55820d86099da9ccb368ee5d3629017136ab5dca93->enter($__internal_08f532f89ce1eebea872ee55820d86099da9ccb368ee5d3629017136ab5dca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3c5ca72721729d2b28820b433b917467092f62ab03abef3ddf335b981a5c2cd0->leave($__internal_3c5ca72721729d2b28820b433b917467092f62ab03abef3ddf335b981a5c2cd0_prof);

        
        $__internal_08f532f89ce1eebea872ee55820d86099da9ccb368ee5d3629017136ab5dca93->leave($__internal_08f532f89ce1eebea872ee55820d86099da9ccb368ee5d3629017136ab5dca93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

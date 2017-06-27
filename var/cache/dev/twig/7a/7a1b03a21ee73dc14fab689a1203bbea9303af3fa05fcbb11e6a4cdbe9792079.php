<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a6f26086c6010c58b196a6d9e3182d1f2aed4d4aabcf1c587cb2dd0e2bf488bf extends Twig_Template
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
        $__internal_914a414b3d5e22a22f5e364682f35bcf6ddb712916ab95d7c8e851bb050cfaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914a414b3d5e22a22f5e364682f35bcf6ddb712916ab95d7c8e851bb050cfaa8->enter($__internal_914a414b3d5e22a22f5e364682f35bcf6ddb712916ab95d7c8e851bb050cfaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f267cf3bfbe3c5ae61f2df3e7b1b4d23555fb6ec65d2c06f19a3f569a654233a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f267cf3bfbe3c5ae61f2df3e7b1b4d23555fb6ec65d2c06f19a3f569a654233a->enter($__internal_f267cf3bfbe3c5ae61f2df3e7b1b4d23555fb6ec65d2c06f19a3f569a654233a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_914a414b3d5e22a22f5e364682f35bcf6ddb712916ab95d7c8e851bb050cfaa8->leave($__internal_914a414b3d5e22a22f5e364682f35bcf6ddb712916ab95d7c8e851bb050cfaa8_prof);

        
        $__internal_f267cf3bfbe3c5ae61f2df3e7b1b4d23555fb6ec65d2c06f19a3f569a654233a->leave($__internal_f267cf3bfbe3c5ae61f2df3e7b1b4d23555fb6ec65d2c06f19a3f569a654233a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

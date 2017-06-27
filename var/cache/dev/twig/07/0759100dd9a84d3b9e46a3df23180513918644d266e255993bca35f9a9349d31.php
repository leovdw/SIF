<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_44d08e31ca61878126e63112d2901c9248cdd8ec44d49d6d9e2af35d0c4d460e extends Twig_Template
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
        $__internal_594aac6139151a090717f4f4f741f266c07f91aa0a5a2dabd6c8a8e51dcd3cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594aac6139151a090717f4f4f741f266c07f91aa0a5a2dabd6c8a8e51dcd3cdb->enter($__internal_594aac6139151a090717f4f4f741f266c07f91aa0a5a2dabd6c8a8e51dcd3cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_964223b3c5aa4bf68bec96640b7c4240948ca7609225da7c2922d4dff80e9510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964223b3c5aa4bf68bec96640b7c4240948ca7609225da7c2922d4dff80e9510->enter($__internal_964223b3c5aa4bf68bec96640b7c4240948ca7609225da7c2922d4dff80e9510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_594aac6139151a090717f4f4f741f266c07f91aa0a5a2dabd6c8a8e51dcd3cdb->leave($__internal_594aac6139151a090717f4f4f741f266c07f91aa0a5a2dabd6c8a8e51dcd3cdb_prof);

        
        $__internal_964223b3c5aa4bf68bec96640b7c4240948ca7609225da7c2922d4dff80e9510->leave($__internal_964223b3c5aa4bf68bec96640b7c4240948ca7609225da7c2922d4dff80e9510_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

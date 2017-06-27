<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_48b323fbe58361b58d65e48d5186a1624f6c3c36d2cedc05d11a8adf39d5d620 extends Twig_Template
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
        $__internal_8c979efdb201c6dda1ac93da6a5045b2b077415b72a52cf360115e7021255c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c979efdb201c6dda1ac93da6a5045b2b077415b72a52cf360115e7021255c96->enter($__internal_8c979efdb201c6dda1ac93da6a5045b2b077415b72a52cf360115e7021255c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_9221f6745b356b6280132c460d99a21d6ddc60899b3d5227e5f1bea99c8a61f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9221f6745b356b6280132c460d99a21d6ddc60899b3d5227e5f1bea99c8a61f3->enter($__internal_9221f6745b356b6280132c460d99a21d6ddc60899b3d5227e5f1bea99c8a61f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_8c979efdb201c6dda1ac93da6a5045b2b077415b72a52cf360115e7021255c96->leave($__internal_8c979efdb201c6dda1ac93da6a5045b2b077415b72a52cf360115e7021255c96_prof);

        
        $__internal_9221f6745b356b6280132c460d99a21d6ddc60899b3d5227e5f1bea99c8a61f3->leave($__internal_9221f6745b356b6280132c460d99a21d6ddc60899b3d5227e5f1bea99c8a61f3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_tel.html.twig");
    }
}

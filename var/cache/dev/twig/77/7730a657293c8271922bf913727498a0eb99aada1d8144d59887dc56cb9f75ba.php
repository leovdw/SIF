<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_2f08c74bb7644f054c7f4dd53be4a0a7ccddc9b4b60a406d46c8ba7139366747 extends Twig_Template
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
        $__internal_d768d3e7cf001dd62feb270a4555e8869fc168dfa293c29140d8e501150c1bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d768d3e7cf001dd62feb270a4555e8869fc168dfa293c29140d8e501150c1bdc->enter($__internal_d768d3e7cf001dd62feb270a4555e8869fc168dfa293c29140d8e501150c1bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_1c1bc34e07d3e09c78bd70f9b7fd5a7818549e938ccd1733910f5eb4333a54ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1bc34e07d3e09c78bd70f9b7fd5a7818549e938ccd1733910f5eb4333a54ac->enter($__internal_1c1bc34e07d3e09c78bd70f9b7fd5a7818549e938ccd1733910f5eb4333a54ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_d768d3e7cf001dd62feb270a4555e8869fc168dfa293c29140d8e501150c1bdc->leave($__internal_d768d3e7cf001dd62feb270a4555e8869fc168dfa293c29140d8e501150c1bdc_prof);

        
        $__internal_1c1bc34e07d3e09c78bd70f9b7fd5a7818549e938ccd1733910f5eb4333a54ac->leave($__internal_1c1bc34e07d3e09c78bd70f9b7fd5a7818549e938ccd1733910f5eb4333a54ac_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_inaccessible.html.twig");
    }
}

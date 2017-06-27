<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_399e6c125988e8886ccbbe1daac257335c063e636dd1fa283a4dc526100c4439 extends Twig_Template
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
        $__internal_893e17545b539b4fce113ccc3453a4dd9d84ebae4ae0fc12a0c2fdb580255254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893e17545b539b4fce113ccc3453a4dd9d84ebae4ae0fc12a0c2fdb580255254->enter($__internal_893e17545b539b4fce113ccc3453a4dd9d84ebae4ae0fc12a0c2fdb580255254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_ff82c666a81aeceb2ac8a9072c1a49bef129c39badf9e977d78b14413e061b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff82c666a81aeceb2ac8a9072c1a49bef129c39badf9e977d78b14413e061b65->enter($__internal_ff82c666a81aeceb2ac8a9072c1a49bef129c39badf9e977d78b14413e061b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_893e17545b539b4fce113ccc3453a4dd9d84ebae4ae0fc12a0c2fdb580255254->leave($__internal_893e17545b539b4fce113ccc3453a4dd9d84ebae4ae0fc12a0c2fdb580255254_prof);

        
        $__internal_ff82c666a81aeceb2ac8a9072c1a49bef129c39badf9e977d78b14413e061b65->leave($__internal_ff82c666a81aeceb2ac8a9072c1a49bef129c39badf9e977d78b14413e061b65_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_guid.html.twig");
    }
}

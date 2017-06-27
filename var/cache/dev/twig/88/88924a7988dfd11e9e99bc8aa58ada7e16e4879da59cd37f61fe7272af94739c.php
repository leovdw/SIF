<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_cb56232914530de3ad0120a1fec66ec83709a288f6111e31e932423581c739d1 extends Twig_Template
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
        $__internal_7dec8f2f5559b95b3d663e9610cd1c2cf1f9debd24ef5fe9410f030e76ae05d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dec8f2f5559b95b3d663e9610cd1c2cf1f9debd24ef5fe9410f030e76ae05d5->enter($__internal_7dec8f2f5559b95b3d663e9610cd1c2cf1f9debd24ef5fe9410f030e76ae05d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_eca0243637c46ff2045e22578350d43bf6178e905e97d8cbb16383c89925e3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca0243637c46ff2045e22578350d43bf6178e905e97d8cbb16383c89925e3f6->enter($__internal_eca0243637c46ff2045e22578350d43bf6178e905e97d8cbb16383c89925e3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_7dec8f2f5559b95b3d663e9610cd1c2cf1f9debd24ef5fe9410f030e76ae05d5->leave($__internal_7dec8f2f5559b95b3d663e9610cd1c2cf1f9debd24ef5fe9410f030e76ae05d5_prof);

        
        $__internal_eca0243637c46ff2045e22578350d43bf6178e905e97d8cbb16383c89925e3f6->leave($__internal_eca0243637c46ff2045e22578350d43bf6178e905e97d8cbb16383c89925e3f6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_text.html.twig");
    }
}

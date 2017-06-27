<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_38e92e749d779bfdbbc4c54a6af06fed23fdf4aff45a3c54c62cb28eb642ee42 extends Twig_Template
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
        $__internal_413498f17d4c45ace7f3c0fdeff32d03b2093e4810c3ae44401e4763109ced22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413498f17d4c45ace7f3c0fdeff32d03b2093e4810c3ae44401e4763109ced22->enter($__internal_413498f17d4c45ace7f3c0fdeff32d03b2093e4810c3ae44401e4763109ced22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_e0619713f2e1826f2e0eef26fd9c35a9562abb695c3a561f9ac55732b998b663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0619713f2e1826f2e0eef26fd9c35a9562abb695c3a561f9ac55732b998b663->enter($__internal_e0619713f2e1826f2e0eef26fd9c35a9562abb695c3a561f9ac55732b998b663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_413498f17d4c45ace7f3c0fdeff32d03b2093e4810c3ae44401e4763109ced22->leave($__internal_413498f17d4c45ace7f3c0fdeff32d03b2093e4810c3ae44401e4763109ced22_prof);

        
        $__internal_e0619713f2e1826f2e0eef26fd9c35a9562abb695c3a561f9ac55732b998b663->leave($__internal_e0619713f2e1826f2e0eef26fd9c35a9562abb695c3a561f9ac55732b998b663_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_null.html.twig");
    }
}

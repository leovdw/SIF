<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_33a4090c8da3564d879582bdb6b3f4d6e11f2a5823dd9d7524a5635cd78dba01 extends Twig_Template
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
        $__internal_7e625d750956f2f984b8d3d6c01e729eaa440e0a6e5a241ba37d8b16056b56eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e625d750956f2f984b8d3d6c01e729eaa440e0a6e5a241ba37d8b16056b56eb->enter($__internal_7e625d750956f2f984b8d3d6c01e729eaa440e0a6e5a241ba37d8b16056b56eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_99827a942c3cde808f0cc38f90c19d393fe384dc4d9330cd5f80a952e225cf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99827a942c3cde808f0cc38f90c19d393fe384dc4d9330cd5f80a952e225cf77->enter($__internal_99827a942c3cde808f0cc38f90c19d393fe384dc4d9330cd5f80a952e225cf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_7e625d750956f2f984b8d3d6c01e729eaa440e0a6e5a241ba37d8b16056b56eb->leave($__internal_7e625d750956f2f984b8d3d6c01e729eaa440e0a6e5a241ba37d8b16056b56eb_prof);

        
        $__internal_99827a942c3cde808f0cc38f90c19d393fe384dc4d9330cd5f80a952e225cf77->leave($__internal_99827a942c3cde808f0cc38f90c19d393fe384dc4d9330cd5f80a952e225cf77_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_empty.html.twig");
    }
}

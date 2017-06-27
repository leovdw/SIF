<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_44aabac0c9a0c0dd825d8407e9f014a12cfce49cdd3611d3f86d09429aa4b955 extends Twig_Template
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
        $__internal_2cf2df0fe2bdf79c46ab2ed14c0b0537ef559c97ee08e41da17298916d6081a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf2df0fe2bdf79c46ab2ed14c0b0537ef559c97ee08e41da17298916d6081a6->enter($__internal_2cf2df0fe2bdf79c46ab2ed14c0b0537ef559c97ee08e41da17298916d6081a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_a54b7ebfc1b36867d34225244623ace4fc6b72eb6c61cba3cce1cddcb70c3bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54b7ebfc1b36867d34225244623ace4fc6b72eb6c61cba3cce1cddcb70c3bce->enter($__internal_a54b7ebfc1b36867d34225244623ace4fc6b72eb6c61cba3cce1cddcb70c3bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_2cf2df0fe2bdf79c46ab2ed14c0b0537ef559c97ee08e41da17298916d6081a6->leave($__internal_2cf2df0fe2bdf79c46ab2ed14c0b0537ef559c97ee08e41da17298916d6081a6_prof);

        
        $__internal_a54b7ebfc1b36867d34225244623ace4fc6b72eb6c61cba3cce1cddcb70c3bce->leave($__internal_a54b7ebfc1b36867d34225244623ace4fc6b72eb6c61cba3cce1cddcb70c3bce_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_object.html.twig");
    }
}

<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2d108ec41b2453b5416e1212bbcf001792efb098fb52368674c5f1a6ccbccffc extends Twig_Template
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
        $__internal_e8902bb48c2ca3293424bd3b062c87004fbfa3668366f3368507389676bfe5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8902bb48c2ca3293424bd3b062c87004fbfa3668366f3368507389676bfe5e1->enter($__internal_e8902bb48c2ca3293424bd3b062c87004fbfa3668366f3368507389676bfe5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_8554873235a27c30b27bbeb7618812045e42744493c931e6160f56438af2dd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8554873235a27c30b27bbeb7618812045e42744493c931e6160f56438af2dd9a->enter($__internal_8554873235a27c30b27bbeb7618812045e42744493c931e6160f56438af2dd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e8902bb48c2ca3293424bd3b062c87004fbfa3668366f3368507389676bfe5e1->leave($__internal_e8902bb48c2ca3293424bd3b062c87004fbfa3668366f3368507389676bfe5e1_prof);

        
        $__internal_8554873235a27c30b27bbeb7618812045e42744493c931e6160f56438af2dd9a->leave($__internal_8554873235a27c30b27bbeb7618812045e42744493c931e6160f56438af2dd9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

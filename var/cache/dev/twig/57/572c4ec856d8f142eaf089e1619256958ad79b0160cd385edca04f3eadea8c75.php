<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_7b89ae5067de0632b20ba7287de2f178ba004cea4ca3a41716e63202f6230719 extends Twig_Template
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
        $__internal_5ed56bec680824091158770a22b28537159a0e7d80a66b6c9b15db9e33a379a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed56bec680824091158770a22b28537159a0e7d80a66b6c9b15db9e33a379a6->enter($__internal_5ed56bec680824091158770a22b28537159a0e7d80a66b6c9b15db9e33a379a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d401cf8de85d6bb35c893a4fa88721ee52057584e022d5b8f10cb226d53d26bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d401cf8de85d6bb35c893a4fa88721ee52057584e022d5b8f10cb226d53d26bf->enter($__internal_d401cf8de85d6bb35c893a4fa88721ee52057584e022d5b8f10cb226d53d26bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_5ed56bec680824091158770a22b28537159a0e7d80a66b6c9b15db9e33a379a6->leave($__internal_5ed56bec680824091158770a22b28537159a0e7d80a66b6c9b15db9e33a379a6_prof);

        
        $__internal_d401cf8de85d6bb35c893a4fa88721ee52057584e022d5b8f10cb226d53d26bf->leave($__internal_d401cf8de85d6bb35c893a4fa88721ee52057584e022d5b8f10cb226d53d26bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}

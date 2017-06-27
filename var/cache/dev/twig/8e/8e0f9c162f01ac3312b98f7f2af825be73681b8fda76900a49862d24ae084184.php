<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d9a17a4096e83f3058404911853c31a091f2c65349d82bbde51b906de1e956ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cd2ac206bca5ecd7fce65b5657289a81881edbe04fa301f089ab7a56db7359b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd2ac206bca5ecd7fce65b5657289a81881edbe04fa301f089ab7a56db7359b->enter($__internal_5cd2ac206bca5ecd7fce65b5657289a81881edbe04fa301f089ab7a56db7359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a1492d2228006e505dc96ce75179a4980c307b9657be05f951c1f15e05f5c946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1492d2228006e505dc96ce75179a4980c307b9657be05f951c1f15e05f5c946->enter($__internal_a1492d2228006e505dc96ce75179a4980c307b9657be05f951c1f15e05f5c946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cd2ac206bca5ecd7fce65b5657289a81881edbe04fa301f089ab7a56db7359b->leave($__internal_5cd2ac206bca5ecd7fce65b5657289a81881edbe04fa301f089ab7a56db7359b_prof);

        
        $__internal_a1492d2228006e505dc96ce75179a4980c307b9657be05f951c1f15e05f5c946->leave($__internal_a1492d2228006e505dc96ce75179a4980c307b9657be05f951c1f15e05f5c946_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90753f46e1a9d28196298a295097055fc15e4bbca65d800bcd961368b1df5318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90753f46e1a9d28196298a295097055fc15e4bbca65d800bcd961368b1df5318->enter($__internal_90753f46e1a9d28196298a295097055fc15e4bbca65d800bcd961368b1df5318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_06939485c4123a49f62fe5ff8e6578a8d9ab762b6c5cf625e7910e77ffc9afac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06939485c4123a49f62fe5ff8e6578a8d9ab762b6c5cf625e7910e77ffc9afac->enter($__internal_06939485c4123a49f62fe5ff8e6578a8d9ab762b6c5cf625e7910e77ffc9afac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06939485c4123a49f62fe5ff8e6578a8d9ab762b6c5cf625e7910e77ffc9afac->leave($__internal_06939485c4123a49f62fe5ff8e6578a8d9ab762b6c5cf625e7910e77ffc9afac_prof);

        
        $__internal_90753f46e1a9d28196298a295097055fc15e4bbca65d800bcd961368b1df5318->leave($__internal_90753f46e1a9d28196298a295097055fc15e4bbca65d800bcd961368b1df5318_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c50368549ddaaf16802fde09b9451ee4ebe7cc22d66fd7e1c35dc9553af21a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50368549ddaaf16802fde09b9451ee4ebe7cc22d66fd7e1c35dc9553af21a87->enter($__internal_c50368549ddaaf16802fde09b9451ee4ebe7cc22d66fd7e1c35dc9553af21a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f16a48ffd66b7284142cb652a46db94253bc08b3e14ded5a1838ed16ea407827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16a48ffd66b7284142cb652a46db94253bc08b3e14ded5a1838ed16ea407827->enter($__internal_f16a48ffd66b7284142cb652a46db94253bc08b3e14ded5a1838ed16ea407827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f16a48ffd66b7284142cb652a46db94253bc08b3e14ded5a1838ed16ea407827->leave($__internal_f16a48ffd66b7284142cb652a46db94253bc08b3e14ded5a1838ed16ea407827_prof);

        
        $__internal_c50368549ddaaf16802fde09b9451ee4ebe7cc22d66fd7e1c35dc9553af21a87->leave($__internal_c50368549ddaaf16802fde09b9451ee4ebe7cc22d66fd7e1c35dc9553af21a87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_489ecf4e548bc1e4314430c30d148c11da3b472f97c7d048d762a602999ca23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489ecf4e548bc1e4314430c30d148c11da3b472f97c7d048d762a602999ca23e->enter($__internal_489ecf4e548bc1e4314430c30d148c11da3b472f97c7d048d762a602999ca23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5acf506a771f85a9ab70d760e90f9070c76827abb4eb985d9194655c6f56214b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acf506a771f85a9ab70d760e90f9070c76827abb4eb985d9194655c6f56214b->enter($__internal_5acf506a771f85a9ab70d760e90f9070c76827abb4eb985d9194655c6f56214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5acf506a771f85a9ab70d760e90f9070c76827abb4eb985d9194655c6f56214b->leave($__internal_5acf506a771f85a9ab70d760e90f9070c76827abb4eb985d9194655c6f56214b_prof);

        
        $__internal_489ecf4e548bc1e4314430c30d148c11da3b472f97c7d048d762a602999ca23e->leave($__internal_489ecf4e548bc1e4314430c30d148c11da3b472f97c7d048d762a602999ca23e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

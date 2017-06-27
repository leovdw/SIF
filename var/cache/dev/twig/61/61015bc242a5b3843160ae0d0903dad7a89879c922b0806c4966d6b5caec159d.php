<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_3c07bb42cac510df7aebf2011dadb551f7edc917847cf8b1f031396844299a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e766366a0e1c900367e839b3f23b597ce8f1816850b88d7ef9cdba8405e655d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e766366a0e1c900367e839b3f23b597ce8f1816850b88d7ef9cdba8405e655d5->enter($__internal_e766366a0e1c900367e839b3f23b597ce8f1816850b88d7ef9cdba8405e655d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1d1d1d9b16d5522e897d09542fb6fa0672051b3448748e970a9bc214ddd171d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1d1d9b16d5522e897d09542fb6fa0672051b3448748e970a9bc214ddd171d6->enter($__internal_1d1d1d9b16d5522e897d09542fb6fa0672051b3448748e970a9bc214ddd171d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e766366a0e1c900367e839b3f23b597ce8f1816850b88d7ef9cdba8405e655d5->leave($__internal_e766366a0e1c900367e839b3f23b597ce8f1816850b88d7ef9cdba8405e655d5_prof);

        
        $__internal_1d1d1d9b16d5522e897d09542fb6fa0672051b3448748e970a9bc214ddd171d6->leave($__internal_1d1d1d9b16d5522e897d09542fb6fa0672051b3448748e970a9bc214ddd171d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bd3b818d3d728d75236003b705fb2c6b6b2ca4c3f59bf02121560c3e71eafce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd3b818d3d728d75236003b705fb2c6b6b2ca4c3f59bf02121560c3e71eafce->enter($__internal_4bd3b818d3d728d75236003b705fb2c6b6b2ca4c3f59bf02121560c3e71eafce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0928a6931773c9d2da5648cfabc59293a1f3ef97eba210dab9cdc8ea0134073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0928a6931773c9d2da5648cfabc59293a1f3ef97eba210dab9cdc8ea0134073->enter($__internal_d0928a6931773c9d2da5648cfabc59293a1f3ef97eba210dab9cdc8ea0134073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d0928a6931773c9d2da5648cfabc59293a1f3ef97eba210dab9cdc8ea0134073->leave($__internal_d0928a6931773c9d2da5648cfabc59293a1f3ef97eba210dab9cdc8ea0134073_prof);

        
        $__internal_4bd3b818d3d728d75236003b705fb2c6b6b2ca4c3f59bf02121560c3e71eafce->leave($__internal_4bd3b818d3d728d75236003b705fb2c6b6b2ca4c3f59bf02121560c3e71eafce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}

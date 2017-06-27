<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_47bc11c8c809628995e59228685675c8073d8c07985d6d152ff9f41c3e8d329a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7ea8e48ca0d956e199b89fc2c65cc19e9c5263fa429c9d629a6c79b80e029077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea8e48ca0d956e199b89fc2c65cc19e9c5263fa429c9d629a6c79b80e029077->enter($__internal_7ea8e48ca0d956e199b89fc2c65cc19e9c5263fa429c9d629a6c79b80e029077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5186ed46a74b85fe7a5d4843f6e67bc38cc261d5d3d4ca98f6cce9895a2ae31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5186ed46a74b85fe7a5d4843f6e67bc38cc261d5d3d4ca98f6cce9895a2ae31b->enter($__internal_5186ed46a74b85fe7a5d4843f6e67bc38cc261d5d3d4ca98f6cce9895a2ae31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea8e48ca0d956e199b89fc2c65cc19e9c5263fa429c9d629a6c79b80e029077->leave($__internal_7ea8e48ca0d956e199b89fc2c65cc19e9c5263fa429c9d629a6c79b80e029077_prof);

        
        $__internal_5186ed46a74b85fe7a5d4843f6e67bc38cc261d5d3d4ca98f6cce9895a2ae31b->leave($__internal_5186ed46a74b85fe7a5d4843f6e67bc38cc261d5d3d4ca98f6cce9895a2ae31b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53d29d5c69c39b6e9cace6231e1c3af2376fd5f947804bb9e280336e12688d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d29d5c69c39b6e9cace6231e1c3af2376fd5f947804bb9e280336e12688d75->enter($__internal_53d29d5c69c39b6e9cace6231e1c3af2376fd5f947804bb9e280336e12688d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6bb13849191bcbdfaec41a9a1e9c29865445576542a12f962049df1ca29c2330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb13849191bcbdfaec41a9a1e9c29865445576542a12f962049df1ca29c2330->enter($__internal_6bb13849191bcbdfaec41a9a1e9c29865445576542a12f962049df1ca29c2330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6bb13849191bcbdfaec41a9a1e9c29865445576542a12f962049df1ca29c2330->leave($__internal_6bb13849191bcbdfaec41a9a1e9c29865445576542a12f962049df1ca29c2330_prof);

        
        $__internal_53d29d5c69c39b6e9cace6231e1c3af2376fd5f947804bb9e280336e12688d75->leave($__internal_53d29d5c69c39b6e9cace6231e1c3af2376fd5f947804bb9e280336e12688d75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}

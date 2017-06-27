<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dbff8b09594d6d20904dc02f994f0034835e8d4b22b01fd0956588911c025585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a19c78c2d14e639b1ace5652825e8862e15c76c148f9a0086f9cc1177037e53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19c78c2d14e639b1ace5652825e8862e15c76c148f9a0086f9cc1177037e53f->enter($__internal_a19c78c2d14e639b1ace5652825e8862e15c76c148f9a0086f9cc1177037e53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_43c3cc5663c7af1575a07e578d2d8f363b6c04cbbd147d97ac0c8b6c81a59564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c3cc5663c7af1575a07e578d2d8f363b6c04cbbd147d97ac0c8b6c81a59564->enter($__internal_43c3cc5663c7af1575a07e578d2d8f363b6c04cbbd147d97ac0c8b6c81a59564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19c78c2d14e639b1ace5652825e8862e15c76c148f9a0086f9cc1177037e53f->leave($__internal_a19c78c2d14e639b1ace5652825e8862e15c76c148f9a0086f9cc1177037e53f_prof);

        
        $__internal_43c3cc5663c7af1575a07e578d2d8f363b6c04cbbd147d97ac0c8b6c81a59564->leave($__internal_43c3cc5663c7af1575a07e578d2d8f363b6c04cbbd147d97ac0c8b6c81a59564_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0311d6187ac78469148d6e94b69740e64e59a04c35646ebcb391b8496d8fa242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0311d6187ac78469148d6e94b69740e64e59a04c35646ebcb391b8496d8fa242->enter($__internal_0311d6187ac78469148d6e94b69740e64e59a04c35646ebcb391b8496d8fa242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1af8ad6863bf91f6cd4f28fd52b2dcc45016b2a3b55b7a2d8518ba29d6ed0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1af8ad6863bf91f6cd4f28fd52b2dcc45016b2a3b55b7a2d8518ba29d6ed0e1->enter($__internal_e1af8ad6863bf91f6cd4f28fd52b2dcc45016b2a3b55b7a2d8518ba29d6ed0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e1af8ad6863bf91f6cd4f28fd52b2dcc45016b2a3b55b7a2d8518ba29d6ed0e1->leave($__internal_e1af8ad6863bf91f6cd4f28fd52b2dcc45016b2a3b55b7a2d8518ba29d6ed0e1_prof);

        
        $__internal_0311d6187ac78469148d6e94b69740e64e59a04c35646ebcb391b8496d8fa242->leave($__internal_0311d6187ac78469148d6e94b69740e64e59a04c35646ebcb391b8496d8fa242_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}

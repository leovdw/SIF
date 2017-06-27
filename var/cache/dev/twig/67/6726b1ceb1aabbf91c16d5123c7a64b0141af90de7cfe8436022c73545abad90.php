<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c8a0aa52c21c4129d1d21a63926f6661cad89ebaabc3216b5f358821ad682bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_07a336accc8cb920fcf76bc86a9b075af1193b87db58b21a3e981bd0029c1ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a336accc8cb920fcf76bc86a9b075af1193b87db58b21a3e981bd0029c1ba0->enter($__internal_07a336accc8cb920fcf76bc86a9b075af1193b87db58b21a3e981bd0029c1ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_fde94142809f44a719d247a9570eec4a5271f1e0ae5a97683af8b4b7ddd35b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde94142809f44a719d247a9570eec4a5271f1e0ae5a97683af8b4b7ddd35b4b->enter($__internal_fde94142809f44a719d247a9570eec4a5271f1e0ae5a97683af8b4b7ddd35b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a336accc8cb920fcf76bc86a9b075af1193b87db58b21a3e981bd0029c1ba0->leave($__internal_07a336accc8cb920fcf76bc86a9b075af1193b87db58b21a3e981bd0029c1ba0_prof);

        
        $__internal_fde94142809f44a719d247a9570eec4a5271f1e0ae5a97683af8b4b7ddd35b4b->leave($__internal_fde94142809f44a719d247a9570eec4a5271f1e0ae5a97683af8b4b7ddd35b4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae899a03101b392e8f8367447deb4914bbb90a88b32faca7612fa001aa932c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae899a03101b392e8f8367447deb4914bbb90a88b32faca7612fa001aa932c16->enter($__internal_ae899a03101b392e8f8367447deb4914bbb90a88b32faca7612fa001aa932c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_88ff5fa199a118d2932fbecdbf1090b47ad916a692b47e398941c9d27ae53c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ff5fa199a118d2932fbecdbf1090b47ad916a692b47e398941c9d27ae53c1f->enter($__internal_88ff5fa199a118d2932fbecdbf1090b47ad916a692b47e398941c9d27ae53c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_88ff5fa199a118d2932fbecdbf1090b47ad916a692b47e398941c9d27ae53c1f->leave($__internal_88ff5fa199a118d2932fbecdbf1090b47ad916a692b47e398941c9d27ae53c1f_prof);

        
        $__internal_ae899a03101b392e8f8367447deb4914bbb90a88b32faca7612fa001aa932c16->leave($__internal_ae899a03101b392e8f8367447deb4914bbb90a88b32faca7612fa001aa932c16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}

<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_ddaaaa21470c41dcb6d0f9229678b235f3e7117b6cfbad6f6acb5298d253e7a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_1fcc437282e247cda14ab6f6b3ebf16e608f18503e40f5e2610475bea0f8e5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fcc437282e247cda14ab6f6b3ebf16e608f18503e40f5e2610475bea0f8e5a5->enter($__internal_1fcc437282e247cda14ab6f6b3ebf16e608f18503e40f5e2610475bea0f8e5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_672ddf9472f64cca1e6ac8939ae0690b8e3230a8c116c36b693733a766cd3b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672ddf9472f64cca1e6ac8939ae0690b8e3230a8c116c36b693733a766cd3b7a->enter($__internal_672ddf9472f64cca1e6ac8939ae0690b8e3230a8c116c36b693733a766cd3b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fcc437282e247cda14ab6f6b3ebf16e608f18503e40f5e2610475bea0f8e5a5->leave($__internal_1fcc437282e247cda14ab6f6b3ebf16e608f18503e40f5e2610475bea0f8e5a5_prof);

        
        $__internal_672ddf9472f64cca1e6ac8939ae0690b8e3230a8c116c36b693733a766cd3b7a->leave($__internal_672ddf9472f64cca1e6ac8939ae0690b8e3230a8c116c36b693733a766cd3b7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8191fee7254e6fc5ee86fca3b9ba37c88d832d02bea4e24fa876c385f24a7eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8191fee7254e6fc5ee86fca3b9ba37c88d832d02bea4e24fa876c385f24a7eca->enter($__internal_8191fee7254e6fc5ee86fca3b9ba37c88d832d02bea4e24fa876c385f24a7eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac51d277eeea57df609f1530fcba43f17136f9fa4c1f4ba80061a0b6ffb25c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac51d277eeea57df609f1530fcba43f17136f9fa4c1f4ba80061a0b6ffb25c4a->enter($__internal_ac51d277eeea57df609f1530fcba43f17136f9fa4c1f4ba80061a0b6ffb25c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ac51d277eeea57df609f1530fcba43f17136f9fa4c1f4ba80061a0b6ffb25c4a->leave($__internal_ac51d277eeea57df609f1530fcba43f17136f9fa4c1f4ba80061a0b6ffb25c4a_prof);

        
        $__internal_8191fee7254e6fc5ee86fca3b9ba37c88d832d02bea4e24fa876c385f24a7eca->leave($__internal_8191fee7254e6fc5ee86fca3b9ba37c88d832d02bea4e24fa876c385f24a7eca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

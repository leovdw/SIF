<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c481483c231e7c5c5a844641f7ae3560b9bb54dd9a8f820b52804b1a46fdc784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4c7e9355eef41c51d48d798e8e8ed8dcf8faa73e7de7563d28d1ceb762b2c6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7e9355eef41c51d48d798e8e8ed8dcf8faa73e7de7563d28d1ceb762b2c6f3->enter($__internal_4c7e9355eef41c51d48d798e8e8ed8dcf8faa73e7de7563d28d1ceb762b2c6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_4bd4ad61f4d5d0867ada44f8dfca9d92537024ff7338e48673cdb063cd2cc044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd4ad61f4d5d0867ada44f8dfca9d92537024ff7338e48673cdb063cd2cc044->enter($__internal_4bd4ad61f4d5d0867ada44f8dfca9d92537024ff7338e48673cdb063cd2cc044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7e9355eef41c51d48d798e8e8ed8dcf8faa73e7de7563d28d1ceb762b2c6f3->leave($__internal_4c7e9355eef41c51d48d798e8e8ed8dcf8faa73e7de7563d28d1ceb762b2c6f3_prof);

        
        $__internal_4bd4ad61f4d5d0867ada44f8dfca9d92537024ff7338e48673cdb063cd2cc044->leave($__internal_4bd4ad61f4d5d0867ada44f8dfca9d92537024ff7338e48673cdb063cd2cc044_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7ee57d9869f268520b3275d5016c4ecdedc3624937043d7882ed4b5041e6a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ee57d9869f268520b3275d5016c4ecdedc3624937043d7882ed4b5041e6a5f->enter($__internal_a7ee57d9869f268520b3275d5016c4ecdedc3624937043d7882ed4b5041e6a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_46452bd831bac7d2d0e3fa4032e2cfc745d843da63fb4fb97c3975dfbdb7aa03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46452bd831bac7d2d0e3fa4032e2cfc745d843da63fb4fb97c3975dfbdb7aa03->enter($__internal_46452bd831bac7d2d0e3fa4032e2cfc745d843da63fb4fb97c3975dfbdb7aa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_46452bd831bac7d2d0e3fa4032e2cfc745d843da63fb4fb97c3975dfbdb7aa03->leave($__internal_46452bd831bac7d2d0e3fa4032e2cfc745d843da63fb4fb97c3975dfbdb7aa03_prof);

        
        $__internal_a7ee57d9869f268520b3275d5016c4ecdedc3624937043d7882ed4b5041e6a5f->leave($__internal_a7ee57d9869f268520b3275d5016c4ecdedc3624937043d7882ed4b5041e6a5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

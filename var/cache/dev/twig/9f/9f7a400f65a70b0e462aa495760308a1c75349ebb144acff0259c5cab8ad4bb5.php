<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_63d6bdc047869dcb92ad6437657ac8c577bb3b16b44653c16d1b0912b1ac7176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6d7295bcf491dad66fb96168d08de019e4574b061669b66d8a5521ad7b6092d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7295bcf491dad66fb96168d08de019e4574b061669b66d8a5521ad7b6092d8->enter($__internal_6d7295bcf491dad66fb96168d08de019e4574b061669b66d8a5521ad7b6092d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_3ab1ff5c8e158babd0fc02add508d0d43eafeae2ee6c2a70dccb1b47ad4deb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab1ff5c8e158babd0fc02add508d0d43eafeae2ee6c2a70dccb1b47ad4deb77->enter($__internal_3ab1ff5c8e158babd0fc02add508d0d43eafeae2ee6c2a70dccb1b47ad4deb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d7295bcf491dad66fb96168d08de019e4574b061669b66d8a5521ad7b6092d8->leave($__internal_6d7295bcf491dad66fb96168d08de019e4574b061669b66d8a5521ad7b6092d8_prof);

        
        $__internal_3ab1ff5c8e158babd0fc02add508d0d43eafeae2ee6c2a70dccb1b47ad4deb77->leave($__internal_3ab1ff5c8e158babd0fc02add508d0d43eafeae2ee6c2a70dccb1b47ad4deb77_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66a03cacd37b51a2e49f214209ff656b186d26f208172df6804ca25d2edd2036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a03cacd37b51a2e49f214209ff656b186d26f208172df6804ca25d2edd2036->enter($__internal_66a03cacd37b51a2e49f214209ff656b186d26f208172df6804ca25d2edd2036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7884a7770f178b69f7076d021e1bc8a717cba7f48c71b26c48ba79ac23aa948f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7884a7770f178b69f7076d021e1bc8a717cba7f48c71b26c48ba79ac23aa948f->enter($__internal_7884a7770f178b69f7076d021e1bc8a717cba7f48c71b26c48ba79ac23aa948f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_7884a7770f178b69f7076d021e1bc8a717cba7f48c71b26c48ba79ac23aa948f->leave($__internal_7884a7770f178b69f7076d021e1bc8a717cba7f48c71b26c48ba79ac23aa948f_prof);

        
        $__internal_66a03cacd37b51a2e49f214209ff656b186d26f208172df6804ca25d2edd2036->leave($__internal_66a03cacd37b51a2e49f214209ff656b186d26f208172df6804ca25d2edd2036_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}

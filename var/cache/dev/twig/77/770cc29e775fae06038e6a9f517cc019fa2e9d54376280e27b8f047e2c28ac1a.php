<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_a0adb98c010ad29a3a43f3e411442dc298022f5efd90ff1f17541ebf72b5a54e extends Twig_Template
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
        $__internal_d81603c5cd7375db3b5f127257c4eb028153cc5899decef5f745feda1eefc199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81603c5cd7375db3b5f127257c4eb028153cc5899decef5f745feda1eefc199->enter($__internal_d81603c5cd7375db3b5f127257c4eb028153cc5899decef5f745feda1eefc199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_63fb28ca5b60d8e8a44bf4de70694954e8f11016359e1574abcc9297959f38ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fb28ca5b60d8e8a44bf4de70694954e8f11016359e1574abcc9297959f38ed->enter($__internal_63fb28ca5b60d8e8a44bf4de70694954e8f11016359e1574abcc9297959f38ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d81603c5cd7375db3b5f127257c4eb028153cc5899decef5f745feda1eefc199->leave($__internal_d81603c5cd7375db3b5f127257c4eb028153cc5899decef5f745feda1eefc199_prof);

        
        $__internal_63fb28ca5b60d8e8a44bf4de70694954e8f11016359e1574abcc9297959f38ed->leave($__internal_63fb28ca5b60d8e8a44bf4de70694954e8f11016359e1574abcc9297959f38ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}

<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8c598dfd5bd7c08b68a2c9e0dc36598d1c2805c0df91d7974f4bd8991832180d extends Twig_Template
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
        $__internal_1a533d80ff17700892cf902aaae791b68a79059d01ea8a1d577ac16294ef87a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a533d80ff17700892cf902aaae791b68a79059d01ea8a1d577ac16294ef87a4->enter($__internal_1a533d80ff17700892cf902aaae791b68a79059d01ea8a1d577ac16294ef87a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_762cefd8d6314346fea5d0f60c70458f855327bb2143312dd7a91d4d27996873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762cefd8d6314346fea5d0f60c70458f855327bb2143312dd7a91d4d27996873->enter($__internal_762cefd8d6314346fea5d0f60c70458f855327bb2143312dd7a91d4d27996873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1a533d80ff17700892cf902aaae791b68a79059d01ea8a1d577ac16294ef87a4->leave($__internal_1a533d80ff17700892cf902aaae791b68a79059d01ea8a1d577ac16294ef87a4_prof);

        
        $__internal_762cefd8d6314346fea5d0f60c70458f855327bb2143312dd7a91d4d27996873->leave($__internal_762cefd8d6314346fea5d0f60c70458f855327bb2143312dd7a91d4d27996873_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

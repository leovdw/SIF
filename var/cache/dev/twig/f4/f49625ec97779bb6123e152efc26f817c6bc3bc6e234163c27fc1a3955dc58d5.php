<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_1611dd642fadc7d05db78cad9dc582083003732cb8a4f14376f017ad22a862a0 extends Twig_Template
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
        $__internal_448b4ffcb523346bf6d514bb38ff8091afeb2490fd71ff241ae68f1ed57982c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448b4ffcb523346bf6d514bb38ff8091afeb2490fd71ff241ae68f1ed57982c3->enter($__internal_448b4ffcb523346bf6d514bb38ff8091afeb2490fd71ff241ae68f1ed57982c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_079f845ef28ac21b7fedc73677d89df5ddf0495c9a8be2e5664cc0bb683e5745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079f845ef28ac21b7fedc73677d89df5ddf0495c9a8be2e5664cc0bb683e5745->enter($__internal_079f845ef28ac21b7fedc73677d89df5ddf0495c9a8be2e5664cc0bb683e5745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_448b4ffcb523346bf6d514bb38ff8091afeb2490fd71ff241ae68f1ed57982c3->leave($__internal_448b4ffcb523346bf6d514bb38ff8091afeb2490fd71ff241ae68f1ed57982c3_prof);

        
        $__internal_079f845ef28ac21b7fedc73677d89df5ddf0495c9a8be2e5664cc0bb683e5745->leave($__internal_079f845ef28ac21b7fedc73677d89df5ddf0495c9a8be2e5664cc0bb683e5745_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}

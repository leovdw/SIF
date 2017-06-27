<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bdcc6095a5376f3b5753b5004c96dff720f70e4298db7409f20dbd78a4cf4701 extends Twig_Template
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
        $__internal_9331bc56de75b6ae13b3cf98cc32a7bcb5b11a77dcbf1bafa83c15f6e1d5dd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9331bc56de75b6ae13b3cf98cc32a7bcb5b11a77dcbf1bafa83c15f6e1d5dd63->enter($__internal_9331bc56de75b6ae13b3cf98cc32a7bcb5b11a77dcbf1bafa83c15f6e1d5dd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f10f8826a903c1a557bdb460c74324fb40c89758f17ac86722ea5fc2f5c5d273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10f8826a903c1a557bdb460c74324fb40c89758f17ac86722ea5fc2f5c5d273->enter($__internal_f10f8826a903c1a557bdb460c74324fb40c89758f17ac86722ea5fc2f5c5d273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9331bc56de75b6ae13b3cf98cc32a7bcb5b11a77dcbf1bafa83c15f6e1d5dd63->leave($__internal_9331bc56de75b6ae13b3cf98cc32a7bcb5b11a77dcbf1bafa83c15f6e1d5dd63_prof);

        
        $__internal_f10f8826a903c1a557bdb460c74324fb40c89758f17ac86722ea5fc2f5c5d273->leave($__internal_f10f8826a903c1a557bdb460c74324fb40c89758f17ac86722ea5fc2f5c5d273_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

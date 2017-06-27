<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7b12fd077b80626b601184b3201da46131d8b9855b4c9b4c55e5fa555fe1b746 extends Twig_Template
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
        $__internal_178449eacb4376cd53d26b894763f03cffa95d7746c8f1281bb12dbaf9371604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178449eacb4376cd53d26b894763f03cffa95d7746c8f1281bb12dbaf9371604->enter($__internal_178449eacb4376cd53d26b894763f03cffa95d7746c8f1281bb12dbaf9371604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2d40db51110d215b4e462c504333028e489bc25a88de870825678cceb56a50d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d40db51110d215b4e462c504333028e489bc25a88de870825678cceb56a50d2->enter($__internal_2d40db51110d215b4e462c504333028e489bc25a88de870825678cceb56a50d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_178449eacb4376cd53d26b894763f03cffa95d7746c8f1281bb12dbaf9371604->leave($__internal_178449eacb4376cd53d26b894763f03cffa95d7746c8f1281bb12dbaf9371604_prof);

        
        $__internal_2d40db51110d215b4e462c504333028e489bc25a88de870825678cceb56a50d2->leave($__internal_2d40db51110d215b4e462c504333028e489bc25a88de870825678cceb56a50d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

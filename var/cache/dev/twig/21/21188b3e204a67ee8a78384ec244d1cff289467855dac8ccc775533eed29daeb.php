<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9a3864f54b7e98d069d491e43aa9056aff37644d79167febee07e93df279926f extends Twig_Template
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
        $__internal_e98eace8b1a4a437454cf9fc8c4264aab9eea84e9a74a75e1e47eec7e3e8870f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98eace8b1a4a437454cf9fc8c4264aab9eea84e9a74a75e1e47eec7e3e8870f->enter($__internal_e98eace8b1a4a437454cf9fc8c4264aab9eea84e9a74a75e1e47eec7e3e8870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_09464ea7ace29369dfd633d2521c9391776f162204145deeb3558c4afd708060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09464ea7ace29369dfd633d2521c9391776f162204145deeb3558c4afd708060->enter($__internal_09464ea7ace29369dfd633d2521c9391776f162204145deeb3558c4afd708060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e98eace8b1a4a437454cf9fc8c4264aab9eea84e9a74a75e1e47eec7e3e8870f->leave($__internal_e98eace8b1a4a437454cf9fc8c4264aab9eea84e9a74a75e1e47eec7e3e8870f_prof);

        
        $__internal_09464ea7ace29369dfd633d2521c9391776f162204145deeb3558c4afd708060->leave($__internal_09464ea7ace29369dfd633d2521c9391776f162204145deeb3558c4afd708060_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

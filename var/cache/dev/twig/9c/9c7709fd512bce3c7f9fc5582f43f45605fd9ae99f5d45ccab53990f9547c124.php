<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_83d45dd683f679bae13d727eabbe11f8844bc6eb796f3486fb9917dbd5184001 extends Twig_Template
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
        $__internal_8531ce9572db1e3d55635c2f59cf027d65a14a965b0e39a16fdc739ea7916d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8531ce9572db1e3d55635c2f59cf027d65a14a965b0e39a16fdc739ea7916d5d->enter($__internal_8531ce9572db1e3d55635c2f59cf027d65a14a965b0e39a16fdc739ea7916d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e1480dc8ff2b084531d2876399196321b82bdd7b573d5891b9e2e1c357febe65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1480dc8ff2b084531d2876399196321b82bdd7b573d5891b9e2e1c357febe65->enter($__internal_e1480dc8ff2b084531d2876399196321b82bdd7b573d5891b9e2e1c357febe65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8531ce9572db1e3d55635c2f59cf027d65a14a965b0e39a16fdc739ea7916d5d->leave($__internal_8531ce9572db1e3d55635c2f59cf027d65a14a965b0e39a16fdc739ea7916d5d_prof);

        
        $__internal_e1480dc8ff2b084531d2876399196321b82bdd7b573d5891b9e2e1c357febe65->leave($__internal_e1480dc8ff2b084531d2876399196321b82bdd7b573d5891b9e2e1c357febe65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

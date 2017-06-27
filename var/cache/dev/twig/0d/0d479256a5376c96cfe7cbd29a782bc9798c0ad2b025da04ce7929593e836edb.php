<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_bc62ce2d4a5353d484b4c0e0fe2c230a87eefef8c2804fc24ea18bb821e10c87 extends Twig_Template
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
        $__internal_a584e7ac7f7ef2741ea5bc3deac537acea66068e247889d95b7123e1315b2da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a584e7ac7f7ef2741ea5bc3deac537acea66068e247889d95b7123e1315b2da2->enter($__internal_a584e7ac7f7ef2741ea5bc3deac537acea66068e247889d95b7123e1315b2da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c095002d25385cff98a7fa11ff8ec954662589a6ee205a2378196be3672d7a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c095002d25385cff98a7fa11ff8ec954662589a6ee205a2378196be3672d7a64->enter($__internal_c095002d25385cff98a7fa11ff8ec954662589a6ee205a2378196be3672d7a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a584e7ac7f7ef2741ea5bc3deac537acea66068e247889d95b7123e1315b2da2->leave($__internal_a584e7ac7f7ef2741ea5bc3deac537acea66068e247889d95b7123e1315b2da2_prof);

        
        $__internal_c095002d25385cff98a7fa11ff8ec954662589a6ee205a2378196be3672d7a64->leave($__internal_c095002d25385cff98a7fa11ff8ec954662589a6ee205a2378196be3672d7a64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

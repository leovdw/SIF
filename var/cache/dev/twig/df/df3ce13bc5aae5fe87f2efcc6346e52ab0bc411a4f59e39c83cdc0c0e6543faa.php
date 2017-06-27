<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_290d6f2881f6f8d3e76a683eb60d01c44feea58d0a542f3ddff40ae5bba079cd extends Twig_Template
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
        $__internal_6c1723fc45e6467016daf73376af4d58b794d81408b0a56798bda420b0238eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1723fc45e6467016daf73376af4d58b794d81408b0a56798bda420b0238eeb->enter($__internal_6c1723fc45e6467016daf73376af4d58b794d81408b0a56798bda420b0238eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_62ffe27f746280d51a8534c9876c1f8601059286d0bce95b43ec0ed21571ea75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ffe27f746280d51a8534c9876c1f8601059286d0bce95b43ec0ed21571ea75->enter($__internal_62ffe27f746280d51a8534c9876c1f8601059286d0bce95b43ec0ed21571ea75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6c1723fc45e6467016daf73376af4d58b794d81408b0a56798bda420b0238eeb->leave($__internal_6c1723fc45e6467016daf73376af4d58b794d81408b0a56798bda420b0238eeb_prof);

        
        $__internal_62ffe27f746280d51a8534c9876c1f8601059286d0bce95b43ec0ed21571ea75->leave($__internal_62ffe27f746280d51a8534c9876c1f8601059286d0bce95b43ec0ed21571ea75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

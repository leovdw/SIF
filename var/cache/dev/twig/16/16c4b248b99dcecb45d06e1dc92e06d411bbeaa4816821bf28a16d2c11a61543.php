<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c8aa38a63513c6bcd85fc0640fc42359395a3ca1736da8e378e4f574d5daf593 extends Twig_Template
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
        $__internal_861de32c9129f4e0ad70346937decc44e45f8cb7e8d9210aa3f62b8e9b428b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861de32c9129f4e0ad70346937decc44e45f8cb7e8d9210aa3f62b8e9b428b85->enter($__internal_861de32c9129f4e0ad70346937decc44e45f8cb7e8d9210aa3f62b8e9b428b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_75891827e9e0bbfca8588e776c1a10aeeb235f687ce007adb2b2475a9c0bf351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75891827e9e0bbfca8588e776c1a10aeeb235f687ce007adb2b2475a9c0bf351->enter($__internal_75891827e9e0bbfca8588e776c1a10aeeb235f687ce007adb2b2475a9c0bf351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_861de32c9129f4e0ad70346937decc44e45f8cb7e8d9210aa3f62b8e9b428b85->leave($__internal_861de32c9129f4e0ad70346937decc44e45f8cb7e8d9210aa3f62b8e9b428b85_prof);

        
        $__internal_75891827e9e0bbfca8588e776c1a10aeeb235f687ce007adb2b2475a9c0bf351->leave($__internal_75891827e9e0bbfca8588e776c1a10aeeb235f687ce007adb2b2475a9c0bf351_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

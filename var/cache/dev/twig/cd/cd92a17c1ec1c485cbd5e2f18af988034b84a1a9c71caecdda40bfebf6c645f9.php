<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7a1ff4d69fafe4297ff07b80d3bad589da6cc4bb7437677d1ebd29e1d8836009 extends Twig_Template
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
        $__internal_951f3e35c16d20e0d7dfe5f3c7057565eb04c837244e5bbf028f1b71a4a2426a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951f3e35c16d20e0d7dfe5f3c7057565eb04c837244e5bbf028f1b71a4a2426a->enter($__internal_951f3e35c16d20e0d7dfe5f3c7057565eb04c837244e5bbf028f1b71a4a2426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7acee22aa76cc642929d80e4de46ac1205e56b6e87aea5aaeb897b36be14508e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acee22aa76cc642929d80e4de46ac1205e56b6e87aea5aaeb897b36be14508e->enter($__internal_7acee22aa76cc642929d80e4de46ac1205e56b6e87aea5aaeb897b36be14508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_951f3e35c16d20e0d7dfe5f3c7057565eb04c837244e5bbf028f1b71a4a2426a->leave($__internal_951f3e35c16d20e0d7dfe5f3c7057565eb04c837244e5bbf028f1b71a4a2426a_prof);

        
        $__internal_7acee22aa76cc642929d80e4de46ac1205e56b6e87aea5aaeb897b36be14508e->leave($__internal_7acee22aa76cc642929d80e4de46ac1205e56b6e87aea5aaeb897b36be14508e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

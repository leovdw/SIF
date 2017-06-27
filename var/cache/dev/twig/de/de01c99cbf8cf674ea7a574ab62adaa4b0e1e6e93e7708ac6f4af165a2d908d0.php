<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a6d7f224fb483982ecb35c3201253630288ad604be09118062ea1465ee254f26 extends Twig_Template
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
        $__internal_5e35041da02bde22682d40ab4de473b0441e10c368b34251883789e7e73cf927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e35041da02bde22682d40ab4de473b0441e10c368b34251883789e7e73cf927->enter($__internal_5e35041da02bde22682d40ab4de473b0441e10c368b34251883789e7e73cf927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_44cc60aee5286f22019e365ea4671ad61123c6faf389fc4ff334e37584b20fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cc60aee5286f22019e365ea4671ad61123c6faf389fc4ff334e37584b20fdd->enter($__internal_44cc60aee5286f22019e365ea4671ad61123c6faf389fc4ff334e37584b20fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5e35041da02bde22682d40ab4de473b0441e10c368b34251883789e7e73cf927->leave($__internal_5e35041da02bde22682d40ab4de473b0441e10c368b34251883789e7e73cf927_prof);

        
        $__internal_44cc60aee5286f22019e365ea4671ad61123c6faf389fc4ff334e37584b20fdd->leave($__internal_44cc60aee5286f22019e365ea4671ad61123c6faf389fc4ff334e37584b20fdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

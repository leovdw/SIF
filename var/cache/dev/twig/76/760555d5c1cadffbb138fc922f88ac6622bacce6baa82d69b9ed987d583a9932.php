<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cf4b2a351b0a7dc71d0da11b31f41385433d94303b860989efd71b6afb1ef63a extends Twig_Template
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
        $__internal_c5d803f76bf03776af48fcb2b288288526148e5359513acbb73c47c84c9d3ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d803f76bf03776af48fcb2b288288526148e5359513acbb73c47c84c9d3ff1->enter($__internal_c5d803f76bf03776af48fcb2b288288526148e5359513acbb73c47c84c9d3ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_87f6db0b64256d5cc7a38da1e0c936a9f819dc4224ebdb9a73a4ca37d47178f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f6db0b64256d5cc7a38da1e0c936a9f819dc4224ebdb9a73a4ca37d47178f7->enter($__internal_87f6db0b64256d5cc7a38da1e0c936a9f819dc4224ebdb9a73a4ca37d47178f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c5d803f76bf03776af48fcb2b288288526148e5359513acbb73c47c84c9d3ff1->leave($__internal_c5d803f76bf03776af48fcb2b288288526148e5359513acbb73c47c84c9d3ff1_prof);

        
        $__internal_87f6db0b64256d5cc7a38da1e0c936a9f819dc4224ebdb9a73a4ca37d47178f7->leave($__internal_87f6db0b64256d5cc7a38da1e0c936a9f819dc4224ebdb9a73a4ca37d47178f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_53c4867642e9e90329bed16f1e1a44f4934adf398b54a4d8230aac6b4783161c extends Twig_Template
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
        $__internal_7d5e27f0f5c9648a43da952b28230634b5162c9e8c72dea068d83929838fb865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5e27f0f5c9648a43da952b28230634b5162c9e8c72dea068d83929838fb865->enter($__internal_7d5e27f0f5c9648a43da952b28230634b5162c9e8c72dea068d83929838fb865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_55c60f70d3bd6b19af6874426ab395a0a4ed947688751fc1dbb751147f85a629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c60f70d3bd6b19af6874426ab395a0a4ed947688751fc1dbb751147f85a629->enter($__internal_55c60f70d3bd6b19af6874426ab395a0a4ed947688751fc1dbb751147f85a629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7d5e27f0f5c9648a43da952b28230634b5162c9e8c72dea068d83929838fb865->leave($__internal_7d5e27f0f5c9648a43da952b28230634b5162c9e8c72dea068d83929838fb865_prof);

        
        $__internal_55c60f70d3bd6b19af6874426ab395a0a4ed947688751fc1dbb751147f85a629->leave($__internal_55c60f70d3bd6b19af6874426ab395a0a4ed947688751fc1dbb751147f85a629_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

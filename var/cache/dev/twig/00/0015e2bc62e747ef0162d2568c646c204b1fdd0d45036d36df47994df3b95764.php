<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_cf52ae1929e657828a364b35b27da662062616f65c9aedbbd571ddf692f9cdf1 extends Twig_Template
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
        $__internal_7bbe79fbf7ba96c935f8a35eca7892d3101f84b6bb205bde3aeea5954c198ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbe79fbf7ba96c935f8a35eca7892d3101f84b6bb205bde3aeea5954c198ede->enter($__internal_7bbe79fbf7ba96c935f8a35eca7892d3101f84b6bb205bde3aeea5954c198ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fe8c5f899f09be3a607a43b99e4e27f780018182166f9bf850ea42b9574edf6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8c5f899f09be3a607a43b99e4e27f780018182166f9bf850ea42b9574edf6c->enter($__internal_fe8c5f899f09be3a607a43b99e4e27f780018182166f9bf850ea42b9574edf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7bbe79fbf7ba96c935f8a35eca7892d3101f84b6bb205bde3aeea5954c198ede->leave($__internal_7bbe79fbf7ba96c935f8a35eca7892d3101f84b6bb205bde3aeea5954c198ede_prof);

        
        $__internal_fe8c5f899f09be3a607a43b99e4e27f780018182166f9bf850ea42b9574edf6c->leave($__internal_fe8c5f899f09be3a607a43b99e4e27f780018182166f9bf850ea42b9574edf6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

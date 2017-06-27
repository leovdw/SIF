<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1d23e6afd2b320dc7fd998cba2d00ef82146bef0b8d135d8a4665272b3cadae5 extends Twig_Template
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
        $__internal_61e6c3801071b7777398e33b4352a3af5087eb017f648adfe8414af572f12898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e6c3801071b7777398e33b4352a3af5087eb017f648adfe8414af572f12898->enter($__internal_61e6c3801071b7777398e33b4352a3af5087eb017f648adfe8414af572f12898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_bd7258b24411bb61452ecf38968a809637440d6a8858aab5ad89b810183b3fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7258b24411bb61452ecf38968a809637440d6a8858aab5ad89b810183b3fcc->enter($__internal_bd7258b24411bb61452ecf38968a809637440d6a8858aab5ad89b810183b3fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_61e6c3801071b7777398e33b4352a3af5087eb017f648adfe8414af572f12898->leave($__internal_61e6c3801071b7777398e33b4352a3af5087eb017f648adfe8414af572f12898_prof);

        
        $__internal_bd7258b24411bb61452ecf38968a809637440d6a8858aab5ad89b810183b3fcc->leave($__internal_bd7258b24411bb61452ecf38968a809637440d6a8858aab5ad89b810183b3fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_93d84bdda116938313b4aa41850e71b5f0852caacd8f6e44fad2da4286c57af6 extends Twig_Template
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
        $__internal_33f305567b086f40d5e1778d354528d2e2e2851c8910899ab665cab7b88b03ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f305567b086f40d5e1778d354528d2e2e2851c8910899ab665cab7b88b03ad->enter($__internal_33f305567b086f40d5e1778d354528d2e2e2851c8910899ab665cab7b88b03ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_29cd9d3066102ce09af581ce719279cc36b7ec74e9b3eebee2f7e0c586b896e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cd9d3066102ce09af581ce719279cc36b7ec74e9b3eebee2f7e0c586b896e5->enter($__internal_29cd9d3066102ce09af581ce719279cc36b7ec74e9b3eebee2f7e0c586b896e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_33f305567b086f40d5e1778d354528d2e2e2851c8910899ab665cab7b88b03ad->leave($__internal_33f305567b086f40d5e1778d354528d2e2e2851c8910899ab665cab7b88b03ad_prof);

        
        $__internal_29cd9d3066102ce09af581ce719279cc36b7ec74e9b3eebee2f7e0c586b896e5->leave($__internal_29cd9d3066102ce09af581ce719279cc36b7ec74e9b3eebee2f7e0c586b896e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

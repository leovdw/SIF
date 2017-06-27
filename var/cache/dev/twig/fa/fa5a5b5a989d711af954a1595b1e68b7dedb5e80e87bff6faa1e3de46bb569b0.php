<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_69c1ce4e140873df48052468478b86588f5619fb9ce963ef721d398a1050170b extends Twig_Template
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
        $__internal_98e5c1a7e6214fcaf57122a570c7c4aed449e15d9d8491830d9dc62c32e1d866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e5c1a7e6214fcaf57122a570c7c4aed449e15d9d8491830d9dc62c32e1d866->enter($__internal_98e5c1a7e6214fcaf57122a570c7c4aed449e15d9d8491830d9dc62c32e1d866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ea4db494d35bf80eda7a5354b29f10c655806b6db2cb430e3b7c2adddf45d56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4db494d35bf80eda7a5354b29f10c655806b6db2cb430e3b7c2adddf45d56a->enter($__internal_ea4db494d35bf80eda7a5354b29f10c655806b6db2cb430e3b7c2adddf45d56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_98e5c1a7e6214fcaf57122a570c7c4aed449e15d9d8491830d9dc62c32e1d866->leave($__internal_98e5c1a7e6214fcaf57122a570c7c4aed449e15d9d8491830d9dc62c32e1d866_prof);

        
        $__internal_ea4db494d35bf80eda7a5354b29f10c655806b6db2cb430e3b7c2adddf45d56a->leave($__internal_ea4db494d35bf80eda7a5354b29f10c655806b6db2cb430e3b7c2adddf45d56a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

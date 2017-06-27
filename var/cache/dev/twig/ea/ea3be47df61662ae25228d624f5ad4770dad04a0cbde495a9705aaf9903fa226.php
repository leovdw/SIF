<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fb0d66ba41d55d5bc394bbf1e61940e22f71f2be83c0b4582c192869fb31a2cc extends Twig_Template
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
        $__internal_3ad77a473b7d37ab16e24b125511be71be959600cb7146fd6aa38b00fd15ff0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad77a473b7d37ab16e24b125511be71be959600cb7146fd6aa38b00fd15ff0b->enter($__internal_3ad77a473b7d37ab16e24b125511be71be959600cb7146fd6aa38b00fd15ff0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8eca604cb5170a8aaa8243029343b1d5f15aa7b0202de5fae971d6ab2fc4a3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eca604cb5170a8aaa8243029343b1d5f15aa7b0202de5fae971d6ab2fc4a3b4->enter($__internal_8eca604cb5170a8aaa8243029343b1d5f15aa7b0202de5fae971d6ab2fc4a3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3ad77a473b7d37ab16e24b125511be71be959600cb7146fd6aa38b00fd15ff0b->leave($__internal_3ad77a473b7d37ab16e24b125511be71be959600cb7146fd6aa38b00fd15ff0b_prof);

        
        $__internal_8eca604cb5170a8aaa8243029343b1d5f15aa7b0202de5fae971d6ab2fc4a3b4->leave($__internal_8eca604cb5170a8aaa8243029343b1d5f15aa7b0202de5fae971d6ab2fc4a3b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

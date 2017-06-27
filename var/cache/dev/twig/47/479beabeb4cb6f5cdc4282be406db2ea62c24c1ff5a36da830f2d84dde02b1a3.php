<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_890d8334bbafd45432d3c9fe2e9b269396560ec7172ef157890c8b8cd92a027a extends Twig_Template
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
        $__internal_30f756e61870b31543c10db1d619828381e7f821cd25031eecc2f8efe7e1d04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f756e61870b31543c10db1d619828381e7f821cd25031eecc2f8efe7e1d04b->enter($__internal_30f756e61870b31543c10db1d619828381e7f821cd25031eecc2f8efe7e1d04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_afbca8644e1eeb368bb2428d0d46fa438150e14fbc3358cb80dc5e5ff1c7cd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbca8644e1eeb368bb2428d0d46fa438150e14fbc3358cb80dc5e5ff1c7cd90->enter($__internal_afbca8644e1eeb368bb2428d0d46fa438150e14fbc3358cb80dc5e5ff1c7cd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_30f756e61870b31543c10db1d619828381e7f821cd25031eecc2f8efe7e1d04b->leave($__internal_30f756e61870b31543c10db1d619828381e7f821cd25031eecc2f8efe7e1d04b_prof);

        
        $__internal_afbca8644e1eeb368bb2428d0d46fa438150e14fbc3358cb80dc5e5ff1c7cd90->leave($__internal_afbca8644e1eeb368bb2428d0d46fa438150e14fbc3358cb80dc5e5ff1c7cd90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

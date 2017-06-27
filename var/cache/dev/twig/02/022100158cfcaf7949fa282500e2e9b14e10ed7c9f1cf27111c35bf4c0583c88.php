<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_601694ceff7835b001416ed274cefbaf7ee4a807d0f51757c758bf61d17ba9c8 extends Twig_Template
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
        $__internal_ffe5e7d4d47e0f6a93b6e1d45941dee714714ada46eb99c34bb92d22e04cf7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe5e7d4d47e0f6a93b6e1d45941dee714714ada46eb99c34bb92d22e04cf7c7->enter($__internal_ffe5e7d4d47e0f6a93b6e1d45941dee714714ada46eb99c34bb92d22e04cf7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_35358a23bf70fc3231da6bdf1b4f0ad8cd1909cc130cbe66d3a5e1b44d60cc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35358a23bf70fc3231da6bdf1b4f0ad8cd1909cc130cbe66d3a5e1b44d60cc1e->enter($__internal_35358a23bf70fc3231da6bdf1b4f0ad8cd1909cc130cbe66d3a5e1b44d60cc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ffe5e7d4d47e0f6a93b6e1d45941dee714714ada46eb99c34bb92d22e04cf7c7->leave($__internal_ffe5e7d4d47e0f6a93b6e1d45941dee714714ada46eb99c34bb92d22e04cf7c7_prof);

        
        $__internal_35358a23bf70fc3231da6bdf1b4f0ad8cd1909cc130cbe66d3a5e1b44d60cc1e->leave($__internal_35358a23bf70fc3231da6bdf1b4f0ad8cd1909cc130cbe66d3a5e1b44d60cc1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b4456a72f870828aa5ebac41c7c114373b4f8669444ad6522c0e24f0464e97a5 extends Twig_Template
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
        $__internal_49cee69063d0c4d48b70173145529e668bdeff75829db1041f24879ac65c5093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cee69063d0c4d48b70173145529e668bdeff75829db1041f24879ac65c5093->enter($__internal_49cee69063d0c4d48b70173145529e668bdeff75829db1041f24879ac65c5093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9a373b40cde2a1b7f4f56a74955e120a83600667010265d104a6fc3c8ada1214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a373b40cde2a1b7f4f56a74955e120a83600667010265d104a6fc3c8ada1214->enter($__internal_9a373b40cde2a1b7f4f56a74955e120a83600667010265d104a6fc3c8ada1214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_49cee69063d0c4d48b70173145529e668bdeff75829db1041f24879ac65c5093->leave($__internal_49cee69063d0c4d48b70173145529e668bdeff75829db1041f24879ac65c5093_prof);

        
        $__internal_9a373b40cde2a1b7f4f56a74955e120a83600667010265d104a6fc3c8ada1214->leave($__internal_9a373b40cde2a1b7f4f56a74955e120a83600667010265d104a6fc3c8ada1214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}

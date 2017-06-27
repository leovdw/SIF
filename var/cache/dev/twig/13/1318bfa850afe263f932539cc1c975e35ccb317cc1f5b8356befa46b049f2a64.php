<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_77a6a2a36781d91d54d713136a8110270200f1837bfff144ea9efa45c6afaa7a extends Twig_Template
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
        $__internal_490c277a5414dec6ba72251ce7fad83b758eb561d2d4aa320bf55a22aff4c826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490c277a5414dec6ba72251ce7fad83b758eb561d2d4aa320bf55a22aff4c826->enter($__internal_490c277a5414dec6ba72251ce7fad83b758eb561d2d4aa320bf55a22aff4c826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2b762d41629592d144f7bfb5174b00e3c9e15339f572c569b53e6383bbe05700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b762d41629592d144f7bfb5174b00e3c9e15339f572c569b53e6383bbe05700->enter($__internal_2b762d41629592d144f7bfb5174b00e3c9e15339f572c569b53e6383bbe05700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_490c277a5414dec6ba72251ce7fad83b758eb561d2d4aa320bf55a22aff4c826->leave($__internal_490c277a5414dec6ba72251ce7fad83b758eb561d2d4aa320bf55a22aff4c826_prof);

        
        $__internal_2b762d41629592d144f7bfb5174b00e3c9e15339f572c569b53e6383bbe05700->leave($__internal_2b762d41629592d144f7bfb5174b00e3c9e15339f572c569b53e6383bbe05700_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

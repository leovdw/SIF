<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ffbf513cde20fbb6d50b2c5d567f824e77e0e1f857aa38f33a7199873c68ebd4 extends Twig_Template
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
        $__internal_4172d4efc906dce3ff7077a88ea51e0cc8368cb8d0137045b26febf0405ba57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4172d4efc906dce3ff7077a88ea51e0cc8368cb8d0137045b26febf0405ba57f->enter($__internal_4172d4efc906dce3ff7077a88ea51e0cc8368cb8d0137045b26febf0405ba57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_fe497f553977399ddb2a58b33dc1658969b88222a7242fed5a6076021a1c84d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe497f553977399ddb2a58b33dc1658969b88222a7242fed5a6076021a1c84d9->enter($__internal_fe497f553977399ddb2a58b33dc1658969b88222a7242fed5a6076021a1c84d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4172d4efc906dce3ff7077a88ea51e0cc8368cb8d0137045b26febf0405ba57f->leave($__internal_4172d4efc906dce3ff7077a88ea51e0cc8368cb8d0137045b26febf0405ba57f_prof);

        
        $__internal_fe497f553977399ddb2a58b33dc1658969b88222a7242fed5a6076021a1c84d9->leave($__internal_fe497f553977399ddb2a58b33dc1658969b88222a7242fed5a6076021a1c84d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

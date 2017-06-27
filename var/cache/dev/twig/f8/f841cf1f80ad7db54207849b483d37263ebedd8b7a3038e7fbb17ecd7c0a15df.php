<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d271cd326b9fdbf64aeb2df0d8de6c842dc665583594cdf8ba4ebb5c59d61ab2 extends Twig_Template
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
        $__internal_11046839d07daf3d42fc318c05a00c2ad9b762aae240e3acb2ec316af8132ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11046839d07daf3d42fc318c05a00c2ad9b762aae240e3acb2ec316af8132ab1->enter($__internal_11046839d07daf3d42fc318c05a00c2ad9b762aae240e3acb2ec316af8132ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4505f3f04fd149a775afe653c4af7881102e58bf4d54c31fc0bc993b30cbabb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4505f3f04fd149a775afe653c4af7881102e58bf4d54c31fc0bc993b30cbabb0->enter($__internal_4505f3f04fd149a775afe653c4af7881102e58bf4d54c31fc0bc993b30cbabb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_11046839d07daf3d42fc318c05a00c2ad9b762aae240e3acb2ec316af8132ab1->leave($__internal_11046839d07daf3d42fc318c05a00c2ad9b762aae240e3acb2ec316af8132ab1_prof);

        
        $__internal_4505f3f04fd149a775afe653c4af7881102e58bf4d54c31fc0bc993b30cbabb0->leave($__internal_4505f3f04fd149a775afe653c4af7881102e58bf4d54c31fc0bc993b30cbabb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d74b150aaa2adc9d5fb222ca0238f20be48965250698a4e5b3607acdf0adcaf2 extends Twig_Template
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
        $__internal_394705cf130e880fe10c334b4ecf8888c5cf586e98bad9c363e384f021cab13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394705cf130e880fe10c334b4ecf8888c5cf586e98bad9c363e384f021cab13e->enter($__internal_394705cf130e880fe10c334b4ecf8888c5cf586e98bad9c363e384f021cab13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9ad240d7f6622d6db814a276bcca025b939043f486de150d83d5b04802e189b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad240d7f6622d6db814a276bcca025b939043f486de150d83d5b04802e189b8->enter($__internal_9ad240d7f6622d6db814a276bcca025b939043f486de150d83d5b04802e189b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_394705cf130e880fe10c334b4ecf8888c5cf586e98bad9c363e384f021cab13e->leave($__internal_394705cf130e880fe10c334b4ecf8888c5cf586e98bad9c363e384f021cab13e_prof);

        
        $__internal_9ad240d7f6622d6db814a276bcca025b939043f486de150d83d5b04802e189b8->leave($__internal_9ad240d7f6622d6db814a276bcca025b939043f486de150d83d5b04802e189b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

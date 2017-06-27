<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_20f32bbcd7149e8819622ac7364b7b01e2ce21723b7cd3319855a45987b39414 extends Twig_Template
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
        $__internal_0580bddb34fbecdc5fb76087771df88c3683641c1bcf7506fc55580f15d20f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0580bddb34fbecdc5fb76087771df88c3683641c1bcf7506fc55580f15d20f6b->enter($__internal_0580bddb34fbecdc5fb76087771df88c3683641c1bcf7506fc55580f15d20f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1978b27e9562e4d1e862cd72a1fa25637863a8de5895b5a5295631ecdb8d8e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1978b27e9562e4d1e862cd72a1fa25637863a8de5895b5a5295631ecdb8d8e34->enter($__internal_1978b27e9562e4d1e862cd72a1fa25637863a8de5895b5a5295631ecdb8d8e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0580bddb34fbecdc5fb76087771df88c3683641c1bcf7506fc55580f15d20f6b->leave($__internal_0580bddb34fbecdc5fb76087771df88c3683641c1bcf7506fc55580f15d20f6b_prof);

        
        $__internal_1978b27e9562e4d1e862cd72a1fa25637863a8de5895b5a5295631ecdb8d8e34->leave($__internal_1978b27e9562e4d1e862cd72a1fa25637863a8de5895b5a5295631ecdb8d8e34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

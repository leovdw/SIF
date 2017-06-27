<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_43619055db41eccd23501b26e0bba27838ae6a07994630ea63ea6ce60e41bfd2 extends Twig_Template
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
        $__internal_e8000f5a92f90005190fe8192b891fb95faba495548487c696e89b2fedb08bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8000f5a92f90005190fe8192b891fb95faba495548487c696e89b2fedb08bad->enter($__internal_e8000f5a92f90005190fe8192b891fb95faba495548487c696e89b2fedb08bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_77348eb6ebd0531723fffb521deff120bdba29bfe2399540e5c4012ab504346f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77348eb6ebd0531723fffb521deff120bdba29bfe2399540e5c4012ab504346f->enter($__internal_77348eb6ebd0531723fffb521deff120bdba29bfe2399540e5c4012ab504346f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e8000f5a92f90005190fe8192b891fb95faba495548487c696e89b2fedb08bad->leave($__internal_e8000f5a92f90005190fe8192b891fb95faba495548487c696e89b2fedb08bad_prof);

        
        $__internal_77348eb6ebd0531723fffb521deff120bdba29bfe2399540e5c4012ab504346f->leave($__internal_77348eb6ebd0531723fffb521deff120bdba29bfe2399540e5c4012ab504346f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

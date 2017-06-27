<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7c255ecb1617c9b9d1969fa482a4cebeb72b4d73591a1120bbc9a897c354a3fa extends Twig_Template
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
        $__internal_12be50372853d6ae1de7fa3fb6922b86597aa0d5a7280121db2dbabf002e185f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12be50372853d6ae1de7fa3fb6922b86597aa0d5a7280121db2dbabf002e185f->enter($__internal_12be50372853d6ae1de7fa3fb6922b86597aa0d5a7280121db2dbabf002e185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7c395241710820bc625e67609ce1604df439d011d0df39167104e29251efc230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c395241710820bc625e67609ce1604df439d011d0df39167104e29251efc230->enter($__internal_7c395241710820bc625e67609ce1604df439d011d0df39167104e29251efc230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_12be50372853d6ae1de7fa3fb6922b86597aa0d5a7280121db2dbabf002e185f->leave($__internal_12be50372853d6ae1de7fa3fb6922b86597aa0d5a7280121db2dbabf002e185f_prof);

        
        $__internal_7c395241710820bc625e67609ce1604df439d011d0df39167104e29251efc230->leave($__internal_7c395241710820bc625e67609ce1604df439d011d0df39167104e29251efc230_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}

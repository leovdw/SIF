<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d5836b07860f5117ad8cd3259dbcd62ac73b5432caf93b54eaa61b457b74fc5e extends Twig_Template
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
        $__internal_ddce72fefa48b0b5fe8807d539e5cdf5e2cbae0b26a681b5c363d274602c4a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddce72fefa48b0b5fe8807d539e5cdf5e2cbae0b26a681b5c363d274602c4a3e->enter($__internal_ddce72fefa48b0b5fe8807d539e5cdf5e2cbae0b26a681b5c363d274602c4a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d33a6ac3b3381f11b23ee616036a6287d2395ac3978c3157c9ace454d7615fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33a6ac3b3381f11b23ee616036a6287d2395ac3978c3157c9ace454d7615fc5->enter($__internal_d33a6ac3b3381f11b23ee616036a6287d2395ac3978c3157c9ace454d7615fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ddce72fefa48b0b5fe8807d539e5cdf5e2cbae0b26a681b5c363d274602c4a3e->leave($__internal_ddce72fefa48b0b5fe8807d539e5cdf5e2cbae0b26a681b5c363d274602c4a3e_prof);

        
        $__internal_d33a6ac3b3381f11b23ee616036a6287d2395ac3978c3157c9ace454d7615fc5->leave($__internal_d33a6ac3b3381f11b23ee616036a6287d2395ac3978c3157c9ace454d7615fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}

<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_815aa979c76b6706cae73b5b40f783b30161fe0ef00f68d17dd98f3ddbf48d75 extends Twig_Template
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
        $__internal_d92f62dfcb406e6fe48427fa571e872d66ac92888f98accbd4b65438ecaa9b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92f62dfcb406e6fe48427fa571e872d66ac92888f98accbd4b65438ecaa9b9b->enter($__internal_d92f62dfcb406e6fe48427fa571e872d66ac92888f98accbd4b65438ecaa9b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_aae984166f665bcf5f0f66bafdfd190006fd8dfe2eb430a8518458754958071f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae984166f665bcf5f0f66bafdfd190006fd8dfe2eb430a8518458754958071f->enter($__internal_aae984166f665bcf5f0f66bafdfd190006fd8dfe2eb430a8518458754958071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d92f62dfcb406e6fe48427fa571e872d66ac92888f98accbd4b65438ecaa9b9b->leave($__internal_d92f62dfcb406e6fe48427fa571e872d66ac92888f98accbd4b65438ecaa9b9b_prof);

        
        $__internal_aae984166f665bcf5f0f66bafdfd190006fd8dfe2eb430a8518458754958071f->leave($__internal_aae984166f665bcf5f0f66bafdfd190006fd8dfe2eb430a8518458754958071f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

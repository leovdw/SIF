<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_05de72e21e9ab9b71cdff330f060f5d893bc0b664570eeaec98a39b5099da62f extends Twig_Template
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
        $__internal_43c51e93823599c948beac01daa92f5b46cab3490b56b906359165c0d12ce36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c51e93823599c948beac01daa92f5b46cab3490b56b906359165c0d12ce36f->enter($__internal_43c51e93823599c948beac01daa92f5b46cab3490b56b906359165c0d12ce36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f49fb53b8d264d11ee6085f7a0f9806d388277b2af99c5bfd80425932651f383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49fb53b8d264d11ee6085f7a0f9806d388277b2af99c5bfd80425932651f383->enter($__internal_f49fb53b8d264d11ee6085f7a0f9806d388277b2af99c5bfd80425932651f383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_43c51e93823599c948beac01daa92f5b46cab3490b56b906359165c0d12ce36f->leave($__internal_43c51e93823599c948beac01daa92f5b46cab3490b56b906359165c0d12ce36f_prof);

        
        $__internal_f49fb53b8d264d11ee6085f7a0f9806d388277b2af99c5bfd80425932651f383->leave($__internal_f49fb53b8d264d11ee6085f7a0f9806d388277b2af99c5bfd80425932651f383_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_59b043f76595d6b58fb53686241673af00e29b19c37dea2dd571f1facc043fe0 extends Twig_Template
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
        $__internal_8c4f6cf8a7452099285c960f819df44043a7e08b8a5227f4432c050ac329d2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4f6cf8a7452099285c960f819df44043a7e08b8a5227f4432c050ac329d2e6->enter($__internal_8c4f6cf8a7452099285c960f819df44043a7e08b8a5227f4432c050ac329d2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_84d3cf08bebcbe7792ad65a256841409c99dfb6335ef8ecf23d713be3aced0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d3cf08bebcbe7792ad65a256841409c99dfb6335ef8ecf23d713be3aced0fd->enter($__internal_84d3cf08bebcbe7792ad65a256841409c99dfb6335ef8ecf23d713be3aced0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_8c4f6cf8a7452099285c960f819df44043a7e08b8a5227f4432c050ac329d2e6->leave($__internal_8c4f6cf8a7452099285c960f819df44043a7e08b8a5227f4432c050ac329d2e6_prof);

        
        $__internal_84d3cf08bebcbe7792ad65a256841409c99dfb6335ef8ecf23d713be3aced0fd->leave($__internal_84d3cf08bebcbe7792ad65a256841409c99dfb6335ef8ecf23d713be3aced0fd_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}

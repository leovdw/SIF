<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_c611af02a2eab8e71b24476a749af6e38af91fd9993525a5048415fee68616d4 extends Twig_Template
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
        $__internal_1a6d44997ed81b0c705d0cb64470e5c85b175c173848b59ac6c583e0fcea5ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6d44997ed81b0c705d0cb64470e5c85b175c173848b59ac6c583e0fcea5ab3->enter($__internal_1a6d44997ed81b0c705d0cb64470e5c85b175c173848b59ac6c583e0fcea5ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_b9a16c5379c02b6fa45ef95e8e467c84942e8abdaab438d747dd9b3e018fa68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a16c5379c02b6fa45ef95e8e467c84942e8abdaab438d747dd9b3e018fa68e->enter($__internal_b9a16c5379c02b6fa45ef95e8e467c84942e8abdaab438d747dd9b3e018fa68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_1a6d44997ed81b0c705d0cb64470e5c85b175c173848b59ac6c583e0fcea5ab3->leave($__internal_1a6d44997ed81b0c705d0cb64470e5c85b175c173848b59ac6c583e0fcea5ab3_prof);

        
        $__internal_b9a16c5379c02b6fa45ef95e8e467c84942e8abdaab438d747dd9b3e018fa68e->leave($__internal_b9a16c5379c02b6fa45ef95e8e467c84942e8abdaab438d747dd9b3e018fa68e_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_javascript.html.php";
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
        return new Twig_Source("<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_javascript.html.php");
    }
}

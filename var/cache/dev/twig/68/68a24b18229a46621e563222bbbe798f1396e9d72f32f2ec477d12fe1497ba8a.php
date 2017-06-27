<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ab92c5768077a61d9f5e0542f5fa464fbad77fa800f4988bd0d74acfa9a40c78 extends Twig_Template
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
        $__internal_7d6480852a667fbcd9c5a116c88c9d9ab0a8a3a1a68fde79203f46fc29da010b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6480852a667fbcd9c5a116c88c9d9ab0a8a3a1a68fde79203f46fc29da010b->enter($__internal_7d6480852a667fbcd9c5a116c88c9d9ab0a8a3a1a68fde79203f46fc29da010b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_aed112e1675d60e8b327423d652e8edf82538c34a9a95fb5b4d41d4c8012fdca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed112e1675d60e8b327423d652e8edf82538c34a9a95fb5b4d41d4c8012fdca->enter($__internal_aed112e1675d60e8b327423d652e8edf82538c34a9a95fb5b4d41d4c8012fdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7d6480852a667fbcd9c5a116c88c9d9ab0a8a3a1a68fde79203f46fc29da010b->leave($__internal_7d6480852a667fbcd9c5a116c88c9d9ab0a8a3a1a68fde79203f46fc29da010b_prof);

        
        $__internal_aed112e1675d60e8b327423d652e8edf82538c34a9a95fb5b4d41d4c8012fdca->leave($__internal_aed112e1675d60e8b327423d652e8edf82538c34a9a95fb5b4d41d4c8012fdca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

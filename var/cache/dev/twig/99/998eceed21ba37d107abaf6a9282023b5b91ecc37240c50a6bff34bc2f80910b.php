<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c095cc592d16c9c326026331be47d05d8e2bb8c9b3666e3bf2256c4f105161a5 extends Twig_Template
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
        $__internal_439ac97b9b2a8e32ba1de255f38730f4ceab44ddf7ca4db619291ca494409bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439ac97b9b2a8e32ba1de255f38730f4ceab44ddf7ca4db619291ca494409bbf->enter($__internal_439ac97b9b2a8e32ba1de255f38730f4ceab44ddf7ca4db619291ca494409bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bee6d62d99d6b22afd55115e4b6a3b3f8dd8308f400349f456f6cc2a59b6c46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee6d62d99d6b22afd55115e4b6a3b3f8dd8308f400349f456f6cc2a59b6c46c->enter($__internal_bee6d62d99d6b22afd55115e4b6a3b3f8dd8308f400349f456f6cc2a59b6c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_439ac97b9b2a8e32ba1de255f38730f4ceab44ddf7ca4db619291ca494409bbf->leave($__internal_439ac97b9b2a8e32ba1de255f38730f4ceab44ddf7ca4db619291ca494409bbf_prof);

        
        $__internal_bee6d62d99d6b22afd55115e4b6a3b3f8dd8308f400349f456f6cc2a59b6c46c->leave($__internal_bee6d62d99d6b22afd55115e4b6a3b3f8dd8308f400349f456f6cc2a59b6c46c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

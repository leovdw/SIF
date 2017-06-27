<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_464cdcc55f270f6a1f42a23cbe0c63dd858e425cfe8f89001aea04f03df57622 extends Twig_Template
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
        $__internal_9cda1a8c3d9277b6437a4734981444b2f8339baf1908164f8427fd56628b8a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cda1a8c3d9277b6437a4734981444b2f8339baf1908164f8427fd56628b8a8b->enter($__internal_9cda1a8c3d9277b6437a4734981444b2f8339baf1908164f8427fd56628b8a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_77f634956a5a8611165e7ad20d1b97713d71680219b3ada278d496301253e1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f634956a5a8611165e7ad20d1b97713d71680219b3ada278d496301253e1d3->enter($__internal_77f634956a5a8611165e7ad20d1b97713d71680219b3ada278d496301253e1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9cda1a8c3d9277b6437a4734981444b2f8339baf1908164f8427fd56628b8a8b->leave($__internal_9cda1a8c3d9277b6437a4734981444b2f8339baf1908164f8427fd56628b8a8b_prof);

        
        $__internal_77f634956a5a8611165e7ad20d1b97713d71680219b3ada278d496301253e1d3->leave($__internal_77f634956a5a8611165e7ad20d1b97713d71680219b3ada278d496301253e1d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

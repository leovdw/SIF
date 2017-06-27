<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d69f5d7e1ee1df04cc70cb4b925667db7e7968e8840de1152a3caf727f98b35f extends Twig_Template
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
        $__internal_3fd9aae2ebec9605fbdd81bf4627746bc7b219c603ec1696d4a80c538f09b66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd9aae2ebec9605fbdd81bf4627746bc7b219c603ec1696d4a80c538f09b66f->enter($__internal_3fd9aae2ebec9605fbdd81bf4627746bc7b219c603ec1696d4a80c538f09b66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_761882e1c75d1a144767d28880b7b80999ac85af23d1a081cae3f8a1f9ba6b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761882e1c75d1a144767d28880b7b80999ac85af23d1a081cae3f8a1f9ba6b0e->enter($__internal_761882e1c75d1a144767d28880b7b80999ac85af23d1a081cae3f8a1f9ba6b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3fd9aae2ebec9605fbdd81bf4627746bc7b219c603ec1696d4a80c538f09b66f->leave($__internal_3fd9aae2ebec9605fbdd81bf4627746bc7b219c603ec1696d4a80c538f09b66f_prof);

        
        $__internal_761882e1c75d1a144767d28880b7b80999ac85af23d1a081cae3f8a1f9ba6b0e->leave($__internal_761882e1c75d1a144767d28880b7b80999ac85af23d1a081cae3f8a1f9ba6b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

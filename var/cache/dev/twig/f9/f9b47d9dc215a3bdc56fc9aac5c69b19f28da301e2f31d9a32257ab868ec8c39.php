<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_61057831a4b6427a2b797302592929947c5771492e642090e46036064d6ab762 extends Twig_Template
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
        $__internal_8756a961faa31ce558af0c242b57adff41898fd47fbaf632d6c8cbbfd05ed2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8756a961faa31ce558af0c242b57adff41898fd47fbaf632d6c8cbbfd05ed2be->enter($__internal_8756a961faa31ce558af0c242b57adff41898fd47fbaf632d6c8cbbfd05ed2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f7bccb0f661afd6e41927a82f65268dfa90ce62deecb55daffe3ed35623a9d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bccb0f661afd6e41927a82f65268dfa90ce62deecb55daffe3ed35623a9d55->enter($__internal_f7bccb0f661afd6e41927a82f65268dfa90ce62deecb55daffe3ed35623a9d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8756a961faa31ce558af0c242b57adff41898fd47fbaf632d6c8cbbfd05ed2be->leave($__internal_8756a961faa31ce558af0c242b57adff41898fd47fbaf632d6c8cbbfd05ed2be_prof);

        
        $__internal_f7bccb0f661afd6e41927a82f65268dfa90ce62deecb55daffe3ed35623a9d55->leave($__internal_f7bccb0f661afd6e41927a82f65268dfa90ce62deecb55daffe3ed35623a9d55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

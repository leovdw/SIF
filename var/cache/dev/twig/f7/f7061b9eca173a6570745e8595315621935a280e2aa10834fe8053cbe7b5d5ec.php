<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cd64babc202a3913f43aae31baf686dcf43c1417449cd138c9b060eb9d6d87b6 extends Twig_Template
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
        $__internal_54520131ea44ddeb81bd9d67fb3ee866099ac5a486f7a902205d1edeec1979fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54520131ea44ddeb81bd9d67fb3ee866099ac5a486f7a902205d1edeec1979fd->enter($__internal_54520131ea44ddeb81bd9d67fb3ee866099ac5a486f7a902205d1edeec1979fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f4e5796befc6de02c4f293032cca434d4e35e6bed91fc77d250b5b320548e9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e5796befc6de02c4f293032cca434d4e35e6bed91fc77d250b5b320548e9b5->enter($__internal_f4e5796befc6de02c4f293032cca434d4e35e6bed91fc77d250b5b320548e9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_54520131ea44ddeb81bd9d67fb3ee866099ac5a486f7a902205d1edeec1979fd->leave($__internal_54520131ea44ddeb81bd9d67fb3ee866099ac5a486f7a902205d1edeec1979fd_prof);

        
        $__internal_f4e5796befc6de02c4f293032cca434d4e35e6bed91fc77d250b5b320548e9b5->leave($__internal_f4e5796befc6de02c4f293032cca434d4e35e6bed91fc77d250b5b320548e9b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

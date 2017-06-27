<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_90a11f36229898e510ea015c72d48896bcf521d0d9fdbb9cafa59038f306359d extends Twig_Template
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
        $__internal_0c8429c226ad441af9d7019751e4e65a5c47b20d4d62208d2ab4272b79fea803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8429c226ad441af9d7019751e4e65a5c47b20d4d62208d2ab4272b79fea803->enter($__internal_0c8429c226ad441af9d7019751e4e65a5c47b20d4d62208d2ab4272b79fea803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d80421e696b84856cf37e47497bedfdeeefd47ecf4201fd6e76d24e9e9073080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80421e696b84856cf37e47497bedfdeeefd47ecf4201fd6e76d24e9e9073080->enter($__internal_d80421e696b84856cf37e47497bedfdeeefd47ecf4201fd6e76d24e9e9073080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0c8429c226ad441af9d7019751e4e65a5c47b20d4d62208d2ab4272b79fea803->leave($__internal_0c8429c226ad441af9d7019751e4e65a5c47b20d4d62208d2ab4272b79fea803_prof);

        
        $__internal_d80421e696b84856cf37e47497bedfdeeefd47ecf4201fd6e76d24e9e9073080->leave($__internal_d80421e696b84856cf37e47497bedfdeeefd47ecf4201fd6e76d24e9e9073080_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

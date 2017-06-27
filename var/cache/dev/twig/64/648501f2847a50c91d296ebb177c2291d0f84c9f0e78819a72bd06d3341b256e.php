<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c4404c3064c00face683c4a7dae8befcad774f3b437cd4928ab73396116443f3 extends Twig_Template
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
        $__internal_e561adb2e6a94ebb47da8488f16ce0971cf5e496654c0de95f9acb0bbe52c748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e561adb2e6a94ebb47da8488f16ce0971cf5e496654c0de95f9acb0bbe52c748->enter($__internal_e561adb2e6a94ebb47da8488f16ce0971cf5e496654c0de95f9acb0bbe52c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d021d2e2fe75833b988f0344da4b4eb0ae886849df403e1872c375a4540b753a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d021d2e2fe75833b988f0344da4b4eb0ae886849df403e1872c375a4540b753a->enter($__internal_d021d2e2fe75833b988f0344da4b4eb0ae886849df403e1872c375a4540b753a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e561adb2e6a94ebb47da8488f16ce0971cf5e496654c0de95f9acb0bbe52c748->leave($__internal_e561adb2e6a94ebb47da8488f16ce0971cf5e496654c0de95f9acb0bbe52c748_prof);

        
        $__internal_d021d2e2fe75833b988f0344da4b4eb0ae886849df403e1872c375a4540b753a->leave($__internal_d021d2e2fe75833b988f0344da4b4eb0ae886849df403e1872c375a4540b753a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

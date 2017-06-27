<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_fb19d9d013aadf96da4b9a9f0706de2dfec471fb0aa3ffbaf776f8975cf3bbf6 extends Twig_Template
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
        $__internal_06f0f89a8a96cdeb82c79005fcb311b637ef0f78dc9654258b1dfbd0da98daaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f0f89a8a96cdeb82c79005fcb311b637ef0f78dc9654258b1dfbd0da98daaf->enter($__internal_06f0f89a8a96cdeb82c79005fcb311b637ef0f78dc9654258b1dfbd0da98daaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_922e2f8487311016f0339ab0d5f5786857d8a1336a6cb498e56c3205e409be07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922e2f8487311016f0339ab0d5f5786857d8a1336a6cb498e56c3205e409be07->enter($__internal_922e2f8487311016f0339ab0d5f5786857d8a1336a6cb498e56c3205e409be07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_06f0f89a8a96cdeb82c79005fcb311b637ef0f78dc9654258b1dfbd0da98daaf->leave($__internal_06f0f89a8a96cdeb82c79005fcb311b637ef0f78dc9654258b1dfbd0da98daaf_prof);

        
        $__internal_922e2f8487311016f0339ab0d5f5786857d8a1336a6cb498e56c3205e409be07->leave($__internal_922e2f8487311016f0339ab0d5f5786857d8a1336a6cb498e56c3205e409be07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

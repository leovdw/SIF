<?php

/* ::base.html.twig */
class __TwigTemplate_60fb8b9bbe0b2526c5b48766be6aa7d7e2603c1c58b70bbdc1106a86773b9829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad58d47dc814dbe9634ae328b6a376472e4089361b6fcbad3eb5c5898cead7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad58d47dc814dbe9634ae328b6a376472e4089361b6fcbad3eb5c5898cead7f4->enter($__internal_ad58d47dc814dbe9634ae328b6a376472e4089361b6fcbad3eb5c5898cead7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fcdd9bee8a82b97848f55eee469be06d78e2ee377ef7c75b1978602cfca1ebf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdd9bee8a82b97848f55eee469be06d78e2ee377ef7c75b1978602cfca1ebf3->enter($__internal_fcdd9bee8a82b97848f55eee469be06d78e2ee377ef7c75b1978602cfca1ebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ad58d47dc814dbe9634ae328b6a376472e4089361b6fcbad3eb5c5898cead7f4->leave($__internal_ad58d47dc814dbe9634ae328b6a376472e4089361b6fcbad3eb5c5898cead7f4_prof);

        
        $__internal_fcdd9bee8a82b97848f55eee469be06d78e2ee377ef7c75b1978602cfca1ebf3->leave($__internal_fcdd9bee8a82b97848f55eee469be06d78e2ee377ef7c75b1978602cfca1ebf3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ece1e8874243b6698c4d6e8891f03c8a8a6698683df7738aef50cc61aabe7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ece1e8874243b6698c4d6e8891f03c8a8a6698683df7738aef50cc61aabe7b0->enter($__internal_5ece1e8874243b6698c4d6e8891f03c8a8a6698683df7738aef50cc61aabe7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d786d79562f0736cba4b142ecc0a42cd3237f41473bf8a4bb266791094cb5c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d786d79562f0736cba4b142ecc0a42cd3237f41473bf8a4bb266791094cb5c92->enter($__internal_d786d79562f0736cba4b142ecc0a42cd3237f41473bf8a4bb266791094cb5c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d786d79562f0736cba4b142ecc0a42cd3237f41473bf8a4bb266791094cb5c92->leave($__internal_d786d79562f0736cba4b142ecc0a42cd3237f41473bf8a4bb266791094cb5c92_prof);

        
        $__internal_5ece1e8874243b6698c4d6e8891f03c8a8a6698683df7738aef50cc61aabe7b0->leave($__internal_5ece1e8874243b6698c4d6e8891f03c8a8a6698683df7738aef50cc61aabe7b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_028a40ee22cdcc93d06a5bddc7ed3e6e561eb54703733a4a01eb9f1eac21c8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028a40ee22cdcc93d06a5bddc7ed3e6e561eb54703733a4a01eb9f1eac21c8f5->enter($__internal_028a40ee22cdcc93d06a5bddc7ed3e6e561eb54703733a4a01eb9f1eac21c8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bedc32a5bef85af4eb9880366ba44dd14fe697f231eb44d7b2f99725a6ea8037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedc32a5bef85af4eb9880366ba44dd14fe697f231eb44d7b2f99725a6ea8037->enter($__internal_bedc32a5bef85af4eb9880366ba44dd14fe697f231eb44d7b2f99725a6ea8037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bedc32a5bef85af4eb9880366ba44dd14fe697f231eb44d7b2f99725a6ea8037->leave($__internal_bedc32a5bef85af4eb9880366ba44dd14fe697f231eb44d7b2f99725a6ea8037_prof);

        
        $__internal_028a40ee22cdcc93d06a5bddc7ed3e6e561eb54703733a4a01eb9f1eac21c8f5->leave($__internal_028a40ee22cdcc93d06a5bddc7ed3e6e561eb54703733a4a01eb9f1eac21c8f5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c630452efca3354b050c3668728d80941a922dfd3deef056e08dddc7b9212442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c630452efca3354b050c3668728d80941a922dfd3deef056e08dddc7b9212442->enter($__internal_c630452efca3354b050c3668728d80941a922dfd3deef056e08dddc7b9212442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0d688e066ca696674a88f20d924b1a431697a64656b2ff2e23ddbccd2867f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d688e066ca696674a88f20d924b1a431697a64656b2ff2e23ddbccd2867f2a->enter($__internal_e0d688e066ca696674a88f20d924b1a431697a64656b2ff2e23ddbccd2867f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0d688e066ca696674a88f20d924b1a431697a64656b2ff2e23ddbccd2867f2a->leave($__internal_e0d688e066ca696674a88f20d924b1a431697a64656b2ff2e23ddbccd2867f2a_prof);

        
        $__internal_c630452efca3354b050c3668728d80941a922dfd3deef056e08dddc7b9212442->leave($__internal_c630452efca3354b050c3668728d80941a922dfd3deef056e08dddc7b9212442_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3b5f431a7fedcf87f6263cbceb9a085e977ae15c8ec4d926469f0232d88d497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b5f431a7fedcf87f6263cbceb9a085e977ae15c8ec4d926469f0232d88d497->enter($__internal_b3b5f431a7fedcf87f6263cbceb9a085e977ae15c8ec4d926469f0232d88d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45d1fdb8023779f4e99387186061da39f4bd0761264b7c8157d1ca1fa44d7bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d1fdb8023779f4e99387186061da39f4bd0761264b7c8157d1ca1fa44d7bb2->enter($__internal_45d1fdb8023779f4e99387186061da39f4bd0761264b7c8157d1ca1fa44d7bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_45d1fdb8023779f4e99387186061da39f4bd0761264b7c8157d1ca1fa44d7bb2->leave($__internal_45d1fdb8023779f4e99387186061da39f4bd0761264b7c8157d1ca1fa44d7bb2_prof);

        
        $__internal_b3b5f431a7fedcf87f6263cbceb9a085e977ae15c8ec4d926469f0232d88d497->leave($__internal_b3b5f431a7fedcf87f6263cbceb9a085e977ae15c8ec4d926469f0232d88d497_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/Site/MarcheStp/app/Resources/views/base.html.twig");
    }
}

<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b306944a3cda00aa007709c8e167c8040a0666befa56741ce6b84fad5cd57160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b26691f41e1426e4f1f45467b8d52f55d407fb708c22c1a4907eb19a8da2376e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26691f41e1426e4f1f45467b8d52f55d407fb708c22c1a4907eb19a8da2376e->enter($__internal_b26691f41e1426e4f1f45467b8d52f55d407fb708c22c1a4907eb19a8da2376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_aa5da7394b2223b072acb78b2fc0a703cb0da0dd3def1c7ce7ee2c99740bbe30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5da7394b2223b072acb78b2fc0a703cb0da0dd3def1c7ce7ee2c99740bbe30->enter($__internal_aa5da7394b2223b072acb78b2fc0a703cb0da0dd3def1c7ce7ee2c99740bbe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b26691f41e1426e4f1f45467b8d52f55d407fb708c22c1a4907eb19a8da2376e->leave($__internal_b26691f41e1426e4f1f45467b8d52f55d407fb708c22c1a4907eb19a8da2376e_prof);

        
        $__internal_aa5da7394b2223b072acb78b2fc0a703cb0da0dd3def1c7ce7ee2c99740bbe30->leave($__internal_aa5da7394b2223b072acb78b2fc0a703cb0da0dd3def1c7ce7ee2c99740bbe30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55adf185fc448b4e2d1f4979d2917beab1b3b5939819f4e6b67ab9ee45bdbf81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55adf185fc448b4e2d1f4979d2917beab1b3b5939819f4e6b67ab9ee45bdbf81->enter($__internal_55adf185fc448b4e2d1f4979d2917beab1b3b5939819f4e6b67ab9ee45bdbf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be2e15aad1f340b324ef526ff5452b3fdbd395b3101507730ff93a79efa90c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2e15aad1f340b324ef526ff5452b3fdbd395b3101507730ff93a79efa90c22->enter($__internal_be2e15aad1f340b324ef526ff5452b3fdbd395b3101507730ff93a79efa90c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_be2e15aad1f340b324ef526ff5452b3fdbd395b3101507730ff93a79efa90c22->leave($__internal_be2e15aad1f340b324ef526ff5452b3fdbd395b3101507730ff93a79efa90c22_prof);

        
        $__internal_55adf185fc448b4e2d1f4979d2917beab1b3b5939819f4e6b67ab9ee45bdbf81->leave($__internal_55adf185fc448b4e2d1f4979d2917beab1b3b5939819f4e6b67ab9ee45bdbf81_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea99880a19db523f8ea859de67f1b87e4b5fa074c9095dba31a4811608f845d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea99880a19db523f8ea859de67f1b87e4b5fa074c9095dba31a4811608f845d2->enter($__internal_ea99880a19db523f8ea859de67f1b87e4b5fa074c9095dba31a4811608f845d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64d3017518ba3aae144ede732e3086f25d1539627445604d94ca16e5b07eeb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d3017518ba3aae144ede732e3086f25d1539627445604d94ca16e5b07eeb47->enter($__internal_64d3017518ba3aae144ede732e3086f25d1539627445604d94ca16e5b07eeb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_64d3017518ba3aae144ede732e3086f25d1539627445604d94ca16e5b07eeb47->leave($__internal_64d3017518ba3aae144ede732e3086f25d1539627445604d94ca16e5b07eeb47_prof);

        
        $__internal_ea99880a19db523f8ea859de67f1b87e4b5fa074c9095dba31a4811608f845d2->leave($__internal_ea99880a19db523f8ea859de67f1b87e4b5fa074c9095dba31a4811608f845d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_825d729f6c0b35fc4806cad6d5c052b7bc6a57e79cf44b0d99e9ea4fa324f219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825d729f6c0b35fc4806cad6d5c052b7bc6a57e79cf44b0d99e9ea4fa324f219->enter($__internal_825d729f6c0b35fc4806cad6d5c052b7bc6a57e79cf44b0d99e9ea4fa324f219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d67fb9709a469f0f0e1835e1b856bbcf4a05b489962fe71b04a7e956e226783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d67fb9709a469f0f0e1835e1b856bbcf4a05b489962fe71b04a7e956e226783->enter($__internal_5d67fb9709a469f0f0e1835e1b856bbcf4a05b489962fe71b04a7e956e226783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d67fb9709a469f0f0e1835e1b856bbcf4a05b489962fe71b04a7e956e226783->leave($__internal_5d67fb9709a469f0f0e1835e1b856bbcf4a05b489962fe71b04a7e956e226783_prof);

        
        $__internal_825d729f6c0b35fc4806cad6d5c052b7bc6a57e79cf44b0d99e9ea4fa324f219->leave($__internal_825d729f6c0b35fc4806cad6d5c052b7bc6a57e79cf44b0d99e9ea4fa324f219_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

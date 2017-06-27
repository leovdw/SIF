<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_146019298c2af50c86d3dd4e368cc1fa038c93ef8b82984508ea08e7ec19c4cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bae505b74b5b946e0af55ad92e9dda2f903d4b22f4020ecfe329d54cb4c0d0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae505b74b5b946e0af55ad92e9dda2f903d4b22f4020ecfe329d54cb4c0d0a8->enter($__internal_bae505b74b5b946e0af55ad92e9dda2f903d4b22f4020ecfe329d54cb4c0d0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_080f63843a4fe6464c54aefd2faff217f5db4180ba193c2bd683b3cda7b105d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080f63843a4fe6464c54aefd2faff217f5db4180ba193c2bd683b3cda7b105d7->enter($__internal_080f63843a4fe6464c54aefd2faff217f5db4180ba193c2bd683b3cda7b105d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae505b74b5b946e0af55ad92e9dda2f903d4b22f4020ecfe329d54cb4c0d0a8->leave($__internal_bae505b74b5b946e0af55ad92e9dda2f903d4b22f4020ecfe329d54cb4c0d0a8_prof);

        
        $__internal_080f63843a4fe6464c54aefd2faff217f5db4180ba193c2bd683b3cda7b105d7->leave($__internal_080f63843a4fe6464c54aefd2faff217f5db4180ba193c2bd683b3cda7b105d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7edffa475b72f8d1923a7e68e25c9ec5e1f0e8d2190e35edc08d28da556a95bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edffa475b72f8d1923a7e68e25c9ec5e1f0e8d2190e35edc08d28da556a95bf->enter($__internal_7edffa475b72f8d1923a7e68e25c9ec5e1f0e8d2190e35edc08d28da556a95bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f95f56e81a0a8a16ea32d8aac1e9e459cc58178eb2853f03f26ab1956275961e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95f56e81a0a8a16ea32d8aac1e9e459cc58178eb2853f03f26ab1956275961e->enter($__internal_f95f56e81a0a8a16ea32d8aac1e9e459cc58178eb2853f03f26ab1956275961e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f95f56e81a0a8a16ea32d8aac1e9e459cc58178eb2853f03f26ab1956275961e->leave($__internal_f95f56e81a0a8a16ea32d8aac1e9e459cc58178eb2853f03f26ab1956275961e_prof);

        
        $__internal_7edffa475b72f8d1923a7e68e25c9ec5e1f0e8d2190e35edc08d28da556a95bf->leave($__internal_7edffa475b72f8d1923a7e68e25c9ec5e1f0e8d2190e35edc08d28da556a95bf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf6ea8a0e987f808c94088d9be222acaf16ced0e538e46bfefe4fdfae86f6a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6ea8a0e987f808c94088d9be222acaf16ced0e538e46bfefe4fdfae86f6a42->enter($__internal_cf6ea8a0e987f808c94088d9be222acaf16ced0e538e46bfefe4fdfae86f6a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8aff0ba391939bcadf301e03c5c3972543add36a258d930f39813857e591a2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aff0ba391939bcadf301e03c5c3972543add36a258d930f39813857e591a2ed->enter($__internal_8aff0ba391939bcadf301e03c5c3972543add36a258d930f39813857e591a2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8aff0ba391939bcadf301e03c5c3972543add36a258d930f39813857e591a2ed->leave($__internal_8aff0ba391939bcadf301e03c5c3972543add36a258d930f39813857e591a2ed_prof);

        
        $__internal_cf6ea8a0e987f808c94088d9be222acaf16ced0e538e46bfefe4fdfae86f6a42->leave($__internal_cf6ea8a0e987f808c94088d9be222acaf16ced0e538e46bfefe4fdfae86f6a42_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_85c0151fa8d1cdf8c398d8efa6cc0ef246495c443ed5aee12a612a77859dcb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c0151fa8d1cdf8c398d8efa6cc0ef246495c443ed5aee12a612a77859dcb31->enter($__internal_85c0151fa8d1cdf8c398d8efa6cc0ef246495c443ed5aee12a612a77859dcb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_888a868b8cc5dad8e1fd433c03e243e00d0b6d3ab2e686f545e443d4d4c769d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888a868b8cc5dad8e1fd433c03e243e00d0b6d3ab2e686f545e443d4d4c769d8->enter($__internal_888a868b8cc5dad8e1fd433c03e243e00d0b6d3ab2e686f545e443d4d4c769d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_888a868b8cc5dad8e1fd433c03e243e00d0b6d3ab2e686f545e443d4d4c769d8->leave($__internal_888a868b8cc5dad8e1fd433c03e243e00d0b6d3ab2e686f545e443d4d4c769d8_prof);

        
        $__internal_85c0151fa8d1cdf8c398d8efa6cc0ef246495c443ed5aee12a612a77859dcb31->leave($__internal_85c0151fa8d1cdf8c398d8efa6cc0ef246495c443ed5aee12a612a77859dcb31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

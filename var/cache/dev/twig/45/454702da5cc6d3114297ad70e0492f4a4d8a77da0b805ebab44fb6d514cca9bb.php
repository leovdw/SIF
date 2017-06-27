<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_a46f5cd7d82f63c0159149384a2046fcc283faa16c8861e5b158ce07e56ca55e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8745815a48a75f503ba419264df23c6ea1c570909a02ceb33a643c002e6e95d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8745815a48a75f503ba419264df23c6ea1c570909a02ceb33a643c002e6e95d1->enter($__internal_8745815a48a75f503ba419264df23c6ea1c570909a02ceb33a643c002e6e95d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_fcc359129c9076cdec65d77feac6b8f7bfe7ca63b02c0ffe8be5371db089db98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc359129c9076cdec65d77feac6b8f7bfe7ca63b02c0ffe8be5371db089db98->enter($__internal_fcc359129c9076cdec65d77feac6b8f7bfe7ca63b02c0ffe8be5371db089db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_8745815a48a75f503ba419264df23c6ea1c570909a02ceb33a643c002e6e95d1->leave($__internal_8745815a48a75f503ba419264df23c6ea1c570909a02ceb33a643c002e6e95d1_prof);

        
        $__internal_fcc359129c9076cdec65d77feac6b8f7bfe7ca63b02c0ffe8be5371db089db98->leave($__internal_fcc359129c9076cdec65d77feac6b8f7bfe7ca63b02c0ffe8be5371db089db98_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_481afc9292fa0231c4346e22a088678de49c18b188e7495d1e2d9a6691ef9cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481afc9292fa0231c4346e22a088678de49c18b188e7495d1e2d9a6691ef9cae->enter($__internal_481afc9292fa0231c4346e22a088678de49c18b188e7495d1e2d9a6691ef9cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_2b3a0b7d83af07228486ebc5611ee3bfee36326fdd6064db182ed4c3c44af29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3a0b7d83af07228486ebc5611ee3bfee36326fdd6064db182ed4c3c44af29b->enter($__internal_2b3a0b7d83af07228486ebc5611ee3bfee36326fdd6064db182ed4c3c44af29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2b3a0b7d83af07228486ebc5611ee3bfee36326fdd6064db182ed4c3c44af29b->leave($__internal_2b3a0b7d83af07228486ebc5611ee3bfee36326fdd6064db182ed4c3c44af29b_prof);

        
        $__internal_481afc9292fa0231c4346e22a088678de49c18b188e7495d1e2d9a6691ef9cae->leave($__internal_481afc9292fa0231c4346e22a088678de49c18b188e7495d1e2d9a6691ef9cae_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_3e7aa384d9594e4b4c435e0b42c4cf24e3a9dae58284bdde8c6380ab291446c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7aa384d9594e4b4c435e0b42c4cf24e3a9dae58284bdde8c6380ab291446c9->enter($__internal_3e7aa384d9594e4b4c435e0b42c4cf24e3a9dae58284bdde8c6380ab291446c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_65ba4e19bde4c2b4fd12af94be6e8e89f75367e82720b88ed20534b8a60749c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ba4e19bde4c2b4fd12af94be6e8e89f75367e82720b88ed20534b8a60749c0->enter($__internal_65ba4e19bde4c2b4fd12af94be6e8e89f75367e82720b88ed20534b8a60749c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if (($context["download_uri"] ?? $this->getContext($context, "download_uri"))) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["download_label"] ?? $this->getContext($context, "download_label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["download_label"] ?? $this->getContext($context, "download_label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_65ba4e19bde4c2b4fd12af94be6e8e89f75367e82720b88ed20534b8a60749c0->leave($__internal_65ba4e19bde4c2b4fd12af94be6e8e89f75367e82720b88ed20534b8a60749c0_prof);

        
        $__internal_3e7aa384d9594e4b4c435e0b42c4cf24e3a9dae58284bdde8c6380ab291446c9->leave($__internal_3e7aa384d9594e4b4c435e0b42c4cf24e3a9dae58284bdde8c6380ab291446c9_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_da07ac1f7e5a0ca78d01ba90824ab88d1f3234579bff1092416c56a3daa89af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da07ac1f7e5a0ca78d01ba90824ab88d1f3234579bff1092416c56a3daa89af9->enter($__internal_da07ac1f7e5a0ca78d01ba90824ab88d1f3234579bff1092416c56a3daa89af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_83a4714e37e9d10ef46d23d9a063c0a773243113cbaf667e2efc06d66480a111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a4714e37e9d10ef46d23d9a063c0a773243113cbaf667e2efc06d66480a111->enter($__internal_83a4714e37e9d10ef46d23d9a063c0a773243113cbaf667e2efc06d66480a111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_83a4714e37e9d10ef46d23d9a063c0a773243113cbaf667e2efc06d66480a111->leave($__internal_83a4714e37e9d10ef46d23d9a063c0a773243113cbaf667e2efc06d66480a111_prof);

        
        $__internal_da07ac1f7e5a0ca78d01ba90824ab88d1f3234579bff1092416c56a3daa89af9->leave($__internal_da07ac1f7e5a0ca78d01ba90824ab88d1f3234579bff1092416c56a3daa89af9_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_263ddb51fb24a2975e8d1c7692086863b59bce81179b3c41b901155e5305aa05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263ddb51fb24a2975e8d1c7692086863b59bce81179b3c41b901155e5305aa05->enter($__internal_263ddb51fb24a2975e8d1c7692086863b59bce81179b3c41b901155e5305aa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_27135cae3893a1019bb2126750869538266ea4d7c2647e9e97fdc8f5d75789f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27135cae3893a1019bb2126750869538266ea4d7c2647e9e97fdc8f5d75789f9->enter($__internal_27135cae3893a1019bb2126750869538266ea4d7c2647e9e97fdc8f5d75789f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if (($context["image_uri"] ?? $this->getContext($context, "image_uri"))) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["image_uri"] ?? $this->getContext($context, "image_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["image_uri"] ?? $this->getContext($context, "image_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if (($context["download_uri"] ?? $this->getContext($context, "download_uri"))) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["download_label"] ?? $this->getContext($context, "download_label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["download_label"] ?? $this->getContext($context, "download_label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_27135cae3893a1019bb2126750869538266ea4d7c2647e9e97fdc8f5d75789f9->leave($__internal_27135cae3893a1019bb2126750869538266ea4d7c2647e9e97fdc8f5d75789f9_prof);

        
        $__internal_263ddb51fb24a2975e8d1c7692086863b59bce81179b3c41b901155e5305aa05->leave($__internal_263ddb51fb24a2975e8d1c7692086863b59bce81179b3c41b901155e5305aa05_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  191 => 38,  188 => 37,  180 => 35,  178 => 34,  175 => 33,  169 => 31,  167 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}

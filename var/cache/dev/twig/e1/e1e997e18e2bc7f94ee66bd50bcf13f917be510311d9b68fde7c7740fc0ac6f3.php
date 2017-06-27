<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_c3019afe244fa8fd07a34829f5fa5b7eb02ccea0af9cf8d049244a5765ae4e3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d31dc7a06bf8080effd932324e8333e11455d2a0212988e847a6ce5d94eaa83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d31dc7a06bf8080effd932324e8333e11455d2a0212988e847a6ce5d94eaa83->enter($__internal_4d31dc7a06bf8080effd932324e8333e11455d2a0212988e847a6ce5d94eaa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_066aa36a6ea3d14660c336b3ccc14b8b6cdbc2f81b7281ab7a3c470d1270da8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066aa36a6ea3d14660c336b3ccc14b8b6cdbc2f81b7281ab7a3c470d1270da8f->enter($__internal_066aa36a6ea3d14660c336b3ccc14b8b6cdbc2f81b7281ab7a3c470d1270da8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_4d31dc7a06bf8080effd932324e8333e11455d2a0212988e847a6ce5d94eaa83->leave($__internal_4d31dc7a06bf8080effd932324e8333e11455d2a0212988e847a6ce5d94eaa83_prof);

        
        $__internal_066aa36a6ea3d14660c336b3ccc14b8b6cdbc2f81b7281ab7a3c470d1270da8f->leave($__internal_066aa36a6ea3d14660c336b3ccc14b8b6cdbc2f81b7281ab7a3c470d1270da8f_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c19caac1705ea76b99b9585ec5c0e73a0de20e5601623c01242d9a81ef747fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19caac1705ea76b99b9585ec5c0e73a0de20e5601623c01242d9a81ef747fcc->enter($__internal_c19caac1705ea76b99b9585ec5c0e73a0de20e5601623c01242d9a81ef747fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_89c3fc8ba879c7dbd7f8795802d80e476291e24c92e80f587ae8dd36842cfe8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c3fc8ba879c7dbd7f8795802d80e476291e24c92e80f587ae8dd36842cfe8a->enter($__internal_89c3fc8ba879c7dbd7f8795802d80e476291e24c92e80f587ae8dd36842cfe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_89c3fc8ba879c7dbd7f8795802d80e476291e24c92e80f587ae8dd36842cfe8a->leave($__internal_89c3fc8ba879c7dbd7f8795802d80e476291e24c92e80f587ae8dd36842cfe8a_prof);

        
        $__internal_c19caac1705ea76b99b9585ec5c0e73a0de20e5601623c01242d9a81ef747fcc->leave($__internal_c19caac1705ea76b99b9585ec5c0e73a0de20e5601623c01242d9a81ef747fcc_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_b2ab70de63838f3e7892ebd4b94f033e78164dcd37e8f8427427b5c805e593ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ab70de63838f3e7892ebd4b94f033e78164dcd37e8f8427427b5c805e593ab->enter($__internal_b2ab70de63838f3e7892ebd4b94f033e78164dcd37e8f8427427b5c805e593ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_cd4605afd78aa00bda7b63b41924a1be2595a63f49616641d483f631293438d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4605afd78aa00bda7b63b41924a1be2595a63f49616641d483f631293438d0->enter($__internal_cd4605afd78aa00bda7b63b41924a1be2595a63f49616641d483f631293438d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_cd4605afd78aa00bda7b63b41924a1be2595a63f49616641d483f631293438d0->leave($__internal_cd4605afd78aa00bda7b63b41924a1be2595a63f49616641d483f631293438d0_prof);

        
        $__internal_b2ab70de63838f3e7892ebd4b94f033e78164dcd37e8f8427427b5c805e593ab->leave($__internal_b2ab70de63838f3e7892ebd4b94f033e78164dcd37e8f8427427b5c805e593ab_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_cfd45d3696838d86ecd799abc5293d077302452bbe73db60a65a484e070250e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd45d3696838d86ecd799abc5293d077302452bbe73db60a65a484e070250e2->enter($__internal_cfd45d3696838d86ecd799abc5293d077302452bbe73db60a65a484e070250e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_72adbb4583daf7a4da66080f5777656630d24da931448ca257aaeaae641fdeaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72adbb4583daf7a4da66080f5777656630d24da931448ca257aaeaae641fdeaa->enter($__internal_72adbb4583daf7a4da66080f5777656630d24da931448ca257aaeaae641fdeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_72adbb4583daf7a4da66080f5777656630d24da931448ca257aaeaae641fdeaa->leave($__internal_72adbb4583daf7a4da66080f5777656630d24da931448ca257aaeaae641fdeaa_prof);

        
        $__internal_cfd45d3696838d86ecd799abc5293d077302452bbe73db60a65a484e070250e2->leave($__internal_cfd45d3696838d86ecd799abc5293d077302452bbe73db60a65a484e070250e2_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_c767992658de07162d6d39fda6d5a5c970947d088128fcca521c71ac88006892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c767992658de07162d6d39fda6d5a5c970947d088128fcca521c71ac88006892->enter($__internal_c767992658de07162d6d39fda6d5a5c970947d088128fcca521c71ac88006892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_c16da1b4e7d312805aa7dcd8e35d7a981c93f4a3281e0bd84f9561eba8fe1489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16da1b4e7d312805aa7dcd8e35d7a981c93f4a3281e0bd84f9561eba8fe1489->enter($__internal_c16da1b4e7d312805aa7dcd8e35d7a981c93f4a3281e0bd84f9561eba8fe1489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c16da1b4e7d312805aa7dcd8e35d7a981c93f4a3281e0bd84f9561eba8fe1489->leave($__internal_c16da1b4e7d312805aa7dcd8e35d7a981c93f4a3281e0bd84f9561eba8fe1489_prof);

        
        $__internal_c767992658de07162d6d39fda6d5a5c970947d088128fcca521c71ac88006892->leave($__internal_c767992658de07162d6d39fda6d5a5c970947d088128fcca521c71ac88006892_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_c7608829bcdb2be0f129b406be2950b85fd0e069454e2fabfc3f982bff0c09c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7608829bcdb2be0f129b406be2950b85fd0e069454e2fabfc3f982bff0c09c8->enter($__internal_c7608829bcdb2be0f129b406be2950b85fd0e069454e2fabfc3f982bff0c09c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_cde2047ef36f2ed656bb7ce7a092e7ced72dd7303c7e277848e7a2f07105a866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde2047ef36f2ed656bb7ce7a092e7ced72dd7303c7e277848e7a2f07105a866->enter($__internal_cde2047ef36f2ed656bb7ce7a092e7ced72dd7303c7e277848e7a2f07105a866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_cde2047ef36f2ed656bb7ce7a092e7ced72dd7303c7e277848e7a2f07105a866->leave($__internal_cde2047ef36f2ed656bb7ce7a092e7ced72dd7303c7e277848e7a2f07105a866_prof);

        
        $__internal_c7608829bcdb2be0f129b406be2950b85fd0e069454e2fabfc3f982bff0c09c8->leave($__internal_c7608829bcdb2be0f129b406be2950b85fd0e069454e2fabfc3f982bff0c09c8_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c993e04a6facb779d888b95de200a8a0eddb0e302662f371fb931dc706ca728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c993e04a6facb779d888b95de200a8a0eddb0e302662f371fb931dc706ca728->enter($__internal_5c993e04a6facb779d888b95de200a8a0eddb0e302662f371fb931dc706ca728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a789c110a84aea4a853adb2997563c64d75e10a8b80946ff24599e3630819810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a789c110a84aea4a853adb2997563c64d75e10a8b80946ff24599e3630819810->enter($__internal_a789c110a84aea4a853adb2997563c64d75e10a8b80946ff24599e3630819810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_a789c110a84aea4a853adb2997563c64d75e10a8b80946ff24599e3630819810->leave($__internal_a789c110a84aea4a853adb2997563c64d75e10a8b80946ff24599e3630819810_prof);

        
        $__internal_5c993e04a6facb779d888b95de200a8a0eddb0e302662f371fb931dc706ca728->leave($__internal_5c993e04a6facb779d888b95de200a8a0eddb0e302662f371fb931dc706ca728_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6d4ebe2ff471cb9342f34fa6add4d16e0379f67f11355b41fdb4bae3cb56dae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4ebe2ff471cb9342f34fa6add4d16e0379f67f11355b41fdb4bae3cb56dae0->enter($__internal_6d4ebe2ff471cb9342f34fa6add4d16e0379f67f11355b41fdb4bae3cb56dae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_a54e0669fe7ae80c430fc810e2bf9d1e2b772a3cc44887da68908a6255c7f51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54e0669fe7ae80c430fc810e2bf9d1e2b772a3cc44887da68908a6255c7f51f->enter($__internal_a54e0669fe7ae80c430fc810e2bf9d1e2b772a3cc44887da68908a6255c7f51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_a54e0669fe7ae80c430fc810e2bf9d1e2b772a3cc44887da68908a6255c7f51f->leave($__internal_a54e0669fe7ae80c430fc810e2bf9d1e2b772a3cc44887da68908a6255c7f51f_prof);

        
        $__internal_6d4ebe2ff471cb9342f34fa6add4d16e0379f67f11355b41fdb4bae3cb56dae0->leave($__internal_6d4ebe2ff471cb9342f34fa6add4d16e0379f67f11355b41fdb4bae3cb56dae0_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_2e958da65168437beafe502584e832a1bf3c79d84e18080e902a97048742ac38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e958da65168437beafe502584e832a1bf3c79d84e18080e902a97048742ac38->enter($__internal_2e958da65168437beafe502584e832a1bf3c79d84e18080e902a97048742ac38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2a1d9ba2eb16014b73888934a57eb578c996e74ebb8c3e526a2e55112de2d632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1d9ba2eb16014b73888934a57eb578c996e74ebb8c3e526a2e55112de2d632->enter($__internal_2a1d9ba2eb16014b73888934a57eb578c996e74ebb8c3e526a2e55112de2d632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_2a1d9ba2eb16014b73888934a57eb578c996e74ebb8c3e526a2e55112de2d632->leave($__internal_2a1d9ba2eb16014b73888934a57eb578c996e74ebb8c3e526a2e55112de2d632_prof);

        
        $__internal_2e958da65168437beafe502584e832a1bf3c79d84e18080e902a97048742ac38->leave($__internal_2e958da65168437beafe502584e832a1bf3c79d84e18080e902a97048742ac38_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_50e41b5281f148f575b7c80a775d29513c7b5e5a370b07cdf97256c62f3afc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e41b5281f148f575b7c80a775d29513c7b5e5a370b07cdf97256c62f3afc70->enter($__internal_50e41b5281f148f575b7c80a775d29513c7b5e5a370b07cdf97256c62f3afc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_1d555fe91aefa77a3d55464e733e37887c3cdeab738074369e728e68eb4ca702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d555fe91aefa77a3d55464e733e37887c3cdeab738074369e728e68eb4ca702->enter($__internal_1d555fe91aefa77a3d55464e733e37887c3cdeab738074369e728e68eb4ca702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_1d555fe91aefa77a3d55464e733e37887c3cdeab738074369e728e68eb4ca702->leave($__internal_1d555fe91aefa77a3d55464e733e37887c3cdeab738074369e728e68eb4ca702_prof);

        
        $__internal_50e41b5281f148f575b7c80a775d29513c7b5e5a370b07cdf97256c62f3afc70->leave($__internal_50e41b5281f148f575b7c80a775d29513c7b5e5a370b07cdf97256c62f3afc70_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_fa13780ae4c0568c5c12f58f4a0b38fd8bcc4479df1359ec0f4babc9ccf7f2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa13780ae4c0568c5c12f58f4a0b38fd8bcc4479df1359ec0f4babc9ccf7f2a9->enter($__internal_fa13780ae4c0568c5c12f58f4a0b38fd8bcc4479df1359ec0f4babc9ccf7f2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_31830ce6d0b832de65edcc7aa5f2767d7a33d3849e0be1a366be34dec9274c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31830ce6d0b832de65edcc7aa5f2767d7a33d3849e0be1a366be34dec9274c19->enter($__internal_31830ce6d0b832de65edcc7aa5f2767d7a33d3849e0be1a366be34dec9274c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_31830ce6d0b832de65edcc7aa5f2767d7a33d3849e0be1a366be34dec9274c19->leave($__internal_31830ce6d0b832de65edcc7aa5f2767d7a33d3849e0be1a366be34dec9274c19_prof);

        
        $__internal_fa13780ae4c0568c5c12f58f4a0b38fd8bcc4479df1359ec0f4babc9ccf7f2a9->leave($__internal_fa13780ae4c0568c5c12f58f4a0b38fd8bcc4479df1359ec0f4babc9ccf7f2a9_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_7e744e523822617578535c280cac3ae448b30037040ab3161d38621e65058a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e744e523822617578535c280cac3ae448b30037040ab3161d38621e65058a04->enter($__internal_7e744e523822617578535c280cac3ae448b30037040ab3161d38621e65058a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_19c4dcab1b5178977e6b78474cbe2045d75f3c008fce81dffd05753e17a038c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c4dcab1b5178977e6b78474cbe2045d75f3c008fce81dffd05753e17a038c9->enter($__internal_19c4dcab1b5178977e6b78474cbe2045d75f3c008fce81dffd05753e17a038c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_19c4dcab1b5178977e6b78474cbe2045d75f3c008fce81dffd05753e17a038c9->leave($__internal_19c4dcab1b5178977e6b78474cbe2045d75f3c008fce81dffd05753e17a038c9_prof);

        
        $__internal_7e744e523822617578535c280cac3ae448b30037040ab3161d38621e65058a04->leave($__internal_7e744e523822617578535c280cac3ae448b30037040ab3161d38621e65058a04_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_364df4c7ed5581960b237d87f0a52f081b39818063713680f10266f1dd8ecec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364df4c7ed5581960b237d87f0a52f081b39818063713680f10266f1dd8ecec4->enter($__internal_364df4c7ed5581960b237d87f0a52f081b39818063713680f10266f1dd8ecec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_7568a78210517a2bba378fd46169b4efebfc26d4684c217f485c25bd0af21d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7568a78210517a2bba378fd46169b4efebfc26d4684c217f485c25bd0af21d94->enter($__internal_7568a78210517a2bba378fd46169b4efebfc26d4684c217f485c25bd0af21d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 79
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 81
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_7568a78210517a2bba378fd46169b4efebfc26d4684c217f485c25bd0af21d94->leave($__internal_7568a78210517a2bba378fd46169b4efebfc26d4684c217f485c25bd0af21d94_prof);

        
        $__internal_364df4c7ed5581960b237d87f0a52f081b39818063713680f10266f1dd8ecec4->leave($__internal_364df4c7ed5581960b237d87f0a52f081b39818063713680f10266f1dd8ecec4_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_8e7d4223a9c63f70df7d40708a65c503643de2286d28066a9fa8f66b04d2969b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7d4223a9c63f70df7d40708a65c503643de2286d28066a9fa8f66b04d2969b->enter($__internal_8e7d4223a9c63f70df7d40708a65c503643de2286d28066a9fa8f66b04d2969b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_c14891cff12c24d77628a3c7e256e97d5f472f7241ed90a8d1778d21b10ef2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14891cff12c24d77628a3c7e256e97d5f472f7241ed90a8d1778d21b10ef2d8->enter($__internal_c14891cff12c24d77628a3c7e256e97d5f472f7241ed90a8d1778d21b10ef2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 82
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 84
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 85
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 87
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 88
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 91
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 100
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_c14891cff12c24d77628a3c7e256e97d5f472f7241ed90a8d1778d21b10ef2d8->leave($__internal_c14891cff12c24d77628a3c7e256e97d5f472f7241ed90a8d1778d21b10ef2d8_prof);

        
        $__internal_8e7d4223a9c63f70df7d40708a65c503643de2286d28066a9fa8f66b04d2969b->leave($__internal_8e7d4223a9c63f70df7d40708a65c503643de2286d28066a9fa8f66b04d2969b_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_91d7da106a1ffad86f0ef94fbe895f21a345de3c5e8ee815dbdbb1f491f630d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d7da106a1ffad86f0ef94fbe895f21a345de3c5e8ee815dbdbb1f491f630d5->enter($__internal_91d7da106a1ffad86f0ef94fbe895f21a345de3c5e8ee815dbdbb1f491f630d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_2dda0ec0fbd522bb0ad6d16c62e35af68110a07c1437db64ffa4989195a1bfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dda0ec0fbd522bb0ad6d16c62e35af68110a07c1437db64ffa4989195a1bfdc->enter($__internal_2dda0ec0fbd522bb0ad6d16c62e35af68110a07c1437db64ffa4989195a1bfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 101
        echo "                                                <li>
                                                    <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_2dda0ec0fbd522bb0ad6d16c62e35af68110a07c1437db64ffa4989195a1bfdc->leave($__internal_2dda0ec0fbd522bb0ad6d16c62e35af68110a07c1437db64ffa4989195a1bfdc_prof);

        
        $__internal_91d7da106a1ffad86f0ef94fbe895f21a345de3c5e8ee815dbdbb1f491f630d5->leave($__internal_91d7da106a1ffad86f0ef94fbe895f21a345de3c5e8ee815dbdbb1f491f630d5_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d23e9a5688b07596ee2890e43230d4f80b472461dda9c7fd77aa18ef86801ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23e9a5688b07596ee2890e43230d4f80b472461dda9c7fd77aa18ef86801ca5->enter($__internal_d23e9a5688b07596ee2890e43230d4f80b472461dda9c7fd77aa18ef86801ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_1785aafc8a2f4334bebc7683cc8cff3b5cfad9eed633549442dc286405300b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1785aafc8a2f4334bebc7683cc8cff3b5cfad9eed633549442dc286405300b3b->enter($__internal_1785aafc8a2f4334bebc7683cc8cff3b5cfad9eed633549442dc286405300b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_1785aafc8a2f4334bebc7683cc8cff3b5cfad9eed633549442dc286405300b3b->leave($__internal_1785aafc8a2f4334bebc7683cc8cff3b5cfad9eed633549442dc286405300b3b_prof);

        
        $__internal_d23e9a5688b07596ee2890e43230d4f80b472461dda9c7fd77aa18ef86801ca5->leave($__internal_d23e9a5688b07596ee2890e43230d4f80b472461dda9c7fd77aa18ef86801ca5_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_f8f88f0340c89177bcd036ade6106c119a6b3fe1e4bbb35e86b492fa8047b911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f88f0340c89177bcd036ade6106c119a6b3fe1e4bbb35e86b492fa8047b911->enter($__internal_f8f88f0340c89177bcd036ade6106c119a6b3fe1e4bbb35e86b492fa8047b911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_513a405dcca4320a4b41f39a875d78a361f31fc701f2ef9d500bc4a422f9be05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513a405dcca4320a4b41f39a875d78a361f31fc701f2ef9d500bc4a422f9be05->enter($__internal_513a405dcca4320a4b41f39a875d78a361f31fc701f2ef9d500bc4a422f9be05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_513a405dcca4320a4b41f39a875d78a361f31fc701f2ef9d500bc4a422f9be05->leave($__internal_513a405dcca4320a4b41f39a875d78a361f31fc701f2ef9d500bc4a422f9be05_prof);

        
        $__internal_f8f88f0340c89177bcd036ade6106c119a6b3fe1e4bbb35e86b492fa8047b911->leave($__internal_f8f88f0340c89177bcd036ade6106c119a6b3fe1e4bbb35e86b492fa8047b911_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_6149a4bd5b15c843705380b51d653355ff25e005682acee5924669500adff879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6149a4bd5b15c843705380b51d653355ff25e005682acee5924669500adff879->enter($__internal_6149a4bd5b15c843705380b51d653355ff25e005682acee5924669500adff879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6add6a1771799d0d579889a670306d41e2e34d785cea401ba69c42c2c7d8b98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6add6a1771799d0d579889a670306d41e2e34d785cea401ba69c42c2c7d8b98c->enter($__internal_6add6a1771799d0d579889a670306d41e2e34d785cea401ba69c42c2c7d8b98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_6add6a1771799d0d579889a670306d41e2e34d785cea401ba69c42c2c7d8b98c->leave($__internal_6add6a1771799d0d579889a670306d41e2e34d785cea401ba69c42c2c7d8b98c_prof);

        
        $__internal_6149a4bd5b15c843705380b51d653355ff25e005682acee5924669500adff879->leave($__internal_6149a4bd5b15c843705380b51d653355ff25e005682acee5924669500adff879_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_cadc2b68e36dfe9a8ca2704fa49c0e90b820593717aba93cd1f450905d6716b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadc2b68e36dfe9a8ca2704fa49c0e90b820593717aba93cd1f450905d6716b7->enter($__internal_cadc2b68e36dfe9a8ca2704fa49c0e90b820593717aba93cd1f450905d6716b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_0d22818e72806ad703ea63e7c785ea5af93a72007369c9beafe988072cb6c3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d22818e72806ad703ea63e7c785ea5af93a72007369c9beafe988072cb6c3d5->enter($__internal_0d22818e72806ad703ea63e7c785ea5af93a72007369c9beafe988072cb6c3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_0d22818e72806ad703ea63e7c785ea5af93a72007369c9beafe988072cb6c3d5->leave($__internal_0d22818e72806ad703ea63e7c785ea5af93a72007369c9beafe988072cb6c3d5_prof);

        
        $__internal_cadc2b68e36dfe9a8ca2704fa49c0e90b820593717aba93cd1f450905d6716b7->leave($__internal_cadc2b68e36dfe9a8ca2704fa49c0e90b820593717aba93cd1f450905d6716b7_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_4211952737ec0eb9706b0ddc9fd9e646849fa3fe282dcf9975730e912f8a8df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4211952737ec0eb9706b0ddc9fd9e646849fa3fe282dcf9975730e912f8a8df0->enter($__internal_4211952737ec0eb9706b0ddc9fd9e646849fa3fe282dcf9975730e912f8a8df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_262abbb154d89692173d7de2afb05f9dc3e62a8c46d883ef3a1d1d84cee12c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262abbb154d89692173d7de2afb05f9dc3e62a8c46d883ef3a1d1d84cee12c13->enter($__internal_262abbb154d89692173d7de2afb05f9dc3e62a8c46d883ef3a1d1d84cee12c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_262abbb154d89692173d7de2afb05f9dc3e62a8c46d883ef3a1d1d84cee12c13->leave($__internal_262abbb154d89692173d7de2afb05f9dc3e62a8c46d883ef3a1d1d84cee12c13_prof);

        
        $__internal_4211952737ec0eb9706b0ddc9fd9e646849fa3fe282dcf9975730e912f8a8df0->leave($__internal_4211952737ec0eb9706b0ddc9fd9e646849fa3fe282dcf9975730e912f8a8df0_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_2ff5e492df30e5f231534a801b35265b348bb9508c4e83ad92c7d23edaca7669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff5e492df30e5f231534a801b35265b348bb9508c4e83ad92c7d23edaca7669->enter($__internal_2ff5e492df30e5f231534a801b35265b348bb9508c4e83ad92c7d23edaca7669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_889b87af283bb268c40cd9241d2005c9971231ee63cbf05b22669ed7d13a5d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889b87af283bb268c40cd9241d2005c9971231ee63cbf05b22669ed7d13a5d57->enter($__internal_889b87af283bb268c40cd9241d2005c9971231ee63cbf05b22669ed7d13a5d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_889b87af283bb268c40cd9241d2005c9971231ee63cbf05b22669ed7d13a5d57->leave($__internal_889b87af283bb268c40cd9241d2005c9971231ee63cbf05b22669ed7d13a5d57_prof);

        
        $__internal_2ff5e492df30e5f231534a801b35265b348bb9508c4e83ad92c7d23edaca7669->leave($__internal_2ff5e492df30e5f231534a801b35265b348bb9508c4e83ad92c7d23edaca7669_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_2ec08961c642d4433373e63bb0099e839634bdef3b603b2e0aef40f84bcdc48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec08961c642d4433373e63bb0099e839634bdef3b603b2e0aef40f84bcdc48d->enter($__internal_2ec08961c642d4433373e63bb0099e839634bdef3b603b2e0aef40f84bcdc48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_d7a53d9cfdd26235d3ae50c700021ce2285d188c2875098712a3ae26abd1ca16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a53d9cfdd26235d3ae50c700021ce2285d188c2875098712a3ae26abd1ca16->enter($__internal_d7a53d9cfdd26235d3ae50c700021ce2285d188c2875098712a3ae26abd1ca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_d7a53d9cfdd26235d3ae50c700021ce2285d188c2875098712a3ae26abd1ca16->leave($__internal_d7a53d9cfdd26235d3ae50c700021ce2285d188c2875098712a3ae26abd1ca16_prof);

        
        $__internal_2ec08961c642d4433373e63bb0099e839634bdef3b603b2e0aef40f84bcdc48d->leave($__internal_2ec08961c642d4433373e63bb0099e839634bdef3b603b2e0aef40f84bcdc48d_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_75f232d5f269e3a0e78fbbdd9833606b9cfe8b799bda3f9e5495a663eddf2980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f232d5f269e3a0e78fbbdd9833606b9cfe8b799bda3f9e5495a663eddf2980->enter($__internal_75f232d5f269e3a0e78fbbdd9833606b9cfe8b799bda3f9e5495a663eddf2980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d1af4b685ed0f66f946f2b4bdaf4d0226b228e160701e90bf6e62aff78e0b73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1af4b685ed0f66f946f2b4bdaf4d0226b228e160701e90bf6e62aff78e0b73d->enter($__internal_d1af4b685ed0f66f946f2b4bdaf4d0226b228e160701e90bf6e62aff78e0b73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d1af4b685ed0f66f946f2b4bdaf4d0226b228e160701e90bf6e62aff78e0b73d->leave($__internal_d1af4b685ed0f66f946f2b4bdaf4d0226b228e160701e90bf6e62aff78e0b73d_prof);

        
        $__internal_75f232d5f269e3a0e78fbbdd9833606b9cfe8b799bda3f9e5495a663eddf2980->leave($__internal_75f232d5f269e3a0e78fbbdd9833606b9cfe8b799bda3f9e5495a663eddf2980_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_aeb9720d8ff8534494d9a6fa49ff13a8cb4b937a2bd347c8d2b3b6a04db25142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb9720d8ff8534494d9a6fa49ff13a8cb4b937a2bd347c8d2b3b6a04db25142->enter($__internal_aeb9720d8ff8534494d9a6fa49ff13a8cb4b937a2bd347c8d2b3b6a04db25142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_349cfaaa1e74272170e0e7ac8295931e8a4a41bb6592b4a9197a4fe200a727e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349cfaaa1e74272170e0e7ac8295931e8a4a41bb6592b4a9197a4fe200a727e0->enter($__internal_349cfaaa1e74272170e0e7ac8295931e8a4a41bb6592b4a9197a4fe200a727e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_349cfaaa1e74272170e0e7ac8295931e8a4a41bb6592b4a9197a4fe200a727e0->leave($__internal_349cfaaa1e74272170e0e7ac8295931e8a4a41bb6592b4a9197a4fe200a727e0_prof);

        
        $__internal_aeb9720d8ff8534494d9a6fa49ff13a8cb4b937a2bd347c8d2b3b6a04db25142->leave($__internal_aeb9720d8ff8534494d9a6fa49ff13a8cb4b937a2bd347c8d2b3b6a04db25142_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 160,  769 => 153,  759 => 149,  752 => 145,  748 => 143,  745 => 142,  736 => 141,  707 => 139,  698 => 138,  685 => 134,  676 => 133,  665 => 154,  663 => 153,  658 => 150,  655 => 141,  653 => 138,  649 => 136,  646 => 133,  637 => 132,  626 => 125,  624 => 122,  622 => 121,  613 => 120,  602 => 127,  600 => 120,  597 => 119,  588 => 118,  573 => 102,  570 => 101,  561 => 100,  551 => 108,  546 => 105,  544 => 100,  535 => 94,  530 => 91,  525 => 89,  522 => 88,  520 => 87,  516 => 86,  513 => 85,  511 => 84,  505 => 82,  496 => 81,  484 => 109,  482 => 81,  478 => 79,  475 => 78,  466 => 77,  453 => 71,  444 => 70,  435 => 69,  423 => 112,  421 => 77,  416 => 74,  414 => 69,  407 => 65,  403 => 63,  394 => 62,  383 => 156,  381 => 132,  376 => 129,  374 => 118,  369 => 115,  367 => 62,  364 => 61,  355 => 60,  322 => 58,  311 => 165,  302 => 163,  298 => 162,  295 => 161,  293 => 160,  289 => 158,  287 => 60,  277 => 58,  268 => 57,  247 => 30,  238 => 29,  226 => 43,  223 => 42,  220 => 29,  211 => 28,  196 => 25,  193 => 24,  184 => 23,  171 => 15,  165 => 13,  156 => 12,  138 => 10,  127 => 167,  125 => 57,  118 => 53,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
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
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/layout.html.twig");
    }
}

<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_e2474eeff75f7438af80329d459c1f8c71929e64ab7f3c089831793c12fd0312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c389825819bc0a370aea1507a46cf884e410a64e59a323e1d366a2a69acf123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c389825819bc0a370aea1507a46cf884e410a64e59a323e1d366a2a69acf123->enter($__internal_8c389825819bc0a370aea1507a46cf884e410a64e59a323e1d366a2a69acf123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_5aeefd495d2acabea3d19e2b0ac1501f39dea953bb653de4bd78affed973ca6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeefd495d2acabea3d19e2b0ac1501f39dea953bb653de4bd78affed973ca6e->enter($__internal_5aeefd495d2acabea3d19e2b0ac1501f39dea953bb653de4bd78affed973ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $this->displayBlock('main_menu', $context, $blocks);
        // line 51
        echo "</ul>

";
        // line 53
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_8c389825819bc0a370aea1507a46cf884e410a64e59a323e1d366a2a69acf123->leave($__internal_8c389825819bc0a370aea1507a46cf884e410a64e59a323e1d366a2a69acf123_prof);

        
        $__internal_5aeefd495d2acabea3d19e2b0ac1501f39dea953bb653de4bd78affed973ca6e->leave($__internal_5aeefd495d2acabea3d19e2b0ac1501f39dea953bb653de4bd78affed973ca6e_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_0e762144aea2aee18b313bc610a5ecb18d41dcd73ae5cbd3285ea11d5911f1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e762144aea2aee18b313bc610a5ecb18d41dcd73ae5cbd3285ea11d5911f1d9->enter($__internal_0e762144aea2aee18b313bc610a5ecb18d41dcd73ae5cbd3285ea11d5911f1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_a20b837e12c17e2d57c3eece0cd01d9b11faa4de0edb600c4bfe38740667abab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20b837e12c17e2d57c3eece0cd01d9b11faa4de0edb600c4bfe38740667abab->enter($__internal_a20b837e12c17e2d57c3eece0cd01d9b11faa4de0edb600c4bfe38740667abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_a20b837e12c17e2d57c3eece0cd01d9b11faa4de0edb600c4bfe38740667abab->leave($__internal_a20b837e12c17e2d57c3eece0cd01d9b11faa4de0edb600c4bfe38740667abab_prof);

        
        $__internal_0e762144aea2aee18b313bc610a5ecb18d41dcd73ae5cbd3285ea11d5911f1d9->leave($__internal_0e762144aea2aee18b313bc610a5ecb18d41dcd73ae5cbd3285ea11d5911f1d9_prof);

    }

    // line 34
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_e5bd3d87f1c104e8a7d0c5a3a48072bd9cf9866924f225293f52cca4881c2502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bd3d87f1c104e8a7d0c5a3a48072bd9cf9866924f225293f52cca4881c2502->enter($__internal_e5bd3d87f1c104e8a7d0c5a3a48072bd9cf9866924f225293f52cca4881c2502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_da30cf216546a5ba6fb830c34138b3e7b7890427355e108e6a4432cb821f3599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da30cf216546a5ba6fb830c34138b3e7b7890427355e108e6a4432cb821f3599->enter($__internal_da30cf216546a5ba6fb830c34138b3e7b7890427355e108e6a4432cb821f3599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["item"], "type", array()) == "divider")) ? ("header") : (""));
            echo " ";
            echo (( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) ? ("treeview") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
            echo "\">
                ";
            // line 37
            echo $context["helper"]->getrender_menu_item($context["item"], (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
            echo "

                ";
            // line 39
            if ( !twig_test_empty((($this->getAttribute($context["item"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", array()), array())) : (array())))) {
                // line 40
                echo "                    <ul class=\"treeview-menu\">
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 42
                    echo "                            <li class=\"";
                    echo ((($this->getAttribute($context["subitem"], "type", array()) == "divider")) ? ("header") : (""));
                    echo " ";
                    echo (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array())))) ? ("active") : (""));
                    echo "\">
                                ";
                    // line 43
                    echo $context["helper"]->getrender_menu_item($context["subitem"], (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
                    echo "
                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    </ul>
                ";
            }
            // line 48
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        
        $__internal_da30cf216546a5ba6fb830c34138b3e7b7890427355e108e6a4432cb821f3599->leave($__internal_da30cf216546a5ba6fb830c34138b3e7b7890427355e108e6a4432cb821f3599_prof);

        
        $__internal_e5bd3d87f1c104e8a7d0c5a3a48072bd9cf9866924f225293f52cca4881c2502->leave($__internal_e5bd3d87f1c104e8a7d0c5a3a48072bd9cf9866924f225293f52cca4881c2502_prof);

    }

    // line 53
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_27bb9919ecee5865524757b65b36fd7ff515a1d5d999bcfb34c68be169cb36dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27bb9919ecee5865524757b65b36fd7ff515a1d5d999bcfb34c68be169cb36dd->enter($__internal_27bb9919ecee5865524757b65b36fd7ff515a1d5d999bcfb34c68be169cb36dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_88866fd652e6c5ec47f81e1b7bb4f92ea9d286e41b6185121c3e6f8879360e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88866fd652e6c5ec47f81e1b7bb4f92ea9d286e41b6185121c3e6f8879360e60->enter($__internal_88866fd652e6c5ec47f81e1b7bb4f92ea9d286e41b6185121c3e6f8879360e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_88866fd652e6c5ec47f81e1b7bb4f92ea9d286e41b6185121c3e6f8879360e60->leave($__internal_88866fd652e6c5ec47f81e1b7bb4f92ea9d286e41b6185121c3e6f8879360e60_prof);

        
        $__internal_27bb9919ecee5865524757b65b36fd7ff515a1d5d999bcfb34c68be169cb36dd->leave($__internal_27bb9919ecee5865524757b65b36fd7ff515a1d5d999bcfb34c68be169cb36dd_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4d6979a830c2f24ddf80bc9e53bdb0fae8079cd7814a69b3225ab334bb9222e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4d6979a830c2f24ddf80bc9e53bdb0fae8079cd7814a69b3225ab334bb9222e6->enter($__internal_4d6979a830c2f24ddf80bc9e53bdb0fae8079cd7814a69b3225ab334bb9222e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_3ff3b52c26d52661299a2d129b2001aec2d3e3547664923f0a9d0a25173ea788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3ff3b52c26d52661299a2d129b2001aec2d3e3547664923f0a9d0a25173ea788->enter($__internal_3ff3b52c26d52661299a2d129b2001aec2d3e3547664923f0a9d0a25173ea788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "entity", array()), "action" => "list"), ($context["menu_params"] ?? $this->getContext($context, "menu_params"))), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_e6ee80b938cb5e4c8ace656e49bc1ae0cf68ba1981fc0efb045c6b763f9ea164 = ($context["path"] ?? $this->getContext($context, "path"))) && is_string($__internal_5718fdcf65f9c3c6d0aeefb889d16d2d37f2e9bdc9800fbed122ba0964fc4c5d = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_5718fdcf65f9c3c6d0aeefb889d16d2d37f2e9bdc9800fbed122ba0964fc4c5d || 0 === strpos($__internal_e6ee80b938cb5e4c8ace656e49bc1ae0cf68ba1981fc0efb045c6b763f9ea164, $__internal_5718fdcf65f9c3c6d0aeefb889d16d2d37f2e9bdc9800fbed122ba0964fc4c5d))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), twig_array_merge(($context["menu_params"] ?? $this->getContext($context, "menu_params")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute(($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_3ff3b52c26d52661299a2d129b2001aec2d3e3547664923f0a9d0a25173ea788->leave($__internal_3ff3b52c26d52661299a2d129b2001aec2d3e3547664923f0a9d0a25173ea788_prof);

            
            $__internal_4d6979a830c2f24ddf80bc9e53bdb0fae8079cd7814a69b3225ab334bb9222e6->leave($__internal_4d6979a830c2f24ddf80bc9e53bdb0fae8079cd7814a69b3225ab334bb9222e6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 25,  284 => 24,  279 => 23,  273 => 22,  263 => 21,  260 => 20,  257 => 19,  254 => 18,  251 => 17,  248 => 12,  246 => 10,  245 => 9,  244 => 8,  243 => 7,  241 => 6,  238 => 5,  232 => 3,  229 => 2,  210 => 1,  193 => 53,  183 => 50,  168 => 48,  164 => 46,  147 => 43,  140 => 42,  123 => 41,  120 => 40,  118 => 39,  113 => 37,  102 => 36,  84 => 35,  75 => 34,  58 => 31,  48 => 53,  44 => 51,  42 => 34,  38 => 32,  36 => 31,  33 => 30,  31 => 29,  28 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% block main_menu %}
        {% for item in easyadmin_config('design.menu') %}
            <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                {% if item.children|default([]) is not empty %}
                    <ul class=\"treeview-menu\">
                        {% for subitem in item.children %}
                            <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/menu.html.twig");
    }
}

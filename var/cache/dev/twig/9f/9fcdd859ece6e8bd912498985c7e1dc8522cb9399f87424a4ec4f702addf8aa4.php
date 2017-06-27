<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_c08c462db8152b77a078adb0cc737d4a1d4b3d637ccb421f4a865212916d4325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b6a608a7ec290efc27b2dc70e99e755e59604e88e9ec718805c35ac1ee45585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6a608a7ec290efc27b2dc70e99e755e59604e88e9ec718805c35ac1ee45585->enter($__internal_3b6a608a7ec290efc27b2dc70e99e755e59604e88e9ec718805c35ac1ee45585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_fc3914d0ca98ddc466008b9e5205298231aa174c5aa62d63b0157751ab422221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3914d0ca98ddc466008b9e5205298231aa174c5aa62d63b0157751ab422221->enter($__internal_fc3914d0ca98ddc466008b9e5205298231aa174c5aa62d63b0157751ab422221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 204
        echo "
";
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('form_label', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('choice_label', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('radio_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 244
        echo "
";
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('form_row', $context, $blocks);
        // line 270
        echo "
";
        // line 271
        $this->displayBlock('collection_row', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('button_row', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('choice_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('date_row', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('time_row', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('radio_row', $context, $blocks);
        // line 346
        echo "
";
        // line 348
        $this->displayBlock('form_errors', $context, $blocks);
        // line 366
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 377
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 387
        echo "
";
        // line 388
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 521
        echo "
";
        // line 523
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 539
        echo "
";
        // line 541
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 546
        echo "
";
        // line 548
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_3b6a608a7ec290efc27b2dc70e99e755e59604e88e9ec718805c35ac1ee45585->leave($__internal_3b6a608a7ec290efc27b2dc70e99e755e59604e88e9ec718805c35ac1ee45585_prof);

        
        $__internal_fc3914d0ca98ddc466008b9e5205298231aa174c5aa62d63b0157751ab422221->leave($__internal_fc3914d0ca98ddc466008b9e5205298231aa174c5aa62d63b0157751ab422221_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a88c3b302bfce26e57c1b51609fd230c982a59a4265587a2017bbe31a6e56f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88c3b302bfce26e57c1b51609fd230c982a59a4265587a2017bbe31a6e56f2b->enter($__internal_a88c3b302bfce26e57c1b51609fd230c982a59a4265587a2017bbe31a6e56f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_5f5922258f4d23cc48fd3a5578df5d2b9caabb76d3d21b67454cbf8efbda4259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5922258f4d23cc48fd3a5578df5d2b9caabb76d3d21b67454cbf8efbda4259->enter($__internal_5f5922258f4d23cc48fd3a5578df5d2b9caabb76d3d21b67454cbf8efbda4259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_5f5922258f4d23cc48fd3a5578df5d2b9caabb76d3d21b67454cbf8efbda4259->leave($__internal_5f5922258f4d23cc48fd3a5578df5d2b9caabb76d3d21b67454cbf8efbda4259_prof);

        
        $__internal_a88c3b302bfce26e57c1b51609fd230c982a59a4265587a2017bbe31a6e56f2b->leave($__internal_a88c3b302bfce26e57c1b51609fd230c982a59a4265587a2017bbe31a6e56f2b_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_8c054e72bd7ffd2e04abe868690b7c72f8bc5996cf23e0c0caee0e295a00a372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c054e72bd7ffd2e04abe868690b7c72f8bc5996cf23e0c0caee0e295a00a372->enter($__internal_8c054e72bd7ffd2e04abe868690b7c72f8bc5996cf23e0c0caee0e295a00a372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_16e4f984817e47a1752f38d7a07dd7627b69b74d598bb1ff5774f50a7324c941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e4f984817e47a1752f38d7a07dd7627b69b74d598bb1ff5774f50a7324c941->enter($__internal_16e4f984817e47a1752f38d7a07dd7627b69b74d598bb1ff5774f50a7324c941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_16e4f984817e47a1752f38d7a07dd7627b69b74d598bb1ff5774f50a7324c941->leave($__internal_16e4f984817e47a1752f38d7a07dd7627b69b74d598bb1ff5774f50a7324c941_prof);

        
        $__internal_8c054e72bd7ffd2e04abe868690b7c72f8bc5996cf23e0c0caee0e295a00a372->leave($__internal_8c054e72bd7ffd2e04abe868690b7c72f8bc5996cf23e0c0caee0e295a00a372_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0cada2ed9306eecdaadb6f6a058a4f87ab4c47df3b1f7b30eaf29eba46ddb2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cada2ed9306eecdaadb6f6a058a4f87ab4c47df3b1f7b30eaf29eba46ddb2f6->enter($__internal_0cada2ed9306eecdaadb6f6a058a4f87ab4c47df3b1f7b30eaf29eba46ddb2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d2d47fd797b0107bd1330dacd6f134267ccfb4f19aa3400e9b139705626c4c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d47fd797b0107bd1330dacd6f134267ccfb4f19aa3400e9b139705626c4c75->enter($__internal_d2d47fd797b0107bd1330dacd6f134267ccfb4f19aa3400e9b139705626c4c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d2d47fd797b0107bd1330dacd6f134267ccfb4f19aa3400e9b139705626c4c75->leave($__internal_d2d47fd797b0107bd1330dacd6f134267ccfb4f19aa3400e9b139705626c4c75_prof);

        
        $__internal_0cada2ed9306eecdaadb6f6a058a4f87ab4c47df3b1f7b30eaf29eba46ddb2f6->leave($__internal_0cada2ed9306eecdaadb6f6a058a4f87ab4c47df3b1f7b30eaf29eba46ddb2f6_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fd95bc538c0c0a773e4e8db337f4e49f18e5ca0238a30758e549a12629028dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd95bc538c0c0a773e4e8db337f4e49f18e5ca0238a30758e549a12629028dda->enter($__internal_fd95bc538c0c0a773e4e8db337f4e49f18e5ca0238a30758e549a12629028dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5337c9031cfe30021c5ea8ceab3cac3cf80eb4e769ac0e183fddecec545f7e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5337c9031cfe30021c5ea8ceab3cac3cf80eb4e769ac0e183fddecec545f7e90->enter($__internal_5337c9031cfe30021c5ea8ceab3cac3cf80eb4e769ac0e183fddecec545f7e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5337c9031cfe30021c5ea8ceab3cac3cf80eb4e769ac0e183fddecec545f7e90->leave($__internal_5337c9031cfe30021c5ea8ceab3cac3cf80eb4e769ac0e183fddecec545f7e90_prof);

        
        $__internal_fd95bc538c0c0a773e4e8db337f4e49f18e5ca0238a30758e549a12629028dda->leave($__internal_fd95bc538c0c0a773e4e8db337f4e49f18e5ca0238a30758e549a12629028dda_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_17a0515e78a1d349563c1c51136ad5a25e2b6dddc4b40f14328a833436bf4505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a0515e78a1d349563c1c51136ad5a25e2b6dddc4b40f14328a833436bf4505->enter($__internal_17a0515e78a1d349563c1c51136ad5a25e2b6dddc4b40f14328a833436bf4505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e7c84298a91f1648a2b08571a9a2b9e3fb16ab8320ff6fa8bc5d49c2d4fdfb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c84298a91f1648a2b08571a9a2b9e3fb16ab8320ff6fa8bc5d49c2d4fdfb7d->enter($__internal_e7c84298a91f1648a2b08571a9a2b9e3fb16ab8320ff6fa8bc5d49c2d4fdfb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e7c84298a91f1648a2b08571a9a2b9e3fb16ab8320ff6fa8bc5d49c2d4fdfb7d->leave($__internal_e7c84298a91f1648a2b08571a9a2b9e3fb16ab8320ff6fa8bc5d49c2d4fdfb7d_prof);

        
        $__internal_17a0515e78a1d349563c1c51136ad5a25e2b6dddc4b40f14328a833436bf4505->leave($__internal_17a0515e78a1d349563c1c51136ad5a25e2b6dddc4b40f14328a833436bf4505_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_406953e29bb3690c49f8e920e85d266868c5fb19aaaf28de0ccbd7b7b1a7c3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406953e29bb3690c49f8e920e85d266868c5fb19aaaf28de0ccbd7b7b1a7c3ba->enter($__internal_406953e29bb3690c49f8e920e85d266868c5fb19aaaf28de0ccbd7b7b1a7c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_5a46bf28eee47d2436a40d693d69e2ee23e6d98fe8934df4c317701ece716474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a46bf28eee47d2436a40d693d69e2ee23e6d98fe8934df4c317701ece716474->enter($__internal_5a46bf28eee47d2436a40d693d69e2ee23e6d98fe8934df4c317701ece716474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 70
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_5a46bf28eee47d2436a40d693d69e2ee23e6d98fe8934df4c317701ece716474->leave($__internal_5a46bf28eee47d2436a40d693d69e2ee23e6d98fe8934df4c317701ece716474_prof);

        
        $__internal_406953e29bb3690c49f8e920e85d266868c5fb19aaaf28de0ccbd7b7b1a7c3ba->leave($__internal_406953e29bb3690c49f8e920e85d266868c5fb19aaaf28de0ccbd7b7b1a7c3ba_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ecbf257af98a3e170230e5467e62db07461fa919240b33c9448ddff0d34ab5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbf257af98a3e170230e5467e62db07461fa919240b33c9448ddff0d34ab5b9->enter($__internal_ecbf257af98a3e170230e5467e62db07461fa919240b33c9448ddff0d34ab5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_895bf8d835bab17b15905a09cc80c0efc09c8311fa66e2a64fccd3e77887f3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895bf8d835bab17b15905a09cc80c0efc09c8311fa66e2a64fccd3e77887f3b8->enter($__internal_895bf8d835bab17b15905a09cc80c0efc09c8311fa66e2a64fccd3e77887f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_895bf8d835bab17b15905a09cc80c0efc09c8311fa66e2a64fccd3e77887f3b8->leave($__internal_895bf8d835bab17b15905a09cc80c0efc09c8311fa66e2a64fccd3e77887f3b8_prof);

        
        $__internal_ecbf257af98a3e170230e5467e62db07461fa919240b33c9448ddff0d34ab5b9->leave($__internal_ecbf257af98a3e170230e5467e62db07461fa919240b33c9448ddff0d34ab5b9_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b9beea85d17cb4b01ec5f266a6bc98ee307ddd3bf470ca829298eec01fa017d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9beea85d17cb4b01ec5f266a6bc98ee307ddd3bf470ca829298eec01fa017d1->enter($__internal_b9beea85d17cb4b01ec5f266a6bc98ee307ddd3bf470ca829298eec01fa017d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_24c6a8eb834f72eb17bf8ef5d245e313a22a34f5a9a60ffe212edf9fef92a000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c6a8eb834f72eb17bf8ef5d245e313a22a34f5a9a60ffe212edf9fef92a000->enter($__internal_24c6a8eb834f72eb17bf8ef5d245e313a22a34f5a9a60ffe212edf9fef92a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 94
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_24c6a8eb834f72eb17bf8ef5d245e313a22a34f5a9a60ffe212edf9fef92a000->leave($__internal_24c6a8eb834f72eb17bf8ef5d245e313a22a34f5a9a60ffe212edf9fef92a000_prof);

        
        $__internal_b9beea85d17cb4b01ec5f266a6bc98ee307ddd3bf470ca829298eec01fa017d1->leave($__internal_b9beea85d17cb4b01ec5f266a6bc98ee307ddd3bf470ca829298eec01fa017d1_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_22752fe9a3746cdcf3aca0702f05d16ee369ce73209f5d9271c479e7cce6c5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22752fe9a3746cdcf3aca0702f05d16ee369ce73209f5d9271c479e7cce6c5e4->enter($__internal_22752fe9a3746cdcf3aca0702f05d16ee369ce73209f5d9271c479e7cce6c5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_2e92f4d22fbd87bb59c54954febda846b77d72ab38e0899911df544f1ab03b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e92f4d22fbd87bb59c54954febda846b77d72ab38e0899911df544f1ab03b37->enter($__internal_2e92f4d22fbd87bb59c54954febda846b77d72ab38e0899911df544f1ab03b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 110
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_2e92f4d22fbd87bb59c54954febda846b77d72ab38e0899911df544f1ab03b37->leave($__internal_2e92f4d22fbd87bb59c54954febda846b77d72ab38e0899911df544f1ab03b37_prof);

        
        $__internal_22752fe9a3746cdcf3aca0702f05d16ee369ce73209f5d9271c479e7cce6c5e4->leave($__internal_22752fe9a3746cdcf3aca0702f05d16ee369ce73209f5d9271c479e7cce6c5e4_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a88cddbe5535cd1bb81641ab1e6dd238fd86019d33fc6a8a8ccbf2473d1ce0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88cddbe5535cd1bb81641ab1e6dd238fd86019d33fc6a8a8ccbf2473d1ce0f0->enter($__internal_a88cddbe5535cd1bb81641ab1e6dd238fd86019d33fc6a8a8ccbf2473d1ce0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7f46554777c785beccf7fa9976aaed9a94af41cc5ae6607adb593360f80de2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f46554777c785beccf7fa9976aaed9a94af41cc5ae6607adb593360f80de2e6->enter($__internal_7f46554777c785beccf7fa9976aaed9a94af41cc5ae6607adb593360f80de2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_7f46554777c785beccf7fa9976aaed9a94af41cc5ae6607adb593360f80de2e6->leave($__internal_7f46554777c785beccf7fa9976aaed9a94af41cc5ae6607adb593360f80de2e6_prof);

        
        $__internal_a88cddbe5535cd1bb81641ab1e6dd238fd86019d33fc6a8a8ccbf2473d1ce0f0->leave($__internal_a88cddbe5535cd1bb81641ab1e6dd238fd86019d33fc6a8a8ccbf2473d1ce0f0_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f5040f10b9a4645d868db0a36bdea732642e0fd6f731f82cb2e2e812b1a5bfb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5040f10b9a4645d868db0a36bdea732642e0fd6f731f82cb2e2e812b1a5bfb4->enter($__internal_f5040f10b9a4645d868db0a36bdea732642e0fd6f731f82cb2e2e812b1a5bfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_736e185ede1cff00494661dee9b91cdcc39a3adae920e337ddc79f115cbea87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736e185ede1cff00494661dee9b91cdcc39a3adae920e337ddc79f115cbea87b->enter($__internal_736e185ede1cff00494661dee9b91cdcc39a3adae920e337ddc79f115cbea87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 138
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 139
            echo "        ";
            ob_start();
            // line 140
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 143
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 155
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_736e185ede1cff00494661dee9b91cdcc39a3adae920e337ddc79f115cbea87b->leave($__internal_736e185ede1cff00494661dee9b91cdcc39a3adae920e337ddc79f115cbea87b_prof);

        
        $__internal_f5040f10b9a4645d868db0a36bdea732642e0fd6f731f82cb2e2e812b1a5bfb4->leave($__internal_f5040f10b9a4645d868db0a36bdea732642e0fd6f731f82cb2e2e812b1a5bfb4_prof);

    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5a47ba220a6bf374fc5c3b4e66ebf5331b48d5fe3a9df5f1d14ebb5551047731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a47ba220a6bf374fc5c3b4e66ebf5331b48d5fe3a9df5f1d14ebb5551047731->enter($__internal_5a47ba220a6bf374fc5c3b4e66ebf5331b48d5fe3a9df5f1d14ebb5551047731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_666af2caf616c4e738d1c06d326d0ad9c25a9a29178b01638555b55e19ce4aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666af2caf616c4e738d1c06d326d0ad9c25a9a29178b01638555b55e19ce4aa1->enter($__internal_666af2caf616c4e738d1c06d326d0ad9c25a9a29178b01638555b55e19ce4aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 164
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 165
            echo "<div class=\"control-group\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 167
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 168
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "</div>";
        } else {
            // line 173
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 175
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 176
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "</div>";
        }
        
        $__internal_666af2caf616c4e738d1c06d326d0ad9c25a9a29178b01638555b55e19ce4aa1->leave($__internal_666af2caf616c4e738d1c06d326d0ad9c25a9a29178b01638555b55e19ce4aa1_prof);

        
        $__internal_5a47ba220a6bf374fc5c3b4e66ebf5331b48d5fe3a9df5f1d14ebb5551047731->leave($__internal_5a47ba220a6bf374fc5c3b4e66ebf5331b48d5fe3a9df5f1d14ebb5551047731_prof);

    }

    // line 183
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_29b5eb8b9c3590ec2648732385770d770eacabce1baac5e38c380b6aa41f8e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b5eb8b9c3590ec2648732385770d770eacabce1baac5e38c380b6aa41f8e59->enter($__internal_29b5eb8b9c3590ec2648732385770d770eacabce1baac5e38c380b6aa41f8e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1a7d069a7135c9e925edc248a82c664f19b575c60edeca53fa76ca814b58997a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7d069a7135c9e925edc248a82c664f19b575c60edeca53fa76ca814b58997a->enter($__internal_1a7d069a7135c9e925edc248a82c664f19b575c60edeca53fa76ca814b58997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 184
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 185
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 188
            echo "<div class=\"checkbox\">";
            // line 189
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 190
            echo "</div>";
        }
        
        $__internal_1a7d069a7135c9e925edc248a82c664f19b575c60edeca53fa76ca814b58997a->leave($__internal_1a7d069a7135c9e925edc248a82c664f19b575c60edeca53fa76ca814b58997a_prof);

        
        $__internal_29b5eb8b9c3590ec2648732385770d770eacabce1baac5e38c380b6aa41f8e59->leave($__internal_29b5eb8b9c3590ec2648732385770d770eacabce1baac5e38c380b6aa41f8e59_prof);

    }

    // line 194
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4c832a5cf0b43f0263c8c6376ecd5aaae42a5d39815bc93909b9fd37084278da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c832a5cf0b43f0263c8c6376ecd5aaae42a5d39815bc93909b9fd37084278da->enter($__internal_4c832a5cf0b43f0263c8c6376ecd5aaae42a5d39815bc93909b9fd37084278da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b4723286d2b3452bc3760c3542bf3b3c89e8d757c19b8a00568d01055bd72005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4723286d2b3452bc3760c3542bf3b3c89e8d757c19b8a00568d01055bd72005->enter($__internal_b4723286d2b3452bc3760c3542bf3b3c89e8d757c19b8a00568d01055bd72005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 195
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 196
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 199
            echo "<div class=\"radio\">";
            // line 200
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 201
            echo "</div>";
        }
        
        $__internal_b4723286d2b3452bc3760c3542bf3b3c89e8d757c19b8a00568d01055bd72005->leave($__internal_b4723286d2b3452bc3760c3542bf3b3c89e8d757c19b8a00568d01055bd72005_prof);

        
        $__internal_4c832a5cf0b43f0263c8c6376ecd5aaae42a5d39815bc93909b9fd37084278da->leave($__internal_4c832a5cf0b43f0263c8c6376ecd5aaae42a5d39815bc93909b9fd37084278da_prof);

    }

    // line 207
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_787041c5a1c6aeb9cb47247ce774021a589a97d57a2d7762e4c1d568203fecbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787041c5a1c6aeb9cb47247ce774021a589a97d57a2d7762e4c1d568203fecbe->enter($__internal_787041c5a1c6aeb9cb47247ce774021a589a97d57a2d7762e4c1d568203fecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8f88f9c3f224a88614eb1b77f98c768e0f6811f202b1347a8f2acb20a4ad04af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f88f9c3f224a88614eb1b77f98c768e0f6811f202b1347a8f2acb20a4ad04af->enter($__internal_8f88f9c3f224a88614eb1b77f98c768e0f6811f202b1347a8f2acb20a4ad04af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 208
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 209
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8f88f9c3f224a88614eb1b77f98c768e0f6811f202b1347a8f2acb20a4ad04af->leave($__internal_8f88f9c3f224a88614eb1b77f98c768e0f6811f202b1347a8f2acb20a4ad04af_prof);

        
        $__internal_787041c5a1c6aeb9cb47247ce774021a589a97d57a2d7762e4c1d568203fecbe->leave($__internal_787041c5a1c6aeb9cb47247ce774021a589a97d57a2d7762e4c1d568203fecbe_prof);

    }

    // line 212
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0a2f89763fd7126385d282055c9da0e081bca1ac4b0d982358602706aaf12f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2f89763fd7126385d282055c9da0e081bca1ac4b0d982358602706aaf12f63->enter($__internal_0a2f89763fd7126385d282055c9da0e081bca1ac4b0d982358602706aaf12f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_353fc3bb12084b8fc91bc15f7b4853542df2858562c52a08152e6f475425bb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353fc3bb12084b8fc91bc15f7b4853542df2858562c52a08152e6f475425bb8a->enter($__internal_353fc3bb12084b8fc91bc15f7b4853542df2858562c52a08152e6f475425bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 214
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 215
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_353fc3bb12084b8fc91bc15f7b4853542df2858562c52a08152e6f475425bb8a->leave($__internal_353fc3bb12084b8fc91bc15f7b4853542df2858562c52a08152e6f475425bb8a_prof);

        
        $__internal_0a2f89763fd7126385d282055c9da0e081bca1ac4b0d982358602706aaf12f63->leave($__internal_0a2f89763fd7126385d282055c9da0e081bca1ac4b0d982358602706aaf12f63_prof);

    }

    // line 218
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_76d6329fe89ace373845fe21f4b7b5a4effdd739a81ac70094759303c4c7ae78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d6329fe89ace373845fe21f4b7b5a4effdd739a81ac70094759303c4c7ae78->enter($__internal_76d6329fe89ace373845fe21f4b7b5a4effdd739a81ac70094759303c4c7ae78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8a6325f8e76ed5e2e9ec33adf8696446572897577072e4176a93261a38b68a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6325f8e76ed5e2e9ec33adf8696446572897577072e4176a93261a38b68a35->enter($__internal_8a6325f8e76ed5e2e9ec33adf8696446572897577072e4176a93261a38b68a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 219
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8a6325f8e76ed5e2e9ec33adf8696446572897577072e4176a93261a38b68a35->leave($__internal_8a6325f8e76ed5e2e9ec33adf8696446572897577072e4176a93261a38b68a35_prof);

        
        $__internal_76d6329fe89ace373845fe21f4b7b5a4effdd739a81ac70094759303c4c7ae78->leave($__internal_76d6329fe89ace373845fe21f4b7b5a4effdd739a81ac70094759303c4c7ae78_prof);

    }

    // line 222
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_977e9c5dae8d192146f3f9b56dee377d5bb2f0c64cfe61ae5e5514a31b67c1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977e9c5dae8d192146f3f9b56dee377d5bb2f0c64cfe61ae5e5514a31b67c1ea->enter($__internal_977e9c5dae8d192146f3f9b56dee377d5bb2f0c64cfe61ae5e5514a31b67c1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_54d7ea428aac74160ab524356ef4b8c884725100514184b8a9fd260353d168c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d7ea428aac74160ab524356ef4b8c884725100514184b8a9fd260353d168c1->enter($__internal_54d7ea428aac74160ab524356ef4b8c884725100514184b8a9fd260353d168c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 223
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_54d7ea428aac74160ab524356ef4b8c884725100514184b8a9fd260353d168c1->leave($__internal_54d7ea428aac74160ab524356ef4b8c884725100514184b8a9fd260353d168c1_prof);

        
        $__internal_977e9c5dae8d192146f3f9b56dee377d5bb2f0c64cfe61ae5e5514a31b67c1ea->leave($__internal_977e9c5dae8d192146f3f9b56dee377d5bb2f0c64cfe61ae5e5514a31b67c1ea_prof);

    }

    // line 226
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f14ab82cee87ba07c986c021e28030c3fb544ef66ca8e1018248fd8fe8833359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14ab82cee87ba07c986c021e28030c3fb544ef66ca8e1018248fd8fe8833359->enter($__internal_f14ab82cee87ba07c986c021e28030c3fb544ef66ca8e1018248fd8fe8833359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_af2766ef1df06b0a1b05e690e16319eb0c7fde7872452899f2a07353f4e4302a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2766ef1df06b0a1b05e690e16319eb0c7fde7872452899f2a07353f4e4302a->enter($__internal_af2766ef1df06b0a1b05e690e16319eb0c7fde7872452899f2a07353f4e4302a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 227
        echo "    ";
        // line 228
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 229
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 230
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 231
                echo "        ";
            }
            // line 232
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 233
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 234
                echo "        ";
            }
            // line 235
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 236
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 237
                echo "        ";
            }
            // line 238
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 239
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 240
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))) : ("")), "html", null, true);
            // line 241
            echo "</label>
    ";
        }
        
        $__internal_af2766ef1df06b0a1b05e690e16319eb0c7fde7872452899f2a07353f4e4302a->leave($__internal_af2766ef1df06b0a1b05e690e16319eb0c7fde7872452899f2a07353f4e4302a_prof);

        
        $__internal_f14ab82cee87ba07c986c021e28030c3fb544ef66ca8e1018248fd8fe8833359->leave($__internal_f14ab82cee87ba07c986c021e28030c3fb544ef66ca8e1018248fd8fe8833359_prof);

    }

    // line 247
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_19516bd6343cfb913aeb322324facbab65f8b5487d2d21c1899271302681738f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19516bd6343cfb913aeb322324facbab65f8b5487d2d21c1899271302681738f->enter($__internal_19516bd6343cfb913aeb322324facbab65f8b5487d2d21c1899271302681738f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_48baacd7358dae5da6ef1b095069199c437a91b1c3129d7320488008800dea69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48baacd7358dae5da6ef1b095069199c437a91b1c3129d7320488008800dea69->enter($__internal_48baacd7358dae5da6ef1b095069199c437a91b1c3129d7320488008800dea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 248
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 249
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 250
        $context["_field_label"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = ($context["_field_label"] ?? $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 252
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 254
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 255
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 257
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 266
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 268
        echo "    </div>";
        
        $__internal_48baacd7358dae5da6ef1b095069199c437a91b1c3129d7320488008800dea69->leave($__internal_48baacd7358dae5da6ef1b095069199c437a91b1c3129d7320488008800dea69_prof);

        
        $__internal_19516bd6343cfb913aeb322324facbab65f8b5487d2d21c1899271302681738f->leave($__internal_19516bd6343cfb913aeb322324facbab65f8b5487d2d21c1899271302681738f_prof);

    }

    // line 271
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_f3bf789d1f057d67f65e05aa26761f8e16044dcefcb204471e42fa3120013b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bf789d1f057d67f65e05aa26761f8e16044dcefcb204471e42fa3120013b00->enter($__internal_f3bf789d1f057d67f65e05aa26761f8e16044dcefcb204471e42fa3120013b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_2243b6bc72bb3547d5b16b102e2f0876c94229260f4737551bb09956e9297ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2243b6bc72bb3547d5b16b102e2f0876c94229260f4737551bb09956e9297ee8->enter($__internal_2243b6bc72bb3547d5b16b102e2f0876c94229260f4737551bb09956e9297ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 272
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 274
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 275
            echo "        ";
            ob_start();
            // line 276
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 279
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 287
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 288
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 297
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 299
            echo ($context["js_add_item"] ?? $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_2243b6bc72bb3547d5b16b102e2f0876c94229260f4737551bb09956e9297ee8->leave($__internal_2243b6bc72bb3547d5b16b102e2f0876c94229260f4737551bb09956e9297ee8_prof);

        
        $__internal_f3bf789d1f057d67f65e05aa26761f8e16044dcefcb204471e42fa3120013b00->leave($__internal_f3bf789d1f057d67f65e05aa26761f8e16044dcefcb204471e42fa3120013b00_prof);

    }

    // line 307
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_97cefac6c0357fa8c846deaa327c03fabea6f946e1a2c2e1fc159494159f95c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cefac6c0357fa8c846deaa327c03fabea6f946e1a2c2e1fc159494159f95c7->enter($__internal_97cefac6c0357fa8c846deaa327c03fabea6f946e1a2c2e1fc159494159f95c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8e26d22736fc7bc74bc077c353abb6de541ef49aebd0602537768c959619452a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e26d22736fc7bc74bc077c353abb6de541ef49aebd0602537768c959619452a->enter($__internal_8e26d22736fc7bc74bc077c353abb6de541ef49aebd0602537768c959619452a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 308
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 310
        echo "</div>";
        
        $__internal_8e26d22736fc7bc74bc077c353abb6de541ef49aebd0602537768c959619452a->leave($__internal_8e26d22736fc7bc74bc077c353abb6de541ef49aebd0602537768c959619452a_prof);

        
        $__internal_97cefac6c0357fa8c846deaa327c03fabea6f946e1a2c2e1fc159494159f95c7->leave($__internal_97cefac6c0357fa8c846deaa327c03fabea6f946e1a2c2e1fc159494159f95c7_prof);

    }

    // line 313
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4be0163e137d02994034439669e13d38c1e05f47fac21a8d367e04b518bb5d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be0163e137d02994034439669e13d38c1e05f47fac21a8d367e04b518bb5d26->enter($__internal_4be0163e137d02994034439669e13d38c1e05f47fac21a8d367e04b518bb5d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_1a7c78fa6552def13423669b4db23881b9cc301de9e801aaf9acffd7d651719b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7c78fa6552def13423669b4db23881b9cc301de9e801aaf9acffd7d651719b->enter($__internal_1a7c78fa6552def13423669b4db23881b9cc301de9e801aaf9acffd7d651719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 314
        $context["force_error"] = true;
        // line 315
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1a7c78fa6552def13423669b4db23881b9cc301de9e801aaf9acffd7d651719b->leave($__internal_1a7c78fa6552def13423669b4db23881b9cc301de9e801aaf9acffd7d651719b_prof);

        
        $__internal_4be0163e137d02994034439669e13d38c1e05f47fac21a8d367e04b518bb5d26->leave($__internal_4be0163e137d02994034439669e13d38c1e05f47fac21a8d367e04b518bb5d26_prof);

    }

    // line 318
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_00671117482ebefa979836cd5ae255f15be35ae6a847459d39c0b8a492e072a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00671117482ebefa979836cd5ae255f15be35ae6a847459d39c0b8a492e072a1->enter($__internal_00671117482ebefa979836cd5ae255f15be35ae6a847459d39c0b8a492e072a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_25f57d457e5a735521c5aa69dce23f6e5446b7c9101e37c77f172e9dc343b418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f57d457e5a735521c5aa69dce23f6e5446b7c9101e37c77f172e9dc343b418->enter($__internal_25f57d457e5a735521c5aa69dce23f6e5446b7c9101e37c77f172e9dc343b418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 319
        $context["force_error"] = true;
        // line 320
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_25f57d457e5a735521c5aa69dce23f6e5446b7c9101e37c77f172e9dc343b418->leave($__internal_25f57d457e5a735521c5aa69dce23f6e5446b7c9101e37c77f172e9dc343b418_prof);

        
        $__internal_00671117482ebefa979836cd5ae255f15be35ae6a847459d39c0b8a492e072a1->leave($__internal_00671117482ebefa979836cd5ae255f15be35ae6a847459d39c0b8a492e072a1_prof);

    }

    // line 323
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1eb57c06b9537936720acbb96393cf0940eed7a91bdd7b6fb9af50f459f45568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb57c06b9537936720acbb96393cf0940eed7a91bdd7b6fb9af50f459f45568->enter($__internal_1eb57c06b9537936720acbb96393cf0940eed7a91bdd7b6fb9af50f459f45568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_c750cf13d83ca8ea7b010570b489af1a28fa87c41727600d1090409b744e7e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c750cf13d83ca8ea7b010570b489af1a28fa87c41727600d1090409b744e7e71->enter($__internal_c750cf13d83ca8ea7b010570b489af1a28fa87c41727600d1090409b744e7e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 324
        $context["force_error"] = true;
        // line 325
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c750cf13d83ca8ea7b010570b489af1a28fa87c41727600d1090409b744e7e71->leave($__internal_c750cf13d83ca8ea7b010570b489af1a28fa87c41727600d1090409b744e7e71_prof);

        
        $__internal_1eb57c06b9537936720acbb96393cf0940eed7a91bdd7b6fb9af50f459f45568->leave($__internal_1eb57c06b9537936720acbb96393cf0940eed7a91bdd7b6fb9af50f459f45568_prof);

    }

    // line 328
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_8260f918544433ceec490a01a096551e2dcebae61ec3936dcd7851693769e894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8260f918544433ceec490a01a096551e2dcebae61ec3936dcd7851693769e894->enter($__internal_8260f918544433ceec490a01a096551e2dcebae61ec3936dcd7851693769e894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7d05e79b1a0f4311b1e4f72cf4fb42c3a655fb633c0dd6c941bf7fb3ee42d91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d05e79b1a0f4311b1e4f72cf4fb42c3a655fb633c0dd6c941bf7fb3ee42d91e->enter($__internal_7d05e79b1a0f4311b1e4f72cf4fb42c3a655fb633c0dd6c941bf7fb3ee42d91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 329
        $context["force_error"] = true;
        // line 330
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7d05e79b1a0f4311b1e4f72cf4fb42c3a655fb633c0dd6c941bf7fb3ee42d91e->leave($__internal_7d05e79b1a0f4311b1e4f72cf4fb42c3a655fb633c0dd6c941bf7fb3ee42d91e_prof);

        
        $__internal_8260f918544433ceec490a01a096551e2dcebae61ec3936dcd7851693769e894->leave($__internal_8260f918544433ceec490a01a096551e2dcebae61ec3936dcd7851693769e894_prof);

    }

    // line 333
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d7fcf06e6e1be64ad11fc1139175901ebe1c1836f5f35257f6f814576b803c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fcf06e6e1be64ad11fc1139175901ebe1c1836f5f35257f6f814576b803c01->enter($__internal_d7fcf06e6e1be64ad11fc1139175901ebe1c1836f5f35257f6f814576b803c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e904e377aabeb7661242343f7135a88f811fcbab4cbdcc22981151597e4f1029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e904e377aabeb7661242343f7135a88f811fcbab4cbdcc22981151597e4f1029->enter($__internal_e904e377aabeb7661242343f7135a88f811fcbab4cbdcc22981151597e4f1029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 334
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 335
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 336
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 337
        echo "</div>";
        
        $__internal_e904e377aabeb7661242343f7135a88f811fcbab4cbdcc22981151597e4f1029->leave($__internal_e904e377aabeb7661242343f7135a88f811fcbab4cbdcc22981151597e4f1029_prof);

        
        $__internal_d7fcf06e6e1be64ad11fc1139175901ebe1c1836f5f35257f6f814576b803c01->leave($__internal_d7fcf06e6e1be64ad11fc1139175901ebe1c1836f5f35257f6f814576b803c01_prof);

    }

    // line 340
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e0a8edda608e1c15e0b0162854816275a6bb601292e5c9e4c90d59c7277c34be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a8edda608e1c15e0b0162854816275a6bb601292e5c9e4c90d59c7277c34be->enter($__internal_e0a8edda608e1c15e0b0162854816275a6bb601292e5c9e4c90d59c7277c34be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_67f337d7d751a1793b70258458cb69d1aa6928a56a2145e15deba3206dcae918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f337d7d751a1793b70258458cb69d1aa6928a56a2145e15deba3206dcae918->enter($__internal_67f337d7d751a1793b70258458cb69d1aa6928a56a2145e15deba3206dcae918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_67f337d7d751a1793b70258458cb69d1aa6928a56a2145e15deba3206dcae918->leave($__internal_67f337d7d751a1793b70258458cb69d1aa6928a56a2145e15deba3206dcae918_prof);

        
        $__internal_e0a8edda608e1c15e0b0162854816275a6bb601292e5c9e4c90d59c7277c34be->leave($__internal_e0a8edda608e1c15e0b0162854816275a6bb601292e5c9e4c90d59c7277c34be_prof);

    }

    // line 348
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8634c1899f83933263a6a987cc512b0bcc791b804e84a7b33012f07547b3c75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8634c1899f83933263a6a987cc512b0bcc791b804e84a7b33012f07547b3c75d->enter($__internal_8634c1899f83933263a6a987cc512b0bcc791b804e84a7b33012f07547b3c75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_38d17dac5dfd6767213d228c4bc4e2433e3f869367f3ceb9e0d7f19580b82147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d17dac5dfd6767213d228c4bc4e2433e3f869367f3ceb9e0d7f19580b82147->enter($__internal_38d17dac5dfd6767213d228c4bc4e2433e3f869367f3ceb9e0d7f19580b82147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 349
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors")));
        // line 350
        echo "    ";
        if ((($context["error_count"] ?? $this->getContext($context, "error_count")) >= 1)) {
            // line 351
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 352
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", ($context["error_count"] ?? $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 353
            if ((($context["error_count"] ?? $this->getContext($context, "error_count")) == 1)) {
                // line 354
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 356
                echo "                <ul>
                    ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 358
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "                </ul>
            ";
            }
            // line 362
            echo "        </div>
    ";
        }
        
        $__internal_38d17dac5dfd6767213d228c4bc4e2433e3f869367f3ceb9e0d7f19580b82147->leave($__internal_38d17dac5dfd6767213d228c4bc4e2433e3f869367f3ceb9e0d7f19580b82147_prof);

        
        $__internal_8634c1899f83933263a6a987cc512b0bcc791b804e84a7b33012f07547b3c75d->leave($__internal_8634c1899f83933263a6a987cc512b0bcc791b804e84a7b33012f07547b3c75d_prof);

    }

    // line 366
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0d85f24103d607b14ed3f40b1da325939521befceb527f4ca12e449ff9b11d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d85f24103d607b14ed3f40b1da325939521befceb527f4ca12e449ff9b11d81->enter($__internal_0d85f24103d607b14ed3f40b1da325939521befceb527f4ca12e449ff9b11d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_54188ea304730df773b64f38829b208a3df135080b15af29aacaf78f213381f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54188ea304730df773b64f38829b208a3df135080b15af29aacaf78f213381f9->enter($__internal_54188ea304730df773b64f38829b208a3df135080b15af29aacaf78f213381f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 367
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 368
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 370
        echo "    ";
        if ((twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 371
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 372
            echo "    ";
        }
        // line 373
        echo "
    ";
        // line 374
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_54188ea304730df773b64f38829b208a3df135080b15af29aacaf78f213381f9->leave($__internal_54188ea304730df773b64f38829b208a3df135080b15af29aacaf78f213381f9_prof);

        
        $__internal_0d85f24103d607b14ed3f40b1da325939521befceb527f4ca12e449ff9b11d81->leave($__internal_0d85f24103d607b14ed3f40b1da325939521befceb527f4ca12e449ff9b11d81_prof);

    }

    // line 377
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_88f2cd28cdae19f3837172d19681929b72447e882e6fbf2956c2d3302c29cbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f2cd28cdae19f3837172d19681929b72447e882e6fbf2956c2d3302c29cbb4->enter($__internal_88f2cd28cdae19f3837172d19681929b72447e882e6fbf2956c2d3302c29cbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_d6679c1aeaaecd9a1693422635a47d59b3c0e50400e9f4dd3a731692054599c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6679c1aeaaecd9a1693422635a47d59b3c0e50400e9f4dd3a731692054599c4->enter($__internal_d6679c1aeaaecd9a1693422635a47d59b3c0e50400e9f4dd3a731692054599c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 378
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 379
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_d6679c1aeaaecd9a1693422635a47d59b3c0e50400e9f4dd3a731692054599c4->leave($__internal_d6679c1aeaaecd9a1693422635a47d59b3c0e50400e9f4dd3a731692054599c4_prof);

        
        $__internal_88f2cd28cdae19f3837172d19681929b72447e882e6fbf2956c2d3302c29cbb4->leave($__internal_88f2cd28cdae19f3837172d19681929b72447e882e6fbf2956c2d3302c29cbb4_prof);

    }

    // line 383
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_3a835f1aff7b4ad2f63a004f3f09a1cc30ab0e062b8a80c7cf3dd2f1389edf38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a835f1aff7b4ad2f63a004f3f09a1cc30ab0e062b8a80c7cf3dd2f1389edf38->enter($__internal_3a835f1aff7b4ad2f63a004f3f09a1cc30ab0e062b8a80c7cf3dd2f1389edf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_82b0ca9be24092e829e249fc885a994f63a46c4e6f21bc345561a01430efaa50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b0ca9be24092e829e249fc885a994f63a46c4e6f21bc345561a01430efaa50->enter($__internal_82b0ca9be24092e829e249fc885a994f63a46c4e6f21bc345561a01430efaa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 384
        echo "    ";
        $context["force_error"] = true;
        // line 385
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_82b0ca9be24092e829e249fc885a994f63a46c4e6f21bc345561a01430efaa50->leave($__internal_82b0ca9be24092e829e249fc885a994f63a46c4e6f21bc345561a01430efaa50_prof);

        
        $__internal_3a835f1aff7b4ad2f63a004f3f09a1cc30ab0e062b8a80c7cf3dd2f1389edf38->leave($__internal_3a835f1aff7b4ad2f63a004f3f09a1cc30ab0e062b8a80c7cf3dd2f1389edf38_prof);

    }

    // line 388
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_44a2b26105b7a3e532f404374ecc4d68a606d0c7944c70b11abb4971b870c136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a2b26105b7a3e532f404374ecc4d68a606d0c7944c70b11abb4971b870c136->enter($__internal_44a2b26105b7a3e532f404374ecc4d68a606d0c7944c70b11abb4971b870c136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_ed4b00f4fbe39cea7f91463dbacdd2e8d8a373f57c74c3e28186527ee753e7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4b00f4fbe39cea7f91463dbacdd2e8d8a373f57c74c3e28186527ee753e7b7->enter($__internal_ed4b00f4fbe39cea7f91463dbacdd2e8d8a373f57c74c3e28186527ee753e7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 389
        ob_start();
        // line 390
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 391
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 392
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 393
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 395
        echo "
        <div class=\"row\">
            ";
        // line 397
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 398
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 399
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 402
        echo "            <div class=\"";
        echo (($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 403
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ed4b00f4fbe39cea7f91463dbacdd2e8d8a373f57c74c3e28186527ee753e7b7->leave($__internal_ed4b00f4fbe39cea7f91463dbacdd2e8d8a373f57c74c3e28186527ee753e7b7_prof);

        
        $__internal_44a2b26105b7a3e532f404374ecc4d68a606d0c7944c70b11abb4971b870c136->leave($__internal_44a2b26105b7a3e532f404374ecc4d68a606d0c7944c70b11abb4971b870c136_prof);

    }

    // line 410
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_7a3d9055aa17be4698c8fd30f70f3997c1da8f3da45a035f7f466a41f1885880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3d9055aa17be4698c8fd30f70f3997c1da8f3da45a035f7f466a41f1885880->enter($__internal_7a3d9055aa17be4698c8fd30f70f3997c1da8f3da45a035f7f466a41f1885880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_a7ccc91d6fe123281c7e7003f59f64b60f2b7fac0d6bd864f4f1ce6cec4af7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ccc91d6fe123281c7e7003f59f64b60f2b7fac0d6bd864f4f1ce6cec4af7ac->enter($__internal_a7ccc91d6fe123281c7e7003f59f64b60f2b7fac0d6bd864f4f1ce6cec4af7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 411
        echo "    ";
        $context["force_error"] = true;
        // line 412
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_a7ccc91d6fe123281c7e7003f59f64b60f2b7fac0d6bd864f4f1ce6cec4af7ac->leave($__internal_a7ccc91d6fe123281c7e7003f59f64b60f2b7fac0d6bd864f4f1ce6cec4af7ac_prof);

        
        $__internal_7a3d9055aa17be4698c8fd30f70f3997c1da8f3da45a035f7f466a41f1885880->leave($__internal_7a3d9055aa17be4698c8fd30f70f3997c1da8f3da45a035f7f466a41f1885880_prof);

    }

    // line 415
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_64ccfc02648ef445b739a60bd4d31a9d811128c6b96eecb1c0c805bae9f0d3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ccfc02648ef445b739a60bd4d31a9d811128c6b96eecb1c0c805bae9f0d3ea->enter($__internal_64ccfc02648ef445b739a60bd4d31a9d811128c6b96eecb1c0c805bae9f0d3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_947837013a04ddaa82e7aeea48902e641d8cd660c94b1b560c5febeaa20b085f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947837013a04ddaa82e7aeea48902e641d8cd660c94b1b560c5febeaa20b085f->enter($__internal_947837013a04ddaa82e7aeea48902e641d8cd660c94b1b560c5febeaa20b085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 416
        ob_start();
        // line 417
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 418
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 419
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 420
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 422
        echo "
        ";
        // line 423
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 424
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? $this->getContext($context, "id")));
            // line 425
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 426
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 430
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 434
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_947837013a04ddaa82e7aeea48902e641d8cd660c94b1b560c5febeaa20b085f->leave($__internal_947837013a04ddaa82e7aeea48902e641d8cd660c94b1b560c5febeaa20b085f_prof);

        
        $__internal_64ccfc02648ef445b739a60bd4d31a9d811128c6b96eecb1c0c805bae9f0d3ea->leave($__internal_64ccfc02648ef445b739a60bd4d31a9d811128c6b96eecb1c0c805bae9f0d3ea_prof);

    }

    // line 439
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_dd66f95a54bcd9d39a5ba9abe311719aaffe47f7f53fe698c7c012a61af6fe87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd66f95a54bcd9d39a5ba9abe311719aaffe47f7f53fe698c7c012a61af6fe87->enter($__internal_dd66f95a54bcd9d39a5ba9abe311719aaffe47f7f53fe698c7c012a61af6fe87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_6e7d3a80ef7a00f73c8b188ab07d384fa3f481961efc374aa68281eda03fae01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7d3a80ef7a00f73c8b188ab07d384fa3f481961efc374aa68281eda03fae01->enter($__internal_6e7d3a80ef7a00f73c8b188ab07d384fa3f481961efc374aa68281eda03fae01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 440
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 441
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 442
        echo "
    ";
        // line 443
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 444
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 446
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 451
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 453
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 454
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 456
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 457
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 459
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 463
            echo "
                    <div class=\"box-body\">
                        ";
            // line 465
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 466
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 468
            echo "
                        <div class=\"row\">
                            ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 471
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 472
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 480
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 481
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 482
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 492
        $this->displayBlock('item_actions', $context, $blocks);
        // line 516
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6e7d3a80ef7a00f73c8b188ab07d384fa3f481961efc374aa68281eda03fae01->leave($__internal_6e7d3a80ef7a00f73c8b188ab07d384fa3f481961efc374aa68281eda03fae01_prof);

        
        $__internal_dd66f95a54bcd9d39a5ba9abe311719aaffe47f7f53fe698c7c012a61af6fe87->leave($__internal_dd66f95a54bcd9d39a5ba9abe311719aaffe47f7f53fe698c7c012a61af6fe87_prof);

    }

    // line 492
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_73692d6bfb8f7724c4a4d6988899278a259055b382c6e2807b335c4044ff7e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73692d6bfb8f7724c4a4d6988899278a259055b382c6e2807b335c4044ff7e0d->enter($__internal_73692d6bfb8f7724c4a4d6988899278a259055b382c6e2807b335c4044ff7e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_88af7d610b421689e53057c01da6da6737ccf8431487606cae8bfcf18f490fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88af7d610b421689e53057c01da6da6737ccf8431487606cae8bfcf18f490fb8->enter($__internal_88af7d610b421689e53057c01da6da6737ccf8431487606cae8bfcf18f490fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 493
        echo "                        ";
        // line 494
        echo "                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> ";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 498
        $context["_entity_actions"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 499
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 500
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 501
        echo "
                        ";
        // line 502
        $context["_entity_id"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 504
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 505
        echo "
                        ";
        // line 506
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 507
        echo "
                        ";
        // line 508
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 509
($context["_entity_actions"] ?? $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 510
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 511
($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 512
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 513
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 514
        echo "
                    ";
        
        $__internal_88af7d610b421689e53057c01da6da6737ccf8431487606cae8bfcf18f490fb8->leave($__internal_88af7d610b421689e53057c01da6da6737ccf8431487606cae8bfcf18f490fb8_prof);

        
        $__internal_73692d6bfb8f7724c4a4d6988899278a259055b382c6e2807b335c4044ff7e0d->leave($__internal_73692d6bfb8f7724c4a4d6988899278a259055b382c6e2807b335c4044ff7e0d_prof);

    }

    // line 523
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_ba69693cf23c9890c3ecdb648c08abdfd1918ba5797816ce19588d6b150300e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba69693cf23c9890c3ecdb648c08abdfd1918ba5797816ce19588d6b150300e8->enter($__internal_ba69693cf23c9890c3ecdb648c08abdfd1918ba5797816ce19588d6b150300e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_6d528dfce91c6197fee265afc82746b4128d90435791ee81e91b28cb6da942b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d528dfce91c6197fee265afc82746b4128d90435791ee81e91b28cb6da942b0->enter($__internal_6d528dfce91c6197fee265afc82746b4128d90435791ee81e91b28cb6da942b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 524
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 525
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 529
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 532
        echo "
";
        
        $__internal_6d528dfce91c6197fee265afc82746b4128d90435791ee81e91b28cb6da942b0->leave($__internal_6d528dfce91c6197fee265afc82746b4128d90435791ee81e91b28cb6da942b0_prof);

        
        $__internal_ba69693cf23c9890c3ecdb648c08abdfd1918ba5797816ce19588d6b150300e8->leave($__internal_ba69693cf23c9890c3ecdb648c08abdfd1918ba5797816ce19588d6b150300e8_prof);

    }

    // line 535
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_a19f326046e0efe4db89a96d60a5d921a51694ce86a978b17e52dd763f3b2df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19f326046e0efe4db89a96d60a5d921a51694ce86a978b17e52dd763f3b2df9->enter($__internal_a19f326046e0efe4db89a96d60a5d921a51694ce86a978b17e52dd763f3b2df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_875dd942453000ed47984f9d83503642e746ffad0101c1f865403955679a26d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875dd942453000ed47984f9d83503642e746ffad0101c1f865403955679a26d9->enter($__internal_875dd942453000ed47984f9d83503642e746ffad0101c1f865403955679a26d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 536
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 537
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_875dd942453000ed47984f9d83503642e746ffad0101c1f865403955679a26d9->leave($__internal_875dd942453000ed47984f9d83503642e746ffad0101c1f865403955679a26d9_prof);

        
        $__internal_a19f326046e0efe4db89a96d60a5d921a51694ce86a978b17e52dd763f3b2df9->leave($__internal_a19f326046e0efe4db89a96d60a5d921a51694ce86a978b17e52dd763f3b2df9_prof);

    }

    // line 541
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_82f050da2a89784b12d254192082e7db5afe691ecaefdc1c6dc25b5d8862d0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f050da2a89784b12d254192082e7db5afe691ecaefdc1c6dc25b5d8862d0a4->enter($__internal_82f050da2a89784b12d254192082e7db5afe691ecaefdc1c6dc25b5d8862d0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_41d0a6190acd3b9c84323ac5c905704dcb9f22988401c59ebf206650fa37e33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d0a6190acd3b9c84323ac5c905704dcb9f22988401c59ebf206650fa37e33a->enter($__internal_41d0a6190acd3b9c84323ac5c905704dcb9f22988401c59ebf206650fa37e33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 542
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_41d0a6190acd3b9c84323ac5c905704dcb9f22988401c59ebf206650fa37e33a->leave($__internal_41d0a6190acd3b9c84323ac5c905704dcb9f22988401c59ebf206650fa37e33a_prof);

        
        $__internal_82f050da2a89784b12d254192082e7db5afe691ecaefdc1c6dc25b5d8862d0a4->leave($__internal_82f050da2a89784b12d254192082e7db5afe691ecaefdc1c6dc25b5d8862d0a4_prof);

    }

    // line 548
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_78d31dea205ba3be8f5e95df9475ebb52d4409114f4c6182d7296c974b24eee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d31dea205ba3be8f5e95df9475ebb52d4409114f4c6182d7296c974b24eee0->enter($__internal_78d31dea205ba3be8f5e95df9475ebb52d4409114f4c6182d7296c974b24eee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_48fdd6e3ad96e5cb0ea256aa13c1f06e036ccd8d23421ae77f87d5048c2e6314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fdd6e3ad96e5cb0ea256aa13c1f06e036ccd8d23421ae77f87d5048c2e6314->enter($__internal_48fdd6e3ad96e5cb0ea256aa13c1f06e036ccd8d23421ae77f87d5048c2e6314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 549
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 550
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 551
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 552
            echo "            <h2>
                ";
            // line 553
            if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 554
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 557
        echo "
        ";
        // line 558
        if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 559
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 561
        echo "    </div>
";
        
        $__internal_48fdd6e3ad96e5cb0ea256aa13c1f06e036ccd8d23421ae77f87d5048c2e6314->leave($__internal_48fdd6e3ad96e5cb0ea256aa13c1f06e036ccd8d23421ae77f87d5048c2e6314_prof);

        
        $__internal_78d31dea205ba3be8f5e95df9475ebb52d4409114f4c6182d7296c974b24eee0->leave($__internal_78d31dea205ba3be8f5e95df9475ebb52d4409114f4c6182d7296c974b24eee0_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1928 => 561,  1922 => 559,  1920 => 558,  1917 => 557,  1910 => 554,  1904 => 553,  1901 => 552,  1899 => 551,  1894 => 550,  1891 => 549,  1882 => 548,  1869 => 542,  1860 => 541,  1850 => 537,  1847 => 536,  1838 => 535,  1827 => 532,  1825 => 529,  1824 => 525,  1822 => 524,  1813 => 523,  1802 => 514,  1800 => 513,  1799 => 512,  1798 => 511,  1797 => 510,  1796 => 509,  1795 => 508,  1792 => 507,  1790 => 506,  1787 => 505,  1785 => 504,  1784 => 502,  1781 => 501,  1779 => 500,  1778 => 499,  1777 => 498,  1771 => 495,  1768 => 494,  1766 => 493,  1757 => 492,  1743 => 516,  1741 => 492,  1733 => 486,  1727 => 485,  1717 => 482,  1712 => 481,  1706 => 480,  1697 => 475,  1687 => 472,  1682 => 471,  1677 => 470,  1673 => 468,  1667 => 466,  1665 => 465,  1661 => 463,  1653 => 459,  1647 => 457,  1645 => 456,  1641 => 454,  1639 => 453,  1633 => 451,  1628 => 450,  1622 => 447,  1619 => 446,  1613 => 444,  1611 => 443,  1608 => 442,  1605 => 441,  1602 => 440,  1593 => 439,  1581 => 434,  1575 => 431,  1571 => 430,  1565 => 427,  1561 => 426,  1558 => 425,  1555 => 424,  1553 => 423,  1550 => 422,  1544 => 420,  1542 => 419,  1538 => 418,  1535 => 417,  1533 => 416,  1524 => 415,  1511 => 412,  1508 => 411,  1499 => 410,  1483 => 403,  1478 => 402,  1472 => 399,  1469 => 398,  1467 => 397,  1463 => 395,  1455 => 393,  1452 => 392,  1450 => 391,  1447 => 390,  1445 => 389,  1436 => 388,  1423 => 385,  1420 => 384,  1411 => 383,  1398 => 379,  1395 => 378,  1386 => 377,  1376 => 374,  1373 => 373,  1370 => 372,  1367 => 371,  1364 => 370,  1358 => 368,  1356 => 367,  1347 => 366,  1335 => 362,  1331 => 360,  1322 => 358,  1318 => 357,  1315 => 356,  1309 => 354,  1307 => 353,  1303 => 352,  1300 => 351,  1297 => 350,  1294 => 349,  1285 => 348,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1240 => 335,  1232 => 334,  1223 => 333,  1213 => 330,  1211 => 329,  1202 => 328,  1192 => 325,  1190 => 324,  1181 => 323,  1171 => 320,  1169 => 319,  1160 => 318,  1150 => 315,  1148 => 314,  1139 => 313,  1129 => 310,  1127 => 309,  1121 => 308,  1112 => 307,  1097 => 301,  1092 => 299,  1088 => 297,  1074 => 288,  1068 => 287,  1057 => 279,  1052 => 276,  1049 => 275,  1047 => 274,  1041 => 272,  1032 => 271,  1022 => 268,  1016 => 266,  1014 => 265,  1012 => 263,  1005 => 258,  999 => 257,  995 => 255,  993 => 254,  991 => 252,  989 => 251,  987 => 250,  978 => 249,  976 => 248,  967 => 247,  955 => 241,  953 => 240,  951 => 239,  936 => 238,  933 => 237,  930 => 236,  927 => 235,  924 => 234,  921 => 233,  918 => 232,  915 => 231,  912 => 230,  909 => 229,  906 => 228,  904 => 227,  895 => 226,  885 => 223,  876 => 222,  866 => 219,  857 => 218,  847 => 215,  845 => 214,  836 => 212,  826 => 209,  824 => 208,  815 => 207,  804 => 201,  802 => 200,  800 => 199,  797 => 197,  795 => 196,  793 => 195,  784 => 194,  773 => 190,  771 => 189,  769 => 188,  766 => 186,  764 => 185,  762 => 184,  753 => 183,  742 => 179,  736 => 176,  735 => 175,  731 => 174,  727 => 173,  724 => 171,  718 => 168,  717 => 167,  713 => 166,  711 => 165,  709 => 164,  700 => 163,  685 => 157,  680 => 155,  676 => 153,  663 => 143,  658 => 140,  655 => 139,  653 => 138,  651 => 137,  649 => 136,  640 => 135,  628 => 130,  625 => 129,  617 => 128,  612 => 126,  610 => 125,  608 => 124,  605 => 122,  603 => 121,  594 => 120,  582 => 115,  580 => 114,  578 => 112,  577 => 111,  576 => 110,  575 => 109,  570 => 107,  568 => 106,  566 => 105,  563 => 103,  561 => 102,  552 => 101,  541 => 97,  539 => 96,  537 => 95,  535 => 94,  533 => 93,  529 => 92,  527 => 91,  524 => 89,  522 => 88,  513 => 87,  502 => 83,  500 => 82,  498 => 81,  489 => 80,  479 => 77,  473 => 75,  471 => 74,  469 => 73,  463 => 71,  460 => 70,  458 => 69,  455 => 68,  446 => 67,  436 => 64,  434 => 63,  425 => 62,  415 => 59,  413 => 58,  404 => 57,  394 => 54,  391 => 52,  389 => 51,  380 => 50,  365 => 44,  360 => 42,  356 => 40,  343 => 30,  338 => 27,  335 => 26,  333 => 25,  331 => 23,  322 => 22,  312 => 17,  309 => 15,  307 => 13,  306 => 12,  305 => 11,  304 => 9,  303 => 8,  302 => 7,  300 => 5,  298 => 4,  289 => 3,  279 => 548,  276 => 546,  274 => 541,  271 => 539,  269 => 535,  266 => 534,  264 => 523,  261 => 521,  259 => 439,  256 => 437,  254 => 415,  251 => 414,  249 => 410,  246 => 409,  244 => 388,  241 => 387,  239 => 383,  236 => 382,  234 => 377,  232 => 366,  230 => 348,  227 => 346,  225 => 340,  222 => 339,  220 => 333,  217 => 332,  215 => 328,  212 => 327,  210 => 323,  207 => 322,  205 => 318,  202 => 317,  200 => 313,  197 => 312,  195 => 307,  192 => 306,  190 => 271,  187 => 270,  185 => 247,  182 => 246,  179 => 244,  177 => 226,  174 => 225,  172 => 222,  169 => 221,  167 => 218,  164 => 217,  162 => 212,  159 => 211,  157 => 207,  154 => 206,  151 => 204,  149 => 194,  146 => 193,  144 => 183,  141 => 182,  139 => 163,  136 => 162,  134 => 135,  131 => 134,  129 => 120,  126 => 119,  124 => 101,  121 => 100,  119 => 87,  116 => 86,  114 => 80,  111 => 79,  109 => 67,  106 => 66,  104 => 62,  101 => 61,  99 => 57,  96 => 56,  94 => 50,  91 => 49,  89 => 22,  86 => 21,  83 => 19,  81 => 3,  78 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {{- parent() -}}
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{- form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {% if value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>

    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {% block item_actions %}
                        {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
                        </button>

                        {% set _entity_actions = (easyadmin.view == 'new')
                            ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
                            : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

                        {% set _entity_id = (easyadmin.view == 'new')
                            ? null
                            : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

                        {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

                        {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                            actions: _entity_actions,
                            request_parameters: _request_parameters,
                            translation_domain: _translation_domain,
                            trans_parameters: _trans_parameters,
                            item_id: _entity_id
                        }, with_context = false) }}
                    {% endblock item_actions %}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-max-results': easyadmin_config('show.max_results'),
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/Applications/MAMP/Site/MarcheStp/vendor/javiereguiluz/easyadmin-bundle/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}

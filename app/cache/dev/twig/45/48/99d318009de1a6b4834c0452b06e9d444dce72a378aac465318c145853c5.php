<?php

/* MoocQuizBundle:Quiz:edit.html.twig */
class __TwigTemplate_454899d318009de1a6b4834c0452b06e9d444dce72a378aac465318c145853c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MoocQuizBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoocQuizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Contact form -->
                    <!-- Page title -->
                <div class=\"page_top_wrap page_top_title page_top_breadcrumbs sc_pt_st1\">
                    <div class=\"content_wrap\">
                        <div class=\"breadcrumbs\">
                            <a class=\"breadcrumbs_item home\" href=\"#\">Home</a>
                            <span class=\"breadcrumbs_delimiter\"></span>
                            <span class=\"breadcrumbs_item current\">Contact Us</span>
                        </div>
                        <h1 class=\"page_title\">Gestion des Quizs</h1>
                    </div>
                </div>
                <!-- /Page title -->
                <!-- Content without sidebar -->
                <div class=\"page_content_wrap\">
                    <div class=\"content\">
                        <article class=\"post_item post_item_single page\">\t\t\t\t\t\t
                            <section class=\"post_content\">
    <div class=\"sc_section bg_tint_dark sc_contact_bg_img\">
        <div class=\"sc_section_overlay sc_contact_bg_color\" data-overlay=\"0.8\" data-bg_color=\"#024b5e\">
            <div class=\"sc_section_content\">
                <div class=\"sc_content content_wrap margin_top_3em_imp margin_bottom_3_5em_imp\">
                    <div id=\"sc_contact_form\" class=\"sc_contact_form sc_contact_form_standard aligncenter width_80per\">
                        <h2 class=\"sc_contact_form_title\">Ajouter une nouvelle Quiz</h2>
                        <p class=\"sc_contact_form_description\">Les champs obligatoire sont marquer avec une (*)</p>
                        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        <form id=\"sc_contact_form_1\" data-formtype=\"contact\" method=\"post\">
                            <div class=\"sc_contact_form_info\">
                                <div class=\"sc_contact_form_item sc_contact_form_field label_over\">
                                    Nom du Quiz: * 
                                    <div>
                                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "quiznom", array()), 'errors');
        echo "
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "quiznom", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"sc_contact_form_item sc_contact_form_field label_over\">
                                    Type: *
                                    <div>
                                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'errors');
        echo "
                                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo "
                                    </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                <div class=\"sc_contact_form_item sc_contact_form_field label_over\">
                                    Durre: *
                                    <div>
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "time", array()), 'errors');
        echo "
                                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "time", array()), 'widget');
        echo "
                                    </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                <div class=\"sc_contact_form_item sc_contact_form_message label_over\">
                                    Description:
                                    <div>
                                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "quizdescription", array()), 'errors');
        echo "
                                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "quizdescription", array()), 'widget');
        echo "
                                    </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                <div class=\"sc_contact_form_item sc_contact_form_message label_over\">
                                    Introduction: 
                                    <div>
                                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intro", array()), 'errors');
        echo "
                                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intro", array()), 'widget');
        echo "
                                    </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

                            </div>

                            <div class=\"sc_contact_form_item sc_contact_form_button\">
                                    <div>
                                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
                                    </div>
                            </div>
                            <div class=\"result sc_infobox\"></div>
                            <div>
                                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idformateur", array()), 'widget');
        echo "
                            </div>
                            <div>
                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idcour", array()), 'widget');
        echo "
                            </div>
                            <div>
                                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateajout", array()), 'widget');
        echo "
                            </div>
                            ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Contact form -->
    </section>
                        </article>
                    </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "MoocQuizBundle:Quiz:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 81,  158 => 79,  152 => 76,  146 => 73,  138 => 68,  128 => 61,  124 => 60,  116 => 55,  112 => 54,  104 => 49,  100 => 48,  92 => 43,  88 => 42,  79 => 36,  75 => 35,  66 => 29,  39 => 4,  36 => 3,  11 => 1,);
    }
}

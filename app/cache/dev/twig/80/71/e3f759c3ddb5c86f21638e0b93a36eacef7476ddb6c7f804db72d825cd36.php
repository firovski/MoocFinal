<?php

/* MoocQuizBundle:Reponse:edit.html.twig */
class __TwigTemplate_8071e3f759c3ddb5c86f21638e0b93a36eacef7476ddb6c7f804db72d825cd36 extends Twig_Template
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
                            <span class=\"breadcrumbs_item current\">Quiz</span>
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
                    <div id=\"sc_contact_form\" class=\" aligncenter width_80per\">
                        <h2 class=\"sc_contact_form_title\">Ajouter une nouvelle Question</h2>
                        <p class=\"sc_contact_form_description\">Les champs obligatoire sont marquer avec une (*)</p>
                        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        <form id=\"sc_contact_form_1\" data-formtype=\"contact\" method=\"post\">
                            <div class=\"sc_contact_form_info\">

                                <div class=\"sc_contact_form_item sc_contact_form_message label_over\">
                                    Text du reponse: *
                                    <div>
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reponsetext", array()), 'errors');
        echo "
                                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reponsetext", array()), 'widget');
        echo "
                                    </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>

                                <div class=\"sc_contact_form_item sc_contact_form_message label_over\">
                                    Text du correct du reponse: *
                                    <div>
                                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reponsecorrecttext", array()), 'errors');
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reponsecorrecttext", array()), 'widget');
        echo "
                                    </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>

                                <div class=\"sc_contact_form_item sc_contact_form_field label_over\">
                                    Cocher si vrai : 
                                    <div>
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reponsecorrectradio", array()), 'errors');
        echo "
                                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reponsecorrectradio", array()), 'widget');
        echo "
                                    </div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                </div>

                            </div>

                            
                                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
                                
                            <div class=\"result sc_infobox\"></div>
                            <div>
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idquestion", array()), 'widget');
        echo "
                            </div>

                            ";
        // line 67
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
        return "MoocQuizBundle:Reponse:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 67,  125 => 64,  118 => 60,  108 => 53,  104 => 52,  94 => 45,  90 => 44,  80 => 37,  76 => 36,  66 => 29,  39 => 4,  36 => 3,  11 => 1,);
    }
}

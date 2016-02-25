<?php

/* MoocQuizBundle:PasserQuiz:finexam.html.twig */
class __TwigTemplate_96f5e79dd2ee1c7091d24d8cb9cc3e20f32e656dee0e1b7cd7574d1cd57a5300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("MoocQuizBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        if (((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")) > 50)) {
            // line 6
            echo "   
<div class=\"page_content_wrap\">
                <div class=\"content_wrap\">
                    <div class=\"content\">
                        <article class=\"post_item post_item_404\">
                            <div class=\"post_content\">
                                <h1 class=\"page_title\">";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), "html", null, true);
            echo "</h1>
                                <h2 class=\"page_subtitle\">Bravo vous aver reussie votre quiz !</h2>
                                
                            </div>
                        </article>
                    </div>
                </div>
            </div>

";
        } else {
            // line 22
            echo "
    
    
    <!-- Content -->
            <div class=\"page_content_wrap\">
                <div class=\"content_wrap\">
                    <div class=\"content\">
                        <article class=\"post_item post_item_404\">
                            <div class=\"post_content\">
                                <h1 class=\"page_title\">";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), "html", null, true);
            echo "</h1>
                                <h2 class=\"page_subtitle\">Ouups vous aver ecchouer votre quiz :( </h2>
                                
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- /Content -->

";
        }
    }

    public function getTemplateName()
    {
        return "MoocQuizBundle:PasserQuiz:finexam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 31,  62 => 22,  49 => 12,  41 => 6,  39 => 5,  36 => 4,  11 => 2,);
    }
}

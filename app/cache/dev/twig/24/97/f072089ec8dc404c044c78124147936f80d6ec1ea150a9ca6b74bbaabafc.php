<?php

/* MoocQuizBundle:Question:list.html.twig */
class __TwigTemplate_2497f072089ec8dc404c044c78124147936f80d6ec1ea150a9ca6b74bbaabafc extends Twig_Template
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
        // line 5
        echo "<!-- Page title -->
    <div class=\"page_top_wrap page_top_title page_top_breadcrumbs\">
        <div class=\"content_wrap\">
            <div class=\"breadcrumbs\">
                <a class=\"breadcrumbs_item home\" href=\"index.html\">Accieul</a>
                <span class=\"breadcrumbs_delimiter\"></span>
                <span class=\"breadcrumbs_item current\">Quiz</span> 
                <span class=\"breadcrumbs_delimiter\"></span>
                <span class=\"breadcrumbs_item current\">Question</span> 
            </div>
            <h1 class=\"page_title\">Question</h1>
        </div>
    </div>
    <!-- Page title -->
    <!-- Content -->
    <div class=\"page_content_wrap\">
        <div class=\"content\">
            <center>
                <!-- Tables section -->
                <div class=\"sc_section\" data-animation=\"animated fadeInUp normal\">
                    <div class=\"sc_line sc_line_style_solid\"></div>
                    <div class=\"sc_table width_80per\">
                        <table>
                                <tr class=\"width_10per\">
                                    <th>Id</th>
                                    <th>Texte du question</th>
                                    <th>Type</th>
                                    <th>Point</th>
                                    <th>Actions</th>
                                </tr>
                            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                                <tr>
                                    <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "questiontext", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "point", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <ul class=\"sc_list sc_list_style_iconed\">
                                            <li class=\"sc_list_item even\">
                                                <span class=\"sc_list_icon icon-right-2\"></span><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Details</a>
                                            </li>
                                            <li class=\"sc_list_item odd sc_list_st1\">
                                                <span class=\"sc_list_icon icon-delete-2 sc_list_st2\"></span><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                                            </li>
                                            <li>
                                                <span class=\"sc_list_icon icon-check-2\"></span><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_list", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Reponse</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </table>
                        
                                <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_new", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_large alignleft sc_button_iconed icon-user-2 sc_buttons_st1\">
                                    Creer une nouvelle question
                                </a>
                    </div>
                </div>

                <!-- /Tables section -->
            </center>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MoocQuizBundle:Question:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 58,  123 => 56,  111 => 50,  105 => 47,  99 => 44,  92 => 40,  88 => 39,  84 => 38,  78 => 37,  75 => 36,  71 => 35,  39 => 5,  36 => 3,  11 => 1,);
    }
}

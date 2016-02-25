<?php

/* MoocQuizBundle:Quiz:list.html.twig */
class __TwigTemplate_caae1affdbe4e298cd14a6a963943715aee390c3651e0dbcee1b11d9530bd37c extends Twig_Template
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
                <span class=\"breadcrumbs_delimiter\"></span>
                <span class=\"breadcrumbs_item current\">Reponse</span> 
            </div>
            <h1 class=\"page_title\">Quiz</h1>
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
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Date ajout</th>
                <th>Introduction</th>
                <th>Type</th>
                <th>Duree</th>
                <th>Actions</th>
            </tr>
        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "            <tr>
                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quiz_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quiznom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quizdescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "dateajout", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateajout", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intro", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "time", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li class=\"sc_list_item even\">
                        <span class=\"sc_list_icon icon-right-2\"></span><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quiz_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Details</a>
                    </li>
                    <li class=\"sc_list_item odd sc_list_st1\">
                        <span class=\"sc_list_icon icon-delete-2 sc_list_st2\"></span><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quiz_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                    <li>
                        <span class=\"sc_list_icon icon-check-2\"></span><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_list", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Question</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </table>

        
            <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("quiz_new");
        echo "\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_large alignleft sc_button_iconed icon-user-2 sc_buttons_st1\">
Creer une nouvelle quiz            </a>
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
        return "MoocQuizBundle:Quiz:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 67,  142 => 64,  130 => 58,  124 => 55,  118 => 52,  111 => 48,  107 => 47,  103 => 46,  97 => 45,  93 => 44,  89 => 43,  83 => 42,  80 => 41,  76 => 40,  39 => 5,  36 => 3,  11 => 1,);
    }
}

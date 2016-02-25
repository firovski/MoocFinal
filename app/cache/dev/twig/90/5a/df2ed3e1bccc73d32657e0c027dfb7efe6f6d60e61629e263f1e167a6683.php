<?php

/* MoocQuizBundle:Reponse:list.html.twig */
class __TwigTemplate_905adf2ed3e1bccc73d32657e0c027dfb7efe6f6d60e61629e263f1e167a6683 extends Twig_Template
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
            <h1 class=\"page_title\">Reponse</h1>
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
                    <div class=\"sc_table width_70per\">
                        <table>
            <tr>
                <th>Id</th>
                <th>Texte du reponse</th>
                <th>Reponse correcte</th>
                <th>Vrai/Faux</th>
                <th>Actions</th>
            </tr>
        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "            <tr>
                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "reponsetext", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "reponsecorrecttext", array()), "html", null, true);
            echo "</td>
                ";
            // line 42
            if (($this->getAttribute($context["entity"], "reponsecorrectradio", array()) == 0)) {
                // line 43
                echo "                                    <td>Fausse</td>
                                                    ";
            } else {
                // line 45
                echo "
                <td>Correcte</td>

                ";
            }
            // line 49
            echo "                
                <td>
                <ul class=\"sc_list sc_list_style_iconed\">
                    <li class=\"sc_list_item even\">
                        <span class=\"sc_list_icon icon-right-2\"></span><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Details</a>
                    </li>
                    <li class=\"sc_list_item odd sc_list_st1\">
                        <span class=\"sc_list_icon icon-delete-2 sc_list_st2\"></span><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>

        
            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_new", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_large alignleft sc_button_iconed icon-user-2 sc_buttons_st1\">
Creer une nouvelle reponse
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
        return "MoocQuizBundle:Reponse:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 66,  130 => 62,  118 => 56,  112 => 53,  106 => 49,  100 => 45,  96 => 43,  94 => 42,  90 => 41,  86 => 40,  80 => 39,  77 => 38,  73 => 37,  39 => 5,  36 => 3,  11 => 1,);
    }
}

<?php

/* MoocQuizBundle:PasserQuiz:exam.html.twig */
class __TwigTemplate_b442967900585aef1f7ea6fc59b77b814819b89b4ed7b94659f9c47f56caa404 extends Twig_Template
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
        // line 10
        echo "<script  language=\"javascript\">
                function checkVal(form) {
                var point = 0;
                        var score = 0;";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 14
            echo "                        point = point +";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "point", array()), "html", null, true);
            echo ";   
                                            ";
            // line 15
            if (($this->getAttribute($context["question"], "type", array()) == "Choix multiple")) {
                // line 16
                echo "                                            var resultat = false;
                        ";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 18
                    echo "            ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        // line 19
                        echo "                    if (document.form.chk";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo ".checked)
                                {
                                var x = document.form.chk";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo ".value;
                                ";
                        // line 22
                        if ($this->getAttribute($context["rep"], "reponsecorrectradio", array())) {
                            // line 23
                            echo "                                
                                resultat = true;
                                ";
                        } else {
                            // line 25
                            echo " 
                                    resultat=false;
                                ";
                        }
                        // line 28
                        echo "                            }
            ";
                    }
                    // line 30
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                            if (resultat == true)
                            {
                            score = score +";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "point", array()), "html", null, true);
                echo " ;
                            }
                ";
            } elseif (($this->getAttribute(            // line 35
$context["question"], "type", array()) == "Choix unique")) {
                // line 36
                echo "                        var resultat = false;
                var x = document.form.radio";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo ".value;
                    ";
                // line 38
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 39
                    echo "                    ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        // line 40
                        echo "                    ";
                        if (($this->getAttribute($context["rep"], "reponsecorrectradio", array()) == true)) {
                            // line 41
                            echo "                        
                                
                                if (x == \"";
                            // line 43
                            echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsecorrecttext", array()), "html", null, true);
                            echo "\")
                                {
                                resultat = true;
                                }
                            
                    ";
                        }
                        // line 49
                        echo "                    ";
                    }
                    // line 50
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                            if (resultat == true)
                            {
                            score = score +";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "point", array()), "html", null, true);
                echo " ;
                            }
                        ";
            } else {
                // line 56
                echo "                        var resultat = false;
                                            ";
                // line 57
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 58
                    echo "                            ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        // line 59
                        echo "                                        var x = document.form.inp";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo ".value.toString();
                                        if (x == \"";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsecorrecttext", array()), "html", null, true);
                        echo "\")
                                {
                                resultat = true;
                                }
                            ";
                    }
                    // line 65
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                            if (resultat == true)
                            {
                            score = score +";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "point", array()), "html", null, true);
                echo " ;
                            }
                                ";
            }
            // line 71
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    
                    window.document.form.text1.value=Math.floor((score / point) * 100);
                    window.document.form.text2.value=";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "id", array()), "html", null, true);
        echo ";
                    window.document.form.text3.value=1;

}
</script>

\t\t\t<!-- Page title -->
            <div class=\"page_top_wrap page_top_title page_top_breadcrumbs sc_pt_st1\">
                <div class=\"content_wrap\">
                    <div class=\"breadcrumbs\">
\t\t\t\t\t</div>
                    <h1 class=\"page_title\"> Quiz d'entrainement </h1>
                </div>
            </div>
\t\t\t<!-- /Page title -->
\t\t\t<!-- Content with sidebar -->
            <div class=\"page_content_wrap\">
                <div class=\"content_wrap\">
\t\t\t\t\t<!-- Content -->
                    <div class=\"content\">

                        <article class=\"post_item post_item_single page\">\t\t\t\t\t\t\t
                            <section class=\"post_content\">
                                                            
\t\t\t\t\t\t\t\t<!-- Quotes -->
                                <h3> ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "quiznom", array()), "html", null, true);
        echo " <span> Duree ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "time", array()), "html", null, true);
        echo " </span> </h3>
\t\t\t\t\t\t\t\t<blockquote cite=\"#\" class=\"sc_quote\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "quizdescription", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<div class=\"sc_line sc_line_style_solid\"></div>
\t\t\t\t\t\t\t\t<!-- /Quotes -->
\t\t\t\t\t\t\t\t<!-- Accordion section -->
\t\t\t\t\t\t\t\t<div class=\"sc_section\" data-animation=\"animated fadeInUp normal\">
\t\t\t\t\t\t\t\t\t                                    <form name=\"form\" method=\"POST\">

\t\t\t\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 110
            echo "                                            <div class=\"sc_accordion sc_accordion_style_1\" data-active=\"0\">

\t\t\t\t\t\t\t\t\t\t<div class=\"sc_accordion_item odd first\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"sc_accordion_title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_accordion_icon sc_accordion_icon_closed icon-plus-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_accordion_icon sc_accordion_icon_opened icon-minus-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "questiontext", array()), "html", null, true);
            echo " <span> Ponit : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "point", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc_accordion_content\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sc_list sc_list_style_iconed\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"sc_list_item odd first\">
\t\t\t  <!-- hhhhhhhhhhhhhhhhhhh-->\t\t\t<span>
                                            ";
            // line 122
            if (($this->getAttribute($context["question"], "type", array()) == "Choix multiple")) {
                // line 123
                echo "
                                                <form name=\"multiple\">
                                                    <table class=\"records_list\">

                                                        ";
                // line 127
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 128
                    echo "                                                            ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        echo "    


                                                                <tr>
                                                                    <td>
                                                                        <input type=\"checkbox\" name =\"chk";
                        // line 133
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo "\" value=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsecorrectradio", array()), "html", null, true);
                        echo " default=\"0\">
                                                                    </td>
                                                                    <td>  ";
                        // line 135
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsetext", array()), "html", null, true);
                        echo "</td>
                                                                </tr>




                                                            ";
                    }
                    // line 142
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "                                                    </table>
                                                </form>
                                            ";
            } elseif (($this->getAttribute(            // line 145
$context["question"], "type", array()) == "Choix unique")) {
                // line 146
                echo "
                                                <table class=\"records_list\">

                                                    ";
                // line 149
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 150
                    echo "                                                        ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        echo "    


                                                            <tr>
                                                                <td>
                                                                    <input type=\"radio\" name=\"radio";
                        // line 155
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()), "html", null, true);
                        echo "\" value=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsecorrecttext", array()), "html", null, true);
                        echo ">
                                                                </td>

                                                                <td>  ";
                        // line 158
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsetext", array()), "html", null, true);
                        echo "</td>
                                                            </tr>





                                                        ";
                    }
                    // line 166
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                                                </table>

                                            ";
            } else {
                // line 170
                echo "
                                                <table class=\"records_list\">

                                                    ";
                // line 173
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 174
                    echo "                                                        ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        echo "    



                                                            <tr>
                                                                <td>  ";
                        // line 179
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsetext", array()), "html", null, true);
                        echo " :</td>
                                                                <td><input type=\"text\" name=\"inp";
                        // line 180
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo "\"></td>

                                                            </tr>




                                                        ";
                    }
                    // line 188
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                                                </table>
</li>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            // line 195
            echo "\t\t\t\t\t\t\t\t\t\t\t<!-- hhhhhhhhhhhhhhhhhhh-->\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /Accordion section -->
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                                    <input type=\"hidden\" name=\"text1\" value=\"\">
                                    <input type=\"hidden\" name=\"text2\" value=\"\">
                                    <input type=\"hidden\" name=\"text3\" value=\"\">
                                    <input type=\"hidden\" name=\"text4\" value=\"\">
                                    
                                    <input type=\"submit\" value=\"Terminer\" onclick=\"checkVal(this.form)\">
                                </form>


\t\t\t\t\t\t\t\t
                            </section>
                        </article>
                    </div>
                    <!-- /Content -->
                   
                </div>
            </div>
            <!-- /Content with sidebar -->
                                    ";
    }

    public function getTemplateName()
    {
        return "MoocQuizBundle:PasserQuiz:exam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 208,  420 => 195,  412 => 189,  406 => 188,  395 => 180,  391 => 179,  382 => 174,  378 => 173,  373 => 170,  368 => 167,  362 => 166,  351 => 158,  343 => 155,  334 => 150,  330 => 149,  325 => 146,  323 => 145,  319 => 143,  313 => 142,  303 => 135,  296 => 133,  287 => 128,  283 => 127,  277 => 123,  275 => 122,  264 => 116,  256 => 110,  252 => 109,  241 => 101,  234 => 99,  206 => 74,  202 => 72,  196 => 71,  190 => 68,  186 => 66,  180 => 65,  172 => 60,  167 => 59,  164 => 58,  160 => 57,  157 => 56,  151 => 53,  147 => 51,  141 => 50,  138 => 49,  129 => 43,  125 => 41,  122 => 40,  119 => 39,  115 => 38,  111 => 37,  108 => 36,  106 => 35,  101 => 33,  97 => 31,  91 => 30,  87 => 28,  82 => 25,  77 => 23,  75 => 22,  71 => 21,  65 => 19,  62 => 18,  58 => 17,  55 => 16,  53 => 15,  48 => 14,  44 => 13,  39 => 10,  36 => 3,  11 => 1,);
    }
}

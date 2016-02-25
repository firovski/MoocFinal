<?php

/* MoocQuizBundle:PasserQuiz:question.html.twig */
class __TwigTemplate_758034e992a7c9a1d76fc182e5d0cabe02b51e21e3a8074e9bab40e16744c2b4 extends Twig_Template
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
        echo "<script>
        function countDown(secs, elem) {
        var element = document.getElementById(elem);
                element.innerHTML = \"Il vous reste : \" + Math.floor(secs / 60) + \" minutes et  \" + secs % 60 + \" seconde \";
                if (secs <=1) {
                clearTimeout(timer);
                window.document.form.text4.value=\"timer\";
                element.innerHTML =checkVal(this.form) ;
                window.document.form.submit();

        }
        secs--;
                var timer = setTimeout('countDown(' + secs + ',\"' + elem + '\")', 1000);
                
        }
        </script>
    



    <script  language=\"javascript\">
                function checkVal(form) {
                var point = 0;
                        var score = 0;";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 29
            echo "                        point = point +";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "point", array()), "html", null, true);
            echo ";   
                                            ";
            // line 30
            if (($this->getAttribute($context["question"], "type", array()) == "Choix multiple")) {
                // line 31
                echo "                                            var resultat = false;
                        ";
                // line 32
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 33
                    echo "            ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        // line 34
                        echo "                    if (document.form.chk";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo ".checked)
                                {
                                var x = document.form.chk";
                        // line 36
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo ".value;
                                ";
                        // line 37
                        if ($this->getAttribute($context["rep"], "reponsecorrectradio", array())) {
                            // line 38
                            echo "                                
                                resultat = true;
                                ";
                        } else {
                            // line 40
                            echo " 
                                    resultat=false;
                                ";
                        }
                        // line 43
                        echo "                            }
            ";
                    }
                    // line 45
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                            if (resultat == true)
                            {
                            score = score +";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "point", array()), "html", null, true);
                echo " ;
                            }
                ";
            } elseif (($this->getAttribute(            // line 50
$context["question"], "type", array()) == "Choix unique")) {
                // line 51
                echo "                        var resultat = false;
                var x = document.form.radio";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo ".value;
                    ";
                // line 53
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 54
                    echo "                    ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        // line 55
                        echo "                    ";
                        if (($this->getAttribute($context["rep"], "reponsecorrectradio", array()) == true)) {
                            // line 56
                            echo "                        
                                
                                if (x == \"";
                            // line 58
                            echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsecorrecttext", array()), "html", null, true);
                            echo "\")
                                {
                                resultat = true;
                                }
                            
                    ";
                        }
                        // line 64
                        echo "                    ";
                    }
                    // line 65
                    echo "                    ";
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
            } else {
                // line 71
                echo "                        var resultat = false;
                                            ";
                // line 72
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 73
                    echo "                            ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        // line 74
                        echo "                                        var x = document.form.inp";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo ".value.toString();
                                        if (x == \"";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsecorrecttext", array()), "html", null, true);
                        echo "\")
                                {
                                resultat = true;
                                }
                            ";
                    }
                    // line 80
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                            if (resultat == true)
                            {
                            score = score +";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "point", array()), "html", null, true);
                echo " ;
                            }
                                ";
            }
            // line 86
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                    
                    window.document.form.text1.value=Math.floor((score / point) * 100);
                    window.document.form.text2.value=";
        // line 89
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
                    <h1 class=\"page_title\"> <div id=\"status\" ></div>
    <script>countDown(";
        // line 101
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "time", array()) * 60), "html", null, true);
        echo ", \"status\");</script></h1>
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
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "quiznom", array()), "html", null, true);
        echo " <span> Duree ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "time", array()), "html", null, true);
        echo " </span> </h3>
\t\t\t\t\t\t\t\t<blockquote cite=\"#\" class=\"sc_quote\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "quizdescription", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<div class=\"sc_line sc_line_style_solid\"></div>
\t\t\t\t\t\t\t\t<!-- /Quotes -->
\t\t\t\t\t\t\t\t<!-- Accordion section -->
\t\t\t\t\t\t\t\t<div class=\"sc_section\" data-animation=\"animated fadeInUp normal\">
\t\t\t\t\t\t\t\t\t                                    <form name=\"form\" method=\"POST\">

\t\t\t\t\t\t\t\t\t";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 126
            echo "                                            <div class=\"sc_accordion sc_accordion_style_1\" data-active=\"0\">

\t\t\t\t\t\t\t\t\t\t<div class=\"sc_accordion_item odd first\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"sc_accordion_title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_accordion_icon sc_accordion_icon_closed icon-plus-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sc_accordion_icon sc_accordion_icon_opened icon-minus-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 132
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
            // line 138
            if (($this->getAttribute($context["question"], "type", array()) == "Choix multiple")) {
                // line 139
                echo "
                                                <form name=\"multiple\">
                                                    <table class=\"records_list\">

                                                        ";
                // line 143
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 144
                    echo "                                                            ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        echo "    


                                                                <tr>
                                                                    <td>
                                                                        <input type=\"checkbox\" name =\"chk";
                        // line 149
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo "\" value=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsecorrectradio", array()), "html", null, true);
                        echo " default=\"0\">
                                                                    </td>
                                                                    <td>  ";
                        // line 151
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsetext", array()), "html", null, true);
                        echo "</td>
                                                                </tr>




                                                            ";
                    }
                    // line 158
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                                                    </table>
                                                </form>
                                            ";
            } elseif (($this->getAttribute(            // line 161
$context["question"], "type", array()) == "Choix unique")) {
                // line 162
                echo "
                                                <table class=\"records_list\">

                                                    ";
                // line 165
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 166
                    echo "                                                        ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        echo "    


                                                            <tr>
                                                                <td>
                                                                    <input type=\"radio\" name=\"radio";
                        // line 171
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()), "html", null, true);
                        echo "\" value=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsecorrecttext", array()), "html", null, true);
                        echo ">
                                                                </td>

                                                                <td>  ";
                        // line 174
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsetext", array()), "html", null, true);
                        echo "</td>
                                                            </tr>





                                                        ";
                    }
                    // line 182
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "                                                </table>

                                            ";
            } else {
                // line 186
                echo "
                                                <table class=\"records_list\">

                                                    ";
                // line 189
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 190
                    echo "                                                        ";
                    if (($this->getAttribute($context["question"], "id", array()) == $this->getAttribute($this->getAttribute($context["rep"], "idquestion", array()), "id", array()))) {
                        echo "    



                                                            <tr>
                                                                <td>  ";
                        // line 195
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "reponsetext", array()), "html", null, true);
                        echo " :</td>
                                                                <td><input type=\"text\" name=\"inp";
                        // line 196
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rep"], "id", array()), "html", null, true);
                        echo "\"></td>

                                                            </tr>




                                                        ";
                    }
                    // line 204
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "                                                </table>
</li>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            // line 211
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
        // line 224
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
        return "MoocQuizBundle:PasserQuiz:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 224,  444 => 211,  436 => 205,  430 => 204,  419 => 196,  415 => 195,  406 => 190,  402 => 189,  397 => 186,  392 => 183,  386 => 182,  375 => 174,  367 => 171,  358 => 166,  354 => 165,  349 => 162,  347 => 161,  343 => 159,  337 => 158,  327 => 151,  320 => 149,  311 => 144,  307 => 143,  301 => 139,  299 => 138,  288 => 132,  280 => 126,  276 => 125,  265 => 117,  258 => 115,  241 => 101,  226 => 89,  222 => 87,  216 => 86,  210 => 83,  206 => 81,  200 => 80,  192 => 75,  187 => 74,  184 => 73,  180 => 72,  177 => 71,  171 => 68,  167 => 66,  161 => 65,  158 => 64,  149 => 58,  145 => 56,  142 => 55,  139 => 54,  135 => 53,  131 => 52,  128 => 51,  126 => 50,  121 => 48,  117 => 46,  111 => 45,  107 => 43,  102 => 40,  97 => 38,  95 => 37,  91 => 36,  85 => 34,  82 => 33,  78 => 32,  75 => 31,  73 => 30,  68 => 29,  64 => 28,  39 => 5,  36 => 3,  11 => 1,);
    }
}

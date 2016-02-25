<?php

/* MoocQuizBundle:Reponse:show.html.twig */
class __TwigTemplate_88073e155105408b8e6809a4bd63a3fe4fa9b6bdae4d4aea6ea6ae3ae62de4b9 extends Twig_Template
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
        echo "<center>
    <h1>Reponse</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reponse</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponsetext", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reponse correcte</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponsecorrecttext", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vrai/Faux</th>
                ";
        // line 23
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponsecorrectradio", array()) == 0)) {
            // line 24
            echo "                                    <td>Fausse</td>
                                                    ";
        } else {
            // line 26
            echo "
                <td>Correcte</td>

                ";
        }
        // line 30
        echo "            </tr>
        </tbody>
    </table>

        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_list", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idquestion", array()), "id", array()))), "html", null, true);
        echo "\">
            Retourner a la liste
        </a><br>
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Modifier
        </a>
    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </center>
";
    }

    public function getTemplateName()
    {
        return "MoocQuizBundle:Reponse:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  93 => 37,  87 => 34,  81 => 30,  75 => 26,  71 => 24,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}

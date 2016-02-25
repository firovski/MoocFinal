<?php

/* MoocQuizBundle:Default:index.html.twig */
class __TwigTemplate_7869e00f4376e5d1acf8ef83c81d3696806bf942d78e2539d6eddd112c29930a extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <script>google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- Google map section -->
                                <div class=\"sc_section\" data-animation=\"animated fadeInUp normal\">
                                    <div class=\"sc_line sc_line_style_solid margin_top_0\"></div>
                                    <h3>Google map</h3>
                                        
                                    <div id=\"sc_googlemap_1336029263\" style=\"width:500px;height:380px;\"></div>

                                </div>
\t\t\t\t\t\t\t\t<!-- /Google map section -->
";
    }

    public function getTemplateName()
    {
        return "MoocQuizBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}

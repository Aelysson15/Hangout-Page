<?php

/* layout.html.twig */
class __TwigTemplate_0fbd3546ad2d90f609eefdfc2b7753a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container_content' => array($this, 'block_container_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

        <title>PHPPB Hangout</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <meta name=\"viewport\" content=\"width=device-width\">

        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
        <style>
        body {
        padding-top: 60px;
        padding-bottom: 40px;
        }
        </style>
        <link rel=\"stylesheet\" href=\"css/bootstrap-responsive.min.css\">
        <link rel=\"stylesheet\" href=\"css/style.css\">

        <script src=\"js/libs/modernizr-2.6.1.custom.js\"></script>
    </head>
    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a class=\"brand\" href=\"#\">PHPPB Hangout</a>
                    
                </div>
            </div>
        </div>

        <div class=\"container\">

            ";
        // line 42
        $this->displayBlock('container_content', $context, $blocks);
        // line 43
        echo "            <hr>

            <footer>
                <p>&copy; PHPPB 2012</p>
            </footer>

        </div> <!-- /container -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"js/libs/jquery-1.8.0.min.js\"><\\/script>')</script>

        <script src=\"js/libs/bootstrap/transition.js\"></script>
        <script src=\"js/libs/bootstrap/collapse.js\"></script>

        <script src=\"js/script.js\"></script>
    </body>
</html>";
    }

    // line 42
    public function block_container_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 42,  63 => 43,  61 => 42,  18 => 1,);
    }
}

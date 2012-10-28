<?php

/* index.html.twig */
class __TwigTemplate_349c41c86e1e1479e3a06280b41f2c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'container_content' => array($this, 'block_container_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"well-large pull-left\" style=\"width: 640px\">
<h2>Ao Vivo</h2>
<iframe width=\"640\" height=\"480\" src=\"http://www.youtube.com/embed/K3CHi_9sxj0\" frameborder=\"0\" allowfullscreen></iframe></div>

<div class=\"well-large pull-left\" style=\"width: 350px;margin-left:20px\">
<h2>Participe</h2>

<a class=\"twitter-timeline\" href=\"https://twitter.com/search?q=%23phppb\" data-widget-id=\"262161551908278274\">Tweets about \"#phppb\"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>

</div>

<div class=\"clearfix\"></div>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}

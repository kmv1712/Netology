<?php

/* base.html */
class __TwigTemplate_510cce23e96c7bdff19de717130b04c8f93771db9fa8155e5923fb8324f5bd48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'others' => array($this, 'block_others'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
</head>
<style>
\t\ttable { 
\t\t\tborder-spacing: 0;
\t\t\tborder-collapse: collapse;
\t\t}

\t\ttd, th {
\t\t\tborder: 1px solid #ccc;
\t\t\tpadding: 5px;
\t\t}

\t\ttable thead {
\t\t\tbackground: #eee;
\t\t}

\t\tform{
\t\t\tpadding: 5px;
\t\t}

\t</style>
<body>

<div id=\"content\">
    ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "</div>


<div id=\"others people\">
    ";
        // line 36
        $this->displayBlock('others', $context, $blocks);
        // line 38
        echo "</div>

</body>
</html>


";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    ";
    }

    // line 36
    public function block_others($context, array $blocks = array())
    {
        // line 37
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  88 => 36,  84 => 31,  81 => 30,  76 => 4,  66 => 38,  64 => 36,  58 => 32,  56 => 30,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "W:\\domains\\DZNet\\lesson_5.2(TWIG)\\templates\\base.html");
    }
}

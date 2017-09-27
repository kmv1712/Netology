<?php

/* main.html */
class __TwigTemplate_c3481f6eb3baaa69032cdd4de58ecda4c78f35a2ca5db0576d5ecc3977fbd313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'questions' => array($this, 'block_questions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\" class=\"no-js\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

\t<link rel=\"stylesheet\" href=\"lib/css/reset.css\"> <!-- CSS reset -->
\t<link rel=\"stylesheet\" href=\"lib/css/style.css\"> <!-- Resource style -->
\t<script src=\"lib/js/modernizr.js\"></script> <!-- Modernizr -->
\t<title>FAQ</title>
</head>
<body>
\t<header>
\t\t<h1>FAQ</h1>
\t</header>


\t";
        // line 20
        $this->displayBlock('questions', $context, $blocks);
        // line 22
        echo "
\t
\t<script src=\"lib/js/jquery-2.1.1.js\"></script>
\t<script src=\"lib/js/jquery.mobile.custom.min.js\"></script>
\t<script src=\"lib/js/main.js\"></script> <!-- Resource jQuery -->
</body>
</html>";
    }

    // line 20
    public function block_questions($context, array $blocks = array())
    {
        // line 21
        echo "\t";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  53 => 20,  43 => 22,  41 => 20,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main.html", "W:\\domains\\DZNet\\FinalTask\\templates\\main.html");
    }
}

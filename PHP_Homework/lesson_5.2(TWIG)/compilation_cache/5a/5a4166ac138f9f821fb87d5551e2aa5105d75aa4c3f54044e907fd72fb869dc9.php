<?php

/* main.html */
class __TwigTemplate_c3481f6eb3baaa69032cdd4de58ecda4c78f35a2ca5db0576d5ecc3977fbd313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'task' => array($this, 'block_task'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>

<!-- <a href=\"templates\\register.html\">Войдите на сайт</a> -->

<h1>Здравствуйте, ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
        echo "! Вот ваш список дел:</h1>
<form action=\"\" method=\"POST\">
  <input type=\"submit\" value = \"Выйти из аккаунта\"  name = \"exit\">

</form>


<form action=\"\" method=\"POST\">
  
  <br>
  <br>
\t<input type=\"text\" name = textTask>
\t<input type=\"submit\" value = \"Добавить\"  name = \"addTask\">
\t 
</form>



<div id=\"task\">
";
        // line 30
        $this->displayBlock('task', $context, $blocks);
        // line 32
        echo "</div>

</body>
</html>
</body>
</html>";
    }

    // line 30
    public function block_task($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  56 => 32,  54 => 30,  32 => 11,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main.html", "W:\\domains\\DZNet\\lesson_5.2(TWIG)\\templates\\main.html");
    }
}

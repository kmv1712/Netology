<?php

/* admin.html */
class __TwigTemplate_fab36cb02b69c3b08d03f957c2dc01b583b719ec6662c0b1b7ea8f2c0678be29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list_admin' => array($this, 'block_list_admin'),
            'list_category' => array($this, 'block_list_category'),
            'list_question' => array($this, 'block_list_question'),
            'form_for_admin' => array($this, 'block_form_for_admin'),
            'list_question_with_empty_answer' => array($this, 'block_list_question_with_empty_answer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name = \"viewport\" content = \"width = device-widht, initial-scale=1.0\">
\t<title>Document</title>
\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
</head>
<body>

\t<div class=\"container\">
\t\t<div class=\"row red ligten-1\">
\t\t\t<div class=\"col s1 red\"><br></div>
\t\t\t<div class=\"col s1 green\"><br></div>
\t\t\t<div class=\"col s1 red\"><br></div>
\t\t\t<div class=\"col s1 green\"><br></div>
\t\t\t<div class=\"col s1 red\"><br></div>
\t\t\t<div class=\"col s1 green\"><br></div>
\t\t\t<div class=\"col s1 red\"><br></div>
\t\t\t<div class=\"col s1 green\"><br></div>
\t\t\t<div class=\"col s1 red\"><br></div>
\t\t\t<div class=\"col s1 green\"><br></div>
\t\t\t<div class=\"col s1 red\"><br></div>
\t\t\t<div class=\"col s1 green\"><br></div>
\t\t</div>

\t\t<!-- Список администраторов (начало)-->
\t\t";
        // line 29
        $this->displayBlock('list_admin', $context, $blocks);
        // line 31
        echo "\t\t<!-- Список администраторов (конец)-->


\t\t<!-- Статистика по категориям (начало)-->
\t\t";
        // line 35
        $this->displayBlock('list_category', $context, $blocks);
        // line 37
        echo "\t\t<!-- Статистика по категориям (конец)-->

\t\t<!-- Дата, вопрос, статус определенной темы (начало)-->
\t\t";
        // line 40
        $this->displayBlock('list_question', $context, $blocks);
        // line 42
        echo "\t\t<!-- Дата, вопрос, статус определенной темы (конец)-->

\t\t<!-- Форма вывода вопрос ответ (начало) -->
\t\t";
        // line 45
        $this->displayBlock('form_for_admin', $context, $blocks);
        // line 47
        echo "\t\t<!-- Форма вывода вопрос ответ (конец) -->\t

\t\t<!-- Список вопросов без ответов -->
\t\t";
        // line 50
        $this->displayBlock('list_question_with_empty_answer', $context, $blocks);
        // line 52
        echo "\t\t<!-- Список вопросов без ответов (конец) -->
\t</div>

</div>


<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
</body>
</html>";
    }

    // line 29
    public function block_list_admin($context, array $blocks = array())
    {
        // line 30
        echo "\t\t";
    }

    // line 35
    public function block_list_category($context, array $blocks = array())
    {
        // line 36
        echo "\t\t";
    }

    // line 40
    public function block_list_question($context, array $blocks = array())
    {
        // line 41
        echo "\t\t";
    }

    // line 45
    public function block_form_for_admin($context, array $blocks = array())
    {
        // line 46
        echo "\t\t";
    }

    // line 50
    public function block_list_question_with_empty_answer($context, array $blocks = array())
    {
        // line 51
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "admin.html";
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  126 => 50,  122 => 46,  119 => 45,  115 => 41,  112 => 40,  108 => 36,  105 => 35,  101 => 30,  98 => 29,  85 => 52,  83 => 50,  78 => 47,  76 => 45,  71 => 42,  69 => 40,  64 => 37,  62 => 35,  56 => 31,  54 => 29,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.html", "W:\\domains\\DZNet\\FinalTask\\templates\\admin.html");
    }
}

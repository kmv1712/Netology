<?php

/* list_category.html */
class __TwigTemplate_845ca3f9b0657c72e7ec8ee7d00b9e9fff70d53c6eaac82acf16aa1294f1e3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html", "list_category.html", 1);
        $this->blocks = array(
            'list_category' => array($this, 'block_list_category'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_list_category($context, array $blocks = array())
    {
        // line 5
        echo "\t<!-- Статистика по категориям -->

<div class=\"row \">
\t<div class=\"row\"> <div class= \"col s12 \"><h5>Статистика по категориям</h5></div></div>

\t<table>
\t\t<thead>
\t\t\t<td class=\"center-align\">Список тем</td>
\t\t\t<td class=\"center-align\">Всего вопросов по теме</td>
\t\t\t<td class=\"center-align\">Опублековано вопросов в теме</td>
\t\t\t<td class=\"center-align\">Вопросы без ответа</td>
\t\t</thead>

\t\t<tbody>
\t\t\t<tr >
\t\t\t\t<td class=\"center-align\"><a href=\"\">Правила</a></td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t</tr>
\t\t\t<tr >
\t\t\t\t<td class=\"center-align\"><a href=\"\">Mobile</a></td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t</tr>
\t\t\t<tr >
\t\t\t\t<td class=\"center-align\"><a href=\"\">phone</a></td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t\t<td class=\"center-align\">0</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<div class=\"col s12\">
\t\t<div class=\"row red ligten-1\">
\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t<input class = \"waves-effect waves-light btn col s12\" type=\"submit\" value = \"Добавить тему\" > 
\t\t\t\t</div> \t
\t\t\t\t<div class=\"col s6\">
\t\t\t\t\t<input class = \"waves-effect waves-light btn col s12\" type=\"submit\" value = \"Удалить тему и вопросы в ней\" > 
\t\t\t\t</div> \t
\t\t\t</form>
\t\t</div> \t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list_category.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list_category.html", "W:\\domains\\DZNet\\FinalTask\\templates\\list_category.html");
    }
}

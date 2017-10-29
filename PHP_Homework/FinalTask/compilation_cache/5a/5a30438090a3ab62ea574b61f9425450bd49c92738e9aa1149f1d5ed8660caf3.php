<?php

/* list_question_with_empty_answer.html */
class __TwigTemplate_ffc30f2b480f7331cd4e2c96beff9da7f2eb71b00280292c48215ce1c68be28f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html", "list_question_with_empty_answer.html", 1);
        $this->blocks = array(
            'list_question_with_empty_answer' => array($this, 'block_list_question_with_empty_answer'),
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
    public function block_list_question_with_empty_answer($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<!-- Список вопросов без ответов -->
\t\t<table>
\t\t\t<thead>
\t\t\t\t<td>Дата вопроса</td>
\t\t\t\t<td>Вопрос</td>
\t\t\t\t<td>Категория</td>
\t\t\t\t<td>Редактировать</td>
\t\t\t\t<td>Удалить</td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>21.09.2017</td>
\t\t\t\t\t<td>В чем свысл жизни</td>
\t\t\t\t\t<td>Жизнь</td>
\t\t\t\t\t<td>Редактировать</td>
\t\t\t\t\t<td>Удалить</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<!-- Список вопросов без ответов (конец) -->
";
    }

    public function getTemplateName()
    {
        return "list_question_with_empty_answer.html";
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
        return new Twig_Source("", "list_question_with_empty_answer.html", "W:\\domains\\DZNet\\FinalTask\\templates\\list_question_with_empty_answer.html");
    }
}

<?php

/* list_question.html */
class __TwigTemplate_be93111791900fa2cdfa815116f5a24c5a998edf98f1cdbe11ad9132a85d23b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html", "list_question.html", 1);
        $this->blocks = array(
            'list_question' => array($this, 'block_list_question'),
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
    public function block_list_question($context, array $blocks = array())
    {
        // line 5
        echo "
\t<!-- Дата, вопрос, статус определенной темы -->
<div class=\"row\">
\t<h5>Тема</h5>
\t<table>
\t\t<thead>
\t\t\t<td>Дата создания</td>
\t\t\t<td>Вопрос</td>
\t\t\t<td>Статус</td>
\t\t\t<td>Скрыть</td>
\t\t\t<td>Опубликовать</td>
\t\t\t<td>Удалить</td>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>12.09.2017</td>
\t\t\t\t<td>Что нового присходит в стране грез</td>
\t\t\t\t<td>ожидает ответа</td>
\t\t\t\t<td>Скрыть</td>
\t\t\t\t<td>Опубликовать</td>
\t\t\t\t<td>Удалить</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>12.09.2017</td>
\t\t\t\t<td>Где искать любовь</td>
\t\t\t\t<td>ожидает ответа</td>
\t\t\t\t<td>Скрыть</td>
\t\t\t\t<td>Опубликовать</td>
\t\t\t\t<td>Удалить</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>

";
    }

    public function getTemplateName()
    {
        return "list_question.html";
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
        return new Twig_Source("", "list_question.html", "W:\\domains\\DZNet\\FinalTask\\templates\\list_question.html");
    }
}

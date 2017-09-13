<?php

/* main_table_task.html */
class __TwigTemplate_11f8ba54114ce6e504e24ccbce979abbd8d45cc2955933caafea23051cc49b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "main_table_task.html", 1);
        $this->blocks = array(
            'task' => array($this, 'block_task'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_task($context, array $blocks = array())
    {
        // line 4
        echo "
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Описание задачи</th>
\t\t\t\t<th>Дата добавления</th>
\t\t\t\t<th>Статус</th>
\t\t\t\t<th>Ответственный</th>
\t\t\t\t<th>Автор</th>
\t\t\t\t<th>Закрепить задачу за пользователем</th>
\t\t\t</tr>
\t\t</thead>
\t\t
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 18
            echo "
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "date", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "date", array()), "html", null, true);
            echo "</th>
\t\t\t</tr>


\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t</tbody>
\t</table>

";
    }

    public function getTemplateName()
    {
        return "main_table_task.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main_table_task.html", "W:\\domains\\DZNet\\lesson_5.2(TWIG)\\templates\\main_table_task.html");
    }
}

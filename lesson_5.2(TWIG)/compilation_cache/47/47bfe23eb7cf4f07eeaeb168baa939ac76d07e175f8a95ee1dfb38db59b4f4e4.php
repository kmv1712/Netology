<?php

/* tasks.html */
class __TwigTemplate_3d32c3f11d376a6c6558fede897719dbc6b2ead1399a2e729252b790b481dabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "tasks.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'others' => array($this, 'block_others'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Здравствуйте, user! Вот ваш список дел:</h1>

<form action=\"\">
\t<input type=\"text\">
\t<input type=\"submit\" value = \"Добавить\">
</form>


<div id=\"tasks\">
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 28
            echo "\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "date", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "number", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "date", array()), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</tbody>
\t</table>
</div>
";
    }

    // line 45
    public function block_others($context, array $blocks = array())
    {
        // line 46
        echo "<h2>Также, посмотрите, что от Вас требуют другие люди:</h2>

<div id=\"tasks\">
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
";
    }

    public function getTemplateName()
    {
        return "tasks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  105 => 45,  98 => 38,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  65 => 28,  61 => 27,  38 => 6,  35 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tasks.html", "W:\\domains\\DZNet\\lesson_5.2(TWIG)\\templates\\tasks.html");
    }
}

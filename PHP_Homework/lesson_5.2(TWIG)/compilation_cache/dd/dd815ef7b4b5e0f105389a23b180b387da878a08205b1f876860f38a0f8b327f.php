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

<table>
\t<tdead>
\t\t<tr>
\t\t\t<td>Описание задачи</td>
\t\t\t<td>Дата добавления</td>
\t\t\t<td>Статус</td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td></td>
\t\t\t<td>Ответственный</td>
\t\t\t<td>Автор</td>
\t\t\t<td>Закрепить задачу за пользователем</td>
\t\t</tr>
\t</tdead>


\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 23
            echo "\t\t<tr>
\t\t\t<td>  ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "description", array()));
            echo "</td>
\t\t\t<td>  ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date_added", array()));
            echo "</td>

\t\t\t";
            // line 27
            if (($this->getAttribute($context["d"], "is_done", array()) == 1)) {
                // line 28
                echo "\t\t\t<td>В процессе</td>
\t\t\t";
            } else {
                // line 30
                echo "\t\t\t<td>Выполнено</td>
\t\t\t";
            }
            // line 32
            echo "
 
 \t<td><a name=edit href=?id=";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "&action=edit>Изменить</a></td>
 \t<td><a name=done href=\"?id=";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "&action=done\">Выполнить</a></td>
 \t<td><a name =del  href=\"?id=";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "&action=delete\">Удалить</a></td>



 \t<td> <!-- ";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
            echo " --></td> <!-- Ответсвенный -->

 \t<td>  ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
            echo " </td> <!-- Автор -->

 \t<td> Другой пользователь </td> 

 </tr>\t\t
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
</table>
</tbody>
</table>

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
        return array (  113 => 48,  101 => 42,  96 => 40,  89 => 36,  85 => 35,  81 => 34,  77 => 32,  73 => 30,  69 => 28,  67 => 27,  62 => 25,  58 => 24,  55 => 23,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
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

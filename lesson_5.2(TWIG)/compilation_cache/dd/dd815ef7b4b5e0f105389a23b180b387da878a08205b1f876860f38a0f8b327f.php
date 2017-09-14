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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td>  ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "description", array()));
            echo "</td>
\t\t\t<td>  ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date_added", array()));
            echo "</td>

\t\t\t";
            // line 26
            if (($this->getAttribute($context["d"], "is_done", array()) == 1)) {
                // line 27
                echo "\t\t\t<td>В процессе</td>
\t\t\t";
            } else {
                // line 29
                echo "\t\t\t<td>Выполнено</td>
\t\t\t";
            }
            // line 31
            echo "
 
 \t<td><a name=\\\"edit\\\" href=\\\"lesson_4.2.php?edit=";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\">Изменить</a></td>
 \t<td><a name=\\\"done\\\" href=\\\"lesson_4.2.php?done=";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\">Выполнить</a></td>
 \t<td><a name=\\\"del\\\" href=\\\"lesson_4.2.php?del=";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "\">Удалить</a></td>



 \t<td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "user_id", array()));
            echo "</td>

 \t<td>  ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "assigned_user_id", array()));
            echo " </td>

 \t<td> Другой пользователь </td> 

 </tr>\t\t
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        return array (  112 => 47,  100 => 41,  95 => 39,  88 => 35,  84 => 34,  80 => 33,  76 => 31,  72 => 29,  68 => 27,  66 => 26,  61 => 24,  57 => 23,  54 => 22,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
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

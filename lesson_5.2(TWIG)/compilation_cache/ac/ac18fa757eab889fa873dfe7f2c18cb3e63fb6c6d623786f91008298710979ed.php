<?php

/* main_table_task_edit.html */
class __TwigTemplate_d26c5c09ce3ae4dca8485ea012a92c9fa281be53adb17098d1261484c70844fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "main_table_task_edit.html", 1);
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
        echo "<form action=\"\" method=\"POST\">
  <input type=\"submit\" value = \"Выйти из аккаунта\"  name = \"exit\">
</form>


<form action=\"\" method=\"POST\">
  
  <br>
  <br>
\t<input type=\"text\" name = textTask>
\t<input type=\"submit\" value = \"Сохранить\"  name = \"editTask\">
</form>

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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 34
            echo "\t\t<tr>
\t\t\t<td>  ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "description", array()));
            echo "</td>
\t\t\t<td>  ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "date_added", array()));
            echo "</td>

\t\t\t";
            // line 38
            if (($this->getAttribute($context["d"], "is_done", array()) == 1)) {
                // line 39
                echo "\t\t\t<td>В процессе</td>
\t\t\t";
            } else {
                // line 41
                echo "\t\t\t<td>Выполнено</td>
\t\t\t";
            }
            // line 43
            echo "
 
 \t<td><a name=edit href=?id=";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "&action=edit>Изменить</a></td>
 \t<td><a name=done href=\"?id=";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "&action=done\">Выполнить</a></td>
 \t<td><a name =del  href=\"?id=";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "&action=delete\">Удалить</a></td>



 \t<td> <!-- ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
            echo " --></td> <!-- Ответсвенный -->

 \t<td>  ";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
            echo " </td> <!-- Автор -->

 \t<td> Другой пользователь </td> 

 </tr>\t\t
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
</table>
</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "main_table_task_edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  112 => 53,  107 => 51,  100 => 47,  96 => 46,  92 => 45,  88 => 43,  84 => 41,  80 => 39,  78 => 38,  73 => 36,  69 => 35,  66 => 34,  62 => 33,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main_table_task_edit.html", "W:\\domains\\DZNet\\lesson_5.2(TWIG)\\templates\\main_table_task_edit.html");
    }
}

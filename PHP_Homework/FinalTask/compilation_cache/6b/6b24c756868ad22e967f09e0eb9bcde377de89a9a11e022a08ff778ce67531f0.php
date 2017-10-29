<?php

/* list_admin.html */
class __TwigTemplate_f2aad7ea972dbbfffd8f3002952aac6a8761d7b9db87409af110fa777fe67cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html", "list_admin.html", 1);
        $this->blocks = array(
            'list_admin' => array($this, 'block_list_admin'),
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
    public function block_list_admin($context, array $blocks = array())
    {
        // line 5
        echo "
<!-- Список администраторов -->
<h5>Здраствуйте ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["adminLogin"]) ? $context["adminLogin"] : null), "html", null, true);
        echo "</h5>

<div class=\"row\"><div class= \"col s12 \"><h5>Список администраторов</h5></div></div>

<div class=\"col s10\">

\t<table class = \"bordered\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td>№</td>
\t\t\t\t<td class=\"center-align \">Логин</td>
\t\t\t\t<td class=\"center-align\">Пароль</td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 25
            echo "\t\t\t<tr>
\t\t\t\t<td>  ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()));
            echo "</td>
\t\t\t\t<td class=\"center-align\">  ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "login", array()));
            echo "</td>
\t\t\t\t<td class=\"center-align\">  ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "password", array()));
            echo "</td>
\t\t\t\t<td><a name=\"edit\" href=\"?id=";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "&action=edit\" class=\"center-align\">Изменить пароль</a></td>
\t\t\t\t<td><a name=\"del\" href=\"?id=";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "&action=del\" class=\"center-align\">Удалить</a></td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
\t\t</tbody>
\t</table>
</div>
<div class=\"row\">
<div class=\"col s12\">

\t\t<form action=\"\" method=\"POST\">
\t\t\t<br>
\t\t\t<input class = \"waves-effect waves-light btn col s12\" type=\"submit\" value = \"Добавить администратора\" > <br><br>
\t\t</form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list_admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  62 => 26,  59 => 25,  55 => 24,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list_admin.html", "W:\\domains\\DZNet\\FinalTask\\templates\\list_admin.html");
    }
}

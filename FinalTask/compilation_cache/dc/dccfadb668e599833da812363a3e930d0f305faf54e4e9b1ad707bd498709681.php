<?php

/* questions.html */
class __TwigTemplate_826301bb08bc4397aa726301ef944ea775e52f45fa1636898f03e4bed1b63076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "questions.html", 1);
        $this->blocks = array(
            'userSelectCategorie' => array($this, 'block_userSelectCategorie'),
            'questions' => array($this, 'block_questions'),
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
    public function block_userSelectCategorie($context, array $blocks = array())
    {
        echo "\t
<form action=\"\" method= \"POST\">
\t<p>Введите свое имя</p>
\t<input type=\"text\" name = \"userName\">
\t<p>Введите адрес эл.почты</p>
\t<input type=\"text\" name = \"userMail\">
\t<p><select name=\"userSelectCategorie\">
\t\t<option selected = \"selected\">Выберете категорию</option>
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 12
            echo "\t\t<option name =\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()));
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()))), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</select></p>
</form>
";
    }

    // line 19
    public function block_questions($context, array $blocks = array())
    {
        echo "\t
<section class=\"cd-faq\">

\t<ul class=\"cd-faq-categories\">
\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 24
            echo "\t\t<li><a href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()));
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()))), "html", null, true);
            echo "</a></li>\t\t 
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</ul> <!-- cd-faq-categories -->

\t<div class=\"cd-faq-items\">
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 30
            echo "\t\t<ul id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()));
            echo "\" class=\"cd-faq-group\">
\t\t\t<li class=\"cd-faq-title\"><h2>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()));
            echo "</h2></li>
\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                // line 33
                echo "


\t\t\t";
                // line 36
                if ((twig_escape_filter($this->env, $this->getAttribute($context["q"], "categorie", array())) == twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array())))) {
                    // line 37
                    echo "
\t\t\t";
                    // line 38
                    if ((twig_escape_filter($this->env, $this->getAttribute($context["q"], "categorie", array())) == (isset($context["userQuestion"]) ? $context["userQuestion"] : null))) {
                        // line 39
                        echo "\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"cd-faq-trigger\" href=\"#0\">У вас есть вопрос? Задайте его мне</a>
\t\t\t\t\t\t<div class=\"cd-faq-content\">
\t\t\t\t\t\t\t<form action=\"\" method= \"POST\">
\t\t\t\t\t\t\t\t<p>Введите свое имя</p>
\t\t\t\t\t\t\t\t<input type=\"text\" name = \"userName\">
\t\t\t\t\t\t\t\t<p>Введите адрес эл.почты</p>
\t\t\t\t\t\t\t\t<input type=\"text\" name = \"userMail\">
\t\t\t\t\t\t\t\t\t<p>Выберете категорию</p>
\t\t\t\t\t\t\t\t  <p><select name=\"userSelectCategorie\">
\t\t\t\t\t\t\t\t\t<option selected = \"selected\" placeholder = \"Выберете категорию\"></option>
\t\t\t\t\t\t\t\t\t";
                        // line 50
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                            // line 51
                            echo "\t\t\t\t\t\t\t\t\t<option name =\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()));
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()))), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 53
                        echo "\t\t\t\t\t\t\t\t</select></p>
\t\t\t\t\t\t\t\t<p>Введите ваш вопрос</p>
\t\t\t\t\t\t\t  <textarea name=\"userFormQuestion\" cols=\"40\" rows=\"8\"></textarea></p>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<input type=\"submit\" value = \"Отправить вопрос\">
\t\t\t\t\t\t\t\t<input type=\"reset\" value=\"Очистить\"></p>
\t\t\t\t\t\t\t</form>
             
\t\t\t\t\t\t\t<p>";
                        // line 62
                        echo twig_escape_filter($this->env, (isset($context["sendFormUser"]) ? $context["sendFormUser"] : null), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</li>
\t    <a href=\"#0\" class=\"cd-close-panel\">Close</a>
\t\t\t";
                    } else {
                        // line 67
                        echo "
\t\t\t<li>
\t\t\t\t<a class=\"cd-faq-trigger\" href=\"#0\">";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "question", array()));
                        echo "</a>
\t\t\t\t<div class=\"cd-faq-content\">
\t\t\t\t\t<p>";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "answer", array()));
                        echo "</p>
\t\t\t\t</div> <!-- cd-faq-content -->
\t\t\t</li>

\t\t\t";
                    }
                    // line 76
                    echo "\t\t\t";
                }
                // line 77
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t</ul> <!-- cd-faq-group -->
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t</div> <!-- cd-faq-items -->
\t<a href=\"#0\" class=\"cd-close-panel\">Close</a>
</section> <!-- cd-faq -->

";
    }

    public function getTemplateName()
    {
        return "questions.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 81,  193 => 79,  186 => 77,  183 => 76,  175 => 71,  170 => 69,  166 => 67,  158 => 62,  147 => 53,  136 => 51,  132 => 50,  119 => 39,  117 => 38,  114 => 37,  112 => 36,  107 => 33,  103 => 32,  99 => 31,  94 => 30,  90 => 29,  85 => 26,  74 => 24,  70 => 23,  62 => 19,  56 => 14,  45 => 12,  41 => 11,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "questions.html", "W:\\domains\\DZNet\\FinalTask\\templates\\questions.html");
    }
}

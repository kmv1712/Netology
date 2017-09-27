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
    public function block_questions($context, array $blocks = array())
    {
        echo "\t
<section class=\"cd-faq\">

\t<ul class=\"cd-faq-categories\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 8
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
        // line 10
        echo "\t</ul> <!-- cd-faq-categories -->

\t<div class=\"cd-faq-items\">
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 14
            echo "\t\t<ul id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()));
            echo "\" class=\"cd-faq-group\">
\t\t\t<li class=\"cd-faq-title\"><h2>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array()));
            echo "</h2></li>
\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                // line 17
                echo "\t\t\t";
                if ((twig_escape_filter($this->env, $this->getAttribute($context["q"], "categorie", array())) == twig_escape_filter($this->env, $this->getAttribute($context["d"], "categorie", array())))) {
                    // line 18
                    echo "\t\t\t<li>
\t\t\t\t<a class=\"cd-faq-trigger\" href=\"#0\">";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "question", array()));
                    echo "</a>
\t\t\t\t<div class=\"cd-faq-content\">
\t\t\t\t\t<p>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "answer", array()));
                    echo "</p>
\t\t\t\t</div> <!-- cd-faq-content -->
\t\t\t</li>
\t\t\t";
                }
                // line 25
                echo "\t\t\t

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t</ul> <!-- cd-faq-group -->
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        return array (  106 => 30,  99 => 28,  91 => 25,  84 => 21,  79 => 19,  76 => 18,  73 => 17,  69 => 16,  65 => 15,  60 => 14,  56 => 13,  51 => 10,  40 => 8,  36 => 7,  28 => 3,  11 => 1,);
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

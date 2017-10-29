<?php

/* form_for_admin.html */
class __TwigTemplate_171382087376c195a3c1eab807b0682d2655450697a92b1635b6e13212b324d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html", "form_for_admin.html", 1);
        $this->blocks = array(
            'form_for_admin' => array($this, 'block_form_for_admin'),
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
    public function block_form_for_admin($context, array $blocks = array())
    {
        // line 5
        echo "
\t<!-- Форма вывода вопрос ответ -->
\t\t<p>Автор вопроса:</p>

\t\t<p>Вопрос: Где искать любовь</p>

\t\t<p>Ответ: Там где ее нет</p> 

\t\t<p>Изменить автора</p>

\t\t<p>Изменить текст вопроса</p>

\t\t<p>Изменить текст ответа</p>

\t\t<p>Изменить тему вопросаа</p>

";
    }

    public function getTemplateName()
    {
        return "form_for_admin.html";
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
        return new Twig_Source("", "form_for_admin.html", "W:\\domains\\DZNet\\FinalTask\\templates\\form_for_admin.html");
    }
}

<?php

/* register.html */
class __TwigTemplate_447ea5589a19c608d1d8d8273c35bbf1422c5c3b69983f55cd10387540113289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
\t
Введите данные для регистрации или войдите, если уже регистрировались:

<form action=\"\" method=\"POST\">
\t<input type=\"text\" name=\"login\" placeholder=\"Логин\">
  <input type=\"password\" name=\"password\" placeholder=\"Пароль\">
  <input type=\"submit\" name=\"sign_in\" value=\"Вход\">
  <input type=\"submit\" name=\"register\" value=\"Регистрация\">
</form>



</body>
</html>";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.html", "W:\\domains\\DZNet\\lesson_5.2(TWIG)\\templates\\register.html");
    }
}

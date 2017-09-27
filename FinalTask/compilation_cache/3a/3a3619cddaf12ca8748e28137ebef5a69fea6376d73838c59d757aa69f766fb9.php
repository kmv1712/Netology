<?php

/* categories.html */
class __TwigTemplate_f8f57a43a67736ecbb2cb27cac9845fc34b32d82178733b87209b37ad11f3e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "categories.html", 1);
        $this->blocks = array(
            'categories' => array($this, 'block_categories'),
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

    // line 4
    public function block_categories($context, array $blocks = array())
    {
        // line 5
        echo "
<ul class=\"cd-faq-categories\">
\t\t<li><a class=\"selected\" href=\"#basics\">Basics</a></li>
\t\t<li><a href=\"#mobile\">Mobile</a></li>
\t\t<li><a href=\"#account\">Account</a></li>
\t\t<li><a href=\"#payments\">Payments</a></li>
\t\t<li><a href=\"#privacy\">Privacy</a></li>
\t\t<li><a href=\"#delivery\">Delivery</a></li>
\t</ul> <!-- cd-faq-categories -->

";
    }

    public function getTemplateName()
    {
        return "categories.html";
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
        return new Twig_Source("", "categories.html", "W:\\domains\\DZNet\\FinalTask\\templates\\categories.html");
    }
}

<?php

/* PasaRequirementBundle:Project:edit.html.twig */
class __TwigTemplate_cbabd3026e37fb9465c433848a791ea1 extends Twig_Template
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
        echo "<h1>Project edit</h1>

<form action=\"";
        // line 3
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_update", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_edit_form_);
        echo ">
    ";
        // line 4
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_edit_form_);
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 17
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 18
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_delete_form_);
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:Project:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  40 => 12,  21 => 3,  69 => 32,  41 => 12,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 35,  66 => 18,  60 => 21,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 33,  95 => 29,  82 => 25,  73 => 20,  67 => 24,  52 => 17,  22 => 4,  55 => 9,  45 => 6,  36 => 14,  109 => 20,  104 => 34,  96 => 32,  84 => 14,  80 => 30,  26 => 4,  92 => 28,  79 => 40,  57 => 14,  46 => 7,  29 => 4,  19 => 1,  27 => 3,  112 => 21,  102 => 19,  89 => 16,  63 => 14,  56 => 12,  50 => 6,  47 => 16,  44 => 6,  37 => 8,  34 => 6,  30 => 3,  43 => 7,  33 => 11,  25 => 7,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  117 => 36,  113 => 34,  86 => 6,  83 => 25,  78 => 15,  68 => 9,  64 => 16,  61 => 15,  48 => 10,  39 => 15,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 33,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 18,  51 => 10,  42 => 9,  38 => 8,  35 => 7,  31 => 13,  28 => 4,);
    }
}

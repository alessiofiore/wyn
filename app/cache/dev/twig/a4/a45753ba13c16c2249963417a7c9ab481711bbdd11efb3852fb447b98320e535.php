<?php

/* test/number.html.twig */
class __TwigTemplate_597e6a8c21933cecf13ccb5d4b8dded88c1bc7e9d438f8a798e90bef04fb4fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "test/number.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a6d8f756b534abb2ecf813659077a907b1d3e9cef28ea9a36ec06fea3dbca7b = $this->env->getExtension("native_profiler");
        $__internal_9a6d8f756b534abb2ecf813659077a907b1d3e9cef28ea9a36ec06fea3dbca7b->enter($__internal_9a6d8f756b534abb2ecf813659077a907b1d3e9cef28ea9a36ec06fea3dbca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6d8f756b534abb2ecf813659077a907b1d3e9cef28ea9a36ec06fea3dbca7b->leave($__internal_9a6d8f756b534abb2ecf813659077a907b1d3e9cef28ea9a36ec06fea3dbca7b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e822c74606ed6f82c6ed76d4fe02a75484b6dbb6c4bbe4959cf8d48183dad3a = $this->env->getExtension("native_profiler");
        $__internal_1e822c74606ed6f82c6ed76d4fe02a75484b6dbb6c4bbe4959cf8d48183dad3a->enter($__internal_1e822c74606ed6f82c6ed76d4fe02a75484b6dbb6c4bbe4959cf8d48183dad3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Lucky Number: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumber"]) ? $context["luckyNumber"] : $this->getContext($context, "luckyNumber")), "html", null, true);
        echo "</h1>
";
        
        $__internal_1e822c74606ed6f82c6ed76d4fe02a75484b6dbb6c4bbe4959cf8d48183dad3a->leave($__internal_1e822c74606ed6f82c6ed76d4fe02a75484b6dbb6c4bbe4959cf8d48183dad3a_prof);

    }

    public function getTemplateName()
    {
        return "test/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h1>Lucky Number: {{ luckyNumber }}</h1>*/
/* {% endblock %}*/

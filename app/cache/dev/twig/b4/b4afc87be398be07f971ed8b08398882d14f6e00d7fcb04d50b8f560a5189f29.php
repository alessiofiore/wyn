<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_42e48821e340144265b57c5d162e69e3a24727a03ceeaef5cbf162e55de4b90a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58ebdc33115853e3219ab5ab7540f5021ab7a9fa029483f9a8d1f22efbdab9b7 = $this->env->getExtension("native_profiler");
        $__internal_58ebdc33115853e3219ab5ab7540f5021ab7a9fa029483f9a8d1f22efbdab9b7->enter($__internal_58ebdc33115853e3219ab5ab7540f5021ab7a9fa029483f9a8d1f22efbdab9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ebdc33115853e3219ab5ab7540f5021ab7a9fa029483f9a8d1f22efbdab9b7->leave($__internal_58ebdc33115853e3219ab5ab7540f5021ab7a9fa029483f9a8d1f22efbdab9b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bdb6d8865877c982058c0dd0cd6a7288da8debcfe146afb1bc4e27c4361bff7 = $this->env->getExtension("native_profiler");
        $__internal_9bdb6d8865877c982058c0dd0cd6a7288da8debcfe146afb1bc4e27c4361bff7->enter($__internal_9bdb6d8865877c982058c0dd0cd6a7288da8debcfe146afb1bc4e27c4361bff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bdb6d8865877c982058c0dd0cd6a7288da8debcfe146afb1bc4e27c4361bff7->leave($__internal_9bdb6d8865877c982058c0dd0cd6a7288da8debcfe146afb1bc4e27c4361bff7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63be1c585b38a044647c5828d96bd8f13351c69d708d42b4def50582f5b596e1 = $this->env->getExtension("native_profiler");
        $__internal_63be1c585b38a044647c5828d96bd8f13351c69d708d42b4def50582f5b596e1->enter($__internal_63be1c585b38a044647c5828d96bd8f13351c69d708d42b4def50582f5b596e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63be1c585b38a044647c5828d96bd8f13351c69d708d42b4def50582f5b596e1->leave($__internal_63be1c585b38a044647c5828d96bd8f13351c69d708d42b4def50582f5b596e1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c386f7614e9dd18b55891a06867f4c65127a70fb59078ad167cc059b52637a6 = $this->env->getExtension("native_profiler");
        $__internal_7c386f7614e9dd18b55891a06867f4c65127a70fb59078ad167cc059b52637a6->enter($__internal_7c386f7614e9dd18b55891a06867f4c65127a70fb59078ad167cc059b52637a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7c386f7614e9dd18b55891a06867f4c65127a70fb59078ad167cc059b52637a6->leave($__internal_7c386f7614e9dd18b55891a06867f4c65127a70fb59078ad167cc059b52637a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

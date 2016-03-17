<?php

/* test/index.html.twig */
class __TwigTemplate_eef0e722f4450797063ed4e189d017f94b575305e1bf5f3f984bd9cdf2e2f9ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "test/index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3c0a35c7182593b6720e62e8840cfa29b72a8a5b48553780ebc021d8a6066cc = $this->env->getExtension("native_profiler");
        $__internal_f3c0a35c7182593b6720e62e8840cfa29b72a8a5b48553780ebc021d8a6066cc->enter($__internal_f3c0a35c7182593b6720e62e8840cfa29b72a8a5b48553780ebc021d8a6066cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c0a35c7182593b6720e62e8840cfa29b72a8a5b48553780ebc021d8a6066cc->leave($__internal_f3c0a35c7182593b6720e62e8840cfa29b72a8a5b48553780ebc021d8a6066cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79bfbd7ba5cce6c5cd2636f608bd804e2df1f9687bae99a902cff51cea23cafb = $this->env->getExtension("native_profiler");
        $__internal_79bfbd7ba5cce6c5cd2636f608bd804e2df1f9687bae99a902cff51cea23cafb->enter($__internal_79bfbd7ba5cce6c5cd2636f608bd804e2df1f9687bae99a902cff51cea23cafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My cool blog posts";
        
        $__internal_79bfbd7ba5cce6c5cd2636f608bd804e2df1f9687bae99a902cff51cea23cafb->leave($__internal_79bfbd7ba5cce6c5cd2636f608bd804e2df1f9687bae99a902cff51cea23cafb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_15df073b5ecec1791607763c1b7c7fe18afe55d50ca956026ce47e002a11a12b = $this->env->getExtension("native_profiler");
        $__internal_15df073b5ecec1791607763c1b7c7fe18afe55d50ca956026ce47e002a11a12b->enter($__internal_15df073b5ecec1791607763c1b7c7fe18afe55d50ca956026ce47e002a11a12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        echo "  
";
        
        $__internal_15df073b5ecec1791607763c1b7c7fe18afe55d50ca956026ce47e002a11a12b->leave($__internal_15df073b5ecec1791607763c1b7c7fe18afe55d50ca956026ce47e002a11a12b_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/test/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block title %}My cool blog posts{% endblock %}*/
/* {% block body %}*/
/* {{ content }}  */
/* {% endblock %}*/

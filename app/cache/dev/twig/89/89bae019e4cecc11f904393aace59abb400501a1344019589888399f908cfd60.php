<?php

/* security/login.html.twig */
class __TwigTemplate_968f79c715e2df1184433583c5de00b86afdf311b3afbecf1c3dfa570306acfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_bc2cc30762b2ae6991b189a32bfc3c3ebe6e2703f52bcf292cbbbbdcf3e5605f = $this->env->getExtension("native_profiler");
        $__internal_bc2cc30762b2ae6991b189a32bfc3c3ebe6e2703f52bcf292cbbbbdcf3e5605f->enter($__internal_bc2cc30762b2ae6991b189a32bfc3c3ebe6e2703f52bcf292cbbbbdcf3e5605f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2cc30762b2ae6991b189a32bfc3c3ebe6e2703f52bcf292cbbbbdcf3e5605f->leave($__internal_bc2cc30762b2ae6991b189a32bfc3c3ebe6e2703f52bcf292cbbbbdcf3e5605f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a9a2dbd59985175419523654ad2fbc4838812fcd74f9e7bf0dd72a3b270cd8 = $this->env->getExtension("native_profiler");
        $__internal_92a9a2dbd59985175419523654ad2fbc4838812fcd74f9e7bf0dd72a3b270cd8->enter($__internal_92a9a2dbd59985175419523654ad2fbc4838812fcd74f9e7bf0dd72a3b270cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t";
        }
        // line 7
        echo "\t
\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
\t    <label for=\"username\">Username:</label>
\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t
\t    <label for=\"password\">Password:</label>
\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t    ";
        // line 21
        echo "\t
\t    <button type=\"submit\">login</button>
\t</form>
";
        
        $__internal_92a9a2dbd59985175419523654ad2fbc4838812fcd74f9e7bf0dd72a3b270cd8->leave($__internal_92a9a2dbd59985175419523654ad2fbc4838812fcd74f9e7bf0dd72a3b270cd8_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  65 => 15,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{% if error %}*/
/* 	    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	<form action="{{ path('login') }}" method="post">*/
/* 	    <label for="username">Username:</label>*/
/* 	    <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* 	*/
/* 	    <label for="password">Password:</label>*/
/* 	    <input type="password" id="password" name="_password" />*/
/* 	*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/* 	    {#*/
/* 	        If you want to control the URL the user*/
/* 	        is redirected to on success (more details below)*/
/* 	        <input type="hidden" name="_target_path" value="/account" />*/
/* 	    #}*/
/* 	*/
/* 	    <button type="submit">login</button>*/
/* 	</form>*/
/* {% endblock %}*/

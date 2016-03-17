<?php

/* base.html.twig */
class __TwigTemplate_9f049013bee73cea2c262a2ee1d3129aaed349f56c2c434236587c017b878142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed0fa0b194cdaa6b59b493a5b1c9b1c779812c2460831922f8d72e276d7aedb2 = $this->env->getExtension("native_profiler");
        $__internal_ed0fa0b194cdaa6b59b493a5b1c9b1c779812c2460831922f8d72e276d7aedb2->enter($__internal_ed0fa0b194cdaa6b59b493a5b1c9b1c779812c2460831922f8d72e276d7aedb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>
    <body>
\t\t<div id=\"sidebar\">
\t\t\t";
        // line 12
        $this->displayBlock('sidebar', $context, $blocks);
        // line 28
        echo "\t\t</div>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_ed0fa0b194cdaa6b59b493a5b1c9b1c779812c2460831922f8d72e276d7aedb2->leave($__internal_ed0fa0b194cdaa6b59b493a5b1c9b1c779812c2460831922f8d72e276d7aedb2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fa4c28e513ea38c43298132f8990d03f0f5f9ca1e7f2fc3ed87fe48c2ed625c = $this->env->getExtension("native_profiler");
        $__internal_0fa4c28e513ea38c43298132f8990d03f0f5f9ca1e7f2fc3ed87fe48c2ed625c->enter($__internal_0fa4c28e513ea38c43298132f8990d03f0f5f9ca1e7f2fc3ed87fe48c2ed625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0fa4c28e513ea38c43298132f8990d03f0f5f9ca1e7f2fc3ed87fe48c2ed625c->leave($__internal_0fa4c28e513ea38c43298132f8990d03f0f5f9ca1e7f2fc3ed87fe48c2ed625c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd39c4e62ac8714e0d28c7173778cc53eaff5e64d706cda5759715eb632ebf01 = $this->env->getExtension("native_profiler");
        $__internal_cd39c4e62ac8714e0d28c7173778cc53eaff5e64d706cda5759715eb632ebf01->enter($__internal_cd39c4e62ac8714e0d28c7173778cc53eaff5e64d706cda5759715eb632ebf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd39c4e62ac8714e0d28c7173778cc53eaff5e64d706cda5759715eb632ebf01->leave($__internal_cd39c4e62ac8714e0d28c7173778cc53eaff5e64d706cda5759715eb632ebf01_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ebe7102c76c2fede16444d3fb7cf0cdf364a7310266be851e6ad1185515240dc = $this->env->getExtension("native_profiler");
        $__internal_ebe7102c76c2fede16444d3fb7cf0cdf364a7310266be851e6ad1185515240dc->enter($__internal_ebe7102c76c2fede16444d3fb7cf0cdf364a7310266be851e6ad1185515240dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 13
        echo "\t\t\t<ul>
\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t<li><a href=\"/test\">Test home</a></li>
\t\t\t\t";
        // line 16
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 17
            echo "\t\t\t\t\t<li><a href=\"/user/new\">Sign up</a></li>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t
\t\t\t\t<li><a href=\"/user\">User</a></li>
\t\t\t\t<li>";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 21
            echo "\t\t\t\t\tHi ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " (<a href=\"/logout\">Logout</a>)
\t\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t\t<a href=\"/login\">Login</a>
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        
        $__internal_ebe7102c76c2fede16444d3fb7cf0cdf364a7310266be851e6ad1185515240dc->leave($__internal_ebe7102c76c2fede16444d3fb7cf0cdf364a7310266be851e6ad1185515240dc_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ebdaae0525dee975aca20e0567dfc2f8f5a762547b9474c947b943df78e19e8 = $this->env->getExtension("native_profiler");
        $__internal_3ebdaae0525dee975aca20e0567dfc2f8f5a762547b9474c947b943df78e19e8->enter($__internal_3ebdaae0525dee975aca20e0567dfc2f8f5a762547b9474c947b943df78e19e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ebdaae0525dee975aca20e0567dfc2f8f5a762547b9474c947b943df78e19e8->leave($__internal_3ebdaae0525dee975aca20e0567dfc2f8f5a762547b9474c947b943df78e19e8_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4eabe86384dd12efab1cf82fd321235f79d1db3595fa69ba2329a86bbb7896e = $this->env->getExtension("native_profiler");
        $__internal_b4eabe86384dd12efab1cf82fd321235f79d1db3595fa69ba2329a86bbb7896e->enter($__internal_b4eabe86384dd12efab1cf82fd321235f79d1db3595fa69ba2329a86bbb7896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b4eabe86384dd12efab1cf82fd321235f79d1db3595fa69ba2329a86bbb7896e->leave($__internal_b4eabe86384dd12efab1cf82fd321235f79d1db3595fa69ba2329a86bbb7896e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 30,  135 => 29,  126 => 25,  122 => 23,  116 => 21,  114 => 20,  110 => 18,  106 => 17,  104 => 16,  99 => 13,  93 => 12,  82 => 6,  70 => 5,  61 => 31,  58 => 30,  56 => 29,  53 => 28,  51 => 12,  44 => 8,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 		<link href="{{ asset('css/style.css') }}" rel="stylesheet" />*/
/*     </head>*/
/*     <body>*/
/* 		<div id="sidebar">*/
/* 			{% block sidebar %}*/
/* 			<ul>*/
/* 				<li><a href="/">Home</a></li>*/
/* 				<li><a href="/test">Test home</a></li>*/
/* 				{% if is_granted('IS_AUTHENTICATED_FULLY') == false %}*/
/* 					<li><a href="/user/new">Sign up</a></li>*/
/* 				{% endif %}				*/
/* 				<li><a href="/user">User</a></li>*/
/* 				<li>{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 					Hi {{ app.user.username }} (<a href="/logout">Logout</a>)*/
/* 					{% else %}*/
/* 					<a href="/login">Login</a>*/
/* 					{% endif %}*/
/* 				</li>*/
/* 			</ul>*/
/* 			{% endblock %}*/
/* 		</div>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

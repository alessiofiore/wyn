<?php

/* user/new.html.twig */
class __TwigTemplate_a6fcbf53da07ff2d4b4a5a635777c35e121a4d4a6870f13f66e45aeec01ee231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_1027f95e3a01ac9e3cfb8d5663f0126d0e885cdd601c45e2c8cb815759ba44cf = $this->env->getExtension("native_profiler");
        $__internal_1027f95e3a01ac9e3cfb8d5663f0126d0e885cdd601c45e2c8cb815759ba44cf->enter($__internal_1027f95e3a01ac9e3cfb8d5663f0126d0e885cdd601c45e2c8cb815759ba44cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1027f95e3a01ac9e3cfb8d5663f0126d0e885cdd601c45e2c8cb815759ba44cf->leave($__internal_1027f95e3a01ac9e3cfb8d5663f0126d0e885cdd601c45e2c8cb815759ba44cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a252eef5ec2c6f8dd652c16dfc820b8ebd6e44a65cda6d84af12183c57ee0fb5 = $this->env->getExtension("native_profiler");
        $__internal_a252eef5ec2c6f8dd652c16dfc820b8ebd6e44a65cda6d84af12183c57ee0fb5->enter($__internal_a252eef5ec2c6f8dd652c16dfc820b8ebd6e44a65cda6d84af12183c57ee0fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a252eef5ec2c6f8dd652c16dfc820b8ebd6e44a65cda6d84af12183c57ee0fb5->leave($__internal_a252eef5ec2c6f8dd652c16dfc820b8ebd6e44a65cda6d84af12183c57ee0fb5_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

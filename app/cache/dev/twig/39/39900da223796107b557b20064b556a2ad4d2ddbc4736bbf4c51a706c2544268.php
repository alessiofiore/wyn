<?php

/* user/edit.html.twig */
class __TwigTemplate_42524915ca639a2251a81c9b1ab22dcecca55c0a87e05aa42ef400b28c21e016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_d1c7fbe851330af8a1d842e24e57270ba56343ce269e2a9cc8fa110e9cf12c84 = $this->env->getExtension("native_profiler");
        $__internal_d1c7fbe851330af8a1d842e24e57270ba56343ce269e2a9cc8fa110e9cf12c84->enter($__internal_d1c7fbe851330af8a1d842e24e57270ba56343ce269e2a9cc8fa110e9cf12c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c7fbe851330af8a1d842e24e57270ba56343ce269e2a9cc8fa110e9cf12c84->leave($__internal_d1c7fbe851330af8a1d842e24e57270ba56343ce269e2a9cc8fa110e9cf12c84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77ddea32c450f152d1c504fe4290608c7525da14b0bed0faaa213b5b487f240a = $this->env->getExtension("native_profiler");
        $__internal_77ddea32c450f152d1c504fe4290608c7525da14b0bed0faaa213b5b487f240a->enter($__internal_77ddea32c450f152d1c504fe4290608c7525da14b0bed0faaa213b5b487f240a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_77ddea32c450f152d1c504fe4290608c7525da14b0bed0faaa213b5b487f240a->leave($__internal_77ddea32c450f152d1c504fe4290608c7525da14b0bed0faaa213b5b487f240a_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

<?php

/* user/index.html.twig */
class __TwigTemplate_7a6a983b0b88093e6c7d4975d8b27214e264f53f2f302953dbe84b688dfb5b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_60217bacc2db92984c94c69f15da7fd58b1560958ac5e721459eabcca1ee4c2d = $this->env->getExtension("native_profiler");
        $__internal_60217bacc2db92984c94c69f15da7fd58b1560958ac5e721459eabcca1ee4c2d->enter($__internal_60217bacc2db92984c94c69f15da7fd58b1560958ac5e721459eabcca1ee4c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60217bacc2db92984c94c69f15da7fd58b1560958ac5e721459eabcca1ee4c2d->leave($__internal_60217bacc2db92984c94c69f15da7fd58b1560958ac5e721459eabcca1ee4c2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_890ffe2c712ef34422f364e75963b6ce1f35ace838b882c32e08fc26f55a3bf3 = $this->env->getExtension("native_profiler");
        $__internal_890ffe2c712ef34422f364e75963b6ce1f35ace838b882c32e08fc26f55a3bf3->enter($__internal_890ffe2c712ef34422f364e75963b6ce1f35ace838b882c32e08fc26f55a3bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User list</h1>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Address</th>
                <th>City</th>
                <th>Zip</th>
                <th>Stateprovince</th>
                <th>Country</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "middleName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "zip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "stateProvince", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_890ffe2c712ef34422f364e75963b6ce1f35ace838b882c32e08fc26f55a3bf3->leave($__internal_890ffe2c712ef34422f364e75963b6ce1f35ace838b882c32e08fc26f55a3bf3_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  141 => 51,  129 => 45,  123 => 42,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  70 => 27,  67 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <th>Middlename</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Address</th>*/
/*                 <th>City</th>*/
/*                 <th>Zip</th>*/
/*                 <th>Stateprovince</th>*/
/*                 <th>Country</th>*/
/*                 <th>Email</th>*/
/*                 <th>Password</th>*/
/*                 <th>Phone</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.firstName }}</a></td>*/
/*                 <td>{{ user.middleName }}</td>*/
/*                 <td>{{ user.lastName }}</td>*/
/*                 <td>{{ user.address }}</td>*/
/*                 <td>{{ user.city }}</td>*/
/*                 <td>{{ user.zip }}</td>*/
/*                 <td>{{ user.stateProvince }}</td>*/
/*                 <td>{{ user.country }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.password }}</td>*/
/*                 <td>{{ user.phone }}</td>*/
/*                 <td>{{ user.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('user_show', { 'id': user.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('user_edit', { 'id': user.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

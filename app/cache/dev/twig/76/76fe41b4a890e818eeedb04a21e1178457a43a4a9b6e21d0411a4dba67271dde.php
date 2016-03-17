<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d3ed2c47f16a9dff267bedf75727d546957af6e3d7b4f4b4118f6fd3eb085cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_705559fa9af37d75fe729fcc59e0c621923d27198b255a5071829920312e01bb = $this->env->getExtension("native_profiler");
        $__internal_705559fa9af37d75fe729fcc59e0c621923d27198b255a5071829920312e01bb->enter($__internal_705559fa9af37d75fe729fcc59e0c621923d27198b255a5071829920312e01bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705559fa9af37d75fe729fcc59e0c621923d27198b255a5071829920312e01bb->leave($__internal_705559fa9af37d75fe729fcc59e0c621923d27198b255a5071829920312e01bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05af02f81b84ad0a457dab661afebfe91f79d24ba33b8a2796c24c6440aec55e = $this->env->getExtension("native_profiler");
        $__internal_05af02f81b84ad0a457dab661afebfe91f79d24ba33b8a2796c24c6440aec55e->enter($__internal_05af02f81b84ad0a457dab661afebfe91f79d24ba33b8a2796c24c6440aec55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05af02f81b84ad0a457dab661afebfe91f79d24ba33b8a2796c24c6440aec55e->leave($__internal_05af02f81b84ad0a457dab661afebfe91f79d24ba33b8a2796c24c6440aec55e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9be11f83f85f5cdf634621e23a6012daea0e85b310dc4d7cd7708bde9f6b7f02 = $this->env->getExtension("native_profiler");
        $__internal_9be11f83f85f5cdf634621e23a6012daea0e85b310dc4d7cd7708bde9f6b7f02->enter($__internal_9be11f83f85f5cdf634621e23a6012daea0e85b310dc4d7cd7708bde9f6b7f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9be11f83f85f5cdf634621e23a6012daea0e85b310dc4d7cd7708bde9f6b7f02->leave($__internal_9be11f83f85f5cdf634621e23a6012daea0e85b310dc4d7cd7708bde9f6b7f02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd641ff204b01d70fbfbf35aae797ff48e7e6fd152af3caa1de81bc6b468d266 = $this->env->getExtension("native_profiler");
        $__internal_cd641ff204b01d70fbfbf35aae797ff48e7e6fd152af3caa1de81bc6b468d266->enter($__internal_cd641ff204b01d70fbfbf35aae797ff48e7e6fd152af3caa1de81bc6b468d266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd641ff204b01d70fbfbf35aae797ff48e7e6fd152af3caa1de81bc6b468d266->leave($__internal_cd641ff204b01d70fbfbf35aae797ff48e7e6fd152af3caa1de81bc6b468d266_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

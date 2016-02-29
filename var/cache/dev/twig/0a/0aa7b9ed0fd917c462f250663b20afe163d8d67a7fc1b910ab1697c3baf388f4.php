<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_924acfeefbac64d96caa8632661e89cf08fa0215631030be3ae24cf6c6b05fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f8ae4d8172caa211d44cc5bbb6d0e8c7982da2db88db7dad11c64f7e6632244b = $this->env->getExtension("native_profiler");
        $__internal_f8ae4d8172caa211d44cc5bbb6d0e8c7982da2db88db7dad11c64f7e6632244b->enter($__internal_f8ae4d8172caa211d44cc5bbb6d0e8c7982da2db88db7dad11c64f7e6632244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ae4d8172caa211d44cc5bbb6d0e8c7982da2db88db7dad11c64f7e6632244b->leave($__internal_f8ae4d8172caa211d44cc5bbb6d0e8c7982da2db88db7dad11c64f7e6632244b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92c846d8ac2d61d7ac6815c49c37c0d533bc27243cb72f5e16a710d5f86f9d26 = $this->env->getExtension("native_profiler");
        $__internal_92c846d8ac2d61d7ac6815c49c37c0d533bc27243cb72f5e16a710d5f86f9d26->enter($__internal_92c846d8ac2d61d7ac6815c49c37c0d533bc27243cb72f5e16a710d5f86f9d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92c846d8ac2d61d7ac6815c49c37c0d533bc27243cb72f5e16a710d5f86f9d26->leave($__internal_92c846d8ac2d61d7ac6815c49c37c0d533bc27243cb72f5e16a710d5f86f9d26_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0fadb2bcc44c37eec94cf4c05c8c550f80939057755f7f25ea99d363f7267db = $this->env->getExtension("native_profiler");
        $__internal_b0fadb2bcc44c37eec94cf4c05c8c550f80939057755f7f25ea99d363f7267db->enter($__internal_b0fadb2bcc44c37eec94cf4c05c8c550f80939057755f7f25ea99d363f7267db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0fadb2bcc44c37eec94cf4c05c8c550f80939057755f7f25ea99d363f7267db->leave($__internal_b0fadb2bcc44c37eec94cf4c05c8c550f80939057755f7f25ea99d363f7267db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdad03f9f13e4c9e43b2f427d1b6d8a69c3e3a5f6fabb4ce06b69f1199590293 = $this->env->getExtension("native_profiler");
        $__internal_fdad03f9f13e4c9e43b2f427d1b6d8a69c3e3a5f6fabb4ce06b69f1199590293->enter($__internal_fdad03f9f13e4c9e43b2f427d1b6d8a69c3e3a5f6fabb4ce06b69f1199590293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fdad03f9f13e4c9e43b2f427d1b6d8a69c3e3a5f6fabb4ce06b69f1199590293->leave($__internal_fdad03f9f13e4c9e43b2f427d1b6d8a69c3e3a5f6fabb4ce06b69f1199590293_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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

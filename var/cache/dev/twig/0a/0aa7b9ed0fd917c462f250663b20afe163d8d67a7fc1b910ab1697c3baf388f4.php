<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_924acfeefbac64d96caa8632661e89cf08fa0215631030be3ae24cf6c6b05fe6 extends Twig_Template
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
        $__internal_59fa9784161275b70d42ee0e0d9cfe3a8963771b0b8e8dfd358d9b9b06ac92ba = $this->env->getExtension("native_profiler");
        $__internal_59fa9784161275b70d42ee0e0d9cfe3a8963771b0b8e8dfd358d9b9b06ac92ba->enter($__internal_59fa9784161275b70d42ee0e0d9cfe3a8963771b0b8e8dfd358d9b9b06ac92ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59fa9784161275b70d42ee0e0d9cfe3a8963771b0b8e8dfd358d9b9b06ac92ba->leave($__internal_59fa9784161275b70d42ee0e0d9cfe3a8963771b0b8e8dfd358d9b9b06ac92ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0cbcd2ba9f0c14d501e806bf4ccfea1fab068732196effd29fa16cd0b427e1bc = $this->env->getExtension("native_profiler");
        $__internal_0cbcd2ba9f0c14d501e806bf4ccfea1fab068732196effd29fa16cd0b427e1bc->enter($__internal_0cbcd2ba9f0c14d501e806bf4ccfea1fab068732196effd29fa16cd0b427e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0cbcd2ba9f0c14d501e806bf4ccfea1fab068732196effd29fa16cd0b427e1bc->leave($__internal_0cbcd2ba9f0c14d501e806bf4ccfea1fab068732196effd29fa16cd0b427e1bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61766bc87b19e4c0ae331b184a49d9e0d13d5a5c6e98b398e7c06a7f45cebbbf = $this->env->getExtension("native_profiler");
        $__internal_61766bc87b19e4c0ae331b184a49d9e0d13d5a5c6e98b398e7c06a7f45cebbbf->enter($__internal_61766bc87b19e4c0ae331b184a49d9e0d13d5a5c6e98b398e7c06a7f45cebbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61766bc87b19e4c0ae331b184a49d9e0d13d5a5c6e98b398e7c06a7f45cebbbf->leave($__internal_61766bc87b19e4c0ae331b184a49d9e0d13d5a5c6e98b398e7c06a7f45cebbbf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a61abce5e240ff4da76071c9974ad421bae56138e6411136441b0cd61cbdda6 = $this->env->getExtension("native_profiler");
        $__internal_5a61abce5e240ff4da76071c9974ad421bae56138e6411136441b0cd61cbdda6->enter($__internal_5a61abce5e240ff4da76071c9974ad421bae56138e6411136441b0cd61cbdda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a61abce5e240ff4da76071c9974ad421bae56138e6411136441b0cd61cbdda6->leave($__internal_5a61abce5e240ff4da76071c9974ad421bae56138e6411136441b0cd61cbdda6_prof);

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

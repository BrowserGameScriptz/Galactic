<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4a1fcce34b5c83cbc73ebb9ffae8efb226f09bc229472f5d410a0048f071fdbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_07be50a47d306ffa8c84d01c5ef74bd241550c78c56104e0ce69c25c34b8e85f = $this->env->getExtension("native_profiler");
        $__internal_07be50a47d306ffa8c84d01c5ef74bd241550c78c56104e0ce69c25c34b8e85f->enter($__internal_07be50a47d306ffa8c84d01c5ef74bd241550c78c56104e0ce69c25c34b8e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07be50a47d306ffa8c84d01c5ef74bd241550c78c56104e0ce69c25c34b8e85f->leave($__internal_07be50a47d306ffa8c84d01c5ef74bd241550c78c56104e0ce69c25c34b8e85f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_731301709ec7f98aeee9e206fa840b03d4c0cf07c73fab059a265495972014e5 = $this->env->getExtension("native_profiler");
        $__internal_731301709ec7f98aeee9e206fa840b03d4c0cf07c73fab059a265495972014e5->enter($__internal_731301709ec7f98aeee9e206fa840b03d4c0cf07c73fab059a265495972014e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_731301709ec7f98aeee9e206fa840b03d4c0cf07c73fab059a265495972014e5->leave($__internal_731301709ec7f98aeee9e206fa840b03d4c0cf07c73fab059a265495972014e5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4cc0ef56fb7952b160bed5104df97567b61d50d10a0af255e4228279de223d7 = $this->env->getExtension("native_profiler");
        $__internal_d4cc0ef56fb7952b160bed5104df97567b61d50d10a0af255e4228279de223d7->enter($__internal_d4cc0ef56fb7952b160bed5104df97567b61d50d10a0af255e4228279de223d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d4cc0ef56fb7952b160bed5104df97567b61d50d10a0af255e4228279de223d7->leave($__internal_d4cc0ef56fb7952b160bed5104df97567b61d50d10a0af255e4228279de223d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

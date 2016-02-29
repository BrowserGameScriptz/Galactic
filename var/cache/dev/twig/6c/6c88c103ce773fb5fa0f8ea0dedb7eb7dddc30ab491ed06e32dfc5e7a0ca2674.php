<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a11cdf7dd3c5a3850af92affb43887af41f0c63a888be84a8860afe68aaa14dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ee54c5a3f2fdd89f23b143a291cd94b41bb37ae1090d62e8a780e698998a9c7a = $this->env->getExtension("native_profiler");
        $__internal_ee54c5a3f2fdd89f23b143a291cd94b41bb37ae1090d62e8a780e698998a9c7a->enter($__internal_ee54c5a3f2fdd89f23b143a291cd94b41bb37ae1090d62e8a780e698998a9c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee54c5a3f2fdd89f23b143a291cd94b41bb37ae1090d62e8a780e698998a9c7a->leave($__internal_ee54c5a3f2fdd89f23b143a291cd94b41bb37ae1090d62e8a780e698998a9c7a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a005452c7d31c9b46ebf0befa5843264704d9b7379fe8780f9bd2f74570c2057 = $this->env->getExtension("native_profiler");
        $__internal_a005452c7d31c9b46ebf0befa5843264704d9b7379fe8780f9bd2f74570c2057->enter($__internal_a005452c7d31c9b46ebf0befa5843264704d9b7379fe8780f9bd2f74570c2057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a005452c7d31c9b46ebf0befa5843264704d9b7379fe8780f9bd2f74570c2057->leave($__internal_a005452c7d31c9b46ebf0befa5843264704d9b7379fe8780f9bd2f74570c2057_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9596ae7ffc73bdcef8f0acf6a2d22002770bddd1f9de55c3096974f0de901f39 = $this->env->getExtension("native_profiler");
        $__internal_9596ae7ffc73bdcef8f0acf6a2d22002770bddd1f9de55c3096974f0de901f39->enter($__internal_9596ae7ffc73bdcef8f0acf6a2d22002770bddd1f9de55c3096974f0de901f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9596ae7ffc73bdcef8f0acf6a2d22002770bddd1f9de55c3096974f0de901f39->leave($__internal_9596ae7ffc73bdcef8f0acf6a2d22002770bddd1f9de55c3096974f0de901f39_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f03abb41d3d37fd28f3aa9b2a59ead9debd6dec56a29e6de2255569b0344aab6 = $this->env->getExtension("native_profiler");
        $__internal_f03abb41d3d37fd28f3aa9b2a59ead9debd6dec56a29e6de2255569b0344aab6->enter($__internal_f03abb41d3d37fd28f3aa9b2a59ead9debd6dec56a29e6de2255569b0344aab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f03abb41d3d37fd28f3aa9b2a59ead9debd6dec56a29e6de2255569b0344aab6->leave($__internal_f03abb41d3d37fd28f3aa9b2a59ead9debd6dec56a29e6de2255569b0344aab6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

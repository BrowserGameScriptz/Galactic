<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a11cdf7dd3c5a3850af92affb43887af41f0c63a888be84a8860afe68aaa14dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_21989470c7f913e2852859a86a6ec793e0599d1e5cad537cc7e40cc81ca208ec = $this->env->getExtension("native_profiler");
        $__internal_21989470c7f913e2852859a86a6ec793e0599d1e5cad537cc7e40cc81ca208ec->enter($__internal_21989470c7f913e2852859a86a6ec793e0599d1e5cad537cc7e40cc81ca208ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21989470c7f913e2852859a86a6ec793e0599d1e5cad537cc7e40cc81ca208ec->leave($__internal_21989470c7f913e2852859a86a6ec793e0599d1e5cad537cc7e40cc81ca208ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a9eecaf84dbd9253c6c6ac4966b21c570e2dd84ba9ed6a2d6aceb903c9caf85 = $this->env->getExtension("native_profiler");
        $__internal_2a9eecaf84dbd9253c6c6ac4966b21c570e2dd84ba9ed6a2d6aceb903c9caf85->enter($__internal_2a9eecaf84dbd9253c6c6ac4966b21c570e2dd84ba9ed6a2d6aceb903c9caf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a9eecaf84dbd9253c6c6ac4966b21c570e2dd84ba9ed6a2d6aceb903c9caf85->leave($__internal_2a9eecaf84dbd9253c6c6ac4966b21c570e2dd84ba9ed6a2d6aceb903c9caf85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfb4f50b76a10ddef92980f2a1da6a9f8a21149f9c8bef1a0d726909d9a7c24f = $this->env->getExtension("native_profiler");
        $__internal_cfb4f50b76a10ddef92980f2a1da6a9f8a21149f9c8bef1a0d726909d9a7c24f->enter($__internal_cfb4f50b76a10ddef92980f2a1da6a9f8a21149f9c8bef1a0d726909d9a7c24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfb4f50b76a10ddef92980f2a1da6a9f8a21149f9c8bef1a0d726909d9a7c24f->leave($__internal_cfb4f50b76a10ddef92980f2a1da6a9f8a21149f9c8bef1a0d726909d9a7c24f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ab4c13cfdfa676543a6dc53be1babe5c107e253a0cc3f7f336770ec53288bc0 = $this->env->getExtension("native_profiler");
        $__internal_9ab4c13cfdfa676543a6dc53be1babe5c107e253a0cc3f7f336770ec53288bc0->enter($__internal_9ab4c13cfdfa676543a6dc53be1babe5c107e253a0cc3f7f336770ec53288bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9ab4c13cfdfa676543a6dc53be1babe5c107e253a0cc3f7f336770ec53288bc0->leave($__internal_9ab4c13cfdfa676543a6dc53be1babe5c107e253a0cc3f7f336770ec53288bc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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

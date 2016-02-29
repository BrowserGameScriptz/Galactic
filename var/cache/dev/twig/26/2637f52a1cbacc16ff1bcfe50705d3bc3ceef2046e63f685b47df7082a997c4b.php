<?php

/* GalacticBundle:Default:index.html.twig */
class __TwigTemplate_fb67862ec2b608752a8f0da773d16431e6db1cb485742b85881d96d5a8fa233e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GalacticBundle:base.html.twig", "GalacticBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GalacticBundle:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db72f5ebef9927e93ae918ad2fc346db9cc90b46829a37f47a277e6fc5644ca7 = $this->env->getExtension("native_profiler");
        $__internal_db72f5ebef9927e93ae918ad2fc346db9cc90b46829a37f47a277e6fc5644ca7->enter($__internal_db72f5ebef9927e93ae918ad2fc346db9cc90b46829a37f47a277e6fc5644ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GalacticBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db72f5ebef9927e93ae918ad2fc346db9cc90b46829a37f47a277e6fc5644ca7->leave($__internal_db72f5ebef9927e93ae918ad2fc346db9cc90b46829a37f47a277e6fc5644ca7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7aa57fde01538f0d6696b6d663d5e2cc16bd63de5dbb582a6b750c9b650cb681 = $this->env->getExtension("native_profiler");
        $__internal_7aa57fde01538f0d6696b6d663d5e2cc16bd63de5dbb582a6b750c9b650cb681->enter($__internal_7aa57fde01538f0d6696b6d663d5e2cc16bd63de5dbb582a6b750c9b650cb681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_7aa57fde01538f0d6696b6d663d5e2cc16bd63de5dbb582a6b750c9b650cb681->leave($__internal_7aa57fde01538f0d6696b6d663d5e2cc16bd63de5dbb582a6b750c9b650cb681_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_adbc1d1c306c520ffef76f95379999772b0402d9b76f95db96ceacf5e513fb3b = $this->env->getExtension("native_profiler");
        $__internal_adbc1d1c306c520ffef76f95379999772b0402d9b76f95db96ceacf5e513fb3b->enter($__internal_adbc1d1c306c520ffef76f95379999772b0402d9b76f95db96ceacf5e513fb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"logo\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"login\">
            <form>
                <p>
                    <input type=\"text\" placeholder=\"Username\"/>
                </p>
                <p>
                    <input type=\"password\" placeholder=\"Password\"/>
                </p>
                <p>
                    <input type=\"submit\" value=\"Login\"/> | <span class=\"register\"><a href=\"/register\">Register</a></span>
                </p>
            </form>
        </div>
    </div>
";
        
        $__internal_adbc1d1c306c520ffef76f95379999772b0402d9b76f95db96ceacf5e513fb3b->leave($__internal_adbc1d1c306c520ffef76f95379999772b0402d9b76f95db96ceacf5e513fb3b_prof);

    }

    public function getTemplateName()
    {
        return "GalacticBundle:Default:index.html.twig";
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
/* {% extends 'GalacticBundle:base.html.twig' %}*/
/* */
/* {% block title %}Login{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="wrapper">*/
/*         <div class="logo">*/
/*             <img src="{{ asset('img/logo.png') }}"/>*/
/*         </div>*/
/*         <div class="login">*/
/*             <form>*/
/*                 <p>*/
/*                     <input type="text" placeholder="Username"/>*/
/*                 </p>*/
/*                 <p>*/
/*                     <input type="password" placeholder="Password"/>*/
/*                 </p>*/
/*                 <p>*/
/*                     <input type="submit" value="Login"/> | <span class="register"><a href="/register">Register</a></span>*/
/*                 </p>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

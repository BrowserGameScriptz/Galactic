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
        $__internal_376a3cd97aa56601bbcb07dc42ca8474a1ad8402c84326b5e69b6337fe66e0bb = $this->env->getExtension("native_profiler");
        $__internal_376a3cd97aa56601bbcb07dc42ca8474a1ad8402c84326b5e69b6337fe66e0bb->enter($__internal_376a3cd97aa56601bbcb07dc42ca8474a1ad8402c84326b5e69b6337fe66e0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GalacticBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_376a3cd97aa56601bbcb07dc42ca8474a1ad8402c84326b5e69b6337fe66e0bb->leave($__internal_376a3cd97aa56601bbcb07dc42ca8474a1ad8402c84326b5e69b6337fe66e0bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_714791035d56a95fac9828a7b0a63430177bfde7d4e64f100ccaac55f6441aad = $this->env->getExtension("native_profiler");
        $__internal_714791035d56a95fac9828a7b0a63430177bfde7d4e64f100ccaac55f6441aad->enter($__internal_714791035d56a95fac9828a7b0a63430177bfde7d4e64f100ccaac55f6441aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_714791035d56a95fac9828a7b0a63430177bfde7d4e64f100ccaac55f6441aad->leave($__internal_714791035d56a95fac9828a7b0a63430177bfde7d4e64f100ccaac55f6441aad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c39d356eb4bd9f4c21cbd4b3f57bfa4b8acaeea4958b958aa425c9af809add2 = $this->env->getExtension("native_profiler");
        $__internal_6c39d356eb4bd9f4c21cbd4b3f57bfa4b8acaeea4958b958aa425c9af809add2->enter($__internal_6c39d356eb4bd9f4c21cbd4b3f57bfa4b8acaeea4958b958aa425c9af809add2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c39d356eb4bd9f4c21cbd4b3f57bfa4b8acaeea4958b958aa425c9af809add2->leave($__internal_6c39d356eb4bd9f4c21cbd4b3f57bfa4b8acaeea4958b958aa425c9af809add2_prof);

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

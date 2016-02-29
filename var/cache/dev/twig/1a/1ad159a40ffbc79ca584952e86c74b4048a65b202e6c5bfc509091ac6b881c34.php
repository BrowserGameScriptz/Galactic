<?php

/* GalacticBundle:base.html.twig */
class __TwigTemplate_5e1f29af7dbd13bb4073df51f3de9707e4677e06d3a085561e0c549b62b36427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0c75cc67ca7ee08887c07beca2c8d889b6c958132805566092eb306eacc5139 = $this->env->getExtension("native_profiler");
        $__internal_e0c75cc67ca7ee08887c07beca2c8d889b6c958132805566092eb306eacc5139->enter($__internal_e0c75cc67ca7ee08887c07beca2c8d889b6c958132805566092eb306eacc5139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GalacticBundle:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Galactic - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_e0c75cc67ca7ee08887c07beca2c8d889b6c958132805566092eb306eacc5139->leave($__internal_e0c75cc67ca7ee08887c07beca2c8d889b6c958132805566092eb306eacc5139_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f27961443d5944f6e973f77840caf6047d8e68906d0c0bace64c92626514b012 = $this->env->getExtension("native_profiler");
        $__internal_f27961443d5944f6e973f77840caf6047d8e68906d0c0bace64c92626514b012->enter($__internal_f27961443d5944f6e973f77840caf6047d8e68906d0c0bace64c92626514b012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f27961443d5944f6e973f77840caf6047d8e68906d0c0bace64c92626514b012->leave($__internal_f27961443d5944f6e973f77840caf6047d8e68906d0c0bace64c92626514b012_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f930763da7691ae52720538ac9e7f33be1188be7698ef62a46a3dc071b72738 = $this->env->getExtension("native_profiler");
        $__internal_5f930763da7691ae52720538ac9e7f33be1188be7698ef62a46a3dc071b72738->enter($__internal_5f930763da7691ae52720538ac9e7f33be1188be7698ef62a46a3dc071b72738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_5f930763da7691ae52720538ac9e7f33be1188be7698ef62a46a3dc071b72738->leave($__internal_5f930763da7691ae52720538ac9e7f33be1188be7698ef62a46a3dc071b72738_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_833e231166d31a644d5350bd978103b1d3ea998388c960440fc7a6c69bf7cb65 = $this->env->getExtension("native_profiler");
        $__internal_833e231166d31a644d5350bd978103b1d3ea998388c960440fc7a6c69bf7cb65->enter($__internal_833e231166d31a644d5350bd978103b1d3ea998388c960440fc7a6c69bf7cb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_833e231166d31a644d5350bd978103b1d3ea998388c960440fc7a6c69bf7cb65->leave($__internal_833e231166d31a644d5350bd978103b1d3ea998388c960440fc7a6c69bf7cb65_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9d8f60e19113e47d75eb7d6abd69085727a8bf8afaa686569b281998d07c440 = $this->env->getExtension("native_profiler");
        $__internal_e9d8f60e19113e47d75eb7d6abd69085727a8bf8afaa686569b281998d07c440->enter($__internal_e9d8f60e19113e47d75eb7d6abd69085727a8bf8afaa686569b281998d07c440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9d8f60e19113e47d75eb7d6abd69085727a8bf8afaa686569b281998d07c440->leave($__internal_e9d8f60e19113e47d75eb7d6abd69085727a8bf8afaa686569b281998d07c440_prof);

    }

    public function getTemplateName()
    {
        return "GalacticBundle:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  86 => 12,  76 => 7,  70 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Galactic - {% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

<?php

/* base.html.twig */
class __TwigTemplate_92a6cf1c852460c5abde4ffbb9cd5104926c9ed852dd51b95cf8b4b125cd99d2 extends Twig_Template
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
        $__internal_2394db439381033093f11a5a83cea0904bf7fefaeebe6f06a2c89945f63f5600 = $this->env->getExtension("native_profiler");
        $__internal_2394db439381033093f11a5a83cea0904bf7fefaeebe6f06a2c89945f63f5600->enter($__internal_2394db439381033093f11a5a83cea0904bf7fefaeebe6f06a2c89945f63f5600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2394db439381033093f11a5a83cea0904bf7fefaeebe6f06a2c89945f63f5600->leave($__internal_2394db439381033093f11a5a83cea0904bf7fefaeebe6f06a2c89945f63f5600_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6578e762285c3c914f9c79ee5bed6c67a1173b2ad1b6c688016b3f1bf9632186 = $this->env->getExtension("native_profiler");
        $__internal_6578e762285c3c914f9c79ee5bed6c67a1173b2ad1b6c688016b3f1bf9632186->enter($__internal_6578e762285c3c914f9c79ee5bed6c67a1173b2ad1b6c688016b3f1bf9632186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6578e762285c3c914f9c79ee5bed6c67a1173b2ad1b6c688016b3f1bf9632186->leave($__internal_6578e762285c3c914f9c79ee5bed6c67a1173b2ad1b6c688016b3f1bf9632186_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13f1bfd518f313ba80781500bf46c15428e3d84efdaafbb93018bf90eb31c756 = $this->env->getExtension("native_profiler");
        $__internal_13f1bfd518f313ba80781500bf46c15428e3d84efdaafbb93018bf90eb31c756->enter($__internal_13f1bfd518f313ba80781500bf46c15428e3d84efdaafbb93018bf90eb31c756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_13f1bfd518f313ba80781500bf46c15428e3d84efdaafbb93018bf90eb31c756->leave($__internal_13f1bfd518f313ba80781500bf46c15428e3d84efdaafbb93018bf90eb31c756_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_381236a39283a0a95730b256531afcafa57a987c58789a5491772ec6f77f710d = $this->env->getExtension("native_profiler");
        $__internal_381236a39283a0a95730b256531afcafa57a987c58789a5491772ec6f77f710d->enter($__internal_381236a39283a0a95730b256531afcafa57a987c58789a5491772ec6f77f710d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_381236a39283a0a95730b256531afcafa57a987c58789a5491772ec6f77f710d->leave($__internal_381236a39283a0a95730b256531afcafa57a987c58789a5491772ec6f77f710d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1fc7d6c9a8ba651cfbbef2dee9212e0b6503d05816d120e58b5ca1575af912af = $this->env->getExtension("native_profiler");
        $__internal_1fc7d6c9a8ba651cfbbef2dee9212e0b6503d05816d120e58b5ca1575af912af->enter($__internal_1fc7d6c9a8ba651cfbbef2dee9212e0b6503d05816d120e58b5ca1575af912af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1fc7d6c9a8ba651cfbbef2dee9212e0b6503d05816d120e58b5ca1575af912af->leave($__internal_1fc7d6c9a8ba651cfbbef2dee9212e0b6503d05816d120e58b5ca1575af912af_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

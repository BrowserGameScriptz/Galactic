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
        $__internal_3472d964690f8a3a39f59e1f370d63d8a6b4853794f8600ee8ae72481b93f003 = $this->env->getExtension("native_profiler");
        $__internal_3472d964690f8a3a39f59e1f370d63d8a6b4853794f8600ee8ae72481b93f003->enter($__internal_3472d964690f8a3a39f59e1f370d63d8a6b4853794f8600ee8ae72481b93f003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GalacticBundle:base.html.twig"));

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
        
        $__internal_3472d964690f8a3a39f59e1f370d63d8a6b4853794f8600ee8ae72481b93f003->leave($__internal_3472d964690f8a3a39f59e1f370d63d8a6b4853794f8600ee8ae72481b93f003_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51964970c4775dec33776c7ae68d19a6282ed63b6b4ea703a9965ede93c1f8f5 = $this->env->getExtension("native_profiler");
        $__internal_51964970c4775dec33776c7ae68d19a6282ed63b6b4ea703a9965ede93c1f8f5->enter($__internal_51964970c4775dec33776c7ae68d19a6282ed63b6b4ea703a9965ede93c1f8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_51964970c4775dec33776c7ae68d19a6282ed63b6b4ea703a9965ede93c1f8f5->leave($__internal_51964970c4775dec33776c7ae68d19a6282ed63b6b4ea703a9965ede93c1f8f5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_369406fc7724b3739d3bb0768ac16d2d195c9fde85a6dff3d10eccf59da7daf0 = $this->env->getExtension("native_profiler");
        $__internal_369406fc7724b3739d3bb0768ac16d2d195c9fde85a6dff3d10eccf59da7daf0->enter($__internal_369406fc7724b3739d3bb0768ac16d2d195c9fde85a6dff3d10eccf59da7daf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_369406fc7724b3739d3bb0768ac16d2d195c9fde85a6dff3d10eccf59da7daf0->leave($__internal_369406fc7724b3739d3bb0768ac16d2d195c9fde85a6dff3d10eccf59da7daf0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_934053bbcfebcf6e0f4187190804fca9438419caf2cfcc4b9bdc6def57cf5d23 = $this->env->getExtension("native_profiler");
        $__internal_934053bbcfebcf6e0f4187190804fca9438419caf2cfcc4b9bdc6def57cf5d23->enter($__internal_934053bbcfebcf6e0f4187190804fca9438419caf2cfcc4b9bdc6def57cf5d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_934053bbcfebcf6e0f4187190804fca9438419caf2cfcc4b9bdc6def57cf5d23->leave($__internal_934053bbcfebcf6e0f4187190804fca9438419caf2cfcc4b9bdc6def57cf5d23_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_caedfc101d0918b19ed2bf260f2901421b61e18f3a691f4aaa14ec75d020273c = $this->env->getExtension("native_profiler");
        $__internal_caedfc101d0918b19ed2bf260f2901421b61e18f3a691f4aaa14ec75d020273c->enter($__internal_caedfc101d0918b19ed2bf260f2901421b61e18f3a691f4aaa14ec75d020273c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_caedfc101d0918b19ed2bf260f2901421b61e18f3a691f4aaa14ec75d020273c->leave($__internal_caedfc101d0918b19ed2bf260f2901421b61e18f3a691f4aaa14ec75d020273c_prof);

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

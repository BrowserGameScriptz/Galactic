<?php

/* GalacticBundle:Default:index.html.twig */
class __TwigTemplate_8db0109af0a9562b64f55754b3b0137d75841dff93f7f23c1e50bb48e6859e74 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        return array (  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

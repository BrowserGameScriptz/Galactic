<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1dc20db1e82f011db0bf587a27a5e10c637f655b965f226ab46dfb0ec5e723f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2049ee567221c278e9823d78d87ea5397a8b269bbc3887a3d1b5ef8b33b65a2 = $this->env->getExtension("native_profiler");
        $__internal_f2049ee567221c278e9823d78d87ea5397a8b269bbc3887a3d1b5ef8b33b65a2->enter($__internal_f2049ee567221c278e9823d78d87ea5397a8b269bbc3887a3d1b5ef8b33b65a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f2049ee567221c278e9823d78d87ea5397a8b269bbc3887a3d1b5ef8b33b65a2->leave($__internal_f2049ee567221c278e9823d78d87ea5397a8b269bbc3887a3d1b5ef8b33b65a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

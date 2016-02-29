<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1b89c92bc0dfe409fc5bf4a711c991099eaaf9c60aaa6fd253ae72a0c15262a9 extends Twig_Template
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
        $__internal_c01038625222d9c0a9e6b2bf5d12611a1b0c3d31b3429c0ae70469f9e69a2cad = $this->env->getExtension("native_profiler");
        $__internal_c01038625222d9c0a9e6b2bf5d12611a1b0c3d31b3429c0ae70469f9e69a2cad->enter($__internal_c01038625222d9c0a9e6b2bf5d12611a1b0c3d31b3429c0ae70469f9e69a2cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c01038625222d9c0a9e6b2bf5d12611a1b0c3d31b3429c0ae70469f9e69a2cad->leave($__internal_c01038625222d9c0a9e6b2bf5d12611a1b0c3d31b3429c0ae70469f9e69a2cad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

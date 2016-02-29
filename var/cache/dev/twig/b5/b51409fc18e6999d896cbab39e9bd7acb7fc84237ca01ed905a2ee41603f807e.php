<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c68f3b55a8a0dbbe56a09e0bd00e7b5af54dad355113414df7b92ee345dfbcfd extends Twig_Template
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
        $__internal_5b0435a1cd8939317f41b779cd8c1d1aab9eb48ac415f6018956bf7bd351ef0b = $this->env->getExtension("native_profiler");
        $__internal_5b0435a1cd8939317f41b779cd8c1d1aab9eb48ac415f6018956bf7bd351ef0b->enter($__internal_5b0435a1cd8939317f41b779cd8c1d1aab9eb48ac415f6018956bf7bd351ef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5b0435a1cd8939317f41b779cd8c1d1aab9eb48ac415f6018956bf7bd351ef0b->leave($__internal_5b0435a1cd8939317f41b779cd8c1d1aab9eb48ac415f6018956bf7bd351ef0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

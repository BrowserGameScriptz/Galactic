<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4fc5c905a8473fab0fa4351ebc4b10fc55c26de5dcf53a3fc7f27d013a52a700 extends Twig_Template
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
        $__internal_5774a6de78bb226c1f99f3d541b86fe71b46d671cf4c876c48d574a9ef1518a6 = $this->env->getExtension("native_profiler");
        $__internal_5774a6de78bb226c1f99f3d541b86fe71b46d671cf4c876c48d574a9ef1518a6->enter($__internal_5774a6de78bb226c1f99f3d541b86fe71b46d671cf4c876c48d574a9ef1518a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5774a6de78bb226c1f99f3d541b86fe71b46d671cf4c876c48d574a9ef1518a6->leave($__internal_5774a6de78bb226c1f99f3d541b86fe71b46d671cf4c876c48d574a9ef1518a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

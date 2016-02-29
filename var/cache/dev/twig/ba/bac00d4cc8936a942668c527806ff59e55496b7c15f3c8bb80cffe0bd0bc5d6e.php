<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_600f0e8c1bd6be49e0ee90d0e7f97754fac311c209d5e999a2de2848e0f2b065 extends Twig_Template
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
        $__internal_8d2dcf6a3565510b4368971697081c140ad4d7363692ba9bc4f38f6d2339d65a = $this->env->getExtension("native_profiler");
        $__internal_8d2dcf6a3565510b4368971697081c140ad4d7363692ba9bc4f38f6d2339d65a->enter($__internal_8d2dcf6a3565510b4368971697081c140ad4d7363692ba9bc4f38f6d2339d65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8d2dcf6a3565510b4368971697081c140ad4d7363692ba9bc4f38f6d2339d65a->leave($__internal_8d2dcf6a3565510b4368971697081c140ad4d7363692ba9bc4f38f6d2339d65a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

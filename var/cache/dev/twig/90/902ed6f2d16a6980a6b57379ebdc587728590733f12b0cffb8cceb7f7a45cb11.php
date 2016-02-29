<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_81123cd3a7989c1cf3e4db712b4f240b9d02680d01f2dd13eaae979732c0ca21 extends Twig_Template
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
        $__internal_1163b7737e2ba074884858e4ef33c258ca72abdbb85fc0a99c535b47e5b04013 = $this->env->getExtension("native_profiler");
        $__internal_1163b7737e2ba074884858e4ef33c258ca72abdbb85fc0a99c535b47e5b04013->enter($__internal_1163b7737e2ba074884858e4ef33c258ca72abdbb85fc0a99c535b47e5b04013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1163b7737e2ba074884858e4ef33c258ca72abdbb85fc0a99c535b47e5b04013->leave($__internal_1163b7737e2ba074884858e4ef33c258ca72abdbb85fc0a99c535b47e5b04013_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

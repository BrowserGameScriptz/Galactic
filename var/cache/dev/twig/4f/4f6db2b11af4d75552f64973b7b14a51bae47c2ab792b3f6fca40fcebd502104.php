<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cb81f1e1f40045ea5551947313d73d77eb0418d802feb5dd7b657be25bb252ea extends Twig_Template
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
        $__internal_2c7e3d1e0b8ca6be704a3f0732a70c3b319cf838ca7c7691a8a5c76fb81a2312 = $this->env->getExtension("native_profiler");
        $__internal_2c7e3d1e0b8ca6be704a3f0732a70c3b319cf838ca7c7691a8a5c76fb81a2312->enter($__internal_2c7e3d1e0b8ca6be704a3f0732a70c3b319cf838ca7c7691a8a5c76fb81a2312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2c7e3d1e0b8ca6be704a3f0732a70c3b319cf838ca7c7691a8a5c76fb81a2312->leave($__internal_2c7e3d1e0b8ca6be704a3f0732a70c3b319cf838ca7c7691a8a5c76fb81a2312_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

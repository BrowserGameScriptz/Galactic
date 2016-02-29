<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9347e70d33daaf254f23ae951ccff692eb18811db8231bac5c13c33f6c938f34 extends Twig_Template
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
        $__internal_9b38a577fff44704d34fedbe2f395f85e478bedb2bfc033617652d6523e2ef7c = $this->env->getExtension("native_profiler");
        $__internal_9b38a577fff44704d34fedbe2f395f85e478bedb2bfc033617652d6523e2ef7c->enter($__internal_9b38a577fff44704d34fedbe2f395f85e478bedb2bfc033617652d6523e2ef7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9b38a577fff44704d34fedbe2f395f85e478bedb2bfc033617652d6523e2ef7c->leave($__internal_9b38a577fff44704d34fedbe2f395f85e478bedb2bfc033617652d6523e2ef7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

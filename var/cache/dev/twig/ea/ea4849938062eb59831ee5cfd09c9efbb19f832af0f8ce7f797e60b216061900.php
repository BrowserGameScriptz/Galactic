<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_505a899b48eb222c47c0e6e8ebfac30670ae5ddd954a0e7b090aa0d03ec195b7 extends Twig_Template
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
        $__internal_a6200f2af009ce4923cb68eebfc5c9838e65d2113ba11c1c05cd559d6c53c748 = $this->env->getExtension("native_profiler");
        $__internal_a6200f2af009ce4923cb68eebfc5c9838e65d2113ba11c1c05cd559d6c53c748->enter($__internal_a6200f2af009ce4923cb68eebfc5c9838e65d2113ba11c1c05cd559d6c53c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a6200f2af009ce4923cb68eebfc5c9838e65d2113ba11c1c05cd559d6c53c748->leave($__internal_a6200f2af009ce4923cb68eebfc5c9838e65d2113ba11c1c05cd559d6c53c748_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

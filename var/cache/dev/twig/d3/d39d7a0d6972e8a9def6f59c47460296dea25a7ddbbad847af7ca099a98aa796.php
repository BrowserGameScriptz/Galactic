<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_37ecb1d84d8ef5b8ce3bb142cccb09de9acfb3a5328c3dce989fcfb6cf3d59e4 extends Twig_Template
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
        $__internal_4ab1ddc97c872a3b8fe327e093b807ce6f5b21e3086bfbefda85550f212e85d3 = $this->env->getExtension("native_profiler");
        $__internal_4ab1ddc97c872a3b8fe327e093b807ce6f5b21e3086bfbefda85550f212e85d3->enter($__internal_4ab1ddc97c872a3b8fe327e093b807ce6f5b21e3086bfbefda85550f212e85d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4ab1ddc97c872a3b8fe327e093b807ce6f5b21e3086bfbefda85550f212e85d3->leave($__internal_4ab1ddc97c872a3b8fe327e093b807ce6f5b21e3086bfbefda85550f212e85d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

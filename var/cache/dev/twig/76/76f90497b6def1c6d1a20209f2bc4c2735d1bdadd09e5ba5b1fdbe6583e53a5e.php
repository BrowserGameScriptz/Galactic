<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_876e6c00541989267d983531fcb8409117366db09a6719c769a3bd35af6d39a7 extends Twig_Template
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
        $__internal_9ce97030baa1b006352b604616ffb9c3f9ddde58399cab3222e5065447ab8a59 = $this->env->getExtension("native_profiler");
        $__internal_9ce97030baa1b006352b604616ffb9c3f9ddde58399cab3222e5065447ab8a59->enter($__internal_9ce97030baa1b006352b604616ffb9c3f9ddde58399cab3222e5065447ab8a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9ce97030baa1b006352b604616ffb9c3f9ddde58399cab3222e5065447ab8a59->leave($__internal_9ce97030baa1b006352b604616ffb9c3f9ddde58399cab3222e5065447ab8a59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

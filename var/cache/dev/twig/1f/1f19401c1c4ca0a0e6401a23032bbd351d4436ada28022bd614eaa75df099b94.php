<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f5acdcf7014ca44ed2e935d92a2926a808603cbeda3bf7e33d2133f316ea5807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feabc4be3f5e675b30eccf5daa31b34d5e32e20b63b8d517c0a70322164b229a = $this->env->getExtension("native_profiler");
        $__internal_feabc4be3f5e675b30eccf5daa31b34d5e32e20b63b8d517c0a70322164b229a->enter($__internal_feabc4be3f5e675b30eccf5daa31b34d5e32e20b63b8d517c0a70322164b229a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_feabc4be3f5e675b30eccf5daa31b34d5e32e20b63b8d517c0a70322164b229a->leave($__internal_feabc4be3f5e675b30eccf5daa31b34d5e32e20b63b8d517c0a70322164b229a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b9e20cb868abe2d521e95184242e083c503ff842218b492196b6e4ab5d5fddd = $this->env->getExtension("native_profiler");
        $__internal_8b9e20cb868abe2d521e95184242e083c503ff842218b492196b6e4ab5d5fddd->enter($__internal_8b9e20cb868abe2d521e95184242e083c503ff842218b492196b6e4ab5d5fddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8b9e20cb868abe2d521e95184242e083c503ff842218b492196b6e4ab5d5fddd->leave($__internal_8b9e20cb868abe2d521e95184242e083c503ff842218b492196b6e4ab5d5fddd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

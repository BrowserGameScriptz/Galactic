<?php

/* GalacticBundle:Registration:register.html.twig */
class __TwigTemplate_b2a1445bfbd9b9b8b055ddb56bfbd2b5c5422399c41133f2e41cf7f75e0e68a3 extends Twig_Template
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
        $__internal_c6829a4b66c4183521add098020cf57ae387af7062948a09129b7b673a39cea0 = $this->env->getExtension("native_profiler");
        $__internal_c6829a4b66c4183521add098020cf57ae387af7062948a09129b7b673a39cea0->enter($__internal_c6829a4b66c4183521add098020cf57ae387af7062948a09129b7b673a39cea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GalacticBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">Register!</button>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_c6829a4b66c4183521add098020cf57ae387af7062948a09129b7b673a39cea0->leave($__internal_c6829a4b66c4183521add098020cf57ae387af7062948a09129b7b673a39cea0_prof);

    }

    public function getTemplateName()
    {
        return "GalacticBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {{ form_start(form) }}*/
/*     {{ form_row(form.username) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.plainPassword.first) }}*/
/*     {{ form_row(form.plainPassword.second) }}*/
/* */
/*     <button type="submit">Register!</button>*/
/* {{ form_end(form) }}*/

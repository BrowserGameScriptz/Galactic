<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0d78566b6278c0f83dc20afbc1def8a283c8ec4396011928d591317136ea013d extends Twig_Template
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
        $__internal_6e5a43e5fb04bccccfb67ce8de45256cc974b78e1ced39c29873b0af2475b65d = $this->env->getExtension("native_profiler");
        $__internal_6e5a43e5fb04bccccfb67ce8de45256cc974b78e1ced39c29873b0af2475b65d->enter($__internal_6e5a43e5fb04bccccfb67ce8de45256cc974b78e1ced39c29873b0af2475b65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6e5a43e5fb04bccccfb67ce8de45256cc974b78e1ced39c29873b0af2475b65d->leave($__internal_6e5a43e5fb04bccccfb67ce8de45256cc974b78e1ced39c29873b0af2475b65d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_76960d18e57a61dbda8801d05dd2a7800ef099693316158de1ff31226580d5ce extends Twig_Template
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
        $__internal_7b5126c284fb87c41cfad527670bf487881672575b9531a2d6a96f14fce23b69 = $this->env->getExtension("native_profiler");
        $__internal_7b5126c284fb87c41cfad527670bf487881672575b9531a2d6a96f14fce23b69->enter($__internal_7b5126c284fb87c41cfad527670bf487881672575b9531a2d6a96f14fce23b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7b5126c284fb87c41cfad527670bf487881672575b9531a2d6a96f14fce23b69->leave($__internal_7b5126c284fb87c41cfad527670bf487881672575b9531a2d6a96f14fce23b69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

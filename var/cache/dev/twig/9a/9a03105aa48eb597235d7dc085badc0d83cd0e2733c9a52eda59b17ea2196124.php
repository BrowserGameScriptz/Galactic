<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5de0d7bef71ddc400251b05299a7262957f25d978d059eb29329347d934d53f0 extends Twig_Template
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
        $__internal_cd4e749e5ce2627739d469559ac6ae9856116b089c4c01299069f64f695f1592 = $this->env->getExtension("native_profiler");
        $__internal_cd4e749e5ce2627739d469559ac6ae9856116b089c4c01299069f64f695f1592->enter($__internal_cd4e749e5ce2627739d469559ac6ae9856116b089c4c01299069f64f695f1592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cd4e749e5ce2627739d469559ac6ae9856116b089c4c01299069f64f695f1592->leave($__internal_cd4e749e5ce2627739d469559ac6ae9856116b089c4c01299069f64f695f1592_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

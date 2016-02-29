<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8642d84f93bec1aaa594733a2a7163910a604d20113ee8a7826817763459f6a6 extends Twig_Template
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
        $__internal_9b7153db7123292d2a695da7e66995f4496c0ca5d9c54540dfd731eb559a4342 = $this->env->getExtension("native_profiler");
        $__internal_9b7153db7123292d2a695da7e66995f4496c0ca5d9c54540dfd731eb559a4342->enter($__internal_9b7153db7123292d2a695da7e66995f4496c0ca5d9c54540dfd731eb559a4342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9b7153db7123292d2a695da7e66995f4496c0ca5d9c54540dfd731eb559a4342->leave($__internal_9b7153db7123292d2a695da7e66995f4496c0ca5d9c54540dfd731eb559a4342_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d3c405d6385140aa5e4a60121165b1ccbc94feedecbc1947a939f5c07ea9d5c1 extends Twig_Template
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
        $__internal_90204a1fab65365dd5748a9b855211f911140dd5293e3f6dc20120f5581fe574 = $this->env->getExtension("native_profiler");
        $__internal_90204a1fab65365dd5748a9b855211f911140dd5293e3f6dc20120f5581fe574->enter($__internal_90204a1fab65365dd5748a9b855211f911140dd5293e3f6dc20120f5581fe574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_90204a1fab65365dd5748a9b855211f911140dd5293e3f6dc20120f5581fe574->leave($__internal_90204a1fab65365dd5748a9b855211f911140dd5293e3f6dc20120f5581fe574_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

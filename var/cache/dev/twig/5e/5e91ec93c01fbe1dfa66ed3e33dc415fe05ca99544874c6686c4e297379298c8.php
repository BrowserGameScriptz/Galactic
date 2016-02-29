<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cab550935e4719e17f93a23f463baec3f6f8b11dd848a835fe632f315fd38d1d extends Twig_Template
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
        $__internal_00cad61152cb884a459ae4da4bb234a4737fe72f0d22da2263e8e707c40d619b = $this->env->getExtension("native_profiler");
        $__internal_00cad61152cb884a459ae4da4bb234a4737fe72f0d22da2263e8e707c40d619b->enter($__internal_00cad61152cb884a459ae4da4bb234a4737fe72f0d22da2263e8e707c40d619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_00cad61152cb884a459ae4da4bb234a4737fe72f0d22da2263e8e707c40d619b->leave($__internal_00cad61152cb884a459ae4da4bb234a4737fe72f0d22da2263e8e707c40d619b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

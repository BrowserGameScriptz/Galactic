<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_83542007f97395096bd33f40c21ba872d09796ddb707f91480bf6a36f510fdcc extends Twig_Template
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
        $__internal_9e4f39f7c21e85cb9495528f094bf245829283c839a82fa6621b2cd19413a544 = $this->env->getExtension("native_profiler");
        $__internal_9e4f39f7c21e85cb9495528f094bf245829283c839a82fa6621b2cd19413a544->enter($__internal_9e4f39f7c21e85cb9495528f094bf245829283c839a82fa6621b2cd19413a544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9e4f39f7c21e85cb9495528f094bf245829283c839a82fa6621b2cd19413a544->leave($__internal_9e4f39f7c21e85cb9495528f094bf245829283c839a82fa6621b2cd19413a544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

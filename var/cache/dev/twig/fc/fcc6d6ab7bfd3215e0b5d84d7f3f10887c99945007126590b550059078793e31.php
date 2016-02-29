<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_74d220b2806abf585bbc75b58090e12e784502142beaa0ed87edc630947db965 extends Twig_Template
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
        $__internal_27ddef19cb572bb9711de42d9a29e22750217a77d80e9b42b0d44496dd16dd87 = $this->env->getExtension("native_profiler");
        $__internal_27ddef19cb572bb9711de42d9a29e22750217a77d80e9b42b0d44496dd16dd87->enter($__internal_27ddef19cb572bb9711de42d9a29e22750217a77d80e9b42b0d44496dd16dd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_27ddef19cb572bb9711de42d9a29e22750217a77d80e9b42b0d44496dd16dd87->leave($__internal_27ddef19cb572bb9711de42d9a29e22750217a77d80e9b42b0d44496dd16dd87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b43adb8c4e90b40dd18bbc38ad3f0c3294121587631005dc51670c05c0805f4b extends Twig_Template
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
        $__internal_a1cc8c444c7d3981dec9629b55343fe1fc37f2294ad7dbc564651695804cc3d5 = $this->env->getExtension("native_profiler");
        $__internal_a1cc8c444c7d3981dec9629b55343fe1fc37f2294ad7dbc564651695804cc3d5->enter($__internal_a1cc8c444c7d3981dec9629b55343fe1fc37f2294ad7dbc564651695804cc3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a1cc8c444c7d3981dec9629b55343fe1fc37f2294ad7dbc564651695804cc3d5->leave($__internal_a1cc8c444c7d3981dec9629b55343fe1fc37f2294ad7dbc564651695804cc3d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

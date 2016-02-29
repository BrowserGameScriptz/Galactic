<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_17a9c4a85b2a22f76532cab0c34262787d6a45a5749a543aa4371429ce1cfc35 extends Twig_Template
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
        $__internal_51a43d1ac5aeb6a6dba8e77fcda0025937ae3962c2503937e4c59a27e45086b6 = $this->env->getExtension("native_profiler");
        $__internal_51a43d1ac5aeb6a6dba8e77fcda0025937ae3962c2503937e4c59a27e45086b6->enter($__internal_51a43d1ac5aeb6a6dba8e77fcda0025937ae3962c2503937e4c59a27e45086b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_51a43d1ac5aeb6a6dba8e77fcda0025937ae3962c2503937e4c59a27e45086b6->leave($__internal_51a43d1ac5aeb6a6dba8e77fcda0025937ae3962c2503937e4c59a27e45086b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

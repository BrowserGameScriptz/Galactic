<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_04f7450d530977b0f84bc58f466d0acbced5f842e7175ea0b2d305bb7a8d31e8 extends Twig_Template
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
        $__internal_4da1461a7194d9e25eeb8a8ea108a7776b1d6704d83e1c2ca09958c9ab611e16 = $this->env->getExtension("native_profiler");
        $__internal_4da1461a7194d9e25eeb8a8ea108a7776b1d6704d83e1c2ca09958c9ab611e16->enter($__internal_4da1461a7194d9e25eeb8a8ea108a7776b1d6704d83e1c2ca09958c9ab611e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4da1461a7194d9e25eeb8a8ea108a7776b1d6704d83e1c2ca09958c9ab611e16->leave($__internal_4da1461a7194d9e25eeb8a8ea108a7776b1d6704d83e1c2ca09958c9ab611e16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

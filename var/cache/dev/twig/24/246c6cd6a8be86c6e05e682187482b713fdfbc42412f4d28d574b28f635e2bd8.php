<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_bd1ff8fac53bdeb4e90483002332564ee71c89b018074c1cc4350bd34f4eba56 extends Twig_Template
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
        $__internal_18115545b78c3e3f6e7db275fd1e24284bbeea7e0cf8e35407db0bb1b493fbb5 = $this->env->getExtension("native_profiler");
        $__internal_18115545b78c3e3f6e7db275fd1e24284bbeea7e0cf8e35407db0bb1b493fbb5->enter($__internal_18115545b78c3e3f6e7db275fd1e24284bbeea7e0cf8e35407db0bb1b493fbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_18115545b78c3e3f6e7db275fd1e24284bbeea7e0cf8e35407db0bb1b493fbb5->leave($__internal_18115545b78c3e3f6e7db275fd1e24284bbeea7e0cf8e35407db0bb1b493fbb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7679f8d142077ba1a507a0f224ecffa621e69954cca2f3ab247604c055c02d70 extends Twig_Template
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
        $__internal_59220e0e77a9407b89cd8eb53f28e21dc28c4655eaf2ec08fe46fc250a1b6be5 = $this->env->getExtension("native_profiler");
        $__internal_59220e0e77a9407b89cd8eb53f28e21dc28c4655eaf2ec08fe46fc250a1b6be5->enter($__internal_59220e0e77a9407b89cd8eb53f28e21dc28c4655eaf2ec08fe46fc250a1b6be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_59220e0e77a9407b89cd8eb53f28e21dc28c4655eaf2ec08fe46fc250a1b6be5->leave($__internal_59220e0e77a9407b89cd8eb53f28e21dc28c4655eaf2ec08fe46fc250a1b6be5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6eaebefddd5f5e5168ab132702a1fb630edf536db8c244ae5e9860c150adbbef extends Twig_Template
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
        $__internal_f7562d8ccc337cb485d2b287a6155c8cc7cfce747314a21960ef19b504d39e9e = $this->env->getExtension("native_profiler");
        $__internal_f7562d8ccc337cb485d2b287a6155c8cc7cfce747314a21960ef19b504d39e9e->enter($__internal_f7562d8ccc337cb485d2b287a6155c8cc7cfce747314a21960ef19b504d39e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f7562d8ccc337cb485d2b287a6155c8cc7cfce747314a21960ef19b504d39e9e->leave($__internal_f7562d8ccc337cb485d2b287a6155c8cc7cfce747314a21960ef19b504d39e9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

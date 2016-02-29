<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2533ea7c7f77f63d965a2e79a6f6e9a2194f78fa2ae999067d21e3360df5a463 extends Twig_Template
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
        $__internal_8a4e114d2a10b5576c4c37494126f3a73612137888235983304592111c0ac321 = $this->env->getExtension("native_profiler");
        $__internal_8a4e114d2a10b5576c4c37494126f3a73612137888235983304592111c0ac321->enter($__internal_8a4e114d2a10b5576c4c37494126f3a73612137888235983304592111c0ac321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8a4e114d2a10b5576c4c37494126f3a73612137888235983304592111c0ac321->leave($__internal_8a4e114d2a10b5576c4c37494126f3a73612137888235983304592111c0ac321_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

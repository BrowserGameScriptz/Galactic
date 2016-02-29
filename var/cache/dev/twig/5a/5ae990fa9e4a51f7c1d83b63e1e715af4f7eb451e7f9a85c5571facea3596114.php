<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0cf02a956c1d6bd7825e8df7377b1d03e72e94c2ae5f41d582efd6cf69fe07bd extends Twig_Template
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
        $__internal_a2f4c1f1faeb1176d18756a8fe654581c7fde23513c33abe87ae5beb8fde50eb = $this->env->getExtension("native_profiler");
        $__internal_a2f4c1f1faeb1176d18756a8fe654581c7fde23513c33abe87ae5beb8fde50eb->enter($__internal_a2f4c1f1faeb1176d18756a8fe654581c7fde23513c33abe87ae5beb8fde50eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a2f4c1f1faeb1176d18756a8fe654581c7fde23513c33abe87ae5beb8fde50eb->leave($__internal_a2f4c1f1faeb1176d18756a8fe654581c7fde23513c33abe87ae5beb8fde50eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

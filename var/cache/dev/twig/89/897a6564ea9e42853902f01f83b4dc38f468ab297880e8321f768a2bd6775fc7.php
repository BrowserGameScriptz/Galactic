<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e282778f664dbfbb1742c61b2e7c2d55f8cebf0b16b6f5e61939c47308044502 extends Twig_Template
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
        $__internal_22ac805bf86e1d47f0b5874b5c9f2f65d4618e6360a7d3bb99da69320e9c9484 = $this->env->getExtension("native_profiler");
        $__internal_22ac805bf86e1d47f0b5874b5c9f2f65d4618e6360a7d3bb99da69320e9c9484->enter($__internal_22ac805bf86e1d47f0b5874b5c9f2f65d4618e6360a7d3bb99da69320e9c9484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_22ac805bf86e1d47f0b5874b5c9f2f65d4618e6360a7d3bb99da69320e9c9484->leave($__internal_22ac805bf86e1d47f0b5874b5c9f2f65d4618e6360a7d3bb99da69320e9c9484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

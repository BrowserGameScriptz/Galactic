<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_549a507afb6baa12e5eafff417e356c2c9485d22f3e5b7742edaaa1911e7352d extends Twig_Template
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
        $__internal_6bde9a0930e54c47467f51ca5eea69296d9847978e46846ad99a42e8abf0a5f0 = $this->env->getExtension("native_profiler");
        $__internal_6bde9a0930e54c47467f51ca5eea69296d9847978e46846ad99a42e8abf0a5f0->enter($__internal_6bde9a0930e54c47467f51ca5eea69296d9847978e46846ad99a42e8abf0a5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6bde9a0930e54c47467f51ca5eea69296d9847978e46846ad99a42e8abf0a5f0->leave($__internal_6bde9a0930e54c47467f51ca5eea69296d9847978e46846ad99a42e8abf0a5f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

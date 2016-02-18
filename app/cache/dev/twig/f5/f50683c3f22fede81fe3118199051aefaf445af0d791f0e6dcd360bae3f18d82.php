<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_832353fd302dee682a07044ca4ed83258a1a6cc6dde3894f9bb2d064e9cf422f extends Twig_Template
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
        $__internal_562e7030895dd63900e39a1d4e2c07e1e39edcfeaf6a2b6f9961101b9db22bf3 = $this->env->getExtension("native_profiler");
        $__internal_562e7030895dd63900e39a1d4e2c07e1e39edcfeaf6a2b6f9961101b9db22bf3->enter($__internal_562e7030895dd63900e39a1d4e2c07e1e39edcfeaf6a2b6f9961101b9db22bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_562e7030895dd63900e39a1d4e2c07e1e39edcfeaf6a2b6f9961101b9db22bf3->leave($__internal_562e7030895dd63900e39a1d4e2c07e1e39edcfeaf6a2b6f9961101b9db22bf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_649f3b1135a6086e14785e8c70bd96f133f10ffe16c49abab36d3b335d3fc69d extends Twig_Template
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
        $__internal_8f76f707883b0eb8532487ad1543a5bc0521f34ff0353a1d37765f5c6a862d5b = $this->env->getExtension("native_profiler");
        $__internal_8f76f707883b0eb8532487ad1543a5bc0521f34ff0353a1d37765f5c6a862d5b->enter($__internal_8f76f707883b0eb8532487ad1543a5bc0521f34ff0353a1d37765f5c6a862d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8f76f707883b0eb8532487ad1543a5bc0521f34ff0353a1d37765f5c6a862d5b->leave($__internal_8f76f707883b0eb8532487ad1543a5bc0521f34ff0353a1d37765f5c6a862d5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

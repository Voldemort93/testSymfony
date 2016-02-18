<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1a93d7460e3329c05ebbf938eede90249d428a92de9519978cdce0e23e85e673 extends Twig_Template
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
        $__internal_7bbb7c188a1295d8384c1b7e12a78ba9210187bacb7cfbb0c059a0a23f883e1f = $this->env->getExtension("native_profiler");
        $__internal_7bbb7c188a1295d8384c1b7e12a78ba9210187bacb7cfbb0c059a0a23f883e1f->enter($__internal_7bbb7c188a1295d8384c1b7e12a78ba9210187bacb7cfbb0c059a0a23f883e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7bbb7c188a1295d8384c1b7e12a78ba9210187bacb7cfbb0c059a0a23f883e1f->leave($__internal_7bbb7c188a1295d8384c1b7e12a78ba9210187bacb7cfbb0c059a0a23f883e1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

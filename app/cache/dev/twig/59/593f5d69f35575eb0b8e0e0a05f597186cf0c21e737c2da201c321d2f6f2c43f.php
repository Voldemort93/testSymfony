<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4ecf60a493bd5126d6be1c680171508c8571dac20ca10b11aafb077f4353dca7 extends Twig_Template
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
        $__internal_5bdc0ef030608cf87524f313be5b4e67c7d9cca00e456339a673c2bc7b04d427 = $this->env->getExtension("native_profiler");
        $__internal_5bdc0ef030608cf87524f313be5b4e67c7d9cca00e456339a673c2bc7b04d427->enter($__internal_5bdc0ef030608cf87524f313be5b4e67c7d9cca00e456339a673c2bc7b04d427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5bdc0ef030608cf87524f313be5b4e67c7d9cca00e456339a673c2bc7b04d427->leave($__internal_5bdc0ef030608cf87524f313be5b4e67c7d9cca00e456339a673c2bc7b04d427_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

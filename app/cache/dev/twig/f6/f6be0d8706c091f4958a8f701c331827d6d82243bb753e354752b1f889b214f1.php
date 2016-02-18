<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_af66fe99633510cd46327bb571fb00352f03786a9d3a88289afbb2f749dc7492 extends Twig_Template
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
        $__internal_94244ecea173f4ed38476fe6310f67bb190c1877570198fa44740ab88b3870ba = $this->env->getExtension("native_profiler");
        $__internal_94244ecea173f4ed38476fe6310f67bb190c1877570198fa44740ab88b3870ba->enter($__internal_94244ecea173f4ed38476fe6310f67bb190c1877570198fa44740ab88b3870ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_94244ecea173f4ed38476fe6310f67bb190c1877570198fa44740ab88b3870ba->leave($__internal_94244ecea173f4ed38476fe6310f67bb190c1877570198fa44740ab88b3870ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

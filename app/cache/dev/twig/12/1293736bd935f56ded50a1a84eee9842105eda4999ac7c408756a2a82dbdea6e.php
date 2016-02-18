<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_313f584cfc9bbdea53551397d5f751ee12eb5f4c6c82e806e24b07354f408883 extends Twig_Template
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
        $__internal_8e6376331796851c03a2eb328bfdc14e1f02ad6c50ac3518476901846bd7e1bb = $this->env->getExtension("native_profiler");
        $__internal_8e6376331796851c03a2eb328bfdc14e1f02ad6c50ac3518476901846bd7e1bb->enter($__internal_8e6376331796851c03a2eb328bfdc14e1f02ad6c50ac3518476901846bd7e1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8e6376331796851c03a2eb328bfdc14e1f02ad6c50ac3518476901846bd7e1bb->leave($__internal_8e6376331796851c03a2eb328bfdc14e1f02ad6c50ac3518476901846bd7e1bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

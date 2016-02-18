<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ae00d1254c2242c0862985c1d26b9b35e6057ff04fd79dd1943b4fb72b78b6c9 extends Twig_Template
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
        $__internal_944d3ec185cd4042029bc810155b97ca1969e2d5f712a5f9cfbc5d4820feeede = $this->env->getExtension("native_profiler");
        $__internal_944d3ec185cd4042029bc810155b97ca1969e2d5f712a5f9cfbc5d4820feeede->enter($__internal_944d3ec185cd4042029bc810155b97ca1969e2d5f712a5f9cfbc5d4820feeede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_944d3ec185cd4042029bc810155b97ca1969e2d5f712a5f9cfbc5d4820feeede->leave($__internal_944d3ec185cd4042029bc810155b97ca1969e2d5f712a5f9cfbc5d4820feeede_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

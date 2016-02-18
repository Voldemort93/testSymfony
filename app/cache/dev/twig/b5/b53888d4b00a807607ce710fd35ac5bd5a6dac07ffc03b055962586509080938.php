<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_45443fc0fd2e30ac9ef0fdd0c019e39ad7e2fdef3ad044c12835ca0b3d224cd1 extends Twig_Template
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
        $__internal_ee43c05692ed456d8aa35c4995afd5e606573d8a93c3a869cdc69c9374cddf25 = $this->env->getExtension("native_profiler");
        $__internal_ee43c05692ed456d8aa35c4995afd5e606573d8a93c3a869cdc69c9374cddf25->enter($__internal_ee43c05692ed456d8aa35c4995afd5e606573d8a93c3a869cdc69c9374cddf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ee43c05692ed456d8aa35c4995afd5e606573d8a93c3a869cdc69c9374cddf25->leave($__internal_ee43c05692ed456d8aa35c4995afd5e606573d8a93c3a869cdc69c9374cddf25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

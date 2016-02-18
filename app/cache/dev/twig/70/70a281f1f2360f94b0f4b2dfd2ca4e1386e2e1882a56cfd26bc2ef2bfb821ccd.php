<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2c2e3abb91a19633b3cc0f0c30559ea1ae40922099308f52edc1e3f6f642591a extends Twig_Template
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
        $__internal_14925f4a63d5009013e667ae41cec5f60d4a49d0cb0797ca0f9f59b9901a8e89 = $this->env->getExtension("native_profiler");
        $__internal_14925f4a63d5009013e667ae41cec5f60d4a49d0cb0797ca0f9f59b9901a8e89->enter($__internal_14925f4a63d5009013e667ae41cec5f60d4a49d0cb0797ca0f9f59b9901a8e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_14925f4a63d5009013e667ae41cec5f60d4a49d0cb0797ca0f9f59b9901a8e89->leave($__internal_14925f4a63d5009013e667ae41cec5f60d4a49d0cb0797ca0f9f59b9901a8e89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

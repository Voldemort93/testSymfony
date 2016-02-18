<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_95f33fa83cff6362e0445298545ad7430cde7133ee5aacb9b992f8faed3b4943 extends Twig_Template
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
        $__internal_8beb2ee088b218cadeb3c1d1ce0145f8e8b64f9fcd006043261447ad7a09d7c1 = $this->env->getExtension("native_profiler");
        $__internal_8beb2ee088b218cadeb3c1d1ce0145f8e8b64f9fcd006043261447ad7a09d7c1->enter($__internal_8beb2ee088b218cadeb3c1d1ce0145f8e8b64f9fcd006043261447ad7a09d7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8beb2ee088b218cadeb3c1d1ce0145f8e8b64f9fcd006043261447ad7a09d7c1->leave($__internal_8beb2ee088b218cadeb3c1d1ce0145f8e8b64f9fcd006043261447ad7a09d7c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

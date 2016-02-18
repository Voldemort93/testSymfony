<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8e21877ee34b9907faa86916d3fa8c80fe4ccb0d89ab9c60b1fae1aa24057c21 extends Twig_Template
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
        $__internal_aa51811389f271810ba14ebdc1703a29b851f062210189551990ef22e665e4fd = $this->env->getExtension("native_profiler");
        $__internal_aa51811389f271810ba14ebdc1703a29b851f062210189551990ef22e665e4fd->enter($__internal_aa51811389f271810ba14ebdc1703a29b851f062210189551990ef22e665e4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_aa51811389f271810ba14ebdc1703a29b851f062210189551990ef22e665e4fd->leave($__internal_aa51811389f271810ba14ebdc1703a29b851f062210189551990ef22e665e4fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

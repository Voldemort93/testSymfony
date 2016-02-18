<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_006cf0a85819f19d3ab3fbf8cc9af409ed6effcb5fa7d177a3c6436e7cfd524a extends Twig_Template
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
        $__internal_aa2834193fa07fe125680b41b4d292db16bc9a0851916dd2ba7fe0708b7aa1b6 = $this->env->getExtension("native_profiler");
        $__internal_aa2834193fa07fe125680b41b4d292db16bc9a0851916dd2ba7fe0708b7aa1b6->enter($__internal_aa2834193fa07fe125680b41b4d292db16bc9a0851916dd2ba7fe0708b7aa1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_aa2834193fa07fe125680b41b4d292db16bc9a0851916dd2ba7fe0708b7aa1b6->leave($__internal_aa2834193fa07fe125680b41b4d292db16bc9a0851916dd2ba7fe0708b7aa1b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d23c89523e35eb934df27032dfc013ddda1b9077ea74ab102cf497a252c69028 extends Twig_Template
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
        $__internal_b0e803ece2998e99c20e8762a665e7d9d34791e82f263df1b956a20761b1a799 = $this->env->getExtension("native_profiler");
        $__internal_b0e803ece2998e99c20e8762a665e7d9d34791e82f263df1b956a20761b1a799->enter($__internal_b0e803ece2998e99c20e8762a665e7d9d34791e82f263df1b956a20761b1a799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0e803ece2998e99c20e8762a665e7d9d34791e82f263df1b956a20761b1a799->leave($__internal_b0e803ece2998e99c20e8762a665e7d9d34791e82f263df1b956a20761b1a799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

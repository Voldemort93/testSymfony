<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5fbacfefa80f8d25de5b714da3a47aa235576d337e3f3afc0320b3ff268713e5 extends Twig_Template
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
        $__internal_19f466a7dba837664dccc3a7b3ac32db5a05df545d2e701d0b3a7457b6bd3337 = $this->env->getExtension("native_profiler");
        $__internal_19f466a7dba837664dccc3a7b3ac32db5a05df545d2e701d0b3a7457b6bd3337->enter($__internal_19f466a7dba837664dccc3a7b3ac32db5a05df545d2e701d0b3a7457b6bd3337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_19f466a7dba837664dccc3a7b3ac32db5a05df545d2e701d0b3a7457b6bd3337->leave($__internal_19f466a7dba837664dccc3a7b3ac32db5a05df545d2e701d0b3a7457b6bd3337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

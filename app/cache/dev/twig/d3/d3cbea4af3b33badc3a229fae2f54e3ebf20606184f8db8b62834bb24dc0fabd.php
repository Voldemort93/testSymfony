<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_eac5ec1e95aa0f76cfee4d015c85c622cbc82242a5153f481b3fc3e827cb7495 extends Twig_Template
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
        $__internal_542b4e518ce5361b05bb8729acd99514ae4e5ce1a55669baf400e93db85f31ad = $this->env->getExtension("native_profiler");
        $__internal_542b4e518ce5361b05bb8729acd99514ae4e5ce1a55669baf400e93db85f31ad->enter($__internal_542b4e518ce5361b05bb8729acd99514ae4e5ce1a55669baf400e93db85f31ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_542b4e518ce5361b05bb8729acd99514ae4e5ce1a55669baf400e93db85f31ad->leave($__internal_542b4e518ce5361b05bb8729acd99514ae4e5ce1a55669baf400e93db85f31ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

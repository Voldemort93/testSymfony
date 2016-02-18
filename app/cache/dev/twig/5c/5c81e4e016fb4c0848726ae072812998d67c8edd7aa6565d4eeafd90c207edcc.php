<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e2460709997bec7253b06b6cc8ac5c501f933349f48001966fa49265e711d668 extends Twig_Template
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
        $__internal_16f6c5cb691f0ee754e7afa8f5032973ca1f380d30460caa17be7835a510c52f = $this->env->getExtension("native_profiler");
        $__internal_16f6c5cb691f0ee754e7afa8f5032973ca1f380d30460caa17be7835a510c52f->enter($__internal_16f6c5cb691f0ee754e7afa8f5032973ca1f380d30460caa17be7835a510c52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_16f6c5cb691f0ee754e7afa8f5032973ca1f380d30460caa17be7835a510c52f->leave($__internal_16f6c5cb691f0ee754e7afa8f5032973ca1f380d30460caa17be7835a510c52f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_974738f9606e67af9a8e57ec32a2c1f940d5c8372df63a3c1f298db8f116e82b extends Twig_Template
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
        $__internal_8bb1995693093be54c82a3ccf32c1bf49231b9f8afa790f66f810aec97a55cd2 = $this->env->getExtension("native_profiler");
        $__internal_8bb1995693093be54c82a3ccf32c1bf49231b9f8afa790f66f810aec97a55cd2->enter($__internal_8bb1995693093be54c82a3ccf32c1bf49231b9f8afa790f66f810aec97a55cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8bb1995693093be54c82a3ccf32c1bf49231b9f8afa790f66f810aec97a55cd2->leave($__internal_8bb1995693093be54c82a3ccf32c1bf49231b9f8afa790f66f810aec97a55cd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

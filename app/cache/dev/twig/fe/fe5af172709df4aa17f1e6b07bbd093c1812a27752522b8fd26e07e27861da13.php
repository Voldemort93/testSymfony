<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ebc98b65528e603898b46a81bf06e0fd2e1d44bf9332b491605708b8183fecec extends Twig_Template
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
        $__internal_1f30329b4f2643662c143f55600282965f679eea19fa3b566ecfb3e31ba537f2 = $this->env->getExtension("native_profiler");
        $__internal_1f30329b4f2643662c143f55600282965f679eea19fa3b566ecfb3e31ba537f2->enter($__internal_1f30329b4f2643662c143f55600282965f679eea19fa3b566ecfb3e31ba537f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1f30329b4f2643662c143f55600282965f679eea19fa3b566ecfb3e31ba537f2->leave($__internal_1f30329b4f2643662c143f55600282965f679eea19fa3b566ecfb3e31ba537f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

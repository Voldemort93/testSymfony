<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bcf4aee3f5071f0ba3faf521f19ef409ed97a52098e0037cc2bc265294cca2f4 extends Twig_Template
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
        $__internal_7b93466e363de36349aa8fd2520d31b315e72d7cb72e980a417c91294b2152fa = $this->env->getExtension("native_profiler");
        $__internal_7b93466e363de36349aa8fd2520d31b315e72d7cb72e980a417c91294b2152fa->enter($__internal_7b93466e363de36349aa8fd2520d31b315e72d7cb72e980a417c91294b2152fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7b93466e363de36349aa8fd2520d31b315e72d7cb72e980a417c91294b2152fa->leave($__internal_7b93466e363de36349aa8fd2520d31b315e72d7cb72e980a417c91294b2152fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

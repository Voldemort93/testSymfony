<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7abda61f77875bd1b8f4fe47c9e83c66f66a74d864cb56742b229566901ee913 extends Twig_Template
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
        $__internal_45dd1a1beb967d12932442e487e23ab01e1344a1c785857a195288b0cdeea138 = $this->env->getExtension("native_profiler");
        $__internal_45dd1a1beb967d12932442e487e23ab01e1344a1c785857a195288b0cdeea138->enter($__internal_45dd1a1beb967d12932442e487e23ab01e1344a1c785857a195288b0cdeea138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_45dd1a1beb967d12932442e487e23ab01e1344a1c785857a195288b0cdeea138->leave($__internal_45dd1a1beb967d12932442e487e23ab01e1344a1c785857a195288b0cdeea138_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_77dda262d0d3e1d88f59d7b988c8bbc2d7c9dbcd608ad6a841e7a3fd09b3e1f6 extends Twig_Template
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
        $__internal_df3021530e8f371712a13e99647b2cedd615abd69db310081fbc8108fee622d8 = $this->env->getExtension("native_profiler");
        $__internal_df3021530e8f371712a13e99647b2cedd615abd69db310081fbc8108fee622d8->enter($__internal_df3021530e8f371712a13e99647b2cedd615abd69db310081fbc8108fee622d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_df3021530e8f371712a13e99647b2cedd615abd69db310081fbc8108fee622d8->leave($__internal_df3021530e8f371712a13e99647b2cedd615abd69db310081fbc8108fee622d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

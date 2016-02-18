<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1df18784cde512f6350df6d13e3fc895a9800ee69cad607f3faf8284f022ce29 extends Twig_Template
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
        $__internal_210c2ccad0db669c37cc7f2bee8631afab6f629148e88051e35d135d2ca84195 = $this->env->getExtension("native_profiler");
        $__internal_210c2ccad0db669c37cc7f2bee8631afab6f629148e88051e35d135d2ca84195->enter($__internal_210c2ccad0db669c37cc7f2bee8631afab6f629148e88051e35d135d2ca84195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_210c2ccad0db669c37cc7f2bee8631afab6f629148e88051e35d135d2ca84195->leave($__internal_210c2ccad0db669c37cc7f2bee8631afab6f629148e88051e35d135d2ca84195_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

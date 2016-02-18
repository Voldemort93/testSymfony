<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e216d4147198a0565f3fd5d59b45d9975983d015210bc9ef3127d4b9f5cb4f95 extends Twig_Template
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
        $__internal_bc9ffc67e640c5b66fdb2e3ba30bfafe47b3aa260ff6d43e71490c7c2d5d660c = $this->env->getExtension("native_profiler");
        $__internal_bc9ffc67e640c5b66fdb2e3ba30bfafe47b3aa260ff6d43e71490c7c2d5d660c->enter($__internal_bc9ffc67e640c5b66fdb2e3ba30bfafe47b3aa260ff6d43e71490c7c2d5d660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bc9ffc67e640c5b66fdb2e3ba30bfafe47b3aa260ff6d43e71490c7c2d5d660c->leave($__internal_bc9ffc67e640c5b66fdb2e3ba30bfafe47b3aa260ff6d43e71490c7c2d5d660c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

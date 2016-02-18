<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_aaecac90ae36a7f87bdf929f4fc99ca58b49674c56efd33f88802f9a9d4788e1 extends Twig_Template
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
        $__internal_585988402d6ed5fa39a1b4d8171f2214ac63947f56eb5c0a920b473465ef4624 = $this->env->getExtension("native_profiler");
        $__internal_585988402d6ed5fa39a1b4d8171f2214ac63947f56eb5c0a920b473465ef4624->enter($__internal_585988402d6ed5fa39a1b4d8171f2214ac63947f56eb5c0a920b473465ef4624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_585988402d6ed5fa39a1b4d8171f2214ac63947f56eb5c0a920b473465ef4624->leave($__internal_585988402d6ed5fa39a1b4d8171f2214ac63947f56eb5c0a920b473465ef4624_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f0016c3c90196b9f21f841f5236ddb4ff16f684a11a9830a9ff3c01224327a00 extends Twig_Template
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
        $__internal_cb75b10899ccf93a1ef8d9e30255bea937f55b629e6f663fc9acc584ca04f1db = $this->env->getExtension("native_profiler");
        $__internal_cb75b10899ccf93a1ef8d9e30255bea937f55b629e6f663fc9acc584ca04f1db->enter($__internal_cb75b10899ccf93a1ef8d9e30255bea937f55b629e6f663fc9acc584ca04f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cb75b10899ccf93a1ef8d9e30255bea937f55b629e6f663fc9acc584ca04f1db->leave($__internal_cb75b10899ccf93a1ef8d9e30255bea937f55b629e6f663fc9acc584ca04f1db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_39c019d5e81f33c8903997b51c4c38de8f760d4226dd924ddd82abb3ebdec3a5 extends Twig_Template
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
        $__internal_df18c5de65d9ef23042531c77e7dcf10e4f0632a0dc9d2bb3f0c3f1245f901e1 = $this->env->getExtension("native_profiler");
        $__internal_df18c5de65d9ef23042531c77e7dcf10e4f0632a0dc9d2bb3f0c3f1245f901e1->enter($__internal_df18c5de65d9ef23042531c77e7dcf10e4f0632a0dc9d2bb3f0c3f1245f901e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_df18c5de65d9ef23042531c77e7dcf10e4f0632a0dc9d2bb3f0c3f1245f901e1->leave($__internal_df18c5de65d9ef23042531c77e7dcf10e4f0632a0dc9d2bb3f0c3f1245f901e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

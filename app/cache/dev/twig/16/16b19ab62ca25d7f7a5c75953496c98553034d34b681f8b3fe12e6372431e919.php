<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_dfff69507310194dbfe6f7693b945af30a6d1135ef7e1deffb50a588dc5886c5 extends Twig_Template
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
        $__internal_cbc698fbfa536651a9835119058e3b720332e402c8d4360aa024566a6fbfa154 = $this->env->getExtension("native_profiler");
        $__internal_cbc698fbfa536651a9835119058e3b720332e402c8d4360aa024566a6fbfa154->enter($__internal_cbc698fbfa536651a9835119058e3b720332e402c8d4360aa024566a6fbfa154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_cbc698fbfa536651a9835119058e3b720332e402c8d4360aa024566a6fbfa154->leave($__internal_cbc698fbfa536651a9835119058e3b720332e402c8d4360aa024566a6fbfa154_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

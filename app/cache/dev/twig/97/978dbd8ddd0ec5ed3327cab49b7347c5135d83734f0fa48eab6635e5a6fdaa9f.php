<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1335c04b245ec98f56cc51c51f5cdb59a77a177ef0b159695975b4d9eeda7a1a extends Twig_Template
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
        $__internal_8585a049298025ecb4f1769a021cf7b90ecbd7ffed593dc75499faebd3315d89 = $this->env->getExtension("native_profiler");
        $__internal_8585a049298025ecb4f1769a021cf7b90ecbd7ffed593dc75499faebd3315d89->enter($__internal_8585a049298025ecb4f1769a021cf7b90ecbd7ffed593dc75499faebd3315d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8585a049298025ecb4f1769a021cf7b90ecbd7ffed593dc75499faebd3315d89->leave($__internal_8585a049298025ecb4f1769a021cf7b90ecbd7ffed593dc75499faebd3315d89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

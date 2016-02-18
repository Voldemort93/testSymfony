<?php

/* VovaHelloBundle:Hello:index.html.twig */
class __TwigTemplate_b3e39cfe049ec6691249ea9c1eb08d376708aaad941e16ba92f0992196dbf625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "VovaHelloBundle:Hello:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6118f8d84bf5dd476e1a7623e90b939f057bbfb3d18670a3f32d02ceff0bf36a = $this->env->getExtension("native_profiler");
        $__internal_6118f8d84bf5dd476e1a7623e90b939f057bbfb3d18670a3f32d02ceff0bf36a->enter($__internal_6118f8d84bf5dd476e1a7623e90b939f057bbfb3d18670a3f32d02ceff0bf36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VovaHelloBundle:Hello:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6118f8d84bf5dd476e1a7623e90b939f057bbfb3d18670a3f32d02ceff0bf36a->leave($__internal_6118f8d84bf5dd476e1a7623e90b939f057bbfb3d18670a3f32d02ceff0bf36a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_334a2f91f678985b4c015dc290a34472e73b4d930603bf6793480e72041fa010 = $this->env->getExtension("native_profiler");
        $__internal_334a2f91f678985b4c015dc290a34472e73b4d930603bf6793480e72041fa010->enter($__internal_334a2f91f678985b4c015dc290a34472e73b4d930603bf6793480e72041fa010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello, ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
    IP of API site is ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "
";
        
        $__internal_334a2f91f678985b4c015dc290a34472e73b4d930603bf6793480e72041fa010->leave($__internal_334a2f91f678985b4c015dc290a34472e73b4d930603bf6793480e72041fa010_prof);

    }

    public function getTemplateName()
    {
        return "VovaHelloBundle:Hello:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Hello, {{ name }}!*/
/*     IP of API site is {{ ip }}*/
/* {% endblock %}*/

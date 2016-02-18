<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a1cd231a057394e5db2daa9c97a4f526d25f3502e57eaf8960c05d24b56fa955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb5b6f817223fe3f298e0e0b7fe7379831758683ebfcd0dbcb141da8e066b21 = $this->env->getExtension("native_profiler");
        $__internal_deb5b6f817223fe3f298e0e0b7fe7379831758683ebfcd0dbcb141da8e066b21->enter($__internal_deb5b6f817223fe3f298e0e0b7fe7379831758683ebfcd0dbcb141da8e066b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb5b6f817223fe3f298e0e0b7fe7379831758683ebfcd0dbcb141da8e066b21->leave($__internal_deb5b6f817223fe3f298e0e0b7fe7379831758683ebfcd0dbcb141da8e066b21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e1be25b8cf9472f96c6164606a6e1c1ffe882339c61f87ad9fc4d6648807bcb = $this->env->getExtension("native_profiler");
        $__internal_2e1be25b8cf9472f96c6164606a6e1c1ffe882339c61f87ad9fc4d6648807bcb->enter($__internal_2e1be25b8cf9472f96c6164606a6e1c1ffe882339c61f87ad9fc4d6648807bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2e1be25b8cf9472f96c6164606a6e1c1ffe882339c61f87ad9fc4d6648807bcb->leave($__internal_2e1be25b8cf9472f96c6164606a6e1c1ffe882339c61f87ad9fc4d6648807bcb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a5f4df7e5a80d6a0ec89afb196f054c40a5461271bb231986b3febd341663f1 = $this->env->getExtension("native_profiler");
        $__internal_7a5f4df7e5a80d6a0ec89afb196f054c40a5461271bb231986b3febd341663f1->enter($__internal_7a5f4df7e5a80d6a0ec89afb196f054c40a5461271bb231986b3febd341663f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a5f4df7e5a80d6a0ec89afb196f054c40a5461271bb231986b3febd341663f1->leave($__internal_7a5f4df7e5a80d6a0ec89afb196f054c40a5461271bb231986b3febd341663f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf39b9d79efd2a232e26003f489d6f9c2fa496e021dd111ebda2b3d3dc3a6ec5 = $this->env->getExtension("native_profiler");
        $__internal_bf39b9d79efd2a232e26003f489d6f9c2fa496e021dd111ebda2b3d3dc3a6ec5->enter($__internal_bf39b9d79efd2a232e26003f489d6f9c2fa496e021dd111ebda2b3d3dc3a6ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bf39b9d79efd2a232e26003f489d6f9c2fa496e021dd111ebda2b3d3dc3a6ec5->leave($__internal_bf39b9d79efd2a232e26003f489d6f9c2fa496e021dd111ebda2b3d3dc3a6ec5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

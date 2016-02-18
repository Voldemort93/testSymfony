<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_921d8ce1c6b92e8ae119798cadb7008dc68805a42e89f631551d2cb9a56db614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_100d48dccdc0d9c146e700ab94d489072b9305204c5036f5a2b36341edab9a35 = $this->env->getExtension("native_profiler");
        $__internal_100d48dccdc0d9c146e700ab94d489072b9305204c5036f5a2b36341edab9a35->enter($__internal_100d48dccdc0d9c146e700ab94d489072b9305204c5036f5a2b36341edab9a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_100d48dccdc0d9c146e700ab94d489072b9305204c5036f5a2b36341edab9a35->leave($__internal_100d48dccdc0d9c146e700ab94d489072b9305204c5036f5a2b36341edab9a35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_865c29e817a3fb6940bee39c91dd3a967f09b3eef71e39aa689b6ce9b6335389 = $this->env->getExtension("native_profiler");
        $__internal_865c29e817a3fb6940bee39c91dd3a967f09b3eef71e39aa689b6ce9b6335389->enter($__internal_865c29e817a3fb6940bee39c91dd3a967f09b3eef71e39aa689b6ce9b6335389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_865c29e817a3fb6940bee39c91dd3a967f09b3eef71e39aa689b6ce9b6335389->leave($__internal_865c29e817a3fb6940bee39c91dd3a967f09b3eef71e39aa689b6ce9b6335389_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4922e7851e6fd7760b7e7607e46666287280cfe4376966d00aebbfdff40a1405 = $this->env->getExtension("native_profiler");
        $__internal_4922e7851e6fd7760b7e7607e46666287280cfe4376966d00aebbfdff40a1405->enter($__internal_4922e7851e6fd7760b7e7607e46666287280cfe4376966d00aebbfdff40a1405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4922e7851e6fd7760b7e7607e46666287280cfe4376966d00aebbfdff40a1405->leave($__internal_4922e7851e6fd7760b7e7607e46666287280cfe4376966d00aebbfdff40a1405_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

<?php

/* ::base.html.twig */
class __TwigTemplate_40bb1860d93a71c4c18442c55f92ee5b2634e9aa97f042869a7c1e063c88a3de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e86cd238b04592cd644b163e13fc324ee068c79e33c99cee4bb0c36edb35e521 = $this->env->getExtension("native_profiler");
        $__internal_e86cd238b04592cd644b163e13fc324ee068c79e33c99cee4bb0c36edb35e521->enter($__internal_e86cd238b04592cd644b163e13fc324ee068c79e33c99cee4bb0c36edb35e521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e86cd238b04592cd644b163e13fc324ee068c79e33c99cee4bb0c36edb35e521->leave($__internal_e86cd238b04592cd644b163e13fc324ee068c79e33c99cee4bb0c36edb35e521_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_353f0fd0cf94a2cf82c92d53dabdd210ce2a668ab20112d88486825d0de9fb37 = $this->env->getExtension("native_profiler");
        $__internal_353f0fd0cf94a2cf82c92d53dabdd210ce2a668ab20112d88486825d0de9fb37->enter($__internal_353f0fd0cf94a2cf82c92d53dabdd210ce2a668ab20112d88486825d0de9fb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_353f0fd0cf94a2cf82c92d53dabdd210ce2a668ab20112d88486825d0de9fb37->leave($__internal_353f0fd0cf94a2cf82c92d53dabdd210ce2a668ab20112d88486825d0de9fb37_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce20079986aee79896b3f36a642eceb7650e0b9db3e0f47dc6c43970feba9ff8 = $this->env->getExtension("native_profiler");
        $__internal_ce20079986aee79896b3f36a642eceb7650e0b9db3e0f47dc6c43970feba9ff8->enter($__internal_ce20079986aee79896b3f36a642eceb7650e0b9db3e0f47dc6c43970feba9ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce20079986aee79896b3f36a642eceb7650e0b9db3e0f47dc6c43970feba9ff8->leave($__internal_ce20079986aee79896b3f36a642eceb7650e0b9db3e0f47dc6c43970feba9ff8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2e16dc1a85b8b031ad3b36cc772b8609c4637eec607bb37cc7133cf9e94fad9 = $this->env->getExtension("native_profiler");
        $__internal_c2e16dc1a85b8b031ad3b36cc772b8609c4637eec607bb37cc7133cf9e94fad9->enter($__internal_c2e16dc1a85b8b031ad3b36cc772b8609c4637eec607bb37cc7133cf9e94fad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2e16dc1a85b8b031ad3b36cc772b8609c4637eec607bb37cc7133cf9e94fad9->leave($__internal_c2e16dc1a85b8b031ad3b36cc772b8609c4637eec607bb37cc7133cf9e94fad9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60005d1e6be4120e98561a6254f74b9e4e79096c4ecb4ecd610b1bef35dc7d41 = $this->env->getExtension("native_profiler");
        $__internal_60005d1e6be4120e98561a6254f74b9e4e79096c4ecb4ecd610b1bef35dc7d41->enter($__internal_60005d1e6be4120e98561a6254f74b9e4e79096c4ecb4ecd610b1bef35dc7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60005d1e6be4120e98561a6254f74b9e4e79096c4ecb4ecd610b1bef35dc7d41->leave($__internal_60005d1e6be4120e98561a6254f74b9e4e79096c4ecb4ecd610b1bef35dc7d41_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

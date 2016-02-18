<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_05554b346259eb8a018b97033aef7744854288de0103cc53963b5bdec2b3a53e extends Twig_Template
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
        $__internal_316c644323fa5ca1ecb6726f2b242c7d4a098abd2a2600c97df5fcd5c2cbe331 = $this->env->getExtension("native_profiler");
        $__internal_316c644323fa5ca1ecb6726f2b242c7d4a098abd2a2600c97df5fcd5c2cbe331->enter($__internal_316c644323fa5ca1ecb6726f2b242c7d4a098abd2a2600c97df5fcd5c2cbe331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_316c644323fa5ca1ecb6726f2b242c7d4a098abd2a2600c97df5fcd5c2cbe331->leave($__internal_316c644323fa5ca1ecb6726f2b242c7d4a098abd2a2600c97df5fcd5c2cbe331_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */

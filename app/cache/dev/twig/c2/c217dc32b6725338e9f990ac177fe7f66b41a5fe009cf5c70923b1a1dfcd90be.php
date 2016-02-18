<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_86224e70927852f491a01f84748e848139ad0fd0f9558166f226c03de9ce3dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2551cc3b8182fab9db251c9f6136439b5e8040fba3e89a3469fb751ef561c165 = $this->env->getExtension("native_profiler");
        $__internal_2551cc3b8182fab9db251c9f6136439b5e8040fba3e89a3469fb751ef561c165->enter($__internal_2551cc3b8182fab9db251c9f6136439b5e8040fba3e89a3469fb751ef561c165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2551cc3b8182fab9db251c9f6136439b5e8040fba3e89a3469fb751ef561c165->leave($__internal_2551cc3b8182fab9db251c9f6136439b5e8040fba3e89a3469fb751ef561c165_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6697e0ba08f0c7f592b8c0c6626ef992ab8577a1f27c06ae1b0fda7a18c56285 = $this->env->getExtension("native_profiler");
        $__internal_6697e0ba08f0c7f592b8c0c6626ef992ab8577a1f27c06ae1b0fda7a18c56285->enter($__internal_6697e0ba08f0c7f592b8c0c6626ef992ab8577a1f27c06ae1b0fda7a18c56285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6697e0ba08f0c7f592b8c0c6626ef992ab8577a1f27c06ae1b0fda7a18c56285->leave($__internal_6697e0ba08f0c7f592b8c0c6626ef992ab8577a1f27c06ae1b0fda7a18c56285_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

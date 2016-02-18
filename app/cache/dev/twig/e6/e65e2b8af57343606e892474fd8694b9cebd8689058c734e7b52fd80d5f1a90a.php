<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f1c1c3ed17c22d877226e186337a3376739e93cd9a884f05043b948765c806bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c89f28714843fbfd9b758e5861687f5ec7480023ceb821ee43b867b59d5d8907 = $this->env->getExtension("native_profiler");
        $__internal_c89f28714843fbfd9b758e5861687f5ec7480023ceb821ee43b867b59d5d8907->enter($__internal_c89f28714843fbfd9b758e5861687f5ec7480023ceb821ee43b867b59d5d8907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c89f28714843fbfd9b758e5861687f5ec7480023ceb821ee43b867b59d5d8907->leave($__internal_c89f28714843fbfd9b758e5861687f5ec7480023ceb821ee43b867b59d5d8907_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_700be1c2535cf8f9b09e6100c4694b3125e4644730d393f98383341a38c080ac = $this->env->getExtension("native_profiler");
        $__internal_700be1c2535cf8f9b09e6100c4694b3125e4644730d393f98383341a38c080ac->enter($__internal_700be1c2535cf8f9b09e6100c4694b3125e4644730d393f98383341a38c080ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_700be1c2535cf8f9b09e6100c4694b3125e4644730d393f98383341a38c080ac->leave($__internal_700be1c2535cf8f9b09e6100c4694b3125e4644730d393f98383341a38c080ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8fd1aa942cb88b305c20979e14bce72f72f23378ae48a10ac649a4fdfef3b80 = $this->env->getExtension("native_profiler");
        $__internal_f8fd1aa942cb88b305c20979e14bce72f72f23378ae48a10ac649a4fdfef3b80->enter($__internal_f8fd1aa942cb88b305c20979e14bce72f72f23378ae48a10ac649a4fdfef3b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8fd1aa942cb88b305c20979e14bce72f72f23378ae48a10ac649a4fdfef3b80->leave($__internal_f8fd1aa942cb88b305c20979e14bce72f72f23378ae48a10ac649a4fdfef3b80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af1b00235e90268a46ebda0b5e24e36162a15590684361048a881de30153f149 = $this->env->getExtension("native_profiler");
        $__internal_af1b00235e90268a46ebda0b5e24e36162a15590684361048a881de30153f149->enter($__internal_af1b00235e90268a46ebda0b5e24e36162a15590684361048a881de30153f149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af1b00235e90268a46ebda0b5e24e36162a15590684361048a881de30153f149->leave($__internal_af1b00235e90268a46ebda0b5e24e36162a15590684361048a881de30153f149_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

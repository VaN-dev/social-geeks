<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc692b0a7f4bb2d2f0d7f7704f51ba89e19a67f2d605cf31ece2bd638d1ff42d extends Twig_Template
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
        $__internal_c8588b843a7e4779aaf4434b3f974166afab1625328c4aa1123a7c35059f8717 = $this->env->getExtension("native_profiler");
        $__internal_c8588b843a7e4779aaf4434b3f974166afab1625328c4aa1123a7c35059f8717->enter($__internal_c8588b843a7e4779aaf4434b3f974166afab1625328c4aa1123a7c35059f8717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8588b843a7e4779aaf4434b3f974166afab1625328c4aa1123a7c35059f8717->leave($__internal_c8588b843a7e4779aaf4434b3f974166afab1625328c4aa1123a7c35059f8717_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f035fb3390ceec244c1eeab0d0e50aca655a7c14a8615f160533830b2fb5fc3a = $this->env->getExtension("native_profiler");
        $__internal_f035fb3390ceec244c1eeab0d0e50aca655a7c14a8615f160533830b2fb5fc3a->enter($__internal_f035fb3390ceec244c1eeab0d0e50aca655a7c14a8615f160533830b2fb5fc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f035fb3390ceec244c1eeab0d0e50aca655a7c14a8615f160533830b2fb5fc3a->leave($__internal_f035fb3390ceec244c1eeab0d0e50aca655a7c14a8615f160533830b2fb5fc3a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96edf14677795db12a2d82fec9d8d2e72a06bf13aa11e5b1c962f058e963f087 = $this->env->getExtension("native_profiler");
        $__internal_96edf14677795db12a2d82fec9d8d2e72a06bf13aa11e5b1c962f058e963f087->enter($__internal_96edf14677795db12a2d82fec9d8d2e72a06bf13aa11e5b1c962f058e963f087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96edf14677795db12a2d82fec9d8d2e72a06bf13aa11e5b1c962f058e963f087->leave($__internal_96edf14677795db12a2d82fec9d8d2e72a06bf13aa11e5b1c962f058e963f087_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51508cd1b427823fbdf42237fb156935fefba33be6a8030b5d92207869913fd2 = $this->env->getExtension("native_profiler");
        $__internal_51508cd1b427823fbdf42237fb156935fefba33be6a8030b5d92207869913fd2->enter($__internal_51508cd1b427823fbdf42237fb156935fefba33be6a8030b5d92207869913fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51508cd1b427823fbdf42237fb156935fefba33be6a8030b5d92207869913fd2->leave($__internal_51508cd1b427823fbdf42237fb156935fefba33be6a8030b5d92207869913fd2_prof);

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

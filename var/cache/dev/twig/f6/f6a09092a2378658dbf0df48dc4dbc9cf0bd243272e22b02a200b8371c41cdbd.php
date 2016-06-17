<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2abd5e0fcc3e9e664a747487b552fcb2963f7c58d50f064100c3a9f5de6cdacb extends Twig_Template
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
        $__internal_07eff14a55c2bdfef4a6758304458863e5611cc7c83818e409de8c30db56711c = $this->env->getExtension("native_profiler");
        $__internal_07eff14a55c2bdfef4a6758304458863e5611cc7c83818e409de8c30db56711c->enter($__internal_07eff14a55c2bdfef4a6758304458863e5611cc7c83818e409de8c30db56711c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07eff14a55c2bdfef4a6758304458863e5611cc7c83818e409de8c30db56711c->leave($__internal_07eff14a55c2bdfef4a6758304458863e5611cc7c83818e409de8c30db56711c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf8ca848f7829a2e2178f67faa98f031ac5bf18c67a10b79571b6b97d70a5dd0 = $this->env->getExtension("native_profiler");
        $__internal_bf8ca848f7829a2e2178f67faa98f031ac5bf18c67a10b79571b6b97d70a5dd0->enter($__internal_bf8ca848f7829a2e2178f67faa98f031ac5bf18c67a10b79571b6b97d70a5dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf8ca848f7829a2e2178f67faa98f031ac5bf18c67a10b79571b6b97d70a5dd0->leave($__internal_bf8ca848f7829a2e2178f67faa98f031ac5bf18c67a10b79571b6b97d70a5dd0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b46f68fbf1b13ec7ea40c244bb08d2e778a9a64aa74eefea5da88cb03f29efc = $this->env->getExtension("native_profiler");
        $__internal_3b46f68fbf1b13ec7ea40c244bb08d2e778a9a64aa74eefea5da88cb03f29efc->enter($__internal_3b46f68fbf1b13ec7ea40c244bb08d2e778a9a64aa74eefea5da88cb03f29efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b46f68fbf1b13ec7ea40c244bb08d2e778a9a64aa74eefea5da88cb03f29efc->leave($__internal_3b46f68fbf1b13ec7ea40c244bb08d2e778a9a64aa74eefea5da88cb03f29efc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_679700db5f137283dee8a692a9e143ebe8ad35cb70032529ba8df69c7fd66f18 = $this->env->getExtension("native_profiler");
        $__internal_679700db5f137283dee8a692a9e143ebe8ad35cb70032529ba8df69c7fd66f18->enter($__internal_679700db5f137283dee8a692a9e143ebe8ad35cb70032529ba8df69c7fd66f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_679700db5f137283dee8a692a9e143ebe8ad35cb70032529ba8df69c7fd66f18->leave($__internal_679700db5f137283dee8a692a9e143ebe8ad35cb70032529ba8df69c7fd66f18_prof);

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

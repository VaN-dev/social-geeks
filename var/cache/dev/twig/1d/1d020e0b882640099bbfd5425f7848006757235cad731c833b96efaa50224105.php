<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3e9a16afd570741970bc257af6cca30a8809a9f90bccdf2edeaeded5b2a2c757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_946a355537cc5eebc51657d30a966a45e7d21b213aba09e63a17a30b061ec2c0 = $this->env->getExtension("native_profiler");
        $__internal_946a355537cc5eebc51657d30a966a45e7d21b213aba09e63a17a30b061ec2c0->enter($__internal_946a355537cc5eebc51657d30a966a45e7d21b213aba09e63a17a30b061ec2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_946a355537cc5eebc51657d30a966a45e7d21b213aba09e63a17a30b061ec2c0->leave($__internal_946a355537cc5eebc51657d30a966a45e7d21b213aba09e63a17a30b061ec2c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7483bd6554dfaa4e6e8905fd789244e60df822907a3ef02f7e9cfdca8d8f6158 = $this->env->getExtension("native_profiler");
        $__internal_7483bd6554dfaa4e6e8905fd789244e60df822907a3ef02f7e9cfdca8d8f6158->enter($__internal_7483bd6554dfaa4e6e8905fd789244e60df822907a3ef02f7e9cfdca8d8f6158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7483bd6554dfaa4e6e8905fd789244e60df822907a3ef02f7e9cfdca8d8f6158->leave($__internal_7483bd6554dfaa4e6e8905fd789244e60df822907a3ef02f7e9cfdca8d8f6158_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3da2480375c7cc18ec44dab6b4f14af8494c00b2f89afcc66b66b43ffa362aea = $this->env->getExtension("native_profiler");
        $__internal_3da2480375c7cc18ec44dab6b4f14af8494c00b2f89afcc66b66b43ffa362aea->enter($__internal_3da2480375c7cc18ec44dab6b4f14af8494c00b2f89afcc66b66b43ffa362aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3da2480375c7cc18ec44dab6b4f14af8494c00b2f89afcc66b66b43ffa362aea->leave($__internal_3da2480375c7cc18ec44dab6b4f14af8494c00b2f89afcc66b66b43ffa362aea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cbf134f8c1aac11bef2b51f78cbcd284d35e1d36bb6e96e590f690b227a294d = $this->env->getExtension("native_profiler");
        $__internal_9cbf134f8c1aac11bef2b51f78cbcd284d35e1d36bb6e96e590f690b227a294d->enter($__internal_9cbf134f8c1aac11bef2b51f78cbcd284d35e1d36bb6e96e590f690b227a294d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9cbf134f8c1aac11bef2b51f78cbcd284d35e1d36bb6e96e590f690b227a294d->leave($__internal_9cbf134f8c1aac11bef2b51f78cbcd284d35e1d36bb6e96e590f690b227a294d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

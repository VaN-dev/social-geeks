<?php

/* @VanBookmark/Default/form.html.twig */
class __TwigTemplate_9e5a09cf79b6ec691c2a84b9cf08f63579c3f3f49860769c468ffa9e97d8edc7 extends Twig_Template
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
        $__internal_8615d852404a5070d36f1caff6f7056421b1855f6ab9fa92a6a741e10db9b43f = $this->env->getExtension("native_profiler");
        $__internal_8615d852404a5070d36f1caff6f7056421b1855f6ab9fa92a6a741e10db9b43f->enter($__internal_8615d852404a5070d36f1caff6f7056421b1855f6ab9fa92a6a741e10db9b43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VanBookmark/Default/form.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_8615d852404a5070d36f1caff6f7056421b1855f6ab9fa92a6a741e10db9b43f->leave($__internal_8615d852404a5070d36f1caff6f7056421b1855f6ab9fa92a6a741e10db9b43f_prof);

    }

    public function getTemplateName()
    {
        return "@VanBookmark/Default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/* */
/*     <button type="submit" class="btn btn-primary">Submit</button>*/
/* {{ form_end(form) }}*/

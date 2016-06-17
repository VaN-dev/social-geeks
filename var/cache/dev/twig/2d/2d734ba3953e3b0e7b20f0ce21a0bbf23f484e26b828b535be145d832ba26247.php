<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e8c3be7b41ab13781923a82d8b67e95da77a8acf218616e8ce9daff14fb2c642 extends Twig_Template
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
        $__internal_7b44d399fca03dd00bbf28bed290c47ad8d21dc37d4c556c8b9c45d8f7307914 = $this->env->getExtension("native_profiler");
        $__internal_7b44d399fca03dd00bbf28bed290c47ad8d21dc37d4c556c8b9c45d8f7307914->enter($__internal_7b44d399fca03dd00bbf28bed290c47ad8d21dc37d4c556c8b9c45d8f7307914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b44d399fca03dd00bbf28bed290c47ad8d21dc37d4c556c8b9c45d8f7307914->leave($__internal_7b44d399fca03dd00bbf28bed290c47ad8d21dc37d4c556c8b9c45d8f7307914_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d9f42e068060d2ed79d4172a33fe2913136d5acae0850256bfc90aea6e524ac = $this->env->getExtension("native_profiler");
        $__internal_3d9f42e068060d2ed79d4172a33fe2913136d5acae0850256bfc90aea6e524ac->enter($__internal_3d9f42e068060d2ed79d4172a33fe2913136d5acae0850256bfc90aea6e524ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d9f42e068060d2ed79d4172a33fe2913136d5acae0850256bfc90aea6e524ac->leave($__internal_3d9f42e068060d2ed79d4172a33fe2913136d5acae0850256bfc90aea6e524ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a4b1d7a7f2941a9fbce69129c57392112c7f6a82ec57ac841b582fcb8ce7d8e = $this->env->getExtension("native_profiler");
        $__internal_4a4b1d7a7f2941a9fbce69129c57392112c7f6a82ec57ac841b582fcb8ce7d8e->enter($__internal_4a4b1d7a7f2941a9fbce69129c57392112c7f6a82ec57ac841b582fcb8ce7d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a4b1d7a7f2941a9fbce69129c57392112c7f6a82ec57ac841b582fcb8ce7d8e->leave($__internal_4a4b1d7a7f2941a9fbce69129c57392112c7f6a82ec57ac841b582fcb8ce7d8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2752e32bc1399f02683018080fb1decc2bb677b9dac8c2f3eb23735eed033116 = $this->env->getExtension("native_profiler");
        $__internal_2752e32bc1399f02683018080fb1decc2bb677b9dac8c2f3eb23735eed033116->enter($__internal_2752e32bc1399f02683018080fb1decc2bb677b9dac8c2f3eb23735eed033116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2752e32bc1399f02683018080fb1decc2bb677b9dac8c2f3eb23735eed033116->leave($__internal_2752e32bc1399f02683018080fb1decc2bb677b9dac8c2f3eb23735eed033116_prof);

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

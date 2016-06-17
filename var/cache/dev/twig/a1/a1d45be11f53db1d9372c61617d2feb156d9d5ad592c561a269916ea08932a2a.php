<?php

/* @App/Default/index.html.twig */
class __TwigTemplate_3ee117625209f0cd9dc738f6cf82cd09abce5fd8e9fc41a650ce0ed152d98347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/layout-cleanzone.html.twig", "@App/Default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/layout-cleanzone.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f33485afca1e668ceb1698c803be49429235c6d8f39f83710857fff8004851d7 = $this->env->getExtension("native_profiler");
        $__internal_f33485afca1e668ceb1698c803be49429235c6d8f39f83710857fff8004851d7->enter($__internal_f33485afca1e668ceb1698c803be49429235c6d8f39f83710857fff8004851d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f33485afca1e668ceb1698c803be49429235c6d8f39f83710857fff8004851d7->leave($__internal_f33485afca1e668ceb1698c803be49429235c6d8f39f83710857fff8004851d7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_90de70134862f69c48925c6df91215baded62e11f566befd7647998d310e7d44 = $this->env->getExtension("native_profiler");
        $__internal_90de70134862f69c48925c6df91215baded62e11f566befd7647998d310e7d44->enter($__internal_90de70134862f69c48925c6df91215baded62e11f566befd7647998d310e7d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-head\">
        <h2>Blank Page</h2>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">Home</a>
            </li>
            <li>
                <a href=\"#\">Category</a>
            </li>
            <li class=\"active\">Sub Category</li>
        </ol>
    </div>
    <div class=\"cl-mcont\">
        <div class=\"row\">
            <div class=\"col-md-9\">

                <div class=\"block-flat\">
                    <div class=\"header\">
                        <h2 class=\"title\">Timeline</h2>
                    </div>
                    <div class=\"content\">
                        <p>
                            Lorem ipsum
                        </p>
                    </div>
                </div>

            </div>
            <div class=\"col-md-3\"></div>
        </div>
    </div>

";
        
        $__internal_90de70134862f69c48925c6df91215baded62e11f566befd7647998d310e7d44->leave($__internal_90de70134862f69c48925c6df91215baded62e11f566befd7647998d310e7d44_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@App/layout-cleanzone.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="page-head">*/
/*         <h2>Blank Page</h2>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <a href="#">Home</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#">Category</a>*/
/*             </li>*/
/*             <li class="active">Sub Category</li>*/
/*         </ol>*/
/*     </div>*/
/*     <div class="cl-mcont">*/
/*         <div class="row">*/
/*             <div class="col-md-9">*/
/* */
/*                 <div class="block-flat">*/
/*                     <div class="header">*/
/*                         <h2 class="title">Timeline</h2>*/
/*                     </div>*/
/*                     <div class="content">*/
/*                         <p>*/
/*                             Lorem ipsum*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-3"></div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/

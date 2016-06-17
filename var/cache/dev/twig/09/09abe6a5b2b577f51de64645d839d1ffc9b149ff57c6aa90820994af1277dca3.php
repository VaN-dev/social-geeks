<?php

/* @App/Default/index.html.twig */
class __TwigTemplate_108ac08399a707a357cee9d1feab6d60dfacab3f7f8c9b5025e3aedda92f6d86 extends Twig_Template
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
        $__internal_5ff556dd56a82c310fed2a9ddc23d86efa786904fd5350a07f7b787fabec1943 = $this->env->getExtension("native_profiler");
        $__internal_5ff556dd56a82c310fed2a9ddc23d86efa786904fd5350a07f7b787fabec1943->enter($__internal_5ff556dd56a82c310fed2a9ddc23d86efa786904fd5350a07f7b787fabec1943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff556dd56a82c310fed2a9ddc23d86efa786904fd5350a07f7b787fabec1943->leave($__internal_5ff556dd56a82c310fed2a9ddc23d86efa786904fd5350a07f7b787fabec1943_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6cd78580455c9fd816ab31aa0d489ade1b36d5a516630d50b4a3d3be73c4e85f = $this->env->getExtension("native_profiler");
        $__internal_6cd78580455c9fd816ab31aa0d489ade1b36d5a516630d50b4a3d3be73c4e85f->enter($__internal_6cd78580455c9fd816ab31aa0d489ade1b36d5a516630d50b4a3d3be73c4e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6cd78580455c9fd816ab31aa0d489ade1b36d5a516630d50b4a3d3be73c4e85f->leave($__internal_6cd78580455c9fd816ab31aa0d489ade1b36d5a516630d50b4a3d3be73c4e85f_prof);

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

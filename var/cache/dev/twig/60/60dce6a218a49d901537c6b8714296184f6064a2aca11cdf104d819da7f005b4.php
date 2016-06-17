<?php

/* VanBookmarkBundle:Default:update.html.twig */
class __TwigTemplate_9dd8d5e1b81c9425b3068bf22e6e969addf0819f6cf42ea8cc91c5b2c331b875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "VanBookmarkBundle:Default:update.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfbb6627a3cf4b6dfe81ad52e793b05c22d3a4f4a40771e96a145387f88ff0e7 = $this->env->getExtension("native_profiler");
        $__internal_cfbb6627a3cf4b6dfe81ad52e793b05c22d3a4f4a40771e96a145387f88ff0e7->enter($__internal_cfbb6627a3cf4b6dfe81ad52e793b05c22d3a4f4a40771e96a145387f88ff0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VanBookmarkBundle:Default:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbb6627a3cf4b6dfe81ad52e793b05c22d3a4f4a40771e96a145387f88ff0e7->leave($__internal_cfbb6627a3cf4b6dfe81ad52e793b05c22d3a4f4a40771e96a145387f88ff0e7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bfc9922ff45be2bf4a01061165a8510b0093fd7fe88a4fb32b4c3cd3129a7b1c = $this->env->getExtension("native_profiler");
        $__internal_bfc9922ff45be2bf4a01061165a8510b0093fd7fe88a4fb32b4c3cd3129a7b1c->enter($__internal_bfc9922ff45be2bf4a01061165a8510b0093fd7fe88a4fb32b4c3cd3129a7b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"container\">

        <div class=\"page-header\">
            <h3 class=\"page-title\">My bookmarks</h3>

            <ol class=\"breadcrumb\">
                <li><a href=\"./\">Dashboard</a></li>
                <li class=\"active\">My bookmarks</li>
            </ol>
        </div> <!-- /.page-header -->

        <div class=\"row\">

            <div class=\"col-sm-12\">

                <div class=\"portlet portlet-boxed\">

                    <div class=\"portlet-body\">

                        <h5>Update a bookmark</h5>

                        ";
        // line 26
        $this->loadTemplate("@VanBookmark/Default/form.html.twig", "VanBookmarkBundle:Default:update.html.twig", 26)->display($context);
        // line 27
        echo "
                    </div> <!-- /.portlet-body -->

                </div> <!-- /.portlet -->

            </div> <!-- /.col -->

        </div> <!-- /.row -->

    </div>
";
        
        $__internal_bfc9922ff45be2bf4a01061165a8510b0093fd7fe88a4fb32b4c3cd3129a7b1c->leave($__internal_bfc9922ff45be2bf4a01061165a8510b0093fd7fe88a4fb32b4c3cd3129a7b1c_prof);

    }

    public function getTemplateName()
    {
        return "VanBookmarkBundle:Default:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  64 => 26,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@App/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="page-header">*/
/*             <h3 class="page-title">My bookmarks</h3>*/
/* */
/*             <ol class="breadcrumb">*/
/*                 <li><a href="./">Dashboard</a></li>*/
/*                 <li class="active">My bookmarks</li>*/
/*             </ol>*/
/*         </div> <!-- /.page-header -->*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-sm-12">*/
/* */
/*                 <div class="portlet portlet-boxed">*/
/* */
/*                     <div class="portlet-body">*/
/* */
/*                         <h5>Update a bookmark</h5>*/
/* */
/*                         {% include '@VanBookmark/Default/form.html.twig' %}*/
/* */
/*                     </div> <!-- /.portlet-body -->*/
/* */
/*                 </div> <!-- /.portlet -->*/
/* */
/*             </div> <!-- /.col -->*/
/* */
/*         </div> <!-- /.row -->*/
/* */
/*     </div>*/
/* {% endblock content %}*/

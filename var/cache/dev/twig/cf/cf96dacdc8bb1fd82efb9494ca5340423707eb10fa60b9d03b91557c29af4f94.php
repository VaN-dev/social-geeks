<?php

/* @App/sidebar.html.twig */
class __TwigTemplate_cfba9d7d9d3da96b4a1577f80b0aa7add8a7f0a3c8fcbfa74e11475c72601f96 extends Twig_Template
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
        $__internal_d28a761779a12ba8c1954ae270497d975e1f8328750a996190e30658db12c322 = $this->env->getExtension("native_profiler");
        $__internal_d28a761779a12ba8c1954ae270497d975e1f8328750a996190e30658db12c322->enter($__internal_d28a761779a12ba8c1954ae270497d975e1f8328750a996190e30658db12c322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar\">

    <div class=\"sidebar-bg\"></div><!-- /.sidebar-bg -->

    <div class=\"sidebar-trigger sidebar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
        <i class=\"fa fa-bars\"></i>
    </div><!-- /.sidebar-trigger -->

    <div style=\"position: relative; overflow: hidden; width: auto; height: 100%;\" class=\"slimScrollDiv\">
        <div style=\"overflow: hidden; width: auto; height: 100%;\" class=\"sidebar-inner sidebar-collapse collapse\">

            <ul class=\"sidebar-menu\">

                <li class=\"sidebar-header\">
                    Menu 1
                </li>

                <li class=\"active\">
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("van_bookmarks");
        echo "\">
                        <i class=\"fa fa-dashboard\"></i>
                        Bookmarks
                    </a>
                </li>

                <li class=\"divider\"></li>

                <li class=\"sidebar-header\">
                    Menu 2
                </li>

                <li class=\"dropdown has_sub \">

                    <a href=\"http://jumpstartthemes.com/#\" class=\"\">
                        <i class=\"fa fa-edit\"></i>

                        Menu 2.1

                        <span class=\"\">
                          <i class=\"fa fa-angle-right pull-right\"></i>
                        </span>
                    </a>

                    <ul class=\"list-unstyled\" style=\"\">
                        <li>
                            <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/form-basic.html\">
                                Menu 2.1.1
                            </a>
                        </li>

                        <li>
                            <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/form-pickers.html\">
                                Menu 2.1.2 <span class=\"label label-secondary pull-right\">New</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"divider\"></li>

                <li class=\"sidebar-header\">
                    Menu 3
                </li>

                <li class=\"dropdown has_sub \">
                    <a href=\"http://jumpstartthemes.com/#\" class=\"\">
                        <i class=\"fa fa-file-text-o\"></i>
                        Menu 3.1
                    </a>
                </li>

            </ul>

            <div class=\"clearfix\"></div>

        </div>
        <div style=\"background: rgb(136, 136, 136) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 864px;\" class=\"slimScrollBar\"></div>
        <div style=\"width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;\" class=\"slimScrollRail\"></div>
    </div><!-- /.sidebar-inner -->

</div> <!-- /.side-menu -->";
        
        $__internal_d28a761779a12ba8c1954ae270497d975e1f8328750a996190e30658db12c322->leave($__internal_d28a761779a12ba8c1954ae270497d975e1f8328750a996190e30658db12c322_prof);

    }

    public function getTemplateName()
    {
        return "@App/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  22 => 1,);
    }
}
/* <div class="sidebar">*/
/* */
/*     <div class="sidebar-bg"></div><!-- /.sidebar-bg -->*/
/* */
/*     <div class="sidebar-trigger sidebar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">*/
/*         <i class="fa fa-bars"></i>*/
/*     </div><!-- /.sidebar-trigger -->*/
/* */
/*     <div style="position: relative; overflow: hidden; width: auto; height: 100%;" class="slimScrollDiv">*/
/*         <div style="overflow: hidden; width: auto; height: 100%;" class="sidebar-inner sidebar-collapse collapse">*/
/* */
/*             <ul class="sidebar-menu">*/
/* */
/*                 <li class="sidebar-header">*/
/*                     Menu 1*/
/*                 </li>*/
/* */
/*                 <li class="active">*/
/*                     <a href="{{ path("van_bookmarks") }}">*/
/*                         <i class="fa fa-dashboard"></i>*/
/*                         Bookmarks*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <li class="divider"></li>*/
/* */
/*                 <li class="sidebar-header">*/
/*                     Menu 2*/
/*                 </li>*/
/* */
/*                 <li class="dropdown has_sub ">*/
/* */
/*                     <a href="http://jumpstartthemes.com/#" class="">*/
/*                         <i class="fa fa-edit"></i>*/
/* */
/*                         Menu 2.1*/
/* */
/*                         <span class="">*/
/*                           <i class="fa fa-angle-right pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/* */
/*                     <ul class="list-unstyled" style="">*/
/*                         <li>*/
/*                             <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/form-basic.html">*/
/*                                 Menu 2.1.1*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         <li>*/
/*                             <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/form-pickers.html">*/
/*                                 Menu 2.1.2 <span class="label label-secondary pull-right">New</span>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/* */
/*                 <li class="divider"></li>*/
/* */
/*                 <li class="sidebar-header">*/
/*                     Menu 3*/
/*                 </li>*/
/* */
/*                 <li class="dropdown has_sub ">*/
/*                     <a href="http://jumpstartthemes.com/#" class="">*/
/*                         <i class="fa fa-file-text-o"></i>*/
/*                         Menu 3.1*/
/*                     </a>*/
/*                 </li>*/
/* */
/*             </ul>*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*         </div>*/
/*         <div style="background: rgb(136, 136, 136) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 864px;" class="slimScrollBar"></div>*/
/*         <div style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div>*/
/*     </div><!-- /.sidebar-inner -->*/
/* */
/* </div> <!-- /.side-menu -->*/

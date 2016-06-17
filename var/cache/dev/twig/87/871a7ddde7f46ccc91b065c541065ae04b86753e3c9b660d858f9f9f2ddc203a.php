<?php

/* @App/topbar.html.twig */
class __TwigTemplate_7e13d56532e29eed831117bac826fffc75d320661a7b45401763d330b5b3ea5c extends Twig_Template
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
        $__internal_6b01ad2002cc6f38faa20bf3f80a876dca5e0c45ccd42941e240e04037afb0fc = $this->env->getExtension("native_profiler");
        $__internal_6b01ad2002cc6f38faa20bf3f80a876dca5e0c45ccd42941e240e04037afb0fc->enter($__internal_6b01ad2002cc6f38faa20bf3f80a876dca5e0c45ccd42941e240e04037afb0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/topbar.html.twig"));

        // line 1
        echo "<div class=\"navbar navbar-default\" role=\"navigation\">

    <div class=\"container\">

        <div class=\"navbar-header\">
            <div class=\"navbar-brand\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"logo\">
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>

            <button class=\"navbar-toggle pull-right\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <i class=\"fa fa-cog\"></i>
            </button>
        </div><!-- /.navbar-header -->

        <div class=\"navbar-collapse collapse\">

            <form class=\"navbar-form navbar-search-form navbar-left\">
                <div class=\"form-group\">
                    <input kl_virtual_keyboard_secure_input=\"on\" class=\"form-control navbar-search-field\" placeholder=\"Type here for search...\" type=\"text\">
                </div>
            </form>

            <ul class=\"nav navbar-nav navbar-right\">

                <li class=\"divider\"></li>

                <li class=\"dropdown navbar-profile\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" href=\"javascript:;\">
                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-6-sm.jpg"), "html", null, true);
        echo "\" class=\"navbar-profile-avatar\" alt=\"\">
                        <span class=\"visible-xs-inline\">@peterlandt &nbsp;</span>
                        <i class=\"fa fa-caret-down\"></i>
                    </a>

                    <ul class=\"dropdown-menu\" role=\"menu\">

                        <li>
                            <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-profile.html\">
                                <i class=\"fa fa-user\"></i>
                                &nbsp;&nbsp;My Profile
                            </a>
                        </li>

                        <li class=\"divider\"></li>

                        <li>
                            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                                <i class=\"fa fa-sign-out\"></i>
                                &nbsp;&nbsp;Logout
                            </a>
                        </li>

                    </ul>

                </li>

            </ul>

            <ul class=\"nav navbar-nav navbar-right\">

                <li class=\"dropdown\">

                    <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\">
                        Hello ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo "&nbsp;
                        <i class=\"fa fa-caret-down\"></i>
                    </a>

                    <ul class=\"dropdown-menu mega-menu-2\" role=\"menu\">

                        <li>
                            <div class=\"mega-menu-content\">

                                <div class=\"mega-menu-col\">

                                    <div class=\"demo-block\">
                                        <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-1/index.html\" class=\"demo-launcher\">
                                            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/theme-drop-admin-1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                                            View Admin Layout #1
                                        </a>

                                        <div class=\"demo-external\">
                                            <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-1/index.html\" target=\"_blank\"><small><i class=\"fa fa-external-link\"></i>&nbsp;&nbsp;(Open in new tab)</small></a>
                                        </div>
                                    </div><!-- /.demo-block -->

                                    <div class=\"demo-block\">
                                        <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/landing/index.html\" class=\"demo-launcher\">
                                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/theme-drop-landing.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                                            View Frontend Template
                                        </a>

                                        <div class=\"demo-external\">
                                            <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/landing/index.html\" target=\"_blank\"><small><i class=\"fa fa-external-link\"></i>&nbsp;&nbsp;(Open in new tab)</small></a>
                                        </div>
                                    </div><!-- /.demo-block -->
                                </div> <!-- /.mega-menu-col -->

                                <div class=\"mega-menu-col\">
                                    <div class=\"demo-block\">
                                        <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/index.html\" class=\"demo-launcher\">
                                            <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/theme-drop-admin-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                                            View Admin Layout #2
                                        </a>

                                        <div class=\"demo-external\">
                                            <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/index.html\" target=\"_blank\"><small><i class=\"fa fa-external-link\"></i>&nbsp;&nbsp;(Open in new tab)</small></a>
                                        </div>
                                    </div><!-- /.demo-block -->

                                    <div class=\"demo-block\">
                                        <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/launch/index.html\" class=\"demo-launcher\">
                                            <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/theme-drop-launch.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                                            View Launch Template
                                        </a>

                                        <div class=\"demo-external\">
                                            <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/launch/index.html\" target=\"_blank\"><small><i class=\"fa fa-external-link\"></i>&nbsp;&nbsp;(Open in new tab)</small></a>
                                        </div>
                                    </div><!-- /.demo-block -->
                                </div> <!-- /.mega-menu-col -->

                            </div> <!-- /.mega-menu-content -->
                        </li>

                    </ul>

                </li>

                <li class=\"navbar-divider\"></li><!-- /.navbar-divider -->

                <li class=\"dropdown navbar-notification\">

                    <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\">
                        <i class=\"fa fa-bell navbar-notification-icon\"></i>
                        <span class=\"visible-xs-inline\">&nbsp;Notifications</span>
                        <b class=\"badge badge-primary\">3</b>
                    </a>

                    <div class=\"dropdown-menu\">

                        <div class=\"dropdown-header\">&nbsp;Notifications</div>

                        <div style=\"position: relative; overflow: hidden; width: auto; height: 225px;\" class=\"slimScrollDiv\"><div style=\"overflow: hidden; width: auto; height: 225px;\" class=\"notification-list\">

                                <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification\">
                                    <span class=\"notification-icon\"><i class=\"fa fa-cloud-upload text-primary\"></i></span>
                                    <span class=\"notification-title\">Notification Title</span>
                                    <span class=\"notification-description\">Praesent dictum nisl non est sagittis luctus.</span>
                                    <span class=\"notification-time\">20 minutes ago</span>
                                </a> <!-- / .notification -->

                                <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification\">
                                    <span class=\"notification-icon\"><i class=\"fa fa-ban text-secondary\"></i></span>
                                    <span class=\"notification-title\">Notification Title</span>
                                    <span class=\"notification-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                                    <span class=\"notification-time\">20 minutes ago</span>
                                </a> <!-- / .notification -->

                                <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification\">
                                    <span class=\"notification-icon\"><i class=\"fa fa-warning text-tertiary\"></i></span>
                                    <span class=\"notification-title\">Storage Space Almost Full!</span>
                                    <span class=\"notification-description\">Praesent dictum nisl non est sagittis luctus.</span>
                                    <span class=\"notification-time\">20 minutes ago</span>
                                </a> <!-- / .notification -->

                                <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification\">
                                    <span class=\"notification-icon\"><i class=\"fa fa-ban text-danger\"></i></span>
                                    <span class=\"notification-title\">Sync Error</span>
                                    <span class=\"notification-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                                    <span class=\"notification-time\">20 minutes ago</span>
                                </a> <!-- / .notification -->

                            </div><div style=\"background: rgb(136, 136, 136) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;\" class=\"slimScrollBar\"></div><div style=\"width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;\" class=\"slimScrollRail\"></div></div> <!-- / .notification-list -->

                        <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification-link\">View All Notifications</a>

                    </div> <!-- / .dropdown-menu -->

                </li>



                <li class=\"dropdown navbar-notification\">

                    <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\">
                        <i class=\"fa fa-envelope navbar-notification-icon\"></i>
                        <span class=\"visible-xs-inline\">&nbsp;Messages</span>
                    </a>

                    <div class=\"dropdown-menu\">

                        <div class=\"dropdown-header\">Messages</div>

                        <div style=\"position: relative; overflow: hidden; width: auto; height: 225px;\" class=\"slimScrollDiv\"><div style=\"overflow: hidden; width: auto; height: 225px;\" class=\"notification-list\">

                                <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification\">
                                    <div class=\"notification-icon\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-3-md.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"notification-title\">New Message</div>
                                    <div class=\"notification-description\">Praesent dictum nisl non est sagittis luctus.</div>
                                    <div class=\"notification-time\">20 minutes ago</div>
                                </a> <!-- / .notification -->

                                <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification\">
                                    <div class=\"notification-icon\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-3-md.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"notification-title\">New Message</div>
                                    <div class=\"notification-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</div>
                                    <div class=\"notification-time\">20 minutes ago</div>
                                </a> <!-- / .notification -->

                                <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification\">
                                    <div class=\"notification-icon\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-4-md.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"notification-title\">New Message</div>
                                    <div class=\"notification-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</div>
                                    <div class=\"notification-time\">20 minutes ago</div>
                                </a> <!-- / .notification -->

                                <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification\">
                                    <div class=\"notification-icon\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar-5-md.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"notification-title\">New Message</div>
                                    <div class=\"notification-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</div>
                                    <div class=\"notification-time\">20 minutes ago</div>
                                </a> <!-- / .notification -->

                            </div><div style=\"background: rgb(136, 136, 136) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;\" class=\"slimScrollBar\"></div><div style=\"width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;\" class=\"slimScrollRail\"></div></div> <!-- / .notification-list -->

                        <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification-link\">View All Messages</a>

                    </div> <!-- / .dropdown-menu -->

                </li>


                <li class=\"dropdown navbar-notification empty\">

                    <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\">
                        <i class=\"fa fa-warning navbar-notification-icon\"></i>
                        <span class=\"visible-xs-inline\">&nbsp;&nbsp;Alerts</span>
                    </a>

                    <div class=\"dropdown-menu\">

                        <div class=\"dropdown-header\">Alerts</div>

                        <div style=\"position: relative; overflow: hidden; width: auto; height: 225px;\" class=\"slimScrollDiv\"><div style=\"overflow: hidden; width: auto; height: 225px;\" class=\"notification-list\">

                                <h4 class=\"notification-empty-title\">No alerts here.</h4>
                                <p class=\"notification-empty-text\">Check out what other makers are doing on Explore!</p>

                            </div><div style=\"background: rgb(136, 136, 136) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;\" class=\"slimScrollBar\"></div><div style=\"width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;\" class=\"slimScrollRail\"></div></div> <!-- / .notification-list -->

                        <a href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html\" class=\"notification-link\">View All Alerts</a>

                    </div> <!-- / .dropdown-menu -->

                </li>



                <li class=\"navbar-divider\"></li><!-- /.navbar-divider -->

            </ul>

        </div>

    </div> <!--/.container -->

</div> <!--/.navbar -->";
        
        $__internal_6b01ad2002cc6f38faa20bf3f80a876dca5e0c45ccd42941e240e04037afb0fc->leave($__internal_6b01ad2002cc6f38faa20bf3f80a876dca5e0c45ccd42941e240e04037afb0fc_prof);

    }

    public function getTemplateName()
    {
        return "@App/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 224,  273 => 217,  263 => 210,  253 => 203,  164 => 117,  149 => 105,  132 => 91,  117 => 79,  101 => 66,  81 => 49,  61 => 32,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <div class="navbar navbar-default" role="navigation">*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="navbar-header">*/
/*             <div class="navbar-brand">*/
/*                 <a href="{{ path("index") }}" class="logo">*/
/*                     <img src="{{ asset("images/logo.png") }}" alt="">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <button class="navbar-toggle pull-right" type="button" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <i class="fa fa-cog"></i>*/
/*             </button>*/
/*         </div><!-- /.navbar-header -->*/
/* */
/*         <div class="navbar-collapse collapse">*/
/* */
/*             <form class="navbar-form navbar-search-form navbar-left">*/
/*                 <div class="form-group">*/
/*                     <input kl_virtual_keyboard_secure_input="on" class="form-control navbar-search-field" placeholder="Type here for search..." type="text">*/
/*                 </div>*/
/*             </form>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/* */
/*                 <li class="divider"></li>*/
/* */
/*                 <li class="dropdown navbar-profile">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="javascript:;">*/
/*                         <img src="{{ asset("images/avatar-6-sm.jpg") }}" class="navbar-profile-avatar" alt="">*/
/*                         <span class="visible-xs-inline">@peterlandt &nbsp;</span>*/
/*                         <i class="fa fa-caret-down"></i>*/
/*                     </a>*/
/* */
/*                     <ul class="dropdown-menu" role="menu">*/
/* */
/*                         <li>*/
/*                             <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-profile.html">*/
/*                                 <i class="fa fa-user"></i>*/
/*                                 &nbsp;&nbsp;My Profile*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         <li class="divider"></li>*/
/* */
/*                         <li>*/
/*                             <a href="{{ path("logout") }}">*/
/*                                 <i class="fa fa-sign-out"></i>*/
/*                                 &nbsp;&nbsp;Logout*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/* */
/*                 </li>*/
/* */
/*             </ul>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/* */
/*                 <li class="dropdown">*/
/* */
/*                     <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">*/
/*                         Hello {{ app.user.firstname }}&nbsp;*/
/*                         <i class="fa fa-caret-down"></i>*/
/*                     </a>*/
/* */
/*                     <ul class="dropdown-menu mega-menu-2" role="menu">*/
/* */
/*                         <li>*/
/*                             <div class="mega-menu-content">*/
/* */
/*                                 <div class="mega-menu-col">*/
/* */
/*                                     <div class="demo-block">*/
/*                                         <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-1/index.html" class="demo-launcher">*/
/*                                             <img src="{{ asset("images/theme-drop-admin-1.png") }}" class="img-responsive" alt="">*/
/* */
/*                                             View Admin Layout #1*/
/*                                         </a>*/
/* */
/*                                         <div class="demo-external">*/
/*                                             <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-1/index.html" target="_blank"><small><i class="fa fa-external-link"></i>&nbsp;&nbsp;(Open in new tab)</small></a>*/
/*                                         </div>*/
/*                                     </div><!-- /.demo-block -->*/
/* */
/*                                     <div class="demo-block">*/
/*                                         <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/landing/index.html" class="demo-launcher">*/
/*                                             <img src="{{ asset("images/theme-drop-landing.png") }}" class="img-responsive" alt="">*/
/* */
/*                                             View Frontend Template*/
/*                                         </a>*/
/* */
/*                                         <div class="demo-external">*/
/*                                             <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/landing/index.html" target="_blank"><small><i class="fa fa-external-link"></i>&nbsp;&nbsp;(Open in new tab)</small></a>*/
/*                                         </div>*/
/*                                     </div><!-- /.demo-block -->*/
/*                                 </div> <!-- /.mega-menu-col -->*/
/* */
/*                                 <div class="mega-menu-col">*/
/*                                     <div class="demo-block">*/
/*                                         <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/index.html" class="demo-launcher">*/
/*                                             <img src="{{ asset("images/theme-drop-admin-2.png") }}" class="img-responsive" alt="">*/
/* */
/*                                             View Admin Layout #2*/
/*                                         </a>*/
/* */
/*                                         <div class="demo-external">*/
/*                                             <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/index.html" target="_blank"><small><i class="fa fa-external-link"></i>&nbsp;&nbsp;(Open in new tab)</small></a>*/
/*                                         </div>*/
/*                                     </div><!-- /.demo-block -->*/
/* */
/*                                     <div class="demo-block">*/
/*                                         <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/launch/index.html" class="demo-launcher">*/
/*                                             <img src="{{ asset("images/theme-drop-launch.png") }}" class="img-responsive" alt="">*/
/* */
/*                                             View Launch Template*/
/*                                         </a>*/
/* */
/*                                         <div class="demo-external">*/
/*                                             <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/launch/index.html" target="_blank"><small><i class="fa fa-external-link"></i>&nbsp;&nbsp;(Open in new tab)</small></a>*/
/*                                         </div>*/
/*                                     </div><!-- /.demo-block -->*/
/*                                 </div> <!-- /.mega-menu-col -->*/
/* */
/*                             </div> <!-- /.mega-menu-content -->*/
/*                         </li>*/
/* */
/*                     </ul>*/
/* */
/*                 </li>*/
/* */
/*                 <li class="navbar-divider"></li><!-- /.navbar-divider -->*/
/* */
/*                 <li class="dropdown navbar-notification">*/
/* */
/*                     <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">*/
/*                         <i class="fa fa-bell navbar-notification-icon"></i>*/
/*                         <span class="visible-xs-inline">&nbsp;Notifications</span>*/
/*                         <b class="badge badge-primary">3</b>*/
/*                     </a>*/
/* */
/*                     <div class="dropdown-menu">*/
/* */
/*                         <div class="dropdown-header">&nbsp;Notifications</div>*/
/* */
/*                         <div style="position: relative; overflow: hidden; width: auto; height: 225px;" class="slimScrollDiv"><div style="overflow: hidden; width: auto; height: 225px;" class="notification-list">*/
/* */
/*                                 <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification">*/
/*                                     <span class="notification-icon"><i class="fa fa-cloud-upload text-primary"></i></span>*/
/*                                     <span class="notification-title">Notification Title</span>*/
/*                                     <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>*/
/*                                     <span class="notification-time">20 minutes ago</span>*/
/*                                 </a> <!-- / .notification -->*/
/* */
/*                                 <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification">*/
/*                                     <span class="notification-icon"><i class="fa fa-ban text-secondary"></i></span>*/
/*                                     <span class="notification-title">Notification Title</span>*/
/*                                     <span class="notification-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>*/
/*                                     <span class="notification-time">20 minutes ago</span>*/
/*                                 </a> <!-- / .notification -->*/
/* */
/*                                 <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification">*/
/*                                     <span class="notification-icon"><i class="fa fa-warning text-tertiary"></i></span>*/
/*                                     <span class="notification-title">Storage Space Almost Full!</span>*/
/*                                     <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>*/
/*                                     <span class="notification-time">20 minutes ago</span>*/
/*                                 </a> <!-- / .notification -->*/
/* */
/*                                 <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification">*/
/*                                     <span class="notification-icon"><i class="fa fa-ban text-danger"></i></span>*/
/*                                     <span class="notification-title">Sync Error</span>*/
/*                                     <span class="notification-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>*/
/*                                     <span class="notification-time">20 minutes ago</span>*/
/*                                 </a> <!-- / .notification -->*/
/* */
/*                             </div><div style="background: rgb(136, 136, 136) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div> <!-- / .notification-list -->*/
/* */
/*                         <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification-link">View All Notifications</a>*/
/* */
/*                     </div> <!-- / .dropdown-menu -->*/
/* */
/*                 </li>*/
/* */
/* */
/* */
/*                 <li class="dropdown navbar-notification">*/
/* */
/*                     <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">*/
/*                         <i class="fa fa-envelope navbar-notification-icon"></i>*/
/*                         <span class="visible-xs-inline">&nbsp;Messages</span>*/
/*                     </a>*/
/* */
/*                     <div class="dropdown-menu">*/
/* */
/*                         <div class="dropdown-header">Messages</div>*/
/* */
/*                         <div style="position: relative; overflow: hidden; width: auto; height: 225px;" class="slimScrollDiv"><div style="overflow: hidden; width: auto; height: 225px;" class="notification-list">*/
/* */
/*                                 <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification">*/
/*                                     <div class="notification-icon"><img src="{{ asset("images/avatar-3-md.jpg") }}" alt=""></div>*/
/*                                     <div class="notification-title">New Message</div>*/
/*                                     <div class="notification-description">Praesent dictum nisl non est sagittis luctus.</div>*/
/*                                     <div class="notification-time">20 minutes ago</div>*/
/*                                 </a> <!-- / .notification -->*/
/* */
/*                                 <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification">*/
/*                                     <div class="notification-icon"><img src="{{ asset("images/avatar-3-md.jpg") }}" alt=""></div>*/
/*                                     <div class="notification-title">New Message</div>*/
/*                                     <div class="notification-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</div>*/
/*                                     <div class="notification-time">20 minutes ago</div>*/
/*                                 </a> <!-- / .notification -->*/
/* */
/*                                 <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification">*/
/*                                     <div class="notification-icon"><img src="{{ asset("images/avatar-4-md.jpg") }}" alt=""></div>*/
/*                                     <div class="notification-title">New Message</div>*/
/*                                     <div class="notification-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</div>*/
/*                                     <div class="notification-time">20 minutes ago</div>*/
/*                                 </a> <!-- / .notification -->*/
/* */
/*                                 <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification">*/
/*                                     <div class="notification-icon"><img src="{{ asset("images/avatar-5-md.jpg") }}" alt=""></div>*/
/*                                     <div class="notification-title">New Message</div>*/
/*                                     <div class="notification-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</div>*/
/*                                     <div class="notification-time">20 minutes ago</div>*/
/*                                 </a> <!-- / .notification -->*/
/* */
/*                             </div><div style="background: rgb(136, 136, 136) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div> <!-- / .notification-list -->*/
/* */
/*                         <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification-link">View All Messages</a>*/
/* */
/*                     </div> <!-- / .dropdown-menu -->*/
/* */
/*                 </li>*/
/* */
/* */
/*                 <li class="dropdown navbar-notification empty">*/
/* */
/*                     <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">*/
/*                         <i class="fa fa-warning navbar-notification-icon"></i>*/
/*                         <span class="visible-xs-inline">&nbsp;&nbsp;Alerts</span>*/
/*                     </a>*/
/* */
/*                     <div class="dropdown-menu">*/
/* */
/*                         <div class="dropdown-header">Alerts</div>*/
/* */
/*                         <div style="position: relative; overflow: hidden; width: auto; height: 225px;" class="slimScrollDiv"><div style="overflow: hidden; width: auto; height: 225px;" class="notification-list">*/
/* */
/*                                 <h4 class="notification-empty-title">No alerts here.</h4>*/
/*                                 <p class="notification-empty-text">Check out what other makers are doing on Explore!</p>*/
/* */
/*                             </div><div style="background: rgb(136, 136, 136) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;" class="slimScrollBar"></div><div style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div> <!-- / .notification-list -->*/
/* */
/*                         <a href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/page-notifications.html" class="notification-link">View All Alerts</a>*/
/* */
/*                     </div> <!-- / .dropdown-menu -->*/
/* */
/*                 </li>*/
/* */
/* */
/* */
/*                 <li class="navbar-divider"></li><!-- /.navbar-divider -->*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     </div> <!--/.container -->*/
/* */
/* </div> <!--/.navbar -->*/

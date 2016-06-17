<?php

/* @App/sidebar-cleanzone.html.twig */
class __TwigTemplate_125f5e2a523e204d983b28d3a2b6fb4ab50a42893bf4366dbca973c0213f4346 extends Twig_Template
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
        $__internal_fd401c55fd0905b13dd19e373385bf5f597fd2a6212fe1211f6054c2c5668b6d = $this->env->getExtension("native_profiler");
        $__internal_fd401c55fd0905b13dd19e373385bf5f597fd2a6212fe1211f6054c2c5668b6d->enter($__internal_fd401c55fd0905b13dd19e373385bf5f597fd2a6212fe1211f6054c2c5668b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/sidebar-cleanzone.html.twig"));

        // line 1
        echo "<div class=\"cl-sidebar\">
    <div class=\"cl-toggle\"><i class=\"fa fa-bars\"></i></div>
    <div class=\"cl-navblock\">
        <div class=\"menu-space\">
            <div class=\"content\">

                <ul class=\"cl-vnavigation\">
                    <li>
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("van_bookmarks");
        echo "\">
                            <i class=\"fa fa-dashboard\"></i>
                            Bookmarks
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class=\"search-field collapse-button\">
            <input type=\"text\" placeholder=\"Search...\" class=\"form-control search\">
            <button id=\"sidebar-collapse\" class=\"btn btn-default\"><i class=\"fa fa-angle-left\"></i>
            </button>
        </div>
    </div>
</div>";
        
        $__internal_fd401c55fd0905b13dd19e373385bf5f597fd2a6212fe1211f6054c2c5668b6d->leave($__internal_fd401c55fd0905b13dd19e373385bf5f597fd2a6212fe1211f6054c2c5668b6d_prof);

    }

    public function getTemplateName()
    {
        return "@App/sidebar-cleanzone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  22 => 1,);
    }
}
/* <div class="cl-sidebar">*/
/*     <div class="cl-toggle"><i class="fa fa-bars"></i></div>*/
/*     <div class="cl-navblock">*/
/*         <div class="menu-space">*/
/*             <div class="content">*/
/* */
/*                 <ul class="cl-vnavigation">*/
/*                     <li>*/
/*                         <a href="{{ path("van_bookmarks") }}">*/
/*                             <i class="fa fa-dashboard"></i>*/
/*                             Bookmarks*/
/*                         </a>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="search-field collapse-button">*/
/*             <input type="text" placeholder="Search..." class="form-control search">*/
/*             <button id="sidebar-collapse" class="btn btn-default"><i class="fa fa-angle-left"></i>*/
/*             </button>*/
/*         </div>*/
/*     </div>*/
/* </div>*/

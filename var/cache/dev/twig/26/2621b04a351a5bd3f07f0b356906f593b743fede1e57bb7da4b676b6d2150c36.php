<?php

/* @App/sidebar-cleanzone.html.twig */
class __TwigTemplate_8c384d22bb5e0efbd147e5c0253e53f9b81d8fc3bea207320e4d03b60467e15c extends Twig_Template
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
        $__internal_c6e8ddd034117b3f1633959ba1a456918ff261ea6c1c8fd8ecc288c97a44f707 = $this->env->getExtension("native_profiler");
        $__internal_c6e8ddd034117b3f1633959ba1a456918ff261ea6c1c8fd8ecc288c97a44f707->enter($__internal_c6e8ddd034117b3f1633959ba1a456918ff261ea6c1c8fd8ecc288c97a44f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/sidebar-cleanzone.html.twig"));

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
        
        $__internal_c6e8ddd034117b3f1633959ba1a456918ff261ea6c1c8fd8ecc288c97a44f707->leave($__internal_c6e8ddd034117b3f1633959ba1a456918ff261ea6c1c8fd8ecc288c97a44f707_prof);

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

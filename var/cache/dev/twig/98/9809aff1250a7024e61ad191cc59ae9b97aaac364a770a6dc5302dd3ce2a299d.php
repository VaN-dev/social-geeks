<?php

/* @App/layout-simple.html.twig */
class __TwigTemplate_623f78156f004bcdfd190b1f31ecf21ff0df99228988345d077237fed0f09aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26cf6097e23e1aa0df71e466cb05f5c2f2b467c21df9b7e060d64f56216d58ce = $this->env->getExtension("native_profiler");
        $__internal_26cf6097e23e1aa0df71e466cb05f5c2f2b467c21df9b7e060d64f56216d58ce->enter($__internal_26cf6097e23e1aa0df71e466cb05f5c2f2b467c21df9b7e060d64f56216d58ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/layout-simple.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en\"><!--<![endif]--><head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <title>Analytics Dashboard · MVP Ready</title>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/css_002.css"), "html", null, true);
        echo "\">

    <!-- Font Awesome CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">



    <!-- App CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/mvpready-admin.css"), "html", null, true);
        echo "\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/favicon.ico\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"account-bg\">

    <header class=\"navbar\" role=\"banner\">

        <div class=\"container\">

            <div class=\"navbar-header\">
                <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <i class=\"fa fa-cog\"></i>
                </button>

                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"MVP Ready\">
            </div> <!-- /.navbar-header -->

        </div> <!-- /.container -->

    </header>

    ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Core JS -->
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_003.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_005.js"), "html", null, true);
        echo "\"></script>



<!-- Plugin JS -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_008.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_009.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_002.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_006.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_004.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_007.js"), "html", null, true);
        echo "\"></script>

<!-- App JS -->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mvpready-core.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mvpready-helpers.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mvpready-admin.js"), "html", null, true);
        echo "\"></script>


<!-- Demo JS -->
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/line.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/auto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scatter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vertical.js"), "html", null, true);
        echo "\"></script>



<a style=\"display: none;\" href=\"#top\" id=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a></body></html>";
        
        $__internal_26cf6097e23e1aa0df71e466cb05f5c2f2b467c21df9b7e060d64f56216d58ce->leave($__internal_26cf6097e23e1aa0df71e466cb05f5c2f2b467c21df9b7e060d64f56216d58ce_prof);

    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        $__internal_c32c2171075b23f75dac136ef9deea24c80c466210d86ff81b292bf6b798bcb5 = $this->env->getExtension("native_profiler");
        $__internal_c32c2171075b23f75dac136ef9deea24c80c466210d86ff81b292bf6b798bcb5->enter($__internal_c32c2171075b23f75dac136ef9deea24c80c466210d86ff81b292bf6b798bcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "    ";
        
        $__internal_c32c2171075b23f75dac136ef9deea24c80c466210d86ff81b292bf6b798bcb5->leave($__internal_c32c2171075b23f75dac136ef9deea24c80c466210d86ff81b292bf6b798bcb5_prof);

    }

    public function getTemplateName()
    {
        return "@App/layout-simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 60,  202 => 59,  190 => 92,  186 => 91,  182 => 90,  178 => 89,  174 => 88,  167 => 84,  163 => 83,  159 => 82,  153 => 79,  149 => 78,  145 => 77,  141 => 76,  137 => 75,  133 => 74,  129 => 73,  125 => 72,  117 => 67,  113 => 66,  109 => 65,  103 => 61,  101 => 59,  91 => 52,  64 => 28,  56 => 23,  50 => 20,  44 => 17,  40 => 16,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!-->*/
/* <html class="no-js" lang="en"><!--<![endif]--><head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*     <title>Analytics Dashboard · MVP Ready</title>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <!-- Google Font -->*/
/*     <link rel="stylesheet" href="{{ asset("css/css.css") }}">*/
/*     <link rel="stylesheet" href="{{ asset("css/css_002.css") }}">*/
/* */
/*     <!-- Font Awesome CSS -->*/
/*     <link rel="stylesheet" href="{{ asset("css/font-awesome.css") }}">*/
/* */
/*     <!-- Bootstrap CSS -->*/
/*     <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">*/
/* */
/* */
/* */
/*     <!-- App CSS -->*/
/*     <link rel="stylesheet" href="{{ asset("css/mvpready-admin.css") }}">*/
/* */
/*     <!-- Favicon -->*/
/*     <link rel="shortcut icon" href="https://jumpstartthemes.com/demo/v/3.0.0/templates/admin-2/favicon.ico">*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body class="account-bg">*/
/* */
/*     <header class="navbar" role="banner">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="navbar-header">*/
/*                 <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <i class="fa fa-cog"></i>*/
/*                 </button>*/
/* */
/*                 <img src="{{ asset("images/logo.png") }}" alt="MVP Ready">*/
/*             </div> <!-- /.navbar-header -->*/
/* */
/*         </div> <!-- /.container -->*/
/* */
/*     </header>*/
/* */
/*     {% block content %}*/
/*     {% endblock content %}*/
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Core JS -->*/
/* <script src="{{ asset('js/jquery_003.js') }}"></script>*/
/* <script src="{{ asset("js/bootstrap.js") }}"></script>*/
/* <script src="{{ asset("js/jquery_005.js") }}"></script>*/
/* */
/* */
/* */
/* <!-- Plugin JS -->*/
/* <script src="{{ asset("js/excanvas.js") }}"></script>*/
/* <script src="{{ asset("js/jquery.js") }}"></script>*/
/* <script src="{{ asset("js/jquery_008.js") }}"></script>*/
/* <script src="{{ asset("js/jquery_009.js") }}"></script>*/
/* <script src="{{ asset("js/jquery_002.js") }}"></script>*/
/* <script src="{{ asset("js/jquery_006.js") }}"></script>*/
/* <script src="{{ asset("js/jquery_004.js") }}"></script>*/
/* <script src="{{ asset("js/jquery_007.js") }}"></script>*/
/* */
/* <!-- App JS -->*/
/* <script src="{{ asset("js/mvpready-core.js") }}"></script>*/
/* <script src="{{ asset("js/mvpready-helpers.js") }}"></script>*/
/* <script src="{{ asset("js/mvpready-admin.js") }}"></script>*/
/* */
/* */
/* <!-- Demo JS -->*/
/* <script src="{{ asset("js/line.js") }}"></script>*/
/* <script src="{{ asset("js/pie.js") }}"></script>*/
/* <script src="{{ asset("js/auto.js") }}"></script>*/
/* <script src="{{ asset("js/scatter.js") }}"></script>*/
/* <script src="{{ asset("js/vertical.js") }}"></script>*/
/* */
/* */
/* */
/* <a style="display: none;" href="#top" id="back-to-top"><i class="fa fa-chevron-up"></i></a></body></html>*/

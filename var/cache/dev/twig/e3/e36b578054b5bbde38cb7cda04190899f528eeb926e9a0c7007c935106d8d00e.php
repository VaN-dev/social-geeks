<?php

/* @App/layout.html.twig */
class __TwigTemplate_b23227f42bcedb48f3ad6d7a7ff1fc1fd8f53b7a43bb84895f826c008f4443ce extends Twig_Template
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
        $__internal_a947cfb8e722d62b0ff18925707dfef2f832d634a45a51e1004e6376520436c0 = $this->env->getExtension("native_profiler");
        $__internal_a947cfb8e722d62b0ff18925707dfef2f832d634a45a51e1004e6376520436c0->enter($__internal_a947cfb8e722d62b0ff18925707dfef2f832d634a45a51e1004e6376520436c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/layout.html.twig"));

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

<body class=\"layout-fixed  \">

<div id=\"wrapper\">

    ";
        // line 44
        $this->loadTemplate("@App/topbar.html.twig", "@App/layout.html.twig", 44)->display($context);
        // line 45
        echo "

    ";
        // line 47
        $this->loadTemplate("@App/sidebar.html.twig", "@App/layout.html.twig", 47)->display($context);
        // line 48
        echo "
    <div class=\"content-page\">

        <div class=\"content\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["flashMessage"]) {
            // line 53
            echo "                ";
            $this->loadTemplate("@App/alert.html.twig", "@App/layout.html.twig", 53)->display(array_merge($context, array("type" => $context["type"], "message" => $this->getAttribute($context["flashMessage"], 0, array()))));
            // line 54
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "        </div> <!-- .content -->

    </div> <!-- /.content-page -->

</div> <!-- /#wrapper -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Core JS -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_003.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_005.js"), "html", null, true);
        echo "\"></script>



<!-- Plugin JS -->
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_008.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_009.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_002.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_006.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_004.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery_007.js"), "html", null, true);
        echo "\"></script>

<!-- App JS -->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mvpready-core.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mvpready-helpers.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mvpready-admin.js"), "html", null, true);
        echo "\"></script>


<!-- Demo JS -->
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/line.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/auto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scatter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vertical.js"), "html", null, true);
        echo "\"></script>



<a style=\"display: none;\" href=\"#top\" id=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a></body></html>";
        
        $__internal_a947cfb8e722d62b0ff18925707dfef2f832d634a45a51e1004e6376520436c0->leave($__internal_a947cfb8e722d62b0ff18925707dfef2f832d634a45a51e1004e6376520436c0_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_1640b49ab062915f4f3bc710a9a2b502606ae522b357fe0bfce962d6f8ec7cda = $this->env->getExtension("native_profiler");
        $__internal_1640b49ab062915f4f3bc710a9a2b502606ae522b357fe0bfce962d6f8ec7cda->enter($__internal_1640b49ab062915f4f3bc710a9a2b502606ae522b357fe0bfce962d6f8ec7cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "            ";
        
        $__internal_1640b49ab062915f4f3bc710a9a2b502606ae522b357fe0bfce962d6f8ec7cda->leave($__internal_1640b49ab062915f4f3bc710a9a2b502606ae522b357fe0bfce962d6f8ec7cda_prof);

    }

    public function getTemplateName()
    {
        return "@App/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 57,  240 => 56,  228 => 94,  224 => 93,  220 => 92,  216 => 91,  212 => 90,  205 => 86,  201 => 85,  197 => 84,  191 => 81,  187 => 80,  183 => 79,  179 => 78,  175 => 77,  171 => 76,  167 => 75,  163 => 74,  155 => 69,  151 => 68,  147 => 67,  136 => 58,  134 => 56,  131 => 55,  117 => 54,  114 => 53,  97 => 52,  91 => 48,  89 => 47,  85 => 45,  83 => 44,  64 => 28,  56 => 23,  50 => 20,  44 => 17,  40 => 16,  23 => 1,);
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
/* <body class="layout-fixed  ">*/
/* */
/* <div id="wrapper">*/
/* */
/*     {% include "@App/topbar.html.twig" %}*/
/* */
/* */
/*     {% include "@App/sidebar.html.twig" %}*/
/* */
/*     <div class="content-page">*/
/* */
/*         <div class="content">*/
/*             {% for type, flashMessage in app.session.flashbag.all %}*/
/*                 {% include '@App/alert.html.twig' with {'type': type, 'message': flashMessage.0|raw} %}*/
/*             {% endfor %}*/
/* */
/*             {% block content %}*/
/*             {% endblock content %}*/
/*         </div> <!-- .content -->*/
/* */
/*     </div> <!-- /.content-page -->*/
/* */
/* </div> <!-- /#wrapper -->*/
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

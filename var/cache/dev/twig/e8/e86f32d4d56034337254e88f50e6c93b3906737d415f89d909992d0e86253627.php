<?php

/* @App/layout-cleanzone.html.twig */
class __TwigTemplate_18760db25e2886a079260368b4560f91f299b604f3bc9ad68a1ed0dcca837eba extends Twig_Template
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
        $__internal_11469f91d616284351e45e83a4577d4b03099ef3154284dd326c679d25ec32e2 = $this->env->getExtension("native_profiler");
        $__internal_11469f91d616284351e45e83a4577d4b03099ef3154284dd326c679d25ec32e2->enter($__internal_11469f91d616284351e45e83a4577d4b03099ef3154284dd326c679d25ec32e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/layout-cleanzone.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <title>Clean Zone</title>
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Raleway:300,200,100\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/lib/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!--if lt IE 9script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/lib/jquery.nanoscroller/css/nanoscroller.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        // line 26
        echo "</head>
<body>

";
        // line 29
        $this->loadTemplate("@App/topbar-cleanzone.html.twig", "@App/layout-cleanzone.html.twig", 29)->display($context);
        // line 30
        echo "
<div id=\"cl-wrapper\">
    <!--Sidebar item function-->
    <!--Sidebar sub-item function-->

    ";
        // line 35
        $this->loadTemplate("@App/sidebar-cleanzone.html.twig", "@App/layout-cleanzone.html.twig", 35)->display($context);
        // line 36
        echo "
    <div id=\"pcont\" class=\"container-fluid\">

        ";
        // line 39
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
            // line 40
            echo "            ";
            $this->loadTemplate("@App/alert.html.twig", "@App/layout-cleanzone.html.twig", 40)->display(array_merge($context, array("type" => $context["type"], "message" => $this->getAttribute($context["flashMessage"], 0, array()))));
            // line 41
            echo "        ";
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
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "
    </div>
</div>
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/js/cleanzone.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/lib/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/cleanzone/js/voice-recognition.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        //initialize the javascript
        App.init();
    });

</script>
</body>
</html>";
        
        $__internal_11469f91d616284351e45e83a4577d4b03099ef3154284dd326c679d25ec32e2->leave($__internal_11469f91d616284351e45e83a4577d4b03099ef3154284dd326c679d25ec32e2_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_2496f1a0d892819280d01b654478bd4a459246f8fd7b57775379c57a516b9032 = $this->env->getExtension("native_profiler");
        $__internal_2496f1a0d892819280d01b654478bd4a459246f8fd7b57775379c57a516b9032->enter($__internal_2496f1a0d892819280d01b654478bd4a459246f8fd7b57775379c57a516b9032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "        ";
        
        $__internal_2496f1a0d892819280d01b654478bd4a459246f8fd7b57775379c57a516b9032->leave($__internal_2496f1a0d892819280d01b654478bd4a459246f8fd7b57775379c57a516b9032_prof);

    }

    public function getTemplateName()
    {
        return "@App/layout-cleanzone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 44,  169 => 43,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  136 => 48,  131 => 45,  129 => 43,  126 => 42,  112 => 41,  109 => 40,  92 => 39,  87 => 36,  85 => 35,  78 => 30,  76 => 29,  71 => 26,  69 => 25,  67 => 24,  65 => 23,  63 => 22,  58 => 19,  54 => 18,  50 => 17,  44 => 14,  40 => 13,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="shortcut icon" href="{{ asset("favicon.ico") }}">*/
/*     <title>Clean Zone</title>*/
/*     <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Raleway:300,200,100" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">*/
/*     <link href="{{ asset("bundles/app/cleanzone/lib/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">*/
/*     <link rel="stylesheet" href="{{ asset("bundles/app/cleanzone/lib/font-awesome/css/font-awesome.min.css") }}">*/
/*     <!--if lt IE 9script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')*/
/*     -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset("bundles/app/cleanzone/lib/jquery.nanoscroller/css/nanoscroller.css") }}">*/
/*     <link href="{{ asset("bundles/app/cleanzone/css/style.css") }}" rel="stylesheet">*/
/*     <link href="{{ asset("bundles/app/cleanzone/css/custom.css") }}" rel="stylesheet">*/
/* */
/*     {#{% stylesheets filter="compass" output="css/frontend.css"#}*/
/*     {#"@AppBundle/Resources/public/cleanzone/compass/*.scss"#}*/
/*     {#%}#}*/
/*     {#<link rel="stylesheet" href="{{ asset_url }}"/>#}*/
/*     {#{% endstylesheets %}#}*/
/* </head>*/
/* <body>*/
/* */
/* {% include "@App/topbar-cleanzone.html.twig" %}*/
/* */
/* <div id="cl-wrapper">*/
/*     <!--Sidebar item function-->*/
/*     <!--Sidebar sub-item function-->*/
/* */
/*     {% include "@App/sidebar-cleanzone.html.twig" %}*/
/* */
/*     <div id="pcont" class="container-fluid">*/
/* */
/*         {% for type, flashMessage in app.session.flashbag.all %}*/
/*             {% include '@App/alert.html.twig' with {'type': type, 'message': flashMessage.0|raw} %}*/
/*         {% endfor %}*/
/* */
/*         {% block content %}*/
/*         {% endblock content %}*/
/* */
/*     </div>*/
/* </div>*/
/* <script type="text/javascript" src="{{ asset("bundles/app/cleanzone/lib/jquery/jquery.min.js") }}"></script>*/
/* <script type="text/javascript" src="{{ asset("bundles/app/cleanzone/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js") }}"></script>*/
/* <script type="text/javascript" src="{{ asset("bundles/app/cleanzone/js/cleanzone.js") }}"></script>*/
/* <script src="{{ asset("bundles/app/cleanzone/lib/bootstrap/dist/js/bootstrap.min.js") }}"></script>*/
/* <script src="{{ asset("bundles/app/cleanzone/js/voice-recognition.js") }}"></script>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function(){*/
/*         //initialize the javascript*/
/*         App.init();*/
/*     });*/
/* */
/* </script>*/
/* </body>*/
/* </html>*/

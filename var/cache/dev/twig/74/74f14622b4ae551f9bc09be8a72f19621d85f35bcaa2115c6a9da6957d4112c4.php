<?php

/* @VanUser/Registration/index.html.twig */
class __TwigTemplate_97a731380daf41d844500cb57abfc2da3aeceb847bb3f003186ebecf55985ec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/layout-simple.html.twig", "@VanUser/Registration/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/layout-simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c84b766a8c10bbe5c8ae0115a7238ee5544227e4bce81dd4b26e8a62c960388b = $this->env->getExtension("native_profiler");
        $__internal_c84b766a8c10bbe5c8ae0115a7238ee5544227e4bce81dd4b26e8a62c960388b->enter($__internal_c84b766a8c10bbe5c8ae0115a7238ee5544227e4bce81dd4b26e8a62c960388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VanUser/Registration/index.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84b766a8c10bbe5c8ae0115a7238ee5544227e4bce81dd4b26e8a62c960388b->leave($__internal_c84b766a8c10bbe5c8ae0115a7238ee5544227e4bce81dd4b26e8a62c960388b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f1b90a500d30e6e91bfb38c9cd7d00ff97b2dbdf049cc5fcb22a042e3e26fbf = $this->env->getExtension("native_profiler");
        $__internal_5f1b90a500d30e6e91bfb38c9cd7d00ff97b2dbdf049cc5fcb22a042e3e26fbf->enter($__internal_5f1b90a500d30e6e91bfb38c9cd7d00ff97b2dbdf049cc5fcb22a042e3e26fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <br class=\"xs-80\">

    <div class=\"account-wrapper\">

        <div class=\"account-body\">

            <h3>Get Started with a Free Account.</h3>

            <h5>Sign up in 30 seconds. No credit card required.</h5>

            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "account-form")));
        echo "

                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "passwordPlain", array()), "first", array()), 'widget');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "passwordPlain", array()), "second", array()), 'widget');
        echo "


                <div class=\"form-group\">
                    <label class=\"checkbox-inline\">
                        <input type=\"checkbox\" class=\"\" value=\"\" tabindex=\"5\"> I agree to the <a href=\"javascript:;\" target=\"_blank\">Terms of Service</a> &amp; <a href=\"javascript:;\" target=\"_blank\">Privacy Policy</a>
                    </label>
                </div> <!-- /.form-group -->

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-secondary btn-block btn-lg\" tabindex=\"6\">
                        Create My Account &nbsp; <i class=\"fa fa-play-circle\"></i>
                    </button>
                </div> <!-- /.form-group -->

            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div> <!-- /.account-body -->

        <div class=\"account-footer\">
            <p>
                Already have an account? &nbsp;
                <a href=\"./account-login.html\" class=\"\">Login to your Account!</a>
            </p>
        </div> <!-- /.account-footer -->

    </div> <!-- /.account-wrapper -->
";
        
        $__internal_5f1b90a500d30e6e91bfb38c9cd7d00ff97b2dbdf049cc5fcb22a042e3e26fbf->leave($__internal_5f1b90a500d30e6e91bfb38c9cd7d00ff97b2dbdf049cc5fcb22a042e3e26fbf_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_235bfaeb289d6e4d3b0a1fc13bfc6ffeaa2f380fd2b2b0b32bb57e74ff5d1233 = $this->env->getExtension("native_profiler");
        $__internal_235bfaeb289d6e4d3b0a1fc13bfc6ffeaa2f380fd2b2b0b32bb57e74ff5d1233->enter($__internal_235bfaeb289d6e4d3b0a1fc13bfc6ffeaa2f380fd2b2b0b32bb57e74ff5d1233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script type=\"text/javascript\">
        \$(function() {

        })
    </script>
";
        
        $__internal_235bfaeb289d6e4d3b0a1fc13bfc6ffeaa2f380fd2b2b0b32bb57e74ff5d1233->leave($__internal_235bfaeb289d6e4d3b0a1fc13bfc6ffeaa2f380fd2b2b0b32bb57e74ff5d1233_prof);

    }

    public function getTemplateName()
    {
        return "@VanUser/Registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 52,  115 => 51,  95 => 37,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  56 => 16,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@App/layout-simple.html.twig' %}*/
/* */
/* {% form_theme form "bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <br class="xs-80">*/
/* */
/*     <div class="account-wrapper">*/
/* */
/*         <div class="account-body">*/
/* */
/*             <h3>Get Started with a Free Account.</h3>*/
/* */
/*             <h5>Sign up in 30 seconds. No credit card required.</h5>*/
/* */
/*             {{ form_start(form, {"attr": {"class": "account-form"}}) }}*/
/* */
/*                 {{ form_widget(form.username) }}*/
/*                 {{ form_widget(form.firstname) }}*/
/*                 {{ form_widget(form.lastname) }}*/
/*                 {{ form_widget(form.passwordPlain.first) }}*/
/*                 {{ form_widget(form.passwordPlain.second) }}*/
/* */
/* */
/*                 <div class="form-group">*/
/*                     <label class="checkbox-inline">*/
/*                         <input type="checkbox" class="" value="" tabindex="5"> I agree to the <a href="javascript:;" target="_blank">Terms of Service</a> &amp; <a href="javascript:;" target="_blank">Privacy Policy</a>*/
/*                     </label>*/
/*                 </div> <!-- /.form-group -->*/
/* */
/*                 <div class="form-group">*/
/*                     <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="6">*/
/*                         Create My Account &nbsp; <i class="fa fa-play-circle"></i>*/
/*                     </button>*/
/*                 </div> <!-- /.form-group -->*/
/* */
/*             {{ form_end(form) }}*/
/* */
/*         </div> <!-- /.account-body -->*/
/* */
/*         <div class="account-footer">*/
/*             <p>*/
/*                 Already have an account? &nbsp;*/
/*                 <a href="./account-login.html" class="">Login to your Account!</a>*/
/*             </p>*/
/*         </div> <!-- /.account-footer -->*/
/* */
/*     </div> <!-- /.account-wrapper -->*/
/* {% endblock content %}*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/* */
/*         })*/
/*     </script>*/
/* {% endblock javascripts %}*/

<?php

/* @VanSecurity/Default/login.html.twig */
class __TwigTemplate_519250c51c6270ead8910243e48b6b84d3bff2eae706f1037f55ab453ff83493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/layout-simple.html.twig", "@VanSecurity/Default/login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <br class=\"xs-80\">

    <div class=\"account-wrapper\">

        <div class=\"account-body\">

            <h3>Welcome back to MVP Ready.</h3>

            <h5>Please sign in to get access.</h5>

            <form class=\"form account-form\" method=\"POST\" action=\"./index.html\">

                <div class=\"form-group\">
                    <label for=\"login-username\" class=\"placeholder-hidden\">Username</label>
                    <input type=\"text\" class=\"form-control\" id=\"login-username\" placeholder=\"Username\" tabindex=\"1\">
                </div> <!-- /.form-group -->

                <div class=\"form-group\">
                    <label for=\"login-password\" class=\"placeholder-hidden\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"login-password\" placeholder=\"Password\" tabindex=\"2\">
                </div> <!-- /.form-group -->

                <div class=\"form-group clearfix\">
                    <div class=\"pull-left\">
                        <label class=\"checkbox-inline\">
                            <input type=\"checkbox\" class=\"\" value=\"\" tabindex=\"3\"> <small>Remember me</small>
                        </label>
                    </div>

                    <div class=\"pull-right\">
                        <small><a href=\"./account-forgot.html\">Forgot Password?</a></small>
                    </div>
                </div> <!-- /.form-group -->

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" tabindex=\"4\">
                        Signin &nbsp; <i class=\"fa fa-play-circle\"></i>
                    </button>
                </div> <!-- /.form-group -->

            </form>


        </div> <!-- /.account-body -->

        <div class=\"account-footer\">
            <p>
                Don't have an account? &nbsp;
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("van_user_registration");
        echo "\" class=\"\">Create an Account!</a>
            </p>
        </div> <!-- /.account-footer -->

    </div> <!-- /.account-wrapper -->
";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "<script type=\"text/javascript\">
\$(function() {

})
</script>
";
    }

    public function getTemplateName()
    {
        return "@VanSecurity/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 60,  92 => 59,  82 => 52,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@App/layout-simple.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <br class="xs-80">*/
/* */
/*     <div class="account-wrapper">*/
/* */
/*         <div class="account-body">*/
/* */
/*             <h3>Welcome back to MVP Ready.</h3>*/
/* */
/*             <h5>Please sign in to get access.</h5>*/
/* */
/*             <form class="form account-form" method="POST" action="./index.html">*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="login-username" class="placeholder-hidden">Username</label>*/
/*                     <input type="text" class="form-control" id="login-username" placeholder="Username" tabindex="1">*/
/*                 </div> <!-- /.form-group -->*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="login-password" class="placeholder-hidden">Password</label>*/
/*                     <input type="password" class="form-control" id="login-password" placeholder="Password" tabindex="2">*/
/*                 </div> <!-- /.form-group -->*/
/* */
/*                 <div class="form-group clearfix">*/
/*                     <div class="pull-left">*/
/*                         <label class="checkbox-inline">*/
/*                             <input type="checkbox" class="" value="" tabindex="3"> <small>Remember me</small>*/
/*                         </label>*/
/*                     </div>*/
/* */
/*                     <div class="pull-right">*/
/*                         <small><a href="./account-forgot.html">Forgot Password?</a></small>*/
/*                     </div>*/
/*                 </div> <!-- /.form-group -->*/
/* */
/*                 <div class="form-group">*/
/*                     <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">*/
/*                         Signin &nbsp; <i class="fa fa-play-circle"></i>*/
/*                     </button>*/
/*                 </div> <!-- /.form-group -->*/
/* */
/*             </form>*/
/* */
/* */
/*         </div> <!-- /.account-body -->*/
/* */
/*         <div class="account-footer">*/
/*             <p>*/
/*                 Don't have an account? &nbsp;*/
/*                 <a href="{{ path("van_user_registration") }}" class="">Create an Account!</a>*/
/*             </p>*/
/*         </div> <!-- /.account-footer -->*/
/* */
/*     </div> <!-- /.account-wrapper -->*/
/* {% endblock content %}*/
/* */
/* {% block javascripts %}*/
/* <script type="text/javascript">*/
/* $(function() {*/
/* */
/* })*/
/* </script>*/
/* {% endblock javascripts %}*/

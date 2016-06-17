<?php

/* @VanSecurity/Default/login.html.twig */
class __TwigTemplate_f2d28ef7871900ad1348544b14880170aa10c3882c4fd7645f2d2af5f52c7bfa extends Twig_Template
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
        $__internal_6acb056ce20c51b6f582771db948c2898477fb6ade9ee57cd381c4bb00a40c8b = $this->env->getExtension("native_profiler");
        $__internal_6acb056ce20c51b6f582771db948c2898477fb6ade9ee57cd381c4bb00a40c8b->enter($__internal_6acb056ce20c51b6f582771db948c2898477fb6ade9ee57cd381c4bb00a40c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VanSecurity/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6acb056ce20c51b6f582771db948c2898477fb6ade9ee57cd381c4bb00a40c8b->leave($__internal_6acb056ce20c51b6f582771db948c2898477fb6ade9ee57cd381c4bb00a40c8b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b96f14aa54f31915398797e62ae6f1ea512961aeb944b0debb5497729e3ab44a = $this->env->getExtension("native_profiler");
        $__internal_b96f14aa54f31915398797e62ae6f1ea512961aeb944b0debb5497729e3ab44a->enter($__internal_b96f14aa54f31915398797e62ae6f1ea512961aeb944b0debb5497729e3ab44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <br class=\"xs-80\">

    <div class=\"account-wrapper\">

        <div class=\"account-body\">

            <h3>Welcome back to MVP Ready.</h3>

            <h5>Please sign in to get access.</h5>

            <form class=\"form account-form\" method=\"POST\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("van_security_login_check");
        echo "\">

                ";
        // line 16
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
            // line 17
            echo "                    ";
            $this->loadTemplate("@App/alert.html.twig", "@VanSecurity/Default/login.html.twig", 17)->display(array_merge($context, array("type" => $context["type"], "message" => $this->getAttribute($context["flashMessage"], 0, array()))));
            // line 18
            echo "                ";
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
        // line 19
        echo "
                <div class=\"form-group\">
                    <label for=\"login-username\" class=\"placeholder-hidden\">E-mail</label>
                    <input type=\"email\" name=\"_username\" class=\"form-control\" id=\"login-username\" placeholder=\"E-mail\" tabindex=\"1\">
                </div> <!-- /.form-group -->

                <div class=\"form-group\">
                    <label for=\"login-password\" class=\"placeholder-hidden\">Password</label>
                    <input type=\"password\" name=\"_password\" class=\"form-control\" id=\"login-password\" placeholder=\"Password\" tabindex=\"2\">
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
        // line 56
        echo $this->env->getExtension('routing')->getPath("van_user_registration");
        echo "\" class=\"\">Create an Account!</a>
            </p>
        </div> <!-- /.account-footer -->

    </div> <!-- /.account-wrapper -->
";
        
        $__internal_b96f14aa54f31915398797e62ae6f1ea512961aeb944b0debb5497729e3ab44a->leave($__internal_b96f14aa54f31915398797e62ae6f1ea512961aeb944b0debb5497729e3ab44a_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d80d2dd6abc40cc788b5f1f2db343a634f6c4fafcb02e04b1f0f1eb4b9ec5b6 = $this->env->getExtension("native_profiler");
        $__internal_4d80d2dd6abc40cc788b5f1f2db343a634f6c4fafcb02e04b1f0f1eb4b9ec5b6->enter($__internal_4d80d2dd6abc40cc788b5f1f2db343a634f6c4fafcb02e04b1f0f1eb4b9ec5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "<script type=\"text/javascript\">
\$(function() {

})
</script>
";
        
        $__internal_4d80d2dd6abc40cc788b5f1f2db343a634f6c4fafcb02e04b1f0f1eb4b9ec5b6->leave($__internal_4d80d2dd6abc40cc788b5f1f2db343a634f6c4fafcb02e04b1f0f1eb4b9ec5b6_prof);

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
        return array (  150 => 64,  144 => 63,  131 => 56,  92 => 19,  78 => 18,  75 => 17,  58 => 16,  53 => 14,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <form class="form account-form" method="POST" action="{{path("van_security_login_check") }}">*/
/* */
/*                 {% for type, flashMessage in app.session.flashbag.all %}*/
/*                     {% include '@App/alert.html.twig' with {'type': type, 'message': flashMessage.0|raw} %}*/
/*                 {% endfor %}*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="login-username" class="placeholder-hidden">E-mail</label>*/
/*                     <input type="email" name="_username" class="form-control" id="login-username" placeholder="E-mail" tabindex="1">*/
/*                 </div> <!-- /.form-group -->*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="login-password" class="placeholder-hidden">Password</label>*/
/*                     <input type="password" name="_password" class="form-control" id="login-password" placeholder="Password" tabindex="2">*/
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

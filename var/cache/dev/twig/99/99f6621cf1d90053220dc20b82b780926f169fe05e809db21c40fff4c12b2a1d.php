<?php

/* @App/alert.html.twig */
class __TwigTemplate_73998697a7278e35686de48dae201bd578aef512e555eb51ff1c852bc1578ac0 extends Twig_Template
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
        $__internal_dffb5cc6a3c3c0a668c045fdbef2ae03dfed1c54979595cdd2c699d1ba44369b = $this->env->getExtension("native_profiler");
        $__internal_dffb5cc6a3c3c0a668c045fdbef2ae03dfed1c54979595cdd2c699d1ba44369b->enter($__internal_dffb5cc6a3c3c0a668c045fdbef2ae03dfed1c54979595cdd2c699d1ba44369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/alert.html.twig"));

        // line 1
        echo "<div class=\"alert alert-";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\">
    ";
        // line 2
        echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")));
        echo "
    <button class=\"close\" aria-hidden=\"true\" data-dismiss=\"alert\" type=\"button\">×</button>
    <div class=\"icon\"></div>
</div>";
        
        $__internal_dffb5cc6a3c3c0a668c045fdbef2ae03dfed1c54979595cdd2c699d1ba44369b->leave($__internal_dffb5cc6a3c3c0a668c045fdbef2ae03dfed1c54979595cdd2c699d1ba44369b_prof);

    }

    public function getTemplateName()
    {
        return "@App/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }
}
/* <div class="alert alert-{{ type }}">*/
/*     {{ message | trans | raw }}*/
/*     <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>*/
/*     <div class="icon"></div>*/
/* </div>*/

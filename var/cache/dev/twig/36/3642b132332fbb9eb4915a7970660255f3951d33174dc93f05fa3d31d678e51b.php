<?php

/* VanBookmarkBundle:Default:index.html.twig */
class __TwigTemplate_ff6449ee6452d2a1093fc70510f17e94de26991a20b4b58a9e47f830a8dc3d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/layout-cleanzone.html.twig", "VanBookmarkBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/layout-cleanzone.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1394760a20c40149cf111f4f47eba7f510c5a070a58506dd0b5f7f206e7f12b = $this->env->getExtension("native_profiler");
        $__internal_f1394760a20c40149cf111f4f47eba7f510c5a070a58506dd0b5f7f206e7f12b->enter($__internal_f1394760a20c40149cf111f4f47eba7f510c5a070a58506dd0b5f7f206e7f12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VanBookmarkBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1394760a20c40149cf111f4f47eba7f510c5a070a58506dd0b5f7f206e7f12b->leave($__internal_f1394760a20c40149cf111f4f47eba7f510c5a070a58506dd0b5f7f206e7f12b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8859a64d8317a6d0de3699dd78f3532fcb7245410c742706231bf72787a66e7 = $this->env->getExtension("native_profiler");
        $__internal_f8859a64d8317a6d0de3699dd78f3532fcb7245410c742706231bf72787a66e7->enter($__internal_f8859a64d8317a6d0de3699dd78f3532fcb7245410c742706231bf72787a66e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-head\">
        <h2>Blank Page</h2>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"#\">Home</a>
            </li>
            <li>
                <a href=\"#\">Category</a>
            </li>
            <li class=\"active\">Sub Category</li>
        </ol>
    </div>
    <div class=\"cl-mcont\">
        <div class=\"row\">
            <div class=\"col-md-8\">

                <div class=\"block-flat\">
                    <div class=\"header\">
                        <h2 class=\"title\">Manage my bookmarks</h2>
                    </div>
                    <div class=\"content\">
                        ";
        // line 26
        if ( !twig_test_empty((isset($context["bookmarks"]) ? $context["bookmarks"] : $this->getContext($context, "bookmarks")))) {
            // line 27
            echo "                            <table class=\"no-border\">
                                <thead class=\"no-border\">
                                <tr>
                                    <th>Name</th>
                                    <th>URI</th>
                                    <th width=\"41\"></th>
                                </tr>
                                </thead>
                                <tbody class=\"no-border-x no-border-y\">
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookmarks"]) ? $context["bookmarks"] : $this->getContext($context, "bookmarks")));
            foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
                // line 37
                echo "                                        <tr>
                                            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "name", array()), "html", null, true);
                echo "</td>
                                            <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "url", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "url", array()), "html", null, true);
                echo " <i class=\"fa fa-external-link\"></i></a></td>
                                            <td>
                                            <div class=\"btn-group\">
                                                <button data-toggle=\"dropdown\" class=\"btn btn-xs btn-tertiary dropdown-toggle\" type=\"button\" aria-expanded=\"true\">
                                                    <i class=\"fa fa-cogs\"></i>
                                                </button>
                                                <ul role=\"menu\" class=\"dropdown-menu\">
                                                    <li><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("van_bookmarks_update", array("id" => $this->getAttribute($context["bookmark"], "id", array()))), "html", null, true);
                echo "\">Update</a></li>
                                                    <li><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("van_bookmarks_delete", array("id" => $this->getAttribute($context["bookmark"], "id", array()))), "html", null, true);
                echo "\">Delete</a></li>
                                                </ul>
                                            </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                </tbody>
                            </table>
                        ";
        } else {
            // line 56
            echo "                            You have no bookmark yet.
                        ";
        }
        // line 58
        echo "                    </div>
                </div>

            </div>
            <div class=\"col-md-4\">
                <div class=\"block-flat\">
                    <div class=\"header\">
                        <h2 class=\"title\">Add a new bookmark</h2>
                    </div>
                    <div class=\"content\">
                        ";
        // line 68
        $this->loadTemplate("@VanBookmark/Default/form.html.twig", "VanBookmarkBundle:Default:index.html.twig", 68)->display($context);
        // line 69
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 76
        echo "
        ";
        // line 78
        echo "            ";
        // line 79
        echo "
            ";
        // line 81
        echo "                ";
        // line 82
        echo "                ";
        // line 83
        echo "            ";
        // line 84
        echo "        ";
        // line 85
        echo "
        ";
        // line 87
        echo "
            ";
        // line 89
        echo "
                ";
        // line 91
        echo "
                    ";
        // line 93
        echo "
                        ";
        // line 95
        echo "
                        ";
        // line 97
        echo "
                    ";
        // line 99
        echo "
                ";
        // line 101
        echo "
            ";
        // line 103
        echo "


            ";
        // line 107
        echo "
                ";
        // line 109
        echo "
                    ";
        // line 111
        echo "
                        ";
        // line 113
        echo "
                        ";
        // line 115
        echo "                            ";
        // line 116
        echo "                                ";
        // line 117
        echo "                                ";
        // line 118
        echo "                                    ";
        // line 119
        echo "                                    ";
        // line 120
        echo "                                    ";
        // line 121
        echo "                                ";
        // line 122
        echo "                                ";
        // line 123
        echo "                                ";
        // line 124
        echo "                                    ";
        // line 125
        echo "                                        ";
        // line 126
        echo "                                            ";
        // line 127
        echo "                                            ";
        // line 128
        echo "                                            ";
        // line 129
        echo "                                                ";
        // line 130
        echo "                                                    ";
        // line 131
        echo "                                                        ";
        // line 132
        echo "                                                    ";
        // line 133
        echo "                                                    ";
        // line 134
        echo "                                                        ";
        // line 135
        echo "                                                        ";
        // line 136
        echo "                                                    ";
        // line 137
        echo "                                                ";
        // line 138
        echo "                                            ";
        // line 139
        echo "                                        ";
        // line 140
        echo "                                    ";
        // line 141
        echo "                                ";
        // line 142
        echo "                            ";
        // line 143
        echo "                        ";
        // line 144
        echo "                            ";
        // line 145
        echo "                        ";
        // line 146
        echo "
                    ";
        // line 148
        echo "
                ";
        // line 150
        echo "
            ";
        // line 152
        echo "
        ";
        // line 154
        echo "
    ";
        
        $__internal_f8859a64d8317a6d0de3699dd78f3532fcb7245410c742706231bf72787a66e7->leave($__internal_f8859a64d8317a6d0de3699dd78f3532fcb7245410c742706231bf72787a66e7_prof);

    }

    public function getTemplateName()
    {
        return "VanBookmarkBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 154,  278 => 152,  275 => 150,  272 => 148,  269 => 146,  267 => 145,  265 => 144,  263 => 143,  261 => 142,  259 => 141,  257 => 140,  255 => 139,  253 => 138,  251 => 137,  249 => 136,  247 => 135,  245 => 134,  243 => 133,  241 => 132,  239 => 131,  237 => 130,  235 => 129,  233 => 128,  231 => 127,  229 => 126,  227 => 125,  225 => 124,  223 => 123,  221 => 122,  219 => 121,  217 => 120,  215 => 119,  213 => 118,  211 => 117,  209 => 116,  207 => 115,  204 => 113,  201 => 111,  198 => 109,  195 => 107,  190 => 103,  187 => 101,  184 => 99,  181 => 97,  178 => 95,  175 => 93,  172 => 91,  169 => 89,  166 => 87,  163 => 85,  161 => 84,  159 => 83,  157 => 82,  155 => 81,  152 => 79,  150 => 78,  147 => 76,  139 => 69,  137 => 68,  125 => 58,  121 => 56,  116 => 53,  104 => 47,  100 => 46,  88 => 39,  84 => 38,  81 => 37,  77 => 36,  66 => 27,  64 => 26,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@App/layout-cleanzone.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="page-head">*/
/*         <h2>Blank Page</h2>*/
/*         <ol class="breadcrumb">*/
/*             <li>*/
/*                 <a href="#">Home</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#">Category</a>*/
/*             </li>*/
/*             <li class="active">Sub Category</li>*/
/*         </ol>*/
/*     </div>*/
/*     <div class="cl-mcont">*/
/*         <div class="row">*/
/*             <div class="col-md-8">*/
/* */
/*                 <div class="block-flat">*/
/*                     <div class="header">*/
/*                         <h2 class="title">Manage my bookmarks</h2>*/
/*                     </div>*/
/*                     <div class="content">*/
/*                         {% if bookmarks is not empty %}*/
/*                             <table class="no-border">*/
/*                                 <thead class="no-border">*/
/*                                 <tr>*/
/*                                     <th>Name</th>*/
/*                                     <th>URI</th>*/
/*                                     <th width="41"></th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody class="no-border-x no-border-y">*/
/*                                     {% for bookmark in bookmarks %}*/
/*                                         <tr>*/
/*                                             <td>{{ bookmark.name }}</td>*/
/*                                             <td><a href="{{ bookmark.url }}" target="_blank">{{ bookmark.url }} <i class="fa fa-external-link"></i></a></td>*/
/*                                             <td>*/
/*                                             <div class="btn-group">*/
/*                                                 <button data-toggle="dropdown" class="btn btn-xs btn-tertiary dropdown-toggle" type="button" aria-expanded="true">*/
/*                                                     <i class="fa fa-cogs"></i>*/
/*                                                 </button>*/
/*                                                 <ul role="menu" class="dropdown-menu">*/
/*                                                     <li><a href="{{ path("van_bookmarks_update", {"id": bookmark.id}) }}">Update</a></li>*/
/*                                                     <li><a href="{{ path("van_bookmarks_delete", {"id": bookmark.id}) }}">Delete</a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         {% else %}*/
/*                             You have no bookmark yet.*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <div class="block-flat">*/
/*                     <div class="header">*/
/*                         <h2 class="title">Add a new bookmark</h2>*/
/*                     </div>*/
/*                     <div class="content">*/
/*                         {% include '@VanBookmark/Default/form.html.twig' %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {#<div class="container">#}*/
/* */
/*         {#<div class="page-header">#}*/
/*             {#<h3 class="page-title">My bookmarks</h3>#}*/
/* */
/*             {#<ol class="breadcrumb">#}*/
/*                 {#<li><a href="./">Dashboard</a></li>#}*/
/*                 {#<li class="active">My bookmarks</li>#}*/
/*             {#</ol>#}*/
/*         {#</div> <!-- /.page-header -->#}*/
/* */
/*         {#<div class="row">#}*/
/* */
/*             {#<div class="col-sm-4 col-sm-push-8">#}*/
/* */
/*                 {#<div class="portlet portlet-boxed">#}*/
/* */
/*                     {#<div class="portlet-body">#}*/
/* */
/*                         {#<h5>Add a new bookmark</h5>#}*/
/* */
/*                         {#{% include '@VanBookmark/Default/form.html.twig' %}#}*/
/* */
/*                     {#</div> <!-- /.portlet-body -->#}*/
/* */
/*                 {#</div> <!-- /.portlet -->#}*/
/* */
/*             {#</div> <!-- /.col -->#}*/
/* */
/* */
/* */
/*             {#<div class="col-sm-8 col-sm-pull-4">#}*/
/* */
/*                 {#<div class="portlet portlet-boxed">#}*/
/* */
/*                     {#<div class="portlet-body">#}*/
/* */
/*                         {#<h5>Manage my bookmarks</h5>#}*/
/* */
/*                         {#{% if bookmarks is not empty %}#}*/
/*                             {#<table class="table">#}*/
/*                                 {#<thead>#}*/
/*                                 {#<tr>#}*/
/*                                     {#<th>Name</th>#}*/
/*                                     {#<th>URI</th>#}*/
/*                                     {#<th width="41"></th>#}*/
/*                                 {#</tr>#}*/
/*                                 {#</thead>#}*/
/*                                 {#<tbody>#}*/
/*                                     {#{% for bookmark in bookmarks %}#}*/
/*                                         {#<tr>#}*/
/*                                             {#<td>{{ bookmark.name }}</td>#}*/
/*                                             {#<td><a href="{{ bookmark.url }}" target="_blank">{{ bookmark.url }} <i class="fa fa-external-link"></i></a></td>#}*/
/*                                             {#<td>#}*/
/*                                                 {#<div class="btn-group">#}*/
/*                                                     {#<button data-toggle="dropdown" class="btn btn-xs btn-tertiary dropdown-toggle" type="button" aria-expanded="true">#}*/
/*                                                         {#<i class="fa fa-cogs"></i>#}*/
/*                                                     {#</button>#}*/
/*                                                     {#<ul role="menu" class="dropdown-menu">#}*/
/*                                                         {#<li><a href="{{ path("van_bookmarks_update", {"id": bookmark.id}) }}">Update</a></li>#}*/
/*                                                         {#<li><a href="{{ path("van_bookmarks_delete", {"id": bookmark.id}) }}">Delete</a></li>#}*/
/*                                                     {#</ul>#}*/
/*                                                 {#</div>#}*/
/*                                             {#</td>#}*/
/*                                         {#</tr>#}*/
/*                                     {#{% endfor %}#}*/
/*                                 {#</tbody>#}*/
/*                             {#</table>#}*/
/*                         {#{% else %}#}*/
/*                             {#You have no bookmark yet.#}*/
/*                         {#{% endif %}#}*/
/* */
/*                     {#</div> <!-- /.portlet-body -->#}*/
/* */
/*                 {#</div> <!-- /.portlet -->#}*/
/* */
/*             {#</div> <!-- /.col -->#}*/
/* */
/*         {#</div> <!-- /.row -->#}*/
/* */
/*     {#</div>#}*/
/* {% endblock content %}*/

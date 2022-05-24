<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/view/template/marketplace/marketplace_list.twig */
class __TwigTemplate_a60914de7af59f12e74e7bbbf21e3e97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">";
        // line 5
        if ( !($context["error_signature"] ?? null)) {
            // line 6
            echo "          <button type=\"button\" id=\"button-opencart\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-cog\"></i></button>
        ";
        } else {
            // line 8
            echo "          <button type=\"button\" id=\"button-opencart\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fas fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 9
        echo "</div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-puzzle-piece\"></i> ";
        // line 20
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <div id=\"extension-filter\" class=\"input-group dropdown\">
              <input type=\"text\" name=\"filter_search\" value=\"";
        // line 25
        echo ($context["filter_search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\"/>
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "value", [], "any", false, false, false, 27) == ($context["filter_category"] ?? null))) {
                // line 28
                echo "                  <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\">";
                echo ($context["text_category"] ?? null);
                echo " (";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 28);
                echo ") <i class=\"fas fa-caret-down\"></i></button>
                ";
            }
            // line 30
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "              <div class=\"dropdown-menu dropdown-menu-right\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            echo "                  <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
            echo "\" class=\"dropdown-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 33);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </div>
              <button type=\"button\" id=\"button-filter\" data-bs-toggle=\"tooltip\" title=\"";
        // line 36
        echo ($context["button_filter"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-filter\"></i></button>
            </div>
            <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 38
        echo ($context["filter_category_id"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        echo ($context["filter_download_id"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_rating\" value=\"";
        echo ($context["filter_rating"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_license\" value=\"";
        echo ($context["filter_license"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_partner\" value=\"";
        echo ($context["filter_partner"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"sort\" value=\"";
        echo ($context["sort"] ?? null);
        echo "\" class=\"form-control\"/>
          </div>
        </div>
        <br/>
        <div class=\"row mb-4\">
          <div class=\"col-sm-auto mr-sm-auto mb-2 mb-lg-0\">
            <div class=\"btn-group\">";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["licenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 45
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["license"], "value", [], "any", false, false, false, 45) == ($context["filter_license"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 45);
                echo "\" class=\"btn btn-light active\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 45);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 45);
                echo "\" class=\"btn btn-light\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 45);
                echo "</a>";
            }
            // line 46
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"col-xl-3 col-lg-5 col-sm-auto\">
            <div class=\"input-group float-end\">
              <div class=\"input-group-text\"><i class=\"fas fa-sort-amount-down\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-select\">
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 53
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 53);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 53) == ($context["sort"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 53);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "              </select>
            </div>
          </div>
        </div>
        <div>
          ";
        // line 60
        if (($context["promotions"] ?? null)) {
            // line 61
            echo "            <h3>";
            echo ($context["text_featured"] ?? null);
            echo "</h3>
            <div class=\"row\">
              ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 64
                echo "                ";
                if ($context["extension"]) {
                    // line 65
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\">

                        <a href=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 69);
                    echo "\">
                          <div class=\"extension-description\">

                          </div>
                          <img src=\"";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 73);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 73);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 73);
                    echo "\" class=\"img-fluid\"/></a></div>



                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 78);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 78);
                    echo "</a></h4>
                        ";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 79);
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 83
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 83) >= $context["i"])) {
                            echo "<i class=\"fas fa-star\"></i>";
                        } else {
                            echo "<i class=\"far fa-star\"></i>";
                        }
                        // line 84
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                          <div class=\"col-6\">
                            <div class=\"text-end\">";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 86);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 93
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "            </div>
            <hr/>
          ";
        }
        // line 97
        echo "          ";
        if (($context["extensions"] ?? null)) {
            // line 98
            echo "            <div class=\"row\">
              ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 100
                echo "                ";
                if ($context["extension"]) {
                    // line 101
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 103);
                    echo "\">
                          <div class=\"extension-description\"></div>
                          <img src=\"";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 105);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 105);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 105);
                    echo "\" class=\"img-fluid\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 107);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 107);
                    echo "</a></h4>
                        ";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 108);
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 112) >= $context["i"])) {
                            echo "<i class=\"fas fa-star\"></i>";
                        } else {
                            echo "<i class=\"fas fa-star-o\"></i>";
                        }
                        // line 113
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                          <div class=\"col-6\">
                            <div class=\"text-end\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 115);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 122
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
          ";
        } else {
            // line 124
            echo "            <p class=\"text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
          ";
        }
        // line 126
        echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 128
        echo ($context["pagination"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
    \$('#modal-opencart').remove();

    \$.ajax({
        url: 'index.php?route=marketplace/api&user_token=";
        // line 139
        echo ($context["user_token"] ?? null);
        echo "',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-opencart').prop('disabled', true).addClass('loading');
        },
        complete: function() {
            \$('#button-opencart').prop('disabled', false).removeClass('loading');
        },
        success: function(html) {
            \$('body').append(html);

            \$('#modal-opencart').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
    var url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 160
        echo ($context["user_token"] ?? null);
        echo "';

    var input = \$('#extension-filter :input');

    for (i = 0; i < input.length; i++) {
        if (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
            url += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
        }
    }

    location = url;
});

\$('#input-search').keydown(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();

        \$('#button-filter').trigger('click');
    }
});
//--></script>
";
        // line 181
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/marketplace_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 181,  454 => 160,  430 => 139,  416 => 128,  412 => 126,  406 => 124,  397 => 122,  385 => 115,  376 => 113,  369 => 112,  365 => 111,  359 => 108,  353 => 107,  344 => 105,  339 => 103,  335 => 101,  332 => 100,  328 => 99,  325 => 98,  322 => 97,  317 => 94,  311 => 93,  299 => 86,  290 => 84,  283 => 83,  279 => 82,  273 => 79,  267 => 78,  255 => 73,  248 => 69,  242 => 65,  239 => 64,  235 => 63,  229 => 61,  227 => 60,  220 => 55,  205 => 53,  201 => 52,  188 => 46,  173 => 45,  169 => 44,  150 => 38,  145 => 36,  142 => 35,  131 => 33,  127 => 32,  124 => 31,  118 => 30,  110 => 28,  107 => 27,  103 => 26,  97 => 25,  89 => 20,  82 => 15,  71 => 13,  67 => 12,  62 => 10,  59 => 9,  53 => 8,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/marketplace_list.twig", "/home/mktech/www/Ecommerce/public_html/admin/view/template/marketplace/marketplace_list.twig");
    }
}

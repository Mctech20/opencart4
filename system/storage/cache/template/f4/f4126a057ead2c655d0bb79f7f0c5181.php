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

/* catalog/view/template/product/search.twig */
class __TwigTemplate_4fac1c8de57af7625a5c2ecfbcd8d027 extends Template
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
        echo "
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col\"><label for=\"input-search\" class=\"col-form-label\">";
        // line 13
        echo ($context["entry_search"] ?? null);
        echo "</label></div>
      </div>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 17
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control mb-1\"/>
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\"";
        // line 19
        if (($context["description"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-description\" class=\"form-check-label\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
          </div>
        </div>
        <div class=\"col\">
          <select name=\"category_id\" id=\"input-category\" class=\"form-select mb-1\">
            <option value=\"0\">";
        // line 24
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 26
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 26);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 26) == ($context["category_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 26);
            echo "</option>
              ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 28
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 28);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 28) == ($context["category_id"] ?? null))) {
                    echo " selected";
                }
                echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 28);
                echo "</option>
                ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 30
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 30);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 30) == ($context["category_id"] ?? null))) {
                        echo " selected";
                    }
                    echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 30);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          </select>
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\"";
        // line 36
        if (($context["sub_category"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-sub-category\" class=\"form-check-label\">";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <button type=\"button\" id=\"button-search\" class=\"btn btn-primary\">";
        // line 42
        echo ($context["button_search"] ?? null);
        echo "</button>
        </div>
      </div>
      <hr/>
      <h2>";
        // line 46
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 47
        if (($context["products"] ?? null)) {
            // line 48
            echo "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 51
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fas fa-exchange-alt\"></i> <span class=\"d-inline d-md-none d-lg-inline\">";
            echo ($context["text_compare"] ?? null);
            echo "</span></a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 56
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fas fa-th-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 57
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fas fa-th\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group\">
                <label for=\"input-sort\" class=\"input-group-text\">";
            // line 63
            echo ($context["text_sort"] ?? null);
            echo "</label> <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                  ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 65
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 65);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 65) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 65);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                </select>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group\">
                <label for=\"input-limit\" class=\"input-group-text\">";
            // line 74
            echo ($context["text_limit"] ?? null);
            echo "</label> <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                  ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 76
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 76);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 76) == ($context["limit"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 76);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </select>
              </div>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 85
                echo "            <div class=\"col\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 89
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 90
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 93
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 95
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 97
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function () {
    url = 'index.php?route=product/search&language=";
        // line 102
        echo ($context["language"] ?? null);
        echo "';

    var search = \$('#input-search').prop('value');

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var filter_description = \$('#input-description:checked').prop('value');

    if (filter_description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').bind('keydown', function (e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function () {
    \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
});

\$('#input-category').trigger('change');
//--></script>
";
        // line 143
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 143,  334 => 102,  326 => 97,  320 => 95,  314 => 93,  308 => 90,  304 => 89,  300 => 87,  291 => 85,  287 => 84,  279 => 78,  264 => 76,  260 => 75,  256 => 74,  247 => 67,  232 => 65,  228 => 64,  224 => 63,  215 => 57,  211 => 56,  201 => 51,  196 => 48,  194 => 47,  190 => 46,  183 => 42,  170 => 36,  166 => 34,  160 => 33,  154 => 32,  139 => 30,  135 => 29,  124 => 28,  120 => 27,  109 => 26,  105 => 25,  101 => 24,  89 => 19,  82 => 17,  75 => 13,  70 => 11,  66 => 10,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/search.twig", "/home/mktech/www/Ecommerce/public_html/catalog/view/template/product/search.twig");
    }
}

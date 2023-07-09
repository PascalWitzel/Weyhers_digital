<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog.html.twig */
class __TwigTemplate_085a3cd3058243a28b5897428bf4b6bfad9848ad47c1803237a350e3642cb960 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 5
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 6
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 7
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 16
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scopedQuerySelectorShim.min.js"], "method");
    }

    // line 21
    public function block_hero($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 22)->display(twig_array_merge($context, ["id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", []), "hero_image" => ($context["blog_image"] ?? null)]));
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        // line 26
        echo "
";
        // line 27
        $context["k_logo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/images"], "method"), "media", []), "Komoot_Logo_Secondary_CMYK.png", [], "array");
        echo "                    

<div id=\"komoot\">     

        <a id=\"lade\" href=\"https://www.komoot.de/tour/1099994512/embed\" target=\"iframe\">Lade Komoot</a>
        <div id=\"k_logo\">
        <img  ";
        // line 33
        echo ($context["k_logo"] ?? null);
        echo "         
        </div>
    <iframe name=\"iframe\" src=\"about:blank\" width=\"100%\" height=\"440\" frameborder=\"0\" scrolling=\"no\"></iframe>
</div>

    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container ";
        // line 39
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 41
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 42
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 42)->display($context);
            // line 43
            echo "        ";
        }
        // line 44
        echo "
        ";
        // line 45
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 45, "1234107677")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 66
        echo "        </section>
    </section>
    <script>

        document.getElementById(\"lade\").addEventListener(\"click\", laden);
        var l = document.getElementById(\"lade\");
        var k = document.getElementById(\"k_logo\");

        function laden() {            
            l.style.display = 'none';
            k.style.display = 'none';
        }


        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))        

    </script>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 66,  131 => 45,  128 => 44,  125 => 43,  122 => 42,  120 => 41,  115 => 39,  106 => 33,  97 => 27,  94 => 26,  91 => 25,  86 => 22,  83 => 21,  78 => 17,  76 => 16,  71 => 15,  68 => 14,  61 => 11,  58 => 10,  55 => 9,  50 => 1,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  40 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}


{% block hero %}
    {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
{% endblock %}

{% block body %}

{% set k_logo = page.find('/images').media['Komoot_Logo_Secondary_CMYK.png'] %}                    

<div id=\"komoot\">     

        <a id=\"lade\" href=\"https://www.komoot.de/tour/1099994512/embed\" target=\"iframe\">Lade Komoot</a>
        <div id=\"k_logo\">
        <img  {{ k_logo|raw }}         
        </div>
    <iframe name=\"iframe\" src=\"about:blank\" width=\"100%\" height=\"440\" frameborder=\"0\" scrolling=\"no\"></iframe>
</div>

    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        </section>
    </section>
    <script>

        document.getElementById(\"lade\").addEventListener(\"click\", laden);
        var l = document.getElementById(\"lade\");
        var k = document.getElementById(\"k_logo\");

        function laden() {            
            l.style.display = 'none';
            k.style.display = 'none';
        }


        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))        

    </script>
{% endblock %}



", "blog.html.twig", "C:\\xampp\\htdocs\\weyhers\\grav-admin\\user\\themes\\weyhers-digital\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_085a3cd3058243a28b5897428bf4b6bfad9848ad47c1803237a350e3642cb960___1234107677 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 45
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 45);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_item($context, array $blocks = [])
    {
        // line 47
        echo "
                <div class=\"bricklayer\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 50
            echo "                    ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 50)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 51
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </div>

                ";
        // line 54
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 55
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 56
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 56)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 57
            echo "                    </div>
                ";
        }
        // line 59
        echo "
            ";
    }

    // line 62
    public function block_sidebar($context, array $blocks = [])
    {
        // line 63
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 63)->display($context);
        // line 64
        echo "            ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 64,  361 => 63,  358 => 62,  353 => 59,  349 => 57,  347 => 56,  344 => 55,  342 => 54,  338 => 52,  324 => 51,  321 => 50,  304 => 49,  300 => 47,  297 => 46,  287 => 45,  133 => 66,  131 => 45,  128 => 44,  125 => 43,  122 => 42,  120 => 41,  115 => 39,  106 => 33,  97 => 27,  94 => 26,  91 => 25,  86 => 22,  83 => 21,  78 => 17,  76 => 16,  71 => 15,  68 => 14,  61 => 11,  58 => 10,  55 => 9,  50 => 1,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  40 => 3,  38 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}


{% block hero %}
    {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
{% endblock %}

{% block body %}

{% set k_logo = page.find('/images').media['Komoot_Logo_Secondary_CMYK.png'] %}                    

<div id=\"komoot\">     

        <a id=\"lade\" href=\"https://www.komoot.de/tour/1099994512/embed\" target=\"iframe\">Lade Komoot</a>
        <div id=\"k_logo\">
        <img  {{ k_logo|raw }}         
        </div>
    <iframe name=\"iframe\" src=\"about:blank\" width=\"100%\" height=\"440\" frameborder=\"0\" scrolling=\"no\"></iframe>
</div>

    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        </section>
    </section>
    <script>

        document.getElementById(\"lade\").addEventListener(\"click\", laden);
        var l = document.getElementById(\"lade\");
        var k = document.getElementById(\"k_logo\");

        function laden() {            
            l.style.display = 'none';
            k.style.display = 'none';
        }


        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))        

    </script>
{% endblock %}



", "blog.html.twig", "C:\\xampp\\htdocs\\weyhers\\grav-admin\\user\\themes\\weyhers-digital\\templates\\blog.html.twig");
    }
}

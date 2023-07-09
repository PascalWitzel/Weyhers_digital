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

/* item.html.twig */
class __TwigTemplate_ac0326d779d7130177ad8f01ac39fd52bb8995858b61dde46a4bcd53c75fd82d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 3
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 4
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 6
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        // line 11
        echo "<h2 id=\"page_title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h2>            
<section id=\"body-wrapper item_Content\" class=\"section blog-listing\">
    <section class=\"container ";
        // line 13
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 15
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 16
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 16)->display($context);
            // line 17
            echo "        ";
        }
        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("item.html.twig", "item.html.twig", 19, "100393593")->display($context);
        // line 27
        echo "
    </section>
</section>


<script type=\"module\">
    
    document.getElementById(\"mehr\").addEventListener(\"click\", myFunction);
    var change = document.getElementById(\"mehr\").firstChild;
    const left = document.querySelector(\"img[src*='#bild_links']\");
    const right = document.querySelector(\"img[src*='#bild_rechts']\");
    const text = document.getElementsByClassName(\"text\");    
    var show = true;

    function myFunction() {
        
        if (show) {
            for (let i = 0; i < text.length; i++){
            text[i].style.display = 'block';
            }                
            left.style.display = 'block';
            right.style.display = 'block';            
            show = !show;
            change.data = \"Schließen\";
        } else {
            for (let i = 0; i < text.length; i++){
            text[i].style.display = 'none';
            }                
            left.style.display = 'none';
            right.style.display = 'none';
            document.getElementById(\"mehr\")
            show = !show;
            change.data = \"Erfahre mehr\";
        }
        
}

console.log(\"Hello there!\");

</script>

";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  64 => 15,  59 => 13,  53 => 11,  50 => 10,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
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
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}
{% set hero_image_name = page.header.hero_image %}



{% block body %}
<h2 id=\"page_title\">{{ page.title }}</h2>            
<section id=\"body-wrapper item_Content\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item.html.twig' %}
            {% endblock %}
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>


<script type=\"module\">
    
    document.getElementById(\"mehr\").addEventListener(\"click\", myFunction);
    var change = document.getElementById(\"mehr\").firstChild;
    const left = document.querySelector(\"img[src*='#bild_links']\");
    const right = document.querySelector(\"img[src*='#bild_rechts']\");
    const text = document.getElementsByClassName(\"text\");    
    var show = true;

    function myFunction() {
        
        if (show) {
            for (let i = 0; i < text.length; i++){
            text[i].style.display = 'block';
            }                
            left.style.display = 'block';
            right.style.display = 'block';            
            show = !show;
            change.data = \"Schließen\";
        } else {
            for (let i = 0; i < text.length; i++){
            text[i].style.display = 'none';
            }                
            left.style.display = 'none';
            right.style.display = 'none';
            document.getElementById(\"mehr\")
            show = !show;
            change.data = \"Erfahre mehr\";
        }
        
}

console.log(\"Hello there!\");

</script>

{% endblock %}
", "item.html.twig", "C:\\xampp\\htdocs\\weyhers\\grav-admin\\user\\themes\\weyhers-digital\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_ac0326d779d7130177ad8f01ac39fd52bb8995858b61dde46a4bcd53c75fd82d___100393593 extends \Twig\Template
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
        // line 19
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "item.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_item($context, array $blocks = [])
    {
        // line 21
        echo "                ";
        $this->loadTemplate("partials/blog-item.html.twig", "item.html.twig", 21)->display($context);
        // line 22
        echo "            ";
    }

    // line 23
    public function block_sidebar($context, array $blocks = [])
    {
        // line 24
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 24)->display($context);
        // line 25
        echo "            ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 25,  258 => 24,  255 => 23,  251 => 22,  248 => 21,  245 => 20,  235 => 19,  77 => 27,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  64 => 15,  59 => 13,  53 => 11,  50 => 10,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
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
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}
{% set hero_image_name = page.header.hero_image %}



{% block body %}
<h2 id=\"page_title\">{{ page.title }}</h2>            
<section id=\"body-wrapper item_Content\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item.html.twig' %}
            {% endblock %}
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>


<script type=\"module\">
    
    document.getElementById(\"mehr\").addEventListener(\"click\", myFunction);
    var change = document.getElementById(\"mehr\").firstChild;
    const left = document.querySelector(\"img[src*='#bild_links']\");
    const right = document.querySelector(\"img[src*='#bild_rechts']\");
    const text = document.getElementsByClassName(\"text\");    
    var show = true;

    function myFunction() {
        
        if (show) {
            for (let i = 0; i < text.length; i++){
            text[i].style.display = 'block';
            }                
            left.style.display = 'block';
            right.style.display = 'block';            
            show = !show;
            change.data = \"Schließen\";
        } else {
            for (let i = 0; i < text.length; i++){
            text[i].style.display = 'none';
            }                
            left.style.display = 'none';
            right.style.display = 'none';
            document.getElementById(\"mehr\")
            show = !show;
            change.data = \"Erfahre mehr\";
        }
        
}

console.log(\"Hello there!\");

</script>

{% endblock %}
", "item.html.twig", "C:\\xampp\\htdocs\\weyhers\\grav-admin\\user\\themes\\weyhers-digital\\templates\\item.html.twig");
    }
}

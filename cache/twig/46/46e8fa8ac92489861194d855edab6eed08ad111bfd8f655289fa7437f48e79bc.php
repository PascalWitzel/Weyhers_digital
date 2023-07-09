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

/* partials/footer.html.twig */
class __TwigTemplate_efa993e8ed38f97aafb70636a875f15c73806a95cfaae1e1dce304d12c44a2df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"footer\" >
    <section class=\"container_footer ";
        // line 2
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
       <div class=\"container_footer\" >
        <p><a href=\"datenschutz\">Datenschutz</a></p>
        <p><a href=\"impressum\">Impressum</a></p>
        </div>        
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" >
    <section class=\"container_footer {{ grid_size }}\">
       <div class=\"container_footer\" >
        <p><a href=\"datenschutz\">Datenschutz</a></p>
        <p><a href=\"impressum\">Impressum</a></p>
        </div>        
    </section>
</section>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\weyhers\\grav-admin\\user\\themes\\weyhers-digital\\templates\\partials\\footer.html.twig");
    }
}

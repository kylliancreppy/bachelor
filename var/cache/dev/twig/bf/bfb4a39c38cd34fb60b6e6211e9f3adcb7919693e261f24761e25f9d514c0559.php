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

/* base.html.twig */
class __TwigTemplate_59433302971641e2ad2f9cf29a113c5038046fdab4c9f43f16d8d4bf3a0350c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.css\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
    <nav class=\"navbar shadow-1 primary\" aria-label=\"example navbar\">
        <a href=\"#\" class=\"navbar-logo hide-sm-down\">
            <img src=\"https://useaxentix.com/img/axentix.svg\" class=\"py-3\" alt=\"Axentix\">
        </a>

        <a href=\"#\" class=\"navbar-brand\">Deskount</a>

        <div class=\"navbar-menu ml-auto hide-xs text-grey text-light-3 font-w600 hover-text-dark\">
            <a class=\"navbar-link\" href=\"#\">Home</a>
            <a class=\"navbar-link\" href=\"#\">Company</a>
            <a class=\"navbar-link\" href=\"#\">Pricing</a>
            <a class=\"navbar-link\" href=\"#\">Contact</a>
        </div>

        <button class=\"btn transparent text-white hide-sm-up font-s5 ml-auto hide-sm-up\" aria-label=\"Menu button\">
            <span class=\"iconify-inline\" data-icon=\"mdi:menu\"></span>
        </button>
    </nav>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    </body>
    <footer class=\"footer primary\">
        Copyright © 2022 - Example
    </footer>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  134 => 11,  127 => 10,  115 => 8,  102 => 5,  90 => 34,  88 => 33,  65 => 12,  63 => 10,  58 => 9,  55 => 8,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.css\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
    <nav class=\"navbar shadow-1 primary\" aria-label=\"example navbar\">
        <a href=\"#\" class=\"navbar-logo hide-sm-down\">
            <img src=\"https://useaxentix.com/img/axentix.svg\" class=\"py-3\" alt=\"Axentix\">
        </a>

        <a href=\"#\" class=\"navbar-brand\">Deskount</a>

        <div class=\"navbar-menu ml-auto hide-xs text-grey text-light-3 font-w600 hover-text-dark\">
            <a class=\"navbar-link\" href=\"#\">Home</a>
            <a class=\"navbar-link\" href=\"#\">Company</a>
            <a class=\"navbar-link\" href=\"#\">Pricing</a>
            <a class=\"navbar-link\" href=\"#\">Contact</a>
        </div>

        <button class=\"btn transparent text-white hide-sm-up font-s5 ml-auto hide-sm-up\" aria-label=\"Menu button\">
            <span class=\"iconify-inline\" data-icon=\"mdi:menu\"></span>
        </button>
    </nav>

        {% block body %}{% endblock %}
    </body>
    <footer class=\"footer primary\">
        Copyright © 2022 - Example
    </footer>
</html>
", "base.html.twig", "/appli/bachelor/templates/base.html.twig");
    }
}

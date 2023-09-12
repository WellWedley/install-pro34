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

/* home.html.twig */
class __TwigTemplate_bf4a047f6c1fa07b1148865556417bf6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "home.html.twig", 1)->display($context);
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
\t<link rel=\"stylesheet\" href=\"css/home.css\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
\t<div class=\"carousel-container\">
\t\t<div class=\"carousel-opacity\">

\t\t\t<div class=\"telesurv-container\">
\t\t\t\t<h1 class=\"telesurv-title\">TÉLÉSURVEILLANCE 24H/24 7J/7
\t\t\t\t</h1>
\t\t\t\t<div class=\"diapo-sentence\">
\t\t\t\t\t<h3 class=\"first-sentence\">Pour vous protéger des cambriolages
\t\t\t\t\t</h3>
\t\t\t\t\t<h4 class=\"second-sentence\">

\t\t\t\t\t\tFrais d'installation offerts.
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"button-container\">
\t\t\t\t\t<button href=\"#devis\" class=\"demande-devis\" onclick=\"#devis-form\">Demande de devis</button>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>


\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 11,  89 => 10,  76 => 5,  66 => 4,  56 => 10,  53 => 9,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'base.html.twig' %}


{% block stylesheets %}

\t<link rel=\"stylesheet\" href=\"css/home.css\">

{% endblock %}

{% block body %}

\t<div class=\"carousel-container\">
\t\t<div class=\"carousel-opacity\">

\t\t\t<div class=\"telesurv-container\">
\t\t\t\t<h1 class=\"telesurv-title\">TÉLÉSURVEILLANCE 24H/24 7J/7
\t\t\t\t</h1>
\t\t\t\t<div class=\"diapo-sentence\">
\t\t\t\t\t<h3 class=\"first-sentence\">Pour vous protéger des cambriolages
\t\t\t\t\t</h3>
\t\t\t\t\t<h4 class=\"second-sentence\">

\t\t\t\t\t\tFrais d'installation offerts.
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"button-container\">
\t\t\t\t\t<button href=\"#devis\" class=\"demande-devis\" onclick=\"#devis-form\">Demande de devis</button>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>


\t</div>
{% endblock %}
", "home.html.twig", "/Users/romainc/Documents/Projets /WebBoxfactory/installpro34/installpro34/templates/home.html.twig");
    }
}

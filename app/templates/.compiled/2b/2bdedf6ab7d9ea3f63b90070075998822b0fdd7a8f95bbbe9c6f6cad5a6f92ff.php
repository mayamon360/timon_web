<?php

/* home/home.twig */
class __TwigTemplate_23b1874031220ff9e514a74fbe8bc4840ea882885243bddc9f602cfadbd8a2e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "home/home.twig", 1);
        $this->blocks = array(
            'appHeader' => array($this, 'block_appHeader'),
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appHeader($context, array $blocks = array())
    {
        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"assets/plantilla/inicio.css\">
";
    }

    // line 8
    public function block_appBody($context, array $blocks = array())
    {
        // line 9
        echo "
<main>

\t";
        // line 12
        $this->loadTemplate("home/slides", "home/home.twig", 12)->display($context);
        // line 13
        echo "
\t";
        // line 14
        if (twig_test_empty(($context["novedades"] ?? null))) {
            // line 15
            echo "\t";
        } else {
            // line 16
            echo "\t<section class=\"container-fluid p-0 pt-5 pb-2 mt-0 mt-sm-5 bg-light destacados\">
\t\t<div class=\"container px-4 p-sm-0\">
\t\t\t<div class=\"row flex align-items-center\">
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h1 class=\"m-0 p-0 animated zoomIn titulo_destacado\">Lo más nuevo</h1>
\t\t\t\t\t<p class=\"m-0 animated fadeInRight descripcion_destacado\">Conoce nuestras novedades</p>
\t\t\t\t\t<div class=\"my-1 animated zoomInLeft separador separador_color\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-5 text-right\">
\t\t\t\t\t<a class=\"animated zoomIn enlace_negro\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "build", array()), "url", array()), "html", null, true);
            echo "destacados/novedades\">
\t\t\t\t\t\t<i class=\"fas fa-angle-right mr-1 animated fadeInLeft infinite\"></i> Ver todos
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container px-2 px-sm-0 my-4\">
    \t\t<div class=\"owl-carousel carrusel_libros_nuevos owl-theme\">
    \t\t";
            // line 33
            echo ($context["novedades"] ?? null);
            echo "
    \t\t</div>
    \t</div>
\t</section>
\t";
        }
        // line 38
        echo "
\t";
        // line 39
        if (twig_test_empty(($context["mas_vendidos"] ?? null))) {
            // line 40
            echo "\t";
        } else {
            // line 41
            echo "\t<section class=\"container-fluid p-0 pt-5 destacados\">
\t\t<div class=\"container px-4 p-sm-0\">
\t\t\t<div class=\"row flex align-items-center\">
\t\t\t\t<div class=\"col-7 pr-0\">
\t\t\t\t\t<h1 class=\"m-0 p-0 animated zoomIn titulo_destacado\">Lo más vendido</h1>
\t\t\t\t\t<p class=\"m-0 animated fadeInRight descripcion_destacado\">Descubre los 100 libros preferidos por nuestros lectores</p>
\t\t\t\t\t<div class=\"my-1 animated zoomInLeft separador separador_color\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-5 text-right\">
\t\t\t\t\t<a class=\"animated zoomIn enlace_negro\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "build", array()), "url", array()), "html", null, true);
            echo "destacados/mas-vendidos\">
\t\t\t\t\t\t<i class=\"fas fa-angle-right mr-1 animated fadeInLeft infinite\"></i> Ver todos
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class=\"container px-2 px-sm-0 my-4\">
\t\t<div class=\"owl-carousel carrusel_libros_mas_vendidos owl-theme\">
\t\t";
            // line 59
            echo ($context["mas_vendidos"] ?? null);
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 63
        echo "
\t<!--<div class=\"container p-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>-->

</main>

";
    }

    // line 88
    public function block_appFooter($context, array $blocks = array())
    {
        // line 89
        echo "\t<script src=\"assets/jscontrollers/inicio/inicio.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 89,  151 => 88,  124 => 63,  117 => 59,  105 => 50,  94 => 41,  91 => 40,  89 => 39,  86 => 38,  78 => 33,  67 => 25,  56 => 16,  53 => 15,  51 => 14,  48 => 13,  46 => 12,  41 => 9,  38 => 8,  33 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'overall/layout' %}

{% block appHeader %}
{# Estilos personalizados para la página #}
\t<link rel=\"stylesheet\" href=\"assets/plantilla/inicio.css\">
{% endblock %}

{% block appBody %}

<main>

\t{% include 'home/slides' %}

\t{% if novedades is empty %}
\t{% else %}
\t<section class=\"container-fluid p-0 pt-5 pb-2 mt-0 mt-sm-5 bg-light destacados\">
\t\t<div class=\"container px-4 p-sm-0\">
\t\t\t<div class=\"row flex align-items-center\">
\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t<h1 class=\"m-0 p-0 animated zoomIn titulo_destacado\">Lo más nuevo</h1>
\t\t\t\t\t<p class=\"m-0 animated fadeInRight descripcion_destacado\">Conoce nuestras novedades</p>
\t\t\t\t\t<div class=\"my-1 animated zoomInLeft separador separador_color\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-5 text-right\">
\t\t\t\t\t<a class=\"animated zoomIn enlace_negro\" href=\"{{config.build.url}}destacados/novedades\">
\t\t\t\t\t\t<i class=\"fas fa-angle-right mr-1 animated fadeInLeft infinite\"></i> Ver todos
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container px-2 px-sm-0 my-4\">
    \t\t<div class=\"owl-carousel carrusel_libros_nuevos owl-theme\">
    \t\t{{novedades|raw}}
    \t\t</div>
    \t</div>
\t</section>
\t{% endif %}

\t{% if mas_vendidos is empty %}
\t{% else %}
\t<section class=\"container-fluid p-0 pt-5 destacados\">
\t\t<div class=\"container px-4 p-sm-0\">
\t\t\t<div class=\"row flex align-items-center\">
\t\t\t\t<div class=\"col-7 pr-0\">
\t\t\t\t\t<h1 class=\"m-0 p-0 animated zoomIn titulo_destacado\">Lo más vendido</h1>
\t\t\t\t\t<p class=\"m-0 animated fadeInRight descripcion_destacado\">Descubre los 100 libros preferidos por nuestros lectores</p>
\t\t\t\t\t<div class=\"my-1 animated zoomInLeft separador separador_color\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-5 text-right\">
\t\t\t\t\t<a class=\"animated zoomIn enlace_negro\" href=\"{{config.build.url}}destacados/mas-vendidos\">
\t\t\t\t\t\t<i class=\"fas fa-angle-right mr-1 animated fadeInLeft infinite\"></i> Ver todos
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class=\"container px-2 px-sm-0 my-4\">
\t\t<div class=\"owl-carousel carrusel_libros_mas_vendidos owl-theme\">
\t\t{{mas_vendidos|raw}}
\t\t</div>
\t</div>
\t{% endif %}

\t<!--<div class=\"container p-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-five\">
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>-->

</main>

{% endblock %}

{% block appFooter %}
\t<script src=\"assets/jscontrollers/inicio/inicio.js\"></script>
{% endblock %}", "home/home.twig", "/home4/eltimonl/public_html/app/templates/home/home.twig");
    }
}

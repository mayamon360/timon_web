<?php

/* libros/libros.twig */
class __TwigTemplate_4c72e43e6303112eda0490f98474b1af1286ec7f09e2a3afce305bb9ff63ecb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "libros/libros.twig", 1);
        $this->blocks = array(
            'appTitle' => array($this, 'block_appTitle'),
            'ogUrl' => array($this, 'block_ogUrl'),
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
    public function block_appTitle($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Libros de ";
        echo twig_escape_filter($this->env, ($context["seccion"] ?? null), "html", null, true);
        echo "</title>
    <meta property=\"og:title\" content=\"Libros de ";
        // line 5
        echo twig_escape_filter($this->env, ($context["seccion"] ?? null), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_ogUrl($context, array $blocks = array())
    {
        // line 8
        echo "    <meta property=\"og:url\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "build", array()), "url", array()), "html", null, true);
        echo "libros/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["cabeceras"] ?? null), "ruta", array()), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_appBody($context, array $blocks = array())
    {
        // line 12
        echo "
    <main class=\"container mt-2 destacados\">
        <input type=\"hidden\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["metodo"] ?? null), "html", null, true);
        echo "\" id=\"metodo\">
        <div class=\"row px-0 align-items-center\">
            <div class=\"col-12 col-sm-6 col-md-7 col-lg-8\">
                <p class=\"m-0 p-0 text-muted font-weight-bold animated fadeIn\"><span class=\"coincidencias\"></span></p>
                <h1 class=\"m-0 p-0 animated fadeIn titulo_destacado\"><i class=\"fas fa-caret-right\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, ($context["seccion"] ?? null), "html", null, true);
        echo "</h1>
\t\t\t\t<div class=\"my-1 animated fadeIn separador separador_color\"></div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-5 col-lg-4 text-right pt-3 pt-md-0\">
                <div class=\"input-group input-group-sm mb-0 animated fadeIn my-auto\">
                    <div class=\"input-group-prepend\">
                        <label class=\"input-group-text text-uppercase py-1\" for=\"ordenar_resultados\"><small>Ordenar por</small></label>
                    </div>
                    <select class=\"custom-select custom-select-sm\" id=\"ordenar_resultados\">
                        <option value=\"relevancia\">Relevancia</option>
                        <optgroup label=\"Nombre\">
                            <option value = \"nombre\">Nombre de la A-Z</option>
                            <option value = \"nombre_desc\">Nombre de la Z-A</option>
                        </optgroup>
                        <optgroup label=\"Precio\">
                            <option value = \"precio\">Precio de menor a mayor</option>
                            <option value = \"precio_desc\">Precio de mayor a menor</option>
                        </optgroup>

                    </select>
                </div>
            </div>

            <div class=\"col-12 mt-2\">
                <div class=\"row\" id=\"resultados\">
                    
                </div>
            </div>

            <div class=\"col-12 mt-5\">
                <div class=\"text-center div_cargando\">
                    <button type=\"button\" class=\"btn btn-sm boton_negro\" id=\"boton_cargar_mas\">
                        <span class=\"spinner-grow spinner-grow-sm d-none\" role=\"status\" aria-hidden=\"true\"></span>
                        Mostrar más resultados
                    </button>
                    <p class=\"text-muted d-none animated flash div_cargando_texto\"></p>
                </div>
            </div>

        </div>
    </main>
    
";
    }

    // line 62
    public function block_appFooter($context, array $blocks = array())
    {
        // line 63
        echo "\t<script src=\"assets/jscontrollers/libros/libros.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "libros/libros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 63,  118 => 62,  71 => 18,  64 => 14,  60 => 12,  57 => 11,  48 => 8,  45 => 7,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'overall/layout' %}

{% block appTitle %}
    <title>Libros de {{seccion}}</title>
    <meta property=\"og:title\" content=\"Libros de {{seccion}}\">
{% endblock %}
{% block ogUrl %}
    <meta property=\"og:url\" content=\"{{config.build.url}}libros/{{cabeceras.ruta}}\">
{% endblock %}

{% block appBody %}

    <main class=\"container mt-2 destacados\">
        <input type=\"hidden\" value=\"{{metodo}}\" id=\"metodo\">
        <div class=\"row px-0 align-items-center\">
            <div class=\"col-12 col-sm-6 col-md-7 col-lg-8\">
                <p class=\"m-0 p-0 text-muted font-weight-bold animated fadeIn\"><span class=\"coincidencias\"></span></p>
                <h1 class=\"m-0 p-0 animated fadeIn titulo_destacado\"><i class=\"fas fa-caret-right\"></i> {{seccion}}</h1>
\t\t\t\t<div class=\"my-1 animated fadeIn separador separador_color\"></div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-5 col-lg-4 text-right pt-3 pt-md-0\">
                <div class=\"input-group input-group-sm mb-0 animated fadeIn my-auto\">
                    <div class=\"input-group-prepend\">
                        <label class=\"input-group-text text-uppercase py-1\" for=\"ordenar_resultados\"><small>Ordenar por</small></label>
                    </div>
                    <select class=\"custom-select custom-select-sm\" id=\"ordenar_resultados\">
                        <option value=\"relevancia\">Relevancia</option>
                        <optgroup label=\"Nombre\">
                            <option value = \"nombre\">Nombre de la A-Z</option>
                            <option value = \"nombre_desc\">Nombre de la Z-A</option>
                        </optgroup>
                        <optgroup label=\"Precio\">
                            <option value = \"precio\">Precio de menor a mayor</option>
                            <option value = \"precio_desc\">Precio de mayor a menor</option>
                        </optgroup>

                    </select>
                </div>
            </div>

            <div class=\"col-12 mt-2\">
                <div class=\"row\" id=\"resultados\">
                    
                </div>
            </div>

            <div class=\"col-12 mt-5\">
                <div class=\"text-center div_cargando\">
                    <button type=\"button\" class=\"btn btn-sm boton_negro\" id=\"boton_cargar_mas\">
                        <span class=\"spinner-grow spinner-grow-sm d-none\" role=\"status\" aria-hidden=\"true\"></span>
                        Mostrar más resultados
                    </button>
                    <p class=\"text-muted d-none animated flash div_cargando_texto\"></p>
                </div>
            </div>

        </div>
    </main>
    
{% endblock %}

{% block appFooter %}
\t<script src=\"assets/jscontrollers/libros/libros.js\"></script>
{% endblock %}
", "libros/libros.twig", "/home4/eltimonl/public_html/app/templates/libros/libros.twig");
    }
}

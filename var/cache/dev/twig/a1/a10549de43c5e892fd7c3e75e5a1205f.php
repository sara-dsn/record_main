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

/* accueil/index.html.twig */
class __TwigTemplate_63886d36546c7e6d36a14553910b62ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-10 mx-auto\">
            <h1>Nombre d'artistes trouvés : 
             ";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["artistes"]) || array_key_exists("artistes", $context) ? $context["artistes"] : (function () { throw new RuntimeError('Variable "artistes" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "</h1>
             ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artistes"]) || array_key_exists("artistes", $context) ? $context["artistes"] : (function () { throw new RuntimeError('Variable "artistes" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artiste"]) {
            // line 12
            echo "             <span class=\"d-block\">
               ";
            // line 13
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artiste"], "name", [], "any", false, false, false, 13)), "html", null, true);
            echo " - <b class=\"btn btn-primary p-1\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artiste"], "discs", [], "any", false, false, false, 13)), "html", null, true);
            echo "</b> disques
             </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artiste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
        </div>
    </div>
</div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  98 => 15,  87 => 13,  84 => 12,  80 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block body %}


<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-10 mx-auto\">
            <h1>Nombre d'artistes trouvés : 
             {{ artistes | length }}</h1>
             {% for artiste in artistes %}
             <span class=\"d-block\">
               {{ artiste.name | upper }} - <b class=\"btn btn-primary p-1\">{{ artiste.discs | length}}</b> disques
             </span>
            {% endfor %} 
        </div>
    </div>
</div>
    {# <div class=\"row text-center\"> 

        {{ form_start(form) }}
        <div class=\"my-custom-class-for-errors\">
            {{ form_errors(form) }}
        </div>

        <div class=\"row\">
            <div class=\"col-9 mx-auto mb-2 mt-4\">
                {{ form_label(form.objet, 'Mon libellé à été modifié')}}
                {{ form_widget(form.objet,{'attr' : {'class' : 'btn-light'}})}}
                {{ form_errors(form.objet)}}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
                {{ form_row(form.email)}}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
                {{ form_row(form.message)}}
            </div>
        </div>
        {{ form_end(form)}}
    </div> #}
{% endblock %}


       
", "accueil/index.html.twig", "/home/sara/Bureau/monProjet3/templates/accueil/index.html.twig");
    }
}

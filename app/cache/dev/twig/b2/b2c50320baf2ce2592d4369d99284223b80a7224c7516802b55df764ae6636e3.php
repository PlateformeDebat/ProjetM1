<?php

/* DebatBundle:Categorie:categorie.html.twig */
class __TwigTemplate_3314c6be9bfabcf29ba0b1dbe95793fe77306a97427b8c658ecc4b81df3f74d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "DebatBundle:Categorie:categorie.html.twig", 1);
        $this->blocks = array(
            'debat_bundle' => array($this, 'block_debat_bundle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58c6c49a6394ff32dcc491cbfceed441dbe9011e9bddddc2ba5f64a92a52072b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c6c49a6394ff32dcc491cbfceed441dbe9011e9bddddc2ba5f64a92a52072b->enter($__internal_58c6c49a6394ff32dcc491cbfceed441dbe9011e9bddddc2ba5f64a92a52072b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Categorie:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c6c49a6394ff32dcc491cbfceed441dbe9011e9bddddc2ba5f64a92a52072b->leave($__internal_58c6c49a6394ff32dcc491cbfceed441dbe9011e9bddddc2ba5f64a92a52072b_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_63f2c44485d874a6b83a6b10039a80b1cfba2b5c1486dfb576fcb31e6c8b0230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f2c44485d874a6b83a6b10039a80b1cfba2b5c1486dfb576fcb31e6c8b0230->enter($__internal_63f2c44485d874a6b83a6b10039a80b1cfba2b5c1486dfb576fcb31e6c8b0230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "    <!-- controlleur OK, renvoie un tableau de 1 débat au hasard -->
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Catégories</a></li>
                <li><a href=\"#\">Afficher mes débats</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Liste de mes débats</a></li>
            </ul>
        </div>
    </nav>

    <!-- terminé mais non testé -->

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 20
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "getNom", array(), "method"));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

";
        
        $__internal_63f2c44485d874a6b83a6b10039a80b1cfba2b5c1486dfb576fcb31e6c8b0230->leave($__internal_63f2c44485d874a6b83a6b10039a80b1cfba2b5c1486dfb576fcb31e6c8b0230_prof);

    }

    public function getTemplateName()
    {
        return "DebatBundle:Categorie:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}
    <!-- controlleur OK, renvoie un tableau de 1 débat au hasard -->
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Catégories</a></li>
                <li><a href=\"#\">Afficher mes débats</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Liste de mes débats</a></li>
            </ul>
        </div>
    </nav>

    <!-- terminé mais non testé -->

    {% for categorie in categories %}
        <li>{{ categorie.getNom()|e }}</li>
    {% endfor %}


{% endblock debat_bundle %}", "DebatBundle:Categorie:categorie.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Categorie/categorie.html.twig");
    }
}

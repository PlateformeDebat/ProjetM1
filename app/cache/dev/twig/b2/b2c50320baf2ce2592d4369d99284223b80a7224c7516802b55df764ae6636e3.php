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
        $__internal_d51400c32f661cb462bded7be22c114dfa51e6ed6ef633825ac6c6fb9cb9a199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51400c32f661cb462bded7be22c114dfa51e6ed6ef633825ac6c6fb9cb9a199->enter($__internal_d51400c32f661cb462bded7be22c114dfa51e6ed6ef633825ac6c6fb9cb9a199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Categorie:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51400c32f661cb462bded7be22c114dfa51e6ed6ef633825ac6c6fb9cb9a199->leave($__internal_d51400c32f661cb462bded7be22c114dfa51e6ed6ef633825ac6c6fb9cb9a199_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_624b9ef526da20758b498bfe7c705067d335445595aef7555ee880cdd303fea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624b9ef526da20758b498bfe7c705067d335445595aef7555ee880cdd303fea6->enter($__internal_624b9ef526da20758b498bfe7c705067d335445595aef7555ee880cdd303fea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "    <!-- controlleur OK, renvoie un tableau de 1 débat au hasard -->
<div class=\"container\">
    <nav class=\"navbar navbar-inverse nav-container\">
        <div class=\"container-fluid\">
            <ul class=\"nav navbar-nav\">
                <li><a style=\"color:black;\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_categorie");
        echo "\">Catégories</a></li>
                <li><a style=\"color:black;\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_my_debats");
        echo "\">Afficher mes débats</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a style=\"color:black;\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_home_one");
        echo "\">Débat au hasard</a></li>
                <li><a style=\"color:black;\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_home_grid");
        echo "\">Grille de débats</a></li>
                <li><a style=\"color:black;\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_add_debat");
        echo "\">Rédiger un débat</a></li>
            </ul>
        </div>
    </nav>

    <!-- appel controller OK -->

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 23
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "getNom", array(), "method"));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
</div>


";
        
        $__internal_624b9ef526da20758b498bfe7c705067d335445595aef7555ee880cdd303fea6->leave($__internal_624b9ef526da20758b498bfe7c705067d335445595aef7555ee880cdd303fea6_prof);

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
        return array (  88 => 25,  79 => 23,  75 => 22,  65 => 15,  61 => 14,  57 => 13,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}
    <!-- controlleur OK, renvoie un tableau de 1 débat au hasard -->
<div class=\"container\">
    <nav class=\"navbar navbar-inverse nav-container\">
        <div class=\"container-fluid\">
            <ul class=\"nav navbar-nav\">
                <li><a style=\"color:black;\" href=\"{{ path('debat_categorie') }}\">Catégories</a></li>
                <li><a style=\"color:black;\" href=\"{{ path('debat_my_debats') }}\">Afficher mes débats</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a style=\"color:black;\" href=\"{{ path('debat_home_one') }}\">Débat au hasard</a></li>
                <li><a style=\"color:black;\" href=\"{{ path('debat_home_grid') }}\">Grille de débats</a></li>
                <li><a style=\"color:black;\" href=\"{{ path('debat_add_debat') }}\">Rédiger un débat</a></li>
            </ul>
        </div>
    </nav>

    <!-- appel controller OK -->

    {% for categorie in categories %}
        <li>{{ categorie.getNom()|e }}</li>
    {% endfor %}

</div>


{% endblock debat_bundle %}", "DebatBundle:Categorie:categorie.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Categorie/categorie.html.twig");
    }
}

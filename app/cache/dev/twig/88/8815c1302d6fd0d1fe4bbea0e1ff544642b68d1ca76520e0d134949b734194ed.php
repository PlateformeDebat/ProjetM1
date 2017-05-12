<?php

/* DebatBundle:Debat:my_debats.html.twig */
class __TwigTemplate_24388052cb00faa55c4c40060467b8fa244706f475c88ee07bd72ed0dd5b0f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "DebatBundle:Debat:my_debats.html.twig", 1);
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
        $__internal_078d5a3bc0a5cb6f96d92b565f5980901c116987813685a22aec393fcc61130d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078d5a3bc0a5cb6f96d92b565f5980901c116987813685a22aec393fcc61130d->enter($__internal_078d5a3bc0a5cb6f96d92b565f5980901c116987813685a22aec393fcc61130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Debat:my_debats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078d5a3bc0a5cb6f96d92b565f5980901c116987813685a22aec393fcc61130d->leave($__internal_078d5a3bc0a5cb6f96d92b565f5980901c116987813685a22aec393fcc61130d_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_13f0a955faac2d3215c16fd8e7c26206b4c1ff38c78cf86e67efd3dcab6df8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f0a955faac2d3215c16fd8e7c26206b4c1ff38c78cf86e67efd3dcab6df8a9->enter($__internal_13f0a955faac2d3215c16fd8e7c26206b4c1ff38c78cf86e67efd3dcab6df8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

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


    Liste de mes débats

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["debats"]) || array_key_exists("debats", $context) ? $context["debats"] : (function () { throw new Twig_Error_Runtime('Variable "debats" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["debat"]) {
            // line 21
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getTitre", array(), "method"));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

";
        
        $__internal_13f0a955faac2d3215c16fd8e7c26206b4c1ff38c78cf86e67efd3dcab6df8a9->leave($__internal_13f0a955faac2d3215c16fd8e7c26206b4c1ff38c78cf86e67efd3dcab6df8a9_prof);

    }

    public function getTemplateName()
    {
        return "DebatBundle:Debat:my_debats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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


    Liste de mes débats

    {% for debat in debats %}
        <li>{{ debat.getTitre()|e }}</li>
    {% endfor %}


{% endblock debat_bundle %}", "DebatBundle:Debat:my_debats.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/my_debats.html.twig");
    }
}

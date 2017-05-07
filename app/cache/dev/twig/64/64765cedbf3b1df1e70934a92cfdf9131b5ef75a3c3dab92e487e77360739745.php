<?php

/* DebatBundle:Home:home_one.html.twig */
class __TwigTemplate_430a9dc3e16a321a39ff56ce10dcf0ce0d14239105217629ad69450567c76e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "DebatBundle:Home:home_one.html.twig", 1);
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
        $__internal_a8788fa114051b9b8e1d452a4fe6100a0672b7da2542f2f221d2b34b7ea1f79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8788fa114051b9b8e1d452a4fe6100a0672b7da2542f2f221d2b34b7ea1f79c->enter($__internal_a8788fa114051b9b8e1d452a4fe6100a0672b7da2542f2f221d2b34b7ea1f79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Home:home_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8788fa114051b9b8e1d452a4fe6100a0672b7da2542f2f221d2b34b7ea1f79c->leave($__internal_a8788fa114051b9b8e1d452a4fe6100a0672b7da2542f2f221d2b34b7ea1f79c_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_4a8a1cda43639ec9b89bf0664b44a7c7088f2359711afcde629280d26d16d849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8a1cda43639ec9b89bf0664b44a7c7088f2359711afcde629280d26d16d849->enter($__internal_4a8a1cda43639ec9b89bf0664b44a7c7088f2359711afcde629280d26d16d849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

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
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new Twig_Error_Runtime('Variable "tableau" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["debat"]) {
            // line 17
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "titre", array(), "method"));
            echo "
                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "question", array(), "method"));
            echo "
                ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "reponse1", array(), "method"));
            echo "
                ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "reponse2", array(), "method"));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </body>


";
        
        $__internal_4a8a1cda43639ec9b89bf0664b44a7c7088f2359711afcde629280d26d16d849->leave($__internal_4a8a1cda43639ec9b89bf0664b44a7c7088f2359711afcde629280d26d16d849_prof);

    }

    public function getTemplateName()
    {
        return "DebatBundle:Home:home_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  71 => 20,  67 => 19,  63 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
            {% for debat in tableau %}
                {{ debat.titre()|e }}
                {{ debat.question()|e }}
                {{ debat.reponse1()|e }}
                {{ debat.reponse2()|e }}
            {% endfor %}
    </body>


{% endblock debat_bundle %}", "DebatBundle:Home:home_one.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Home/home_one.html.twig");
    }
}

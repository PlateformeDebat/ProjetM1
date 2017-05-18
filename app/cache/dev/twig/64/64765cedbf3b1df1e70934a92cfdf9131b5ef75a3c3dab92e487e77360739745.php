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
        $__internal_5dbbf3aef0a537fd493fd6d9bf247e7a5b2550885550d37ef7abd5b78a4bbead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbbf3aef0a537fd493fd6d9bf247e7a5b2550885550d37ef7abd5b78a4bbead->enter($__internal_5dbbf3aef0a537fd493fd6d9bf247e7a5b2550885550d37ef7abd5b78a4bbead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Home:home_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dbbf3aef0a537fd493fd6d9bf247e7a5b2550885550d37ef7abd5b78a4bbead->leave($__internal_5dbbf3aef0a537fd493fd6d9bf247e7a5b2550885550d37ef7abd5b78a4bbead_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_f50ca160ba5293c6a259a07630dfc68b4e6fa6d4658903b80cbbb609bbb8bdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50ca160ba5293c6a259a07630dfc68b4e6fa6d4658903b80cbbb609bbb8bdee->enter($__internal_f50ca160ba5293c6a259a07630dfc68b4e6fa6d4658903b80cbbb609bbb8bdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_home_grid");
        echo "\">Grille de débats</a></li>
                </ul>
            </div>
        </nav>

        <div class=\"row\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new Twig_Error_Runtime('Variable "tableau" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["debat"]) {
            // line 20
            echo "                <div class=\"col-sm-12 col-md-12 div_grid\">
                    <a class=\"a_grid\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_debat", array("id" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "id", array(), "method")))), "html", null, true);
            echo "\">
                        <div class=\"col-sm-12 col-md-12 text-center div_grid_in\">
                            <div class=\"col-sm-12 col-md-12\">
                                <p style=\"font-weight: bold; font-size: 2em;\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "titre", array(), "method"));
            echo "</p>
                                <p style=\"font-size: 1.5em;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getQuestion", array(), "method"));
            echo "</p>
                            </div>
                            <div class=\"col-sm-6 col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-md-12\">
                                        <button type=\"button\" class=\"btn_one btn btn-success\" DISABLED>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getReponse1", array(), "method"));
            echo "</button>
                                    </div>
                                    <div class=\"col-sm-12 col-md-12\">
                                        <button type=\"button\" class=\"btn_one btn btn-danger\" DISABLED>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getReponse2", array(), "method"));
            echo "</button>
                                    </div>
                                </div>

                                </div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>


";
        
        $__internal_f50ca160ba5293c6a259a07630dfc68b4e6fa6d4658903b80cbbb609bbb8bdee->leave($__internal_f50ca160ba5293c6a259a07630dfc68b4e6fa6d4658903b80cbbb609bbb8bdee_prof);

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
        return array (  112 => 42,  97 => 33,  91 => 30,  83 => 25,  79 => 24,  73 => 21,  70 => 20,  66 => 19,  57 => 13,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}

    <div class=\"container\">
        <nav class=\"navbar navbar-inverse nav-container\">
            <div class=\"container-fluid\">
                <ul class=\"nav navbar-nav\">
                    <li><a style=\"color:black;\" href=\"{{ path('debat_categorie') }}\">Catégories</a></li>
                    <li><a style=\"color:black;\" href=\"{{ path('debat_my_debats') }}\">Afficher mes débats</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a style=\"color:black;\" href=\"{{ path('debat_home_grid') }}\">Grille de débats</a></li>
                </ul>
            </div>
        </nav>

        <div class=\"row\">
            {% for debat in tableau %}
                <div class=\"col-sm-12 col-md-12 div_grid\">
                    <a class=\"a_grid\" href=\"{{ path('debat_debat', {'id': debat.id()|e }) }}\">
                        <div class=\"col-sm-12 col-md-12 text-center div_grid_in\">
                            <div class=\"col-sm-12 col-md-12\">
                                <p style=\"font-weight: bold; font-size: 2em;\">{{ debat.titre()|e }}</p>
                                <p style=\"font-size: 1.5em;\">{{ debat.getQuestion()|e }}</p>
                            </div>
                            <div class=\"col-sm-6 col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-md-12\">
                                        <button type=\"button\" class=\"btn_one btn btn-success\" DISABLED>{{ debat.getReponse1()|e }}</button>
                                    </div>
                                    <div class=\"col-sm-12 col-md-12\">
                                        <button type=\"button\" class=\"btn_one btn btn-danger\" DISABLED>{{ debat.getReponse2()|e }}</button>
                                    </div>
                                </div>

                                </div>
                        </div>
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>


{% endblock debat_bundle %}", "DebatBundle:Home:home_one.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Home/home_one.html.twig");
    }
}

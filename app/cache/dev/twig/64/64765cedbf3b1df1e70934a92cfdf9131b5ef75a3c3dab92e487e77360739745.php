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
        $__internal_22cae774be23e044a765d59c114d8453beec24eae7c582cb503343f5e36168dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cae774be23e044a765d59c114d8453beec24eae7c582cb503343f5e36168dc->enter($__internal_22cae774be23e044a765d59c114d8453beec24eae7c582cb503343f5e36168dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Home:home_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22cae774be23e044a765d59c114d8453beec24eae7c582cb503343f5e36168dc->leave($__internal_22cae774be23e044a765d59c114d8453beec24eae7c582cb503343f5e36168dc_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_306cc929df800024123c513d9959926714c53c4dc29020d1186e460567e52cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306cc929df800024123c513d9959926714c53c4dc29020d1186e460567e52cb6->enter($__internal_306cc929df800024123c513d9959926714c53c4dc29020d1186e460567e52cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

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
                    <li><a style=\"color:black;\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_add_debat");
        echo "\">Rédiger un débat</a></li>
                </ul>
            </div>
        </nav>

        <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new Twig_Error_Runtime('Variable "tableau" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["debat"]) {
            // line 21
            echo "                <div class=\"col-sm-12 col-md-12 div_grid\">
                    <a class=\"a_grid\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_debat", array("id" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "id", array(), "method")))), "html", null, true);
            echo "\">
                        <div class=\"col-sm-12 col-md-12 text-center div_grid_in\">
                            <div class=\"col-sm-12 col-md-12\">
                                <p style=\"font-weight: bold; font-size: 2em;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "titre", array(), "method"));
            echo "</p>
                                <p style=\"font-size: 1.5em;\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getQuestion", array(), "method"));
            echo "</p>
                            </div>
                            <div class=\"col-sm-6 col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-md-12\">
                                        <button type=\"button\" class=\"btn_one btn btn-success\" DISABLED>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getReponse1", array(), "method"));
            echo "</button>
                                    </div>
                                    <div class=\"col-sm-12 col-md-12\">
                                        <button type=\"button\" class=\"btn_one btn btn-danger\" DISABLED>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getReponse2", array(), "method"));
            echo "</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-md-6\">
                                <a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_home_one");
            echo "\"><img height=\"25%\" width=\"25%\" src=\"/Projet/src/DebatBundle/Resources/pictures/fleche.png\"> </a>
                            </div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </div>


";
        
        $__internal_306cc929df800024123c513d9959926714c53c4dc29020d1186e460567e52cb6->leave($__internal_306cc929df800024123c513d9959926714c53c4dc29020d1186e460567e52cb6_prof);

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
        return array (  121 => 45,  109 => 39,  101 => 34,  95 => 31,  87 => 26,  83 => 25,  77 => 22,  74 => 21,  70 => 20,  61 => 14,  57 => 13,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
                    <li><a style=\"color:black;\" href=\"{{ path('debat_add_debat') }}\">Rédiger un débat</a></li>
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
                            <div class=\"col-sm-6 col-md-6\">
                                <a href=\"{{ path('debat_home_one') }}\"><img height=\"25%\" width=\"25%\" src=\"/Projet/src/DebatBundle/Resources/pictures/fleche.png\"> </a>
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

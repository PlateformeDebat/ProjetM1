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
        $__internal_a3426dc68dd99971c182f62a3382f54f039cae39f2a2e57c35e4542f336ebc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3426dc68dd99971c182f62a3382f54f039cae39f2a2e57c35e4542f336ebc6e->enter($__internal_a3426dc68dd99971c182f62a3382f54f039cae39f2a2e57c35e4542f336ebc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Debat:my_debats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3426dc68dd99971c182f62a3382f54f039cae39f2a2e57c35e4542f336ebc6e->leave($__internal_a3426dc68dd99971c182f62a3382f54f039cae39f2a2e57c35e4542f336ebc6e_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_3fba08f879bf01f91dd7858b55b2d80a6e93260752d24204770a4fc93eca4343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fba08f879bf01f91dd7858b55b2d80a6e93260752d24204770a4fc93eca4343->enter($__internal_3fba08f879bf01f91dd7858b55b2d80a6e93260752d24204770a4fc93eca4343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

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

        <div class=\"row\">
            <div class=\"col-sm-12 col-md-12\">
                <div style=\"margin-top: 15px;\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["debats"]) || array_key_exists("debats", $context) ? $context["debats"] : (function () { throw new Twig_Error_Runtime('Variable "debats" does not exist.', 23, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["debat"]) {
            // line 24
            echo "                    <div style=\"padding: 10px 0; color: white;\" class=\"col-sm-6 col-md-6\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getTitre", array(), "method"));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getQuestion", array(), "method"));
            echo "
                    </div>
                    <div style=\"padding: 10px 0;\" class=\"col-sm-6 col-md-6\">
                        <a class=\"a_grid\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_debat", array("id" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getId", array(), "method")))), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-secondary\">Voir</button>
                        </a>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_3fba08f879bf01f91dd7858b55b2d80a6e93260752d24204770a4fc93eca4343->leave($__internal_3fba08f879bf01f91dd7858b55b2d80a6e93260752d24204770a4fc93eca4343_prof);

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
        return array (  102 => 33,  91 => 28,  83 => 25,  80 => 24,  76 => 23,  65 => 15,  61 => 14,  57 => 13,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
                    <li><a style=\"color:black;\" href=\"{{ path('debat_home_one') }}\">Débat au hasard</a></li>
                    <li><a style=\"color:black;\" href=\"{{ path('debat_home_grid') }}\">Grille de débats</a></li>
                    <li><a style=\"color:black;\" href=\"{{ path('debat_add_debat') }}\">Rédiger un débat</a></li>
                </ul>
            </div>
        </nav>

        <div class=\"row\">
            <div class=\"col-sm-12 col-md-12\">
                <div style=\"margin-top: 15px;\">
                    {% for debat in debats %}
                    <div style=\"padding: 10px 0; color: white;\" class=\"col-sm-6 col-md-6\">
                        {{ debat.getTitre()|e }} {{ debat.getQuestion()|e }}
                    </div>
                    <div style=\"padding: 10px 0;\" class=\"col-sm-6 col-md-6\">
                        <a class=\"a_grid\" href=\"{{ path('debat_debat', {'id': debat.getId()|e }) }}\">
                            <button type=\"button\" class=\"btn btn-secondary\">Voir</button>
                        </a>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>


{% endblock debat_bundle %}", "DebatBundle:Debat:my_debats.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/my_debats.html.twig");
    }
}

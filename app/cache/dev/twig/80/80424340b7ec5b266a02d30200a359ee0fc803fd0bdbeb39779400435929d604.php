<?php

/* DebatBundle:Home:home_grid.html.twig */
class __TwigTemplate_e5c1b05c61a4cd1655a1c64c554f0685a31e436317834fd33e2057a8746dee5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "DebatBundle:Home:home_grid.html.twig", 1);
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
        $__internal_a57cbb8524bd4cfa11f5b24eb7973af8992b0d4b7f0a7bd5df2c8627caa760a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57cbb8524bd4cfa11f5b24eb7973af8992b0d4b7f0a7bd5df2c8627caa760a9->enter($__internal_a57cbb8524bd4cfa11f5b24eb7973af8992b0d4b7f0a7bd5df2c8627caa760a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Home:home_grid.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57cbb8524bd4cfa11f5b24eb7973af8992b0d4b7f0a7bd5df2c8627caa760a9->leave($__internal_a57cbb8524bd4cfa11f5b24eb7973af8992b0d4b7f0a7bd5df2c8627caa760a9_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_b8362c1787667b223dc4b1efab496e7a00e226d77402d8a9580603de9c03f3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8362c1787667b223dc4b1efab496e7a00e226d77402d8a9580603de9c03f3e3->enter($__internal_b8362c1787667b223dc4b1efab496e7a00e226d77402d8a9580603de9c03f3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "    <!-- controlleur OK, renvoie un tableau de 6 débats au hasard -->


    <div class=\"container\">
        <nav class=\"navbar navbar-inverse nav-container\">
            <div class=\"container-fluid\">
                <ul class=\"nav navbar-nav\">
                    <li><a style=\"color:black;\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_categorie");
        echo "\">Catégories</a></li>
                    <li><a style=\"color:black;\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_my_debats");
        echo "\">Afficher mes débats</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a style=\"color:black;\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_home_one");
        echo "\">Débat au hasard</a></li>
                    <li><a style=\"color:black;\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_add_debat");
        echo "\">Rédiger un débat</a></li>
                </ul>
            </div>
        </nav>

        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new Twig_Error_Runtime('Variable "tableau" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["debat"]) {
            // line 23
            echo "            <div class=\"col-sm-6 col-md-4 div_grid\">
                <a class=\"a_grid\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_debat", array("id" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getId", array(), "method")))), "html", null, true);
            echo "\">
                    <div class=\"text-center div_grid_in\">
                        <p style=\"font-weight: bold; font-size: 1.2em;\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getTitre", array(), "method"));
            echo "</p>
                        <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getQuestion", array(), "method"));
            echo "</p>
                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
    </div>



";
        
        $__internal_b8362c1787667b223dc4b1efab496e7a00e226d77402d8a9580603de9c03f3e3->leave($__internal_b8362c1787667b223dc4b1efab496e7a00e226d77402d8a9580603de9c03f3e3_prof);

    }

    public function getTemplateName()
    {
        return "DebatBundle:Home:home_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  88 => 27,  84 => 26,  79 => 24,  76 => 23,  72 => 22,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}
    <!-- controlleur OK, renvoie un tableau de 6 débats au hasard -->


    <div class=\"container\">
        <nav class=\"navbar navbar-inverse nav-container\">
            <div class=\"container-fluid\">
                <ul class=\"nav navbar-nav\">
                    <li><a style=\"color:black;\" href=\"{{ path('debat_categorie') }}\">Catégories</a></li>
                    <li><a style=\"color:black;\" href=\"{{ path('debat_my_debats') }}\">Afficher mes débats</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a style=\"color:black;\" href=\"{{ path('debat_home_one') }}\">Débat au hasard</a></li>
                    <li><a style=\"color:black;\" href=\"{{ path('debat_add_debat') }}\">Rédiger un débat</a></li>
                </ul>
            </div>
        </nav>

        <div class=\"row\">
            {% for debat in tableau %}
            <div class=\"col-sm-6 col-md-4 div_grid\">
                <a class=\"a_grid\" href=\"{{ path('debat_debat', {'id': debat.getId()|e }) }}\">
                    <div class=\"text-center div_grid_in\">
                        <p style=\"font-weight: bold; font-size: 1.2em;\">{{ debat.getTitre()|e }}</p>
                        <p>{{ debat.getQuestion()|e }}</p>
                    </div>
                </a>
            </div>
        {% endfor %}
        </div>
    </div>



{% endblock debat_bundle %}", "DebatBundle:Home:home_grid.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Home/home_grid.html.twig");
    }
}

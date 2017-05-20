<?php

/* DebatBundle:Debat:debat.html.twig */
class __TwigTemplate_8639d37f65af8263be1e1d84f09b89a56d39e70b9180d99b0cc6b2afd1ffe96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "DebatBundle:Debat:debat.html.twig", 1);
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
        $__internal_c0a88d98b57a3d53b4d494ab67b08bc3bf09376f67f7d9a705ff2d0eba2c7b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a88d98b57a3d53b4d494ab67b08bc3bf09376f67f7d9a705ff2d0eba2c7b03->enter($__internal_c0a88d98b57a3d53b4d494ab67b08bc3bf09376f67f7d9a705ff2d0eba2c7b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Debat:debat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a88d98b57a3d53b4d494ab67b08bc3bf09376f67f7d9a705ff2d0eba2c7b03->leave($__internal_c0a88d98b57a3d53b4d494ab67b08bc3bf09376f67f7d9a705ff2d0eba2c7b03_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_a9b4335b6ce38c4e74cc21c6449e9bc67dd7a943875d8c16498142284331287c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b4335b6ce38c4e74cc21c6449e9bc67dd7a943875d8c16498142284331287c->enter($__internal_a9b4335b6ce38c4e74cc21c6449e9bc67dd7a943875d8c16498142284331287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "<!-- controlleur OK, renvoie un tableau de 1 débat au hasard -->

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

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-md-12\">
                <p class=\"text-center debat-titre\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 24, $this->getSourceContext()); })()), "getTitre", array(), "method"));
        echo "</p>
                <p class=\"text-center debat-question\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 25, $this->getSourceContext()); })()), "getQuestion", array(), "method"));
        echo "</p>
            </div>
        </div>
        <div class=\"row\">

            <!-- answers -->

            <div class=\"col-sm-3 col-md-4 debat-padding\">
                <form method=\"post\" action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_debat");
        echo "\">
                    <input type=\"hidden\" name=\"id_debat\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 34, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">
                    <button type=\"submit\" class=\"center-block debat-boutton\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 36, $this->getSourceContext()); })()), "getReponse1", array(), "method"), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 36, $this->getSourceContext()); })()), "getReponse1", array(), "method"), "html", null, true);
        echo "</button>
                </form>

                <div class=\"argument-contenu\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arguments"]) || array_key_exists("arguments", $context) ? $context["arguments"] : (function () { throw new Twig_Error_Runtime('Variable "arguments" does not exist.', 40, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["argument"]) {
            // line 41
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["argument"], "getIdEmetteur", array(), "method"));
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['argument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>

                <form class=\"padding-height\" method=\"post\" action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("argument_debat");
        echo "\">
                    <label class=\"debat-argument\">
                        <textarea rows=\"2\" name=\"argument\" class=\"debat-argument\"></textarea>
                    </label>

                    <input type=\"hidden\" name=\"id_debat\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 50, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">
                    <input type=\"submit\" class=\"center-block\" value=\"Valider\" >
                </form>
            </div>



            <div class=\"col-sm-3 col-md-4 debat-padding\">

            </div>



            <div class=\"col-sm-3 col-md-4 debat-padding\">
                <form method=\"post\" action=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_debat");
        echo "\">
                    <input type=\"hidden\" name=\"id_debat\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 66, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"reponse\" value=\"2\">
                    <button type=\"submit\" class=\"center-block debat-boutton\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 68, $this->getSourceContext()); })()), "getReponse2", array(), "method"), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 68, $this->getSourceContext()); })()), "getReponse2", array(), "method"), "html", null, true);
        echo "</button>
                </form>

                <div class=\"argument-contenu\">

                </div>

                <form class=\"padding-height\" method=\"post\" action=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("argument_debat");
        echo "\">
                    <label class=\"debat-argument\">
                        <textarea rows=\"2\" name=\"argument\" class=\"debat-argument\"></textarea>
                    </label>

                    <input type=\"hidden\" name=\"id_debat\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["debat"]) || array_key_exists("debat", $context) ? $context["debat"] : (function () { throw new Twig_Error_Runtime('Variable "debat" does not exist.', 80, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">
                    <input type=\"submit\" class=\"center-block\" value=\"Valider\" >
                </form>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_a9b4335b6ce38c4e74cc21c6449e9bc67dd7a943875d8c16498142284331287c->leave($__internal_a9b4335b6ce38c4e74cc21c6449e9bc67dd7a943875d8c16498142284331287c_prof);

    }

    public function getTemplateName()
    {
        return "DebatBundle:Debat:debat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 80,  171 => 75,  159 => 68,  154 => 66,  150 => 65,  132 => 50,  124 => 45,  120 => 43,  111 => 41,  107 => 40,  98 => 36,  93 => 34,  89 => 33,  78 => 25,  74 => 24,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
                <li><a style=\"color:black;\" href=\"{{ path('debat_add_debat') }}\">Rédiger un débat</a></li>
            </ul>
        </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-md-12\">
                <p class=\"text-center debat-titre\">{{ debat.getTitre()|e }}</p>
                <p class=\"text-center debat-question\">{{ debat.getQuestion()|e }}</p>
            </div>
        </div>
        <div class=\"row\">

            <!-- answers -->

            <div class=\"col-sm-3 col-md-4 debat-padding\">
                <form method=\"post\" action=\"{{ path('vote_debat') }}\">
                    <input type=\"hidden\" name=\"id_debat\" value=\"{{ debat.getId() }}\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">
                    <button type=\"submit\" class=\"center-block debat-boutton\" value=\"{{ debat.getReponse1() }}\" >{{ debat.getReponse1() }}</button>
                </form>

                <div class=\"argument-contenu\">
                    {% for argument in arguments %}
                        {{ argument.getIdEmetteur()|e }}
                    {% endfor %}
                </div>

                <form class=\"padding-height\" method=\"post\" action=\"{{ path('argument_debat') }}\">
                    <label class=\"debat-argument\">
                        <textarea rows=\"2\" name=\"argument\" class=\"debat-argument\"></textarea>
                    </label>

                    <input type=\"hidden\" name=\"id_debat\" value=\"{{ debat.getId() }}\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">
                    <input type=\"submit\" class=\"center-block\" value=\"Valider\" >
                </form>
            </div>



            <div class=\"col-sm-3 col-md-4 debat-padding\">

            </div>



            <div class=\"col-sm-3 col-md-4 debat-padding\">
                <form method=\"post\" action=\"{{ path('vote_debat') }}\">
                    <input type=\"hidden\" name=\"id_debat\" value=\"{{ debat.getId() }}\">
                    <input type=\"hidden\" name=\"reponse\" value=\"2\">
                    <button type=\"submit\" class=\"center-block debat-boutton\" value=\"{{ debat.getReponse2() }}\" >{{ debat.getReponse2() }}</button>
                </form>

                <div class=\"argument-contenu\">

                </div>

                <form class=\"padding-height\" method=\"post\" action=\"{{ path('argument_debat') }}\">
                    <label class=\"debat-argument\">
                        <textarea rows=\"2\" name=\"argument\" class=\"debat-argument\"></textarea>
                    </label>

                    <input type=\"hidden\" name=\"id_debat\" value=\"{{ debat.getId() }}\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">
                    <input type=\"submit\" class=\"center-block\" value=\"Valider\" >
                </form>
            </div>
        </div>
    </div>
</div>


{% endblock debat_bundle %}", "DebatBundle:Debat:debat.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/debat.html.twig");
    }
}

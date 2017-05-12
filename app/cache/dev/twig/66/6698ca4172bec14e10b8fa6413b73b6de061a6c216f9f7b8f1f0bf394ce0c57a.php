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
        $__internal_de750a3188d20e6e7ad723fd4cf284c2ca50f22dac19462d3d7d58dbf1fab90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de750a3188d20e6e7ad723fd4cf284c2ca50f22dac19462d3d7d58dbf1fab90a->enter($__internal_de750a3188d20e6e7ad723fd4cf284c2ca50f22dac19462d3d7d58dbf1fab90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Debat:debat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de750a3188d20e6e7ad723fd4cf284c2ca50f22dac19462d3d7d58dbf1fab90a->leave($__internal_de750a3188d20e6e7ad723fd4cf284c2ca50f22dac19462d3d7d58dbf1fab90a_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_41e926d1c42e52b8aeee1597c46b7539edda1ba97cb2ceb3f0cdcb875d1c69c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e926d1c42e52b8aeee1597c46b7539edda1ba97cb2ceb3f0cdcb875d1c69c5->enter($__internal_41e926d1c42e52b8aeee1597c46b7539edda1ba97cb2ceb3f0cdcb875d1c69c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "<!-- controlleur OK, renvoie un tableau de 1 débat au hasard -->
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

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-md-12\">
                <p class=\"text-center\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["argument"]) || array_key_exists("argument", $context) ? $context["argument"] : (function () { throw new Twig_Error_Runtime('Variable "argument" does not exist.', 20, $this->getSourceContext()); })()), "getTitre", array(), "method"));
        echo "</p>
                <p class=\"text-center\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["argument"]) || array_key_exists("argument", $context) ? $context["argument"] : (function () { throw new Twig_Error_Runtime('Variable "argument" does not exist.', 21, $this->getSourceContext()); })()), "getQuestion", array(), "method"));
        echo "</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-3 col-md-4 debat-padding\">
                <form method=\"post\" action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_debat");
        echo "\">
                    <input type=\"hidden\" name=\"id_debat\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["argument"]) || array_key_exists("argument", $context) ? $context["argument"] : (function () { throw new Twig_Error_Runtime('Variable "argument" does not exist.', 27, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">
                    <input type=\"submit\" class=\"center-block\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["argument"]) || array_key_exists("argument", $context) ? $context["argument"] : (function () { throw new Twig_Error_Runtime('Variable "argument" does not exist.', 29, $this->getSourceContext()); })()), "getReponse1", array(), "method"), "html", null, true);
        echo "\" >
                </form>

                <form method=\"post\" action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("argument_debat");
        echo "\">
                    <label>
                        <textarea name=\"argument\"></textarea>
                    </label>

                    <input type=\"hidden\" name=\"id_debat\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["argument"]) || array_key_exists("argument", $context) ? $context["argument"] : (function () { throw new Twig_Error_Runtime('Variable "argument" does not exist.', 37, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">

                    <input type=\"submit\" class=\"center-block\" value=\"Valider\" >
                </form>
            </div>



            <div class=\"col-sm-3 col-md-4 debat-padding\">

            </div>



            <div class=\"col-sm-3 col-md-4 debat-padding\">
                <form method=\"post\" action=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_debat");
        echo "\">
                    <input type=\"hidden\" name=\"id_debat\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["argument"]) || array_key_exists("argument", $context) ? $context["argument"] : (function () { throw new Twig_Error_Runtime('Variable "argument" does not exist.', 54, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"reponse\" value=\"2\">
                    <input type=\"submit\" class=\"center-block\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["argument"]) || array_key_exists("argument", $context) ? $context["argument"] : (function () { throw new Twig_Error_Runtime('Variable "argument" does not exist.', 56, $this->getSourceContext()); })()), "getReponse2", array(), "method"), "html", null, true);
        echo "\" >
                </form>

                <form method=\"post\" action=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("argument_debat");
        echo "\">
                    <label>
                        <textarea name=\"argument\"></textarea>
                    </label>

                    <input type=\"hidden\" name=\"id_debat\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["argument"]) || array_key_exists("argument", $context) ? $context["argument"] : (function () { throw new Twig_Error_Runtime('Variable "argument" does not exist.', 64, $this->getSourceContext()); })()), "getId", array(), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"reponse\" value=\"2\">

                    <input type=\"submit\" class=\"center-block\" value=\"Valider\" >
                </form>
            </div>
        </div>
    </div>


";
        
        $__internal_41e926d1c42e52b8aeee1597c46b7539edda1ba97cb2ceb3f0cdcb875d1c69c5->leave($__internal_41e926d1c42e52b8aeee1597c46b7539edda1ba97cb2ceb3f0cdcb875d1c69c5_prof);

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
        return array (  135 => 64,  127 => 59,  121 => 56,  116 => 54,  112 => 53,  93 => 37,  85 => 32,  79 => 29,  74 => 27,  70 => 26,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-md-12\">
                <p class=\"text-center\">{{ argument.getTitre()|e }}</p>
                <p class=\"text-center\">{{ argument.getQuestion()|e }}</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-3 col-md-4 debat-padding\">
                <form method=\"post\" action=\"{{ path('vote_debat') }}\">
                    <input type=\"hidden\" name=\"id_debat\" value=\"{{ argument.getId() }}\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">
                    <input type=\"submit\" class=\"center-block\" value=\"{{ argument.getReponse1() }}\" >
                </form>

                <form method=\"post\" action=\"{{ path('argument_debat') }}\">
                    <label>
                        <textarea name=\"argument\"></textarea>
                    </label>

                    <input type=\"hidden\" name=\"id_debat\" value=\"{{ argument.getId() }}\">
                    <input type=\"hidden\" name=\"reponse\" value=\"1\">

                    <input type=\"submit\" class=\"center-block\" value=\"Valider\" >
                </form>
            </div>



            <div class=\"col-sm-3 col-md-4 debat-padding\">

            </div>



            <div class=\"col-sm-3 col-md-4 debat-padding\">
                <form method=\"post\" action=\"{{ path('vote_debat') }}\">
                    <input type=\"hidden\" name=\"id_debat\" value=\"{{ argument.getId() }}\">
                    <input type=\"hidden\" name=\"reponse\" value=\"2\">
                    <input type=\"submit\" class=\"center-block\" value=\"{{ argument.getReponse2() }}\" >
                </form>

                <form method=\"post\" action=\"{{ path('argument_debat') }}\">
                    <label>
                        <textarea name=\"argument\"></textarea>
                    </label>

                    <input type=\"hidden\" name=\"id_debat\" value=\"{{ argument.getId() }}\">
                    <input type=\"hidden\" name=\"reponse\" value=\"2\">

                    <input type=\"submit\" class=\"center-block\" value=\"Valider\" >
                </form>
            </div>
        </div>
    </div>


{% endblock debat_bundle %}", "DebatBundle:Debat:debat.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/debat.html.twig");
    }
}

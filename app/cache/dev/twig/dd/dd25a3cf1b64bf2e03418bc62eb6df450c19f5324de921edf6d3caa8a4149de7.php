<?php

/* DebatBundle:Debat:add_debat.html.twig */
class __TwigTemplate_92793ad4d32985dd0950635606907771e0941ec1a7dc155732a3dab7c98c21ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "DebatBundle:Debat:add_debat.html.twig", 1);
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
        $__internal_d29b60a21e74c5401725ffb93e97353881bd620d222bb40e6f5f9cf5148bb7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29b60a21e74c5401725ffb93e97353881bd620d222bb40e6f5f9cf5148bb7af->enter($__internal_d29b60a21e74c5401725ffb93e97353881bd620d222bb40e6f5f9cf5148bb7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Debat:add_debat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29b60a21e74c5401725ffb93e97353881bd620d222bb40e6f5f9cf5148bb7af->leave($__internal_d29b60a21e74c5401725ffb93e97353881bd620d222bb40e6f5f9cf5148bb7af_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_6ab9b410cf2d746a8a19bee22bedc37fb6ae5f01ecf4964208af2e6a36f77177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab9b410cf2d746a8a19bee22bedc37fb6ae5f01ecf4964208af2e6a36f77177->enter($__internal_6ab9b410cf2d746a8a19bee22bedc37fb6ae5f01ecf4964208af2e6a36f77177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "    <!-- in work -->

<div class=\"container\">
    <nav class=\"navbar navbar-inverse nav-container\">
        <div class=\"container-fluid\">
            <ul class=\"nav navbar-nav\">
                <li><a style=\"color:black;\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_categorie");
        echo "\">Catégories</a></li>
                <li><a style=\"color:black;\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_my_debats");
        echo "\">Afficher mes débats</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a style=\"color:black;\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_home_one");
        echo "\">Débat au hasard</a></li>
                <li><a style=\"color:black;\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_home_grid");
        echo "\">Grille de débats</a></li>
                <li><a style=\"color:black;\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_add_debat");
        echo "\">Rédiger un débat</a></li>
            </ul>
        </div>
    </nav>

    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"titre\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "titre", array()), 'widget');
        echo "<br/>
            </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"question\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Question", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-at fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "question", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"reponse1\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reponse 1", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "reponse1", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"reponse2\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reponse 2", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "reponse2", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"categorie1\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categorie 1", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "categorie1", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"categorie2\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categorie 2", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "categorie2", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateDebut\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de début", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->getSourceContext()); })()), "dateDebut", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateFin\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de fin", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), "dateFin", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateSuppression\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de suppression", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "dateSuppression", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->getSourceContext()); })()), "valider", array()), 'widget');
        echo "
    </div>
</div>


";
        
        $__internal_6ab9b410cf2d746a8a19bee22bedc37fb6ae5f01ecf4964208af2e6a36f77177->leave($__internal_6ab9b410cf2d746a8a19bee22bedc37fb6ae5f01ecf4964208af2e6a36f77177_prof);

    }

    public function getTemplateName()
    {
        return "DebatBundle:Debat:add_debat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 112,  213 => 106,  206 => 102,  197 => 96,  190 => 92,  181 => 86,  174 => 82,  165 => 76,  158 => 72,  149 => 66,  142 => 62,  133 => 56,  126 => 52,  117 => 46,  110 => 42,  101 => 36,  94 => 32,  86 => 27,  80 => 24,  74 => 21,  66 => 16,  62 => 15,  58 => 14,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}
    <!-- in work -->

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

    {{ form_start(form) }}

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"titre\">{{ 'Titre'|trans({}, 'FOSUserBundle') }}</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.titre) }}<br/>
            </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"question\">{{ 'Question'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-at fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.question) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"reponse1\">{{ 'Reponse 1'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.reponse1) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"reponse2\">{{ 'Reponse 2'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.reponse2) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"categorie1\">{{ 'Categorie 1'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.categorie1) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"categorie2\">{{ 'Categorie 2'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.categorie2) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateDebut\">{{ 'Date de début'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.dateDebut) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateFin\">{{ 'Date de fin'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.dateFin) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateSuppression\">{{ 'Date de suppression'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.dateSuppression) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_widget(form.valider) }}
    </div>
</div>


{% endblock debat_bundle %}", "DebatBundle:Debat:add_debat.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/add_debat.html.twig");
    }
}

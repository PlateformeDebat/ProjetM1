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
        $__internal_f5b5fb89ff7806f3b98ab6d0d2965835664d7804926a53e1e5e7ddb2eb8c9cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b5fb89ff7806f3b98ab6d0d2965835664d7804926a53e1e5e7ddb2eb8c9cfd->enter($__internal_f5b5fb89ff7806f3b98ab6d0d2965835664d7804926a53e1e5e7ddb2eb8c9cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Debat:add_debat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b5fb89ff7806f3b98ab6d0d2965835664d7804926a53e1e5e7ddb2eb8c9cfd->leave($__internal_f5b5fb89ff7806f3b98ab6d0d2965835664d7804926a53e1e5e7ddb2eb8c9cfd_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_69ecc899e81e614a849389a161fb9ec517e0e387d779b1115b6aad39ed29a02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ecc899e81e614a849389a161fb9ec517e0e387d779b1115b6aad39ed29a02e->enter($__internal_69ecc899e81e614a849389a161fb9ec517e0e387d779b1115b6aad39ed29a02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "    <!-- in work -->

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
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"titre\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "titre", array()), 'widget');
        echo "<br/>
            </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"question\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Question", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-at fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "question", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"reponse1\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reponse 1", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "reponse1", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"reponse2\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reponse 2", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "reponse2", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"categorie1\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categorie 1", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "categorie1", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"categorie2\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categorie 2", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), "categorie2", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateDebut\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de début", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "dateDebut", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateFin\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de fin", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), "dateFin", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"dateSuppression\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date de suppression", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "dateSuppression", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->getSourceContext()); })()), "valider", array()), 'widget');
        echo "
    </div>


";
        
        $__internal_69ecc899e81e614a849389a161fb9ec517e0e387d779b1115b6aad39ed29a02e->leave($__internal_69ecc899e81e614a849389a161fb9ec517e0e387d779b1115b6aad39ed29a02e_prof);

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
        return array (  204 => 109,  195 => 103,  188 => 99,  179 => 93,  172 => 89,  163 => 83,  156 => 79,  147 => 73,  140 => 69,  131 => 63,  124 => 59,  115 => 53,  108 => 49,  99 => 43,  92 => 39,  83 => 33,  76 => 29,  68 => 24,  62 => 21,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}
    <!-- in work -->

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


{% endblock debat_bundle %}", "DebatBundle:Debat:add_debat.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/add_debat.html.twig");
    }
}

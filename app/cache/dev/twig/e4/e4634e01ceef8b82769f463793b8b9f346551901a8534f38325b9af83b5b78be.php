<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_315c1921d23ba7edb5ed484ae6fed00f9304ac3c04e73b08db667c76c6bfbc93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'co' => array($this, 'block_co'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22c67816974f8d0c686adcc20ea7675e3e4d6ca959699a3afeccd340220d203c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c67816974f8d0c686adcc20ea7675e3e4d6ca959699a3afeccd340220d203c->enter($__internal_22c67816974f8d0c686adcc20ea7675e3e4d6ca959699a3afeccd340220d203c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c67816974f8d0c686adcc20ea7675e3e4d6ca959699a3afeccd340220d203c->leave($__internal_22c67816974f8d0c686adcc20ea7675e3e4d6ca959699a3afeccd340220d203c_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b23a5329aa5a3f4414e1df3ce623a15506cb318785ced5ee2d3a5bdff921fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b23a5329aa5a3f4414e1df3ce623a15506cb318785ced5ee2d3a5bdff921fcb->enter($__internal_1b23a5329aa5a3f4414e1df3ce623a15506cb318785ced5ee2d3a5bdff921fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "
<!DOCTYPE html>

    ";
        // line 6
        $this->displayBlock('co', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })())) {
            // line 9
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })()), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "
    <form name=\"form\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"cols-sm-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" /><br/>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"cols-sm-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-lock fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /><br/>
                </div>
            </div>
        </div>

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br/>

        <div class=\"form-group \">
            <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Envoyer", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>

";
        
        $__internal_1b23a5329aa5a3f4414e1df3ce623a15506cb318785ced5ee2d3a5bdff921fcb->leave($__internal_1b23a5329aa5a3f4414e1df3ce623a15506cb318785ced5ee2d3a5bdff921fcb_prof);

    }

    // line 6
    public function block_co($context, array $blocks = array())
    {
        $__internal_171c70f07cd339e8c4fb84accf9ff83d63df2c24ea4b900317bc77186231dda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171c70f07cd339e8c4fb84accf9ff83d63df2c24ea4b900317bc77186231dda7->enter($__internal_171c70f07cd339e8c4fb84accf9ff83d63df2c24ea4b900317bc77186231dda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "co"));

        echo "<h5>Connexion</h5>";
        
        $__internal_171c70f07cd339e8c4fb84accf9ff83d63df2c24ea4b900317bc77186231dda7->leave($__internal_171c70f07cd339e8c4fb84accf9ff83d63df2c24ea4b900317bc77186231dda7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 6,  108 => 40,  102 => 37,  89 => 27,  80 => 21,  73 => 17,  67 => 14,  62 => 12,  59 => 11,  53 => 9,  51 => 8,  48 => 7,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}
{% block fos_user_content %}

<!DOCTYPE html>

    {% block co %}<h5>Connexion</h5>{% endblock %}

    {% if error %}
        <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
    {% endif %}

    <form name=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"username\">{{ 'Name'|trans({}, 'FOSUserBundle') }}</label>
            <div class=\"cols-sm-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" /><br/>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"password\">{{ 'Password'|trans({}, 'FOSUserBundle') }}</label>
            <div class=\"cols-sm-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-lock fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /><br/>
                </div>
            </div>
        </div>

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'remember_me'|trans({}, 'FOSUserBundle') }}</label><br/>

        <div class=\"form-group \">
            <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Envoyer'|trans({}, 'FOSUserBundle') }}\" />
        </div>
    </form>

{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}

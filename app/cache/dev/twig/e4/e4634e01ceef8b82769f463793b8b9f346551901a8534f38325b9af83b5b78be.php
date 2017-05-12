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
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf542e48a6a862366e52741d2d2eeef94ff1f5ac5fda332ba57913951db7af29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf542e48a6a862366e52741d2d2eeef94ff1f5ac5fda332ba57913951db7af29->enter($__internal_cf542e48a6a862366e52741d2d2eeef94ff1f5ac5fda332ba57913951db7af29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf542e48a6a862366e52741d2d2eeef94ff1f5ac5fda332ba57913951db7af29->leave($__internal_cf542e48a6a862366e52741d2d2eeef94ff1f5ac5fda332ba57913951db7af29_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99cbd94753d885b0c59ef5139d64397bb66f98e329e528c6f26bcd712970ec08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cbd94753d885b0c59ef5139d64397bb66f98e329e528c6f26bcd712970ec08->enter($__internal_99cbd94753d885b0c59ef5139d64397bb66f98e329e528c6f26bcd712970ec08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "
<!DOCTYPE html>
    <div class=\"main-login main-center\">

    <h2>Sign in</h2>

    ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "
    <form name=\"form\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" /><br/>
                </div>
        </div>

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"password\">";
        // line 26
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br/>

        <div class=\"form-group \">
            <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Envoyer", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>

</div>
";
        
        $__internal_99cbd94753d885b0c59ef5139d64397bb66f98e329e528c6f26bcd712970ec08->leave($__internal_99cbd94753d885b0c59ef5139d64397bb66f98e329e528c6f26bcd712970ec08_prof);

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
        return array (  103 => 39,  97 => 36,  84 => 26,  76 => 21,  70 => 18,  64 => 15,  59 => 13,  56 => 12,  50 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}
{% block fos_user_content %}

<!DOCTYPE html>
    <div class=\"main-login main-center\">

    <h2>Sign in</h2>

    {% if error %}
        <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
    {% endif %}

    <form name=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"username\">{{ 'Name'|trans({}, 'FOSUserBundle') }}</label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" /><br/>
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

</div>
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}

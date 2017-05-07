<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_a105e55b610b82168366aab8a3a5891fec22775302f6418e4a52e4d801951398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'debat_bundle' => array($this, 'block_debat_bundle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dddeaf5144c3114b275b4d6793ae318c806c353b29d90726f7f58dfc5d4d4e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddeaf5144c3114b275b4d6793ae318c806c353b29d90726f7f58dfc5d4d4e18->enter($__internal_dddeaf5144c3114b275b4d6793ae318c806c353b29d90726f7f58dfc5d4d4e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/UserBundle.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
</head>

<body>

    ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "        Utilisateur connecté : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
        <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            <button type=\"button\" class=\"btn btn-danger\">Deconnexion</button>
            <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">
                <button type=\"button\" class=\"btn btn-info\">Change password</button>
            </a>
        </a>

    ";
        } else {
            // line 23
            echo "
        ";
            // line 24
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
                // line 25
                echo "            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
                echo "\">
                <button type=\"button\" class=\"btn btn-info\">S'inscrire</button>
            </a>
        ";
            } else {
                // line 29
                echo "            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">
                <button type=\"button\" class=\"btn btn-info\">Se Connecter</button>
            </a>
        ";
            }
            // line 33
            echo "    ";
        }
        // line 34
        echo "
    <div class=\"container\">
        <div class=\"row main\">
            <div class=\"main-login main-center\">
                ";
        // line 38
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 39
        echo "            </div>
        </div>
        ";
        // line 41
        $this->displayBlock('debat_bundle', $context, $blocks);
        // line 42
        echo "    </div>
</body>
</html>";
        
        $__internal_dddeaf5144c3114b275b4d6793ae318c806c353b29d90726f7f58dfc5d4d4e18->leave($__internal_dddeaf5144c3114b275b4d6793ae318c806c353b29d90726f7f58dfc5d4d4e18_prof);

    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1611893ea81d65ec92c4b06ac0ccbd8e139503a823e8c065ff595c23dc5d397f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1611893ea81d65ec92c4b06ac0ccbd8e139503a823e8c065ff595c23dc5d397f->enter($__internal_1611893ea81d65ec92c4b06ac0ccbd8e139503a823e8c065ff595c23dc5d397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_1611893ea81d65ec92c4b06ac0ccbd8e139503a823e8c065ff595c23dc5d397f->leave($__internal_1611893ea81d65ec92c4b06ac0ccbd8e139503a823e8c065ff595c23dc5d397f_prof);

    }

    // line 41
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_0e913ff38206701f9ca1173654b47c61f62f2122b10178acdee623dbe7a846b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e913ff38206701f9ca1173654b47c61f62f2122b10178acdee623dbe7a846b7->enter($__internal_0e913ff38206701f9ca1173654b47c61f62f2122b10178acdee623dbe7a846b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        echo " ";
        
        $__internal_0e913ff38206701f9ca1173654b47c61f62f2122b10178acdee623dbe7a846b7->leave($__internal_0e913ff38206701f9ca1173654b47c61f62f2122b10178acdee623dbe7a846b7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  109 => 38,  100 => 42,  98 => 41,  94 => 39,  92 => 38,  86 => 34,  83 => 33,  75 => 29,  67 => 25,  65 => 24,  62 => 23,  53 => 17,  48 => 15,  43 => 14,  41 => 13,  32 => 7,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/UserBundle.css') }}\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
</head>

<body>

    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        Utilisateur connecté : {{ app.user.username }}
        <a href=\"{{ path('fos_user_security_logout') }}\">
            <button type=\"button\" class=\"btn btn-danger\">Deconnexion</button>
            <a href=\"{{ path('fos_user_change_password') }}\">
                <button type=\"button\" class=\"btn btn-info\">Change password</button>
            </a>
        </a>

    {% else %}

        {% if app.request.attributes.get(\"_route\") == 'fos_user_security_login' %}
            <a href=\"{{ path('fos_user_registration_register') }}\">
                <button type=\"button\" class=\"btn btn-info\">S'inscrire</button>
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">
                <button type=\"button\" class=\"btn btn-info\">Se Connecter</button>
            </a>
        {% endif %}
    {% endif %}

    <div class=\"container\">
        <div class=\"row main\">
            <div class=\"main-login main-center\">
                {% block fos_user_content %}{% endblock fos_user_content %}
            </div>
        </div>
        {% block debat_bundle %} {% endblock debat_bundle %}
    </div>
</body>
</html>", "UserBundle::layout.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/layout.html.twig");
    }
}

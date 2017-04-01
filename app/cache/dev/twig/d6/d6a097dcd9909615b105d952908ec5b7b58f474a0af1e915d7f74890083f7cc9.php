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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b91a3d022f7cd48527d12f6820e8d55d3958bda8f120fd188f4fffe0557de00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91a3d022f7cd48527d12f6820e8d55d3958bda8f120fd188f4fffe0557de00f->enter($__internal_b91a3d022f7cd48527d12f6820e8d55d3958bda8f120fd188f4fffe0557de00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />
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

                <h2>Demo Application</h2>
                ";
        // line 40
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 41
        echo "
            </div>
        </div>
    </div>
</body>
</html>

";
        
        $__internal_b91a3d022f7cd48527d12f6820e8d55d3958bda8f120fd188f4fffe0557de00f->leave($__internal_b91a3d022f7cd48527d12f6820e8d55d3958bda8f120fd188f4fffe0557de00f_prof);

    }

    // line 40
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52b904429d64f91fc71462bcca4a3448eca90942c75daaaeb7596d8d969ae11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b904429d64f91fc71462bcca4a3448eca90942c75daaaeb7596d8d969ae11a->enter($__internal_52b904429d64f91fc71462bcca4a3448eca90942c75daaaeb7596d8d969ae11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_52b904429d64f91fc71462bcca4a3448eca90942c75daaaeb7596d8d969ae11a->leave($__internal_52b904429d64f91fc71462bcca4a3448eca90942c75daaaeb7596d8d969ae11a_prof);

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
        return array (  112 => 40,  98 => 41,  96 => 40,  88 => 34,  85 => 33,  77 => 29,  69 => 25,  67 => 24,  64 => 23,  55 => 17,  50 => 15,  45 => 14,  43 => 13,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"{{ asset('Bootstrap/bootstrap.min.css') }}\" />
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

                <h2>Demo Application</h2>
                {% block fos_user_content %}{% endblock fos_user_content %}

            </div>
        </div>
    </div>
</body>
</html>

{# 'layout.register'|trans({}, 'FOSUserBundle')   'layout.login'|trans({}, 'FOSUserBundle') #}", "UserBundle::layout.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/layout.html.twig");
    }
}

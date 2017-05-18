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
        $__internal_388379b439da5e6c3ed4022dd7142a12d5a1b4f4c8a3b2c44f7c01360fa63cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388379b439da5e6c3ed4022dd7142a12d5a1b4f4c8a3b2c44f7c01360fa63cc0->enter($__internal_388379b439da5e6c3ed4022dd7142a12d5a1b4f4c8a3b2c44f7c01360fa63cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

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
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "            ";
            // line 20
            echo "
        <nav class=\"navbar navbar-default nav-header\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" style=\"color:white; font-weight: bold; font-size: 2em;\" href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("debat_home_grid");
            echo "\">MasterDebat</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a style=\"color:white;\" href=\"#\">User connected : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a style=\"color:white;\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                Deconnexion
                            </a></li>
                        <li><a style=\"color:white;\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">
                                Change password
                            </a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <div style=\"background-color:white; height:2px; display:block; width:70%; margin: 0 auto;\">&nbsp;</div>



    ";
        } else {
            // line 53
            echo "
            <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">
                <button type=\"button\" class=\"btn btn-info\">S'inscrire</button>
            </a>

            <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                <button type=\"button\" class=\"btn btn-info\">Se Connecter</button>
            </a>
    ";
        }
        // line 62
        echo "
    <div class=\"container\">
        <div class=\"row main\">
            ";
        // line 65
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 66
        echo "        </div>
        ";
        // line 67
        $this->displayBlock('debat_bundle', $context, $blocks);
        // line 68
        echo "    </div>

    <div style=\"background-color:white; height:2px; display:block; width:70%; margin: 0 auto; margin-top: 20px;\">&nbsp;</div>
    <div class=\"footer\">
        <p class=\"p_footer\">MasterDebat</p>
        <p class=\"p_footer\">Plateforme de débat en ligne</p>
        <p class=\"p_footer\">Projet M1 2016-2017 | CERI Avignon</p>
        <p class=\"p_footer\">Christophe GALA / Rémy VILAPLANA</p>
    </div>

</body>
</html>";
        
        $__internal_388379b439da5e6c3ed4022dd7142a12d5a1b4f4c8a3b2c44f7c01360fa63cc0->leave($__internal_388379b439da5e6c3ed4022dd7142a12d5a1b4f4c8a3b2c44f7c01360fa63cc0_prof);

    }

    // line 65
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77841c67883c27a250e35f0d7a1d2f93d3eea3b71e9ef03d54502bc884fcb31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77841c67883c27a250e35f0d7a1d2f93d3eea3b71e9ef03d54502bc884fcb31c->enter($__internal_77841c67883c27a250e35f0d7a1d2f93d3eea3b71e9ef03d54502bc884fcb31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_77841c67883c27a250e35f0d7a1d2f93d3eea3b71e9ef03d54502bc884fcb31c->leave($__internal_77841c67883c27a250e35f0d7a1d2f93d3eea3b71e9ef03d54502bc884fcb31c_prof);

    }

    // line 67
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_603820509122057dcd896285d8e69635a1b51054d6e1e2eb0da253cd8be49a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603820509122057dcd896285d8e69635a1b51054d6e1e2eb0da253cd8be49a6a->enter($__internal_603820509122057dcd896285d8e69635a1b51054d6e1e2eb0da253cd8be49a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        echo " ";
        
        $__internal_603820509122057dcd896285d8e69635a1b51054d6e1e2eb0da253cd8be49a6a->leave($__internal_603820509122057dcd896285d8e69635a1b51054d6e1e2eb0da253cd8be49a6a_prof);

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
        return array (  149 => 67,  138 => 65,  120 => 68,  118 => 67,  115 => 66,  113 => 65,  108 => 62,  101 => 58,  94 => 54,  91 => 53,  75 => 40,  69 => 37,  63 => 34,  56 => 30,  44 => 20,  42 => 13,  40 => 12,  32 => 7,  24 => 1,);
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
            {#<div>Utilisateur connecté : {{ app.user.username }}</div>
            <a href=\"{{ path('fos_user_security_logout') }}\">
                <button type=\"button\" class=\"btn btn-danger\">Deconnexion</button>
                <a href=\"{{ path('fos_user_change_password') }}\">
                    <button type=\"button\" class=\"btn btn-info\">Change password</button>
                </a>
            </a>#}

        <nav class=\"navbar navbar-default nav-header\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" style=\"color:white; font-weight: bold; font-size: 2em;\" href=\"{{ path('debat_home_grid') }}\">MasterDebat</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a style=\"color:white;\" href=\"#\">User connected : {{ app.user.username }}</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a style=\"color:white;\" href=\"{{ path('fos_user_security_logout') }}\">
                                Deconnexion
                            </a></li>
                        <li><a style=\"color:white;\" href=\"{{ path('fos_user_change_password') }}\">
                                Change password
                            </a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <div style=\"background-color:white; height:2px; display:block; width:70%; margin: 0 auto;\">&nbsp;</div>



    {% else %}

            <a href=\"{{ path('fos_user_registration_register') }}\">
                <button type=\"button\" class=\"btn btn-info\">S'inscrire</button>
            </a>

            <a href=\"{{ path('fos_user_security_login') }}\">
                <button type=\"button\" class=\"btn btn-info\">Se Connecter</button>
            </a>
    {% endif %}

    <div class=\"container\">
        <div class=\"row main\">
            {% block fos_user_content %}{% endblock fos_user_content %}
        </div>
        {% block debat_bundle %} {% endblock debat_bundle %}
    </div>

    <div style=\"background-color:white; height:2px; display:block; width:70%; margin: 0 auto; margin-top: 20px;\">&nbsp;</div>
    <div class=\"footer\">
        <p class=\"p_footer\">MasterDebat</p>
        <p class=\"p_footer\">Plateforme de débat en ligne</p>
        <p class=\"p_footer\">Projet M1 2016-2017 | CERI Avignon</p>
        <p class=\"p_footer\">Christophe GALA / Rémy VILAPLANA</p>
    </div>

</body>
</html>", "UserBundle::layout.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/layout.html.twig");
    }
}

<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_1bab756339ab1bfd2e22de60aa0cca350535a7de729127039fec2c29287c98fb extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
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
    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 41
    public function block_debat_bundle($context, array $blocks = array())
    {
        echo " ";
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
        return array (  108 => 41,  103 => 38,  97 => 42,  95 => 41,  91 => 39,  89 => 38,  83 => 34,  80 => 33,  72 => 29,  64 => 25,  62 => 24,  59 => 23,  50 => 17,  45 => 15,  40 => 14,  38 => 13,  29 => 7,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle::layout.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/layout.html.twig");
    }
}

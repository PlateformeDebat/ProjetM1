<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e02414a6acf2eb3c59040a7d39a230ae9e788413b56032299f8346bf71c0ddcf extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "
<!DOCTYPE html>
    <div class=\"main-login main-center\">

    <h2>Sign in</h2>

    ";
        // line 9
        if (($context["error"] ?? null)) {
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? null), array(), "FOSUserBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"cols-sm-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" /><br/>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"cols-sm-2 control-label\" for=\"password\">";
        // line 28
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
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br/>

        <div class=\"form-group \">
            <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Envoyer", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>

</div>
";
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
        return array (  96 => 41,  90 => 38,  77 => 28,  68 => 22,  61 => 18,  55 => 15,  50 => 13,  47 => 12,  41 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}

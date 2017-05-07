<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_46c513956b9ba9e280a1968dad3c17127c5c89da8df7e53839962ed9e90dfa60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_225b68097043fe3c39b565582f6a932d59c7cebcc90347d0a4cf49679ba7310e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225b68097043fe3c39b565582f6a932d59c7cebcc90347d0a4cf49679ba7310e->enter($__internal_225b68097043fe3c39b565582f6a932d59c7cebcc90347d0a4cf49679ba7310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_225b68097043fe3c39b565582f6a932d59c7cebcc90347d0a4cf49679ba7310e->leave($__internal_225b68097043fe3c39b565582f6a932d59c7cebcc90347d0a4cf49679ba7310e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4212ef717141c4f54ad3c44cf11b6322f712fa0a4d64a484cb70bb16d3609968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4212ef717141c4f54ad3c44cf11b6322f712fa0a4d64a484cb70bb16d3609968->enter($__internal_4212ef717141c4f54ad3c44cf11b6322f712fa0a4d64a484cb70bb16d3609968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_4212ef717141c4f54ad3c44cf11b6322f712fa0a4d64a484cb70bb16d3609968->leave($__internal_4212ef717141c4f54ad3c44cf11b6322f712fa0a4d64a484cb70bb16d3609968_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}

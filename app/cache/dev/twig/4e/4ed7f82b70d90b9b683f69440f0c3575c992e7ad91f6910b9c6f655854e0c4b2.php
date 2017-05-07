<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_95406b5e43b962125255a593ad2f0c140cbf47ec4cba3a2b6a521a88887bebaf extends Twig_Template
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
        $__internal_0c7a54fb911eee146fad6f0c9cba0a9b34336ce4f6e25fab05373329df06dcf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7a54fb911eee146fad6f0c9cba0a9b34336ce4f6e25fab05373329df06dcf5->enter($__internal_0c7a54fb911eee146fad6f0c9cba0a9b34336ce4f6e25fab05373329df06dcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c7a54fb911eee146fad6f0c9cba0a9b34336ce4f6e25fab05373329df06dcf5->leave($__internal_0c7a54fb911eee146fad6f0c9cba0a9b34336ce4f6e25fab05373329df06dcf5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a382f8937138ebe1c7b854afe03ae9d936eb15d03a8192c530bd011f90ba32fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a382f8937138ebe1c7b854afe03ae9d936eb15d03a8192c530bd011f90ba32fd->enter($__internal_a382f8937138ebe1c7b854afe03ae9d936eb15d03a8192c530bd011f90ba32fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_a382f8937138ebe1c7b854afe03ae9d936eb15d03a8192c530bd011f90ba32fd->leave($__internal_a382f8937138ebe1c7b854afe03ae9d936eb15d03a8192c530bd011f90ba32fd_prof);

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

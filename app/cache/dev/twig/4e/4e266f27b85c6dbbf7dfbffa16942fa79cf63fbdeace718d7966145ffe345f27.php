<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ae3646b7317c7cd2e449d7047bf8023071e39eb128323f24ad5ed910f586ef10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b10b877a3d0dcfbb650edbca12ad4f797147e1269a68cfc99d45a4faf3393743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10b877a3d0dcfbb650edbca12ad4f797147e1269a68cfc99d45a4faf3393743->enter($__internal_b10b877a3d0dcfbb650edbca12ad4f797147e1269a68cfc99d45a4faf3393743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10b877a3d0dcfbb650edbca12ad4f797147e1269a68cfc99d45a4faf3393743->leave($__internal_b10b877a3d0dcfbb650edbca12ad4f797147e1269a68cfc99d45a4faf3393743_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcadbcfb049419ce467e07137c2ee4c81b0f1c9f8294af151399764542fe06ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcadbcfb049419ce467e07137c2ee4c81b0f1c9f8294af151399764542fe06ff->enter($__internal_bcadbcfb049419ce467e07137c2ee4c81b0f1c9f8294af151399764542fe06ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_bcadbcfb049419ce467e07137c2ee4c81b0f1c9f8294af151399764542fe06ff->leave($__internal_bcadbcfb049419ce467e07137c2ee4c81b0f1c9f8294af151399764542fe06ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}

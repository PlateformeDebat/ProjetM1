<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_71b58a2988abce60221da208b9f860c6e74e4d5d4bbdccbc6890a65e6c5f15aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_abcbf630e7aedbee1282554cee262265959a8f7685699148752c478c0b5fd222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcbf630e7aedbee1282554cee262265959a8f7685699148752c478c0b5fd222->enter($__internal_abcbf630e7aedbee1282554cee262265959a8f7685699148752c478c0b5fd222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abcbf630e7aedbee1282554cee262265959a8f7685699148752c478c0b5fd222->leave($__internal_abcbf630e7aedbee1282554cee262265959a8f7685699148752c478c0b5fd222_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adc2c77d87890391fd087217c20750dadbfc003839268e66210a5e7ed5d530fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc2c77d87890391fd087217c20750dadbfc003839268e66210a5e7ed5d530fb->enter($__internal_adc2c77d87890391fd087217c20750dadbfc003839268e66210a5e7ed5d530fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_adc2c77d87890391fd087217c20750dadbfc003839268e66210a5e7ed5d530fb->leave($__internal_adc2c77d87890391fd087217c20750dadbfc003839268e66210a5e7ed5d530fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}

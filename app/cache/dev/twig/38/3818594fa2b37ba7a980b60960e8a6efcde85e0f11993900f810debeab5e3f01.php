<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1e00aaad6d05d1d9b4eb464a37d48981314253edd884b96b09efe4a6a2cc021e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_88ee6d23c8509af346fad2e8a3d90d1da829a133f805dd94a7691122a4a273fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ee6d23c8509af346fad2e8a3d90d1da829a133f805dd94a7691122a4a273fe->enter($__internal_88ee6d23c8509af346fad2e8a3d90d1da829a133f805dd94a7691122a4a273fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ee6d23c8509af346fad2e8a3d90d1da829a133f805dd94a7691122a4a273fe->leave($__internal_88ee6d23c8509af346fad2e8a3d90d1da829a133f805dd94a7691122a4a273fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c04aa5dfaefb6891ca70a0a765cc9143a897cc0e215597a5afc794b1715f362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c04aa5dfaefb6891ca70a0a765cc9143a897cc0e215597a5afc794b1715f362->enter($__internal_8c04aa5dfaefb6891ca70a0a765cc9143a897cc0e215597a5afc794b1715f362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8c04aa5dfaefb6891ca70a0a765cc9143a897cc0e215597a5afc794b1715f362->leave($__internal_8c04aa5dfaefb6891ca70a0a765cc9143a897cc0e215597a5afc794b1715f362_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}

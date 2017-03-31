<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_d2528fc82f04744b81e27539d29a3aad2a193c492026e0cf5bfab4ced1d3b475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_777bd52ff4593732fb5ecfe9d256c9ee840089acd49ba84c3fc0e41ae38fd40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777bd52ff4593732fb5ecfe9d256c9ee840089acd49ba84c3fc0e41ae38fd40e->enter($__internal_777bd52ff4593732fb5ecfe9d256c9ee840089acd49ba84c3fc0e41ae38fd40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777bd52ff4593732fb5ecfe9d256c9ee840089acd49ba84c3fc0e41ae38fd40e->leave($__internal_777bd52ff4593732fb5ecfe9d256c9ee840089acd49ba84c3fc0e41ae38fd40e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_296b867bf24f752d30ae99ef9fa2bb9376ba1d13f355e5a5414d1e4188a8beeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296b867bf24f752d30ae99ef9fa2bb9376ba1d13f355e5a5414d1e4188a8beeb->enter($__internal_296b867bf24f752d30ae99ef9fa2bb9376ba1d13f355e5a5414d1e4188a8beeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_296b867bf24f752d30ae99ef9fa2bb9376ba1d13f355e5a5414d1e4188a8beeb->leave($__internal_296b867bf24f752d30ae99ef9fa2bb9376ba1d13f355e5a5414d1e4188a8beeb_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35328b6043168fc782f0fc0487c8004689384cd87fd211608b028b3376f48235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35328b6043168fc782f0fc0487c8004689384cd87fd211608b028b3376f48235->enter($__internal_35328b6043168fc782f0fc0487c8004689384cd87fd211608b028b3376f48235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_35328b6043168fc782f0fc0487c8004689384cd87fd211608b028b3376f48235->leave($__internal_35328b6043168fc782f0fc0487c8004689384cd87fd211608b028b3376f48235_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}


{% block content %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}

", "UserBundle:Default:index.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}

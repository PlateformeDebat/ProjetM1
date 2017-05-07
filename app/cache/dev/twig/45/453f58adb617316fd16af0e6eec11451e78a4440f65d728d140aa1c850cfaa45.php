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
        $__internal_360e2efb23b64d427e94549e7c68b40b5152846f242a705928568d9cc5e67e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360e2efb23b64d427e94549e7c68b40b5152846f242a705928568d9cc5e67e2d->enter($__internal_360e2efb23b64d427e94549e7c68b40b5152846f242a705928568d9cc5e67e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_360e2efb23b64d427e94549e7c68b40b5152846f242a705928568d9cc5e67e2d->leave($__internal_360e2efb23b64d427e94549e7c68b40b5152846f242a705928568d9cc5e67e2d_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d35c22df3446639332fed921042658bbc818d6d10a8c6350f7632b3ee43aef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d35c22df3446639332fed921042658bbc818d6d10a8c6350f7632b3ee43aef9->enter($__internal_8d35c22df3446639332fed921042658bbc818d6d10a8c6350f7632b3ee43aef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8d35c22df3446639332fed921042658bbc818d6d10a8c6350f7632b3ee43aef9->leave($__internal_8d35c22df3446639332fed921042658bbc818d6d10a8c6350f7632b3ee43aef9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1f675a76a471fe52b5e5092a917b001f639e144624123ac790b12da09642327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f675a76a471fe52b5e5092a917b001f639e144624123ac790b12da09642327->enter($__internal_e1f675a76a471fe52b5e5092a917b001f639e144624123ac790b12da09642327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_e1f675a76a471fe52b5e5092a917b001f639e144624123ac790b12da09642327->leave($__internal_e1f675a76a471fe52b5e5092a917b001f639e144624123ac790b12da09642327_prof);

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

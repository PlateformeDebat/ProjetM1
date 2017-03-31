<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_11ac18083bdda4c98ede2cb3dd34c2f5bd477a500891491d97fd1d3d488ea74b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3614dc36072ef42eeb037f46d8981403c583866c53180e0e79190b77ea06d808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3614dc36072ef42eeb037f46d8981403c583866c53180e0e79190b77ea06d808->enter($__internal_3614dc36072ef42eeb037f46d8981403c583866c53180e0e79190b77ea06d808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3614dc36072ef42eeb037f46d8981403c583866c53180e0e79190b77ea06d808->leave($__internal_3614dc36072ef42eeb037f46d8981403c583866c53180e0e79190b77ea06d808_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ee8c751205caca9ebda74ad6744240aec758dffaec761cd79bef09d06260950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee8c751205caca9ebda74ad6744240aec758dffaec761cd79bef09d06260950->enter($__internal_6ee8c751205caca9ebda74ad6744240aec758dffaec761cd79bef09d06260950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6ee8c751205caca9ebda74ad6744240aec758dffaec761cd79bef09d06260950->leave($__internal_6ee8c751205caca9ebda74ad6744240aec758dffaec761cd79bef09d06260950_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}

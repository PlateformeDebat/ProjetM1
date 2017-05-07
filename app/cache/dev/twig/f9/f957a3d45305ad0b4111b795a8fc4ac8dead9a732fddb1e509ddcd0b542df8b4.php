<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9431e5c886e97e1d6c45ad251cd04117c118a9c1929c6863c799ad757ff03e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ed2722af487b7a8ba7e285aef1a863911e7eadccb87ed558cfc4890a1a906ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2722af487b7a8ba7e285aef1a863911e7eadccb87ed558cfc4890a1a906ffe->enter($__internal_ed2722af487b7a8ba7e285aef1a863911e7eadccb87ed558cfc4890a1a906ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed2722af487b7a8ba7e285aef1a863911e7eadccb87ed558cfc4890a1a906ffe->leave($__internal_ed2722af487b7a8ba7e285aef1a863911e7eadccb87ed558cfc4890a1a906ffe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1063ae4e6fae17f437d0623a9ae95065b1fa13f1a5a858652ae77df4fcb26563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1063ae4e6fae17f437d0623a9ae95065b1fa13f1a5a858652ae77df4fcb26563->enter($__internal_1063ae4e6fae17f437d0623a9ae95065b1fa13f1a5a858652ae77df4fcb26563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1063ae4e6fae17f437d0623a9ae95065b1fa13f1a5a858652ae77df4fcb26563->leave($__internal_1063ae4e6fae17f437d0623a9ae95065b1fa13f1a5a858652ae77df4fcb26563_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}

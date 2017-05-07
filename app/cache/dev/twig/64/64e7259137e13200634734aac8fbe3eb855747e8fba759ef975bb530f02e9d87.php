<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b61f4c5c59285528550bffce3c7add94b77b7c7927cb0676c12e95502333a4a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4bb9d76e22d79efe9deb821675d30723f524483e49b21c5baf473d02843c9928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb9d76e22d79efe9deb821675d30723f524483e49b21c5baf473d02843c9928->enter($__internal_4bb9d76e22d79efe9deb821675d30723f524483e49b21c5baf473d02843c9928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bb9d76e22d79efe9deb821675d30723f524483e49b21c5baf473d02843c9928->leave($__internal_4bb9d76e22d79efe9deb821675d30723f524483e49b21c5baf473d02843c9928_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af4781712ea536978bd96da7cc2333301ebdc4ab7353b7061227ff50b0f4d19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4781712ea536978bd96da7cc2333301ebdc4ab7353b7061227ff50b0f4d19d->enter($__internal_af4781712ea536978bd96da7cc2333301ebdc4ab7353b7061227ff50b0f4d19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_af4781712ea536978bd96da7cc2333301ebdc4ab7353b7061227ff50b0f4d19d->leave($__internal_af4781712ea536978bd96da7cc2333301ebdc4ab7353b7061227ff50b0f4d19d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}

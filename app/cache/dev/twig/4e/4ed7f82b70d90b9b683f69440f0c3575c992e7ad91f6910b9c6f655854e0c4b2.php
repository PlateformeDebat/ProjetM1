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
        $__internal_0b0a294fab8396466152761ec53dfd8a963b36b7a255b957b1a7d0efea425b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0a294fab8396466152761ec53dfd8a963b36b7a255b957b1a7d0efea425b41->enter($__internal_0b0a294fab8396466152761ec53dfd8a963b36b7a255b957b1a7d0efea425b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b0a294fab8396466152761ec53dfd8a963b36b7a255b957b1a7d0efea425b41->leave($__internal_0b0a294fab8396466152761ec53dfd8a963b36b7a255b957b1a7d0efea425b41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1d7ca6d97cd026268b59b0dcfe3ebb81fbe80966cb05a280a5dd6c20769f02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d7ca6d97cd026268b59b0dcfe3ebb81fbe80966cb05a280a5dd6c20769f02f->enter($__internal_d1d7ca6d97cd026268b59b0dcfe3ebb81fbe80966cb05a280a5dd6c20769f02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d1d7ca6d97cd026268b59b0dcfe3ebb81fbe80966cb05a280a5dd6c20769f02f->leave($__internal_d1d7ca6d97cd026268b59b0dcfe3ebb81fbe80966cb05a280a5dd6c20769f02f_prof);

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

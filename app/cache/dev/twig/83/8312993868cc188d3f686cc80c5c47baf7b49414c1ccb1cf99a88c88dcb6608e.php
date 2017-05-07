<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ac6ac7c5e727353e5b2b10fe900564537cdf5b56144754454d240aa3c894cf93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_881dbd5f1703fba5e36827508bdfa5c236ea6ddaf1ae604fc25b069fb2e2a3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881dbd5f1703fba5e36827508bdfa5c236ea6ddaf1ae604fc25b069fb2e2a3ed->enter($__internal_881dbd5f1703fba5e36827508bdfa5c236ea6ddaf1ae604fc25b069fb2e2a3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_881dbd5f1703fba5e36827508bdfa5c236ea6ddaf1ae604fc25b069fb2e2a3ed->leave($__internal_881dbd5f1703fba5e36827508bdfa5c236ea6ddaf1ae604fc25b069fb2e2a3ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fda410e0927f40ef1bcdd358990f5d929eac375ac9c568deb826386f7a0347ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda410e0927f40ef1bcdd358990f5d929eac375ac9c568deb826386f7a0347ef->enter($__internal_fda410e0927f40ef1bcdd358990f5d929eac375ac9c568deb826386f7a0347ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fda410e0927f40ef1bcdd358990f5d929eac375ac9c568deb826386f7a0347ef->leave($__internal_fda410e0927f40ef1bcdd358990f5d929eac375ac9c568deb826386f7a0347ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}

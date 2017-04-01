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
        $__internal_4711aca151f1041711ee029fd16be0f2ced6bbeee2143d73824055a18e4105e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4711aca151f1041711ee029fd16be0f2ced6bbeee2143d73824055a18e4105e7->enter($__internal_4711aca151f1041711ee029fd16be0f2ced6bbeee2143d73824055a18e4105e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4711aca151f1041711ee029fd16be0f2ced6bbeee2143d73824055a18e4105e7->leave($__internal_4711aca151f1041711ee029fd16be0f2ced6bbeee2143d73824055a18e4105e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f619188de86a143e7f14e49342617fcec0c03b5a07d50d3d6fc0b5bc3157ba9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f619188de86a143e7f14e49342617fcec0c03b5a07d50d3d6fc0b5bc3157ba9d->enter($__internal_f619188de86a143e7f14e49342617fcec0c03b5a07d50d3d6fc0b5bc3157ba9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f619188de86a143e7f14e49342617fcec0c03b5a07d50d3d6fc0b5bc3157ba9d->leave($__internal_f619188de86a143e7f14e49342617fcec0c03b5a07d50d3d6fc0b5bc3157ba9d_prof);

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

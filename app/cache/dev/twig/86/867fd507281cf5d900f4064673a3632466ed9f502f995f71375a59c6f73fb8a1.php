<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_144131121e24e8b11f785b8250ecda34049d853370fbaadce62d36295422d5d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ac979d3441559d91f811c6e86bd1c6be343417a968820b2c19e27f861272f1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac979d3441559d91f811c6e86bd1c6be343417a968820b2c19e27f861272f1d8->enter($__internal_ac979d3441559d91f811c6e86bd1c6be343417a968820b2c19e27f861272f1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac979d3441559d91f811c6e86bd1c6be343417a968820b2c19e27f861272f1d8->leave($__internal_ac979d3441559d91f811c6e86bd1c6be343417a968820b2c19e27f861272f1d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4f5d106d55dc2c274f4b935ed21ecf15c44528053db0d54ca87d10acbd5d415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f5d106d55dc2c274f4b935ed21ecf15c44528053db0d54ca87d10acbd5d415->enter($__internal_d4f5d106d55dc2c274f4b935ed21ecf15c44528053db0d54ca87d10acbd5d415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d4f5d106d55dc2c274f4b935ed21ecf15c44528053db0d54ca87d10acbd5d415->leave($__internal_d4f5d106d55dc2c274f4b935ed21ecf15c44528053db0d54ca87d10acbd5d415_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}

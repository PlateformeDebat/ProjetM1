<?php

/* DebatBundle:Default:index.html.twig */
class __TwigTemplate_f855f1358f4a3fde1c8e94bf189456132307858d8d103be2732edd376203bfe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "DebatBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'debat_bundle' => array($this, 'block_debat_bundle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8878c4dfb9b4e9405724cc3a2d915b51371b81580b3e4a55342951e10fb8f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8878c4dfb9b4e9405724cc3a2d915b51371b81580b3e4a55342951e10fb8f07->enter($__internal_d8878c4dfb9b4e9405724cc3a2d915b51371b81580b3e4a55342951e10fb8f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8878c4dfb9b4e9405724cc3a2d915b51371b81580b3e4a55342951e10fb8f07->leave($__internal_d8878c4dfb9b4e9405724cc3a2d915b51371b81580b3e4a55342951e10fb8f07_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_5d6a12aa80ee2523d9fa6018c5eb26800ba92e5c6695b1362ab6b9f0cd707471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6a12aa80ee2523d9fa6018c5eb26800ba92e5c6695b1362ab6b9f0cd707471->enter($__internal_5d6a12aa80ee2523d9fa6018c5eb26800ba92e5c6695b1362ab6b9f0cd707471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "
Hello World!

";
        
        $__internal_5d6a12aa80ee2523d9fa6018c5eb26800ba92e5c6695b1362ab6b9f0cd707471->leave($__internal_5d6a12aa80ee2523d9fa6018c5eb26800ba92e5c6695b1362ab6b9f0cd707471_prof);

    }

    public function getTemplateName()
    {
        return "DebatBundle:Default:index.html.twig";
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
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}

Hello World!

{% endblock debat_bundle %}", "DebatBundle:Default:index.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Default/index.html.twig");
    }
}

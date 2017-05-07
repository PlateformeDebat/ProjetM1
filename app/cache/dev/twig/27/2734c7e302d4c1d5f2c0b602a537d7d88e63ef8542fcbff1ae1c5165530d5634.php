<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_71ffa6daeff98242be7840d19d933efae1a7b5d16029285aab8e9194144ae98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8a683fe4f47dcd0402a30852fc92a961d0e08ed208d25ecab4e146c3fe3df8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a683fe4f47dcd0402a30852fc92a961d0e08ed208d25ecab4e146c3fe3df8b9->enter($__internal_8a683fe4f47dcd0402a30852fc92a961d0e08ed208d25ecab4e146c3fe3df8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a683fe4f47dcd0402a30852fc92a961d0e08ed208d25ecab4e146c3fe3df8b9->leave($__internal_8a683fe4f47dcd0402a30852fc92a961d0e08ed208d25ecab4e146c3fe3df8b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbba3828b737831cbdd053ec33335e02b776921f919e7e0ede0e300bdf944929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbba3828b737831cbdd053ec33335e02b776921f919e7e0ede0e300bdf944929->enter($__internal_fbba3828b737831cbdd053ec33335e02b776921f919e7e0ede0e300bdf944929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fbba3828b737831cbdd053ec33335e02b776921f919e7e0ede0e300bdf944929->leave($__internal_fbba3828b737831cbdd053ec33335e02b776921f919e7e0ede0e300bdf944929_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}

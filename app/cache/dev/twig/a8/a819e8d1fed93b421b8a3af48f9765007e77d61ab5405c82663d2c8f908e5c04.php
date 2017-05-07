<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e56e98347fc2ccc8fea5b5bc8353b1353f0ff7fd24787a28509ae21a830aabc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9e1cc0ac1796016a4e4e3371777b7a010547bb205824b2a4a8f3a81f4f91f5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1cc0ac1796016a4e4e3371777b7a010547bb205824b2a4a8f3a81f4f91f5a1->enter($__internal_9e1cc0ac1796016a4e4e3371777b7a010547bb205824b2a4a8f3a81f4f91f5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e1cc0ac1796016a4e4e3371777b7a010547bb205824b2a4a8f3a81f4f91f5a1->leave($__internal_9e1cc0ac1796016a4e4e3371777b7a010547bb205824b2a4a8f3a81f4f91f5a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63509d7219ebeeb65fb9fa5304439c85e72d2ce00b248503934855780a379b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63509d7219ebeeb65fb9fa5304439c85e72d2ce00b248503934855780a379b0a->enter($__internal_63509d7219ebeeb65fb9fa5304439c85e72d2ce00b248503934855780a379b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_63509d7219ebeeb65fb9fa5304439c85e72d2ce00b248503934855780a379b0a->leave($__internal_63509d7219ebeeb65fb9fa5304439c85e72d2ce00b248503934855780a379b0a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}

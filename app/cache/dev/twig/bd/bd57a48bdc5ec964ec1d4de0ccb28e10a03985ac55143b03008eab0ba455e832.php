<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9ec4002be622d135d4e42454a6dc27bb3c2dd9235c8ce2b8d919265df2b0f21a extends Twig_Template
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
        $__internal_efca2a8fe6ba8b02fa4d1b77404540d72d74d5e0168daec2a5a761e7d43c2e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efca2a8fe6ba8b02fa4d1b77404540d72d74d5e0168daec2a5a761e7d43c2e86->enter($__internal_efca2a8fe6ba8b02fa4d1b77404540d72d74d5e0168daec2a5a761e7d43c2e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efca2a8fe6ba8b02fa4d1b77404540d72d74d5e0168daec2a5a761e7d43c2e86->leave($__internal_efca2a8fe6ba8b02fa4d1b77404540d72d74d5e0168daec2a5a761e7d43c2e86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55d22346d3f1f833df989d3c71a3fd0255825b9e3181878ce8f027ecace18df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d22346d3f1f833df989d3c71a3fd0255825b9e3181878ce8f027ecace18df9->enter($__internal_55d22346d3f1f833df989d3c71a3fd0255825b9e3181878ce8f027ecace18df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_55d22346d3f1f833df989d3c71a3fd0255825b9e3181878ce8f027ecace18df9->leave($__internal_55d22346d3f1f833df989d3c71a3fd0255825b9e3181878ce8f027ecace18df9_prof);

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

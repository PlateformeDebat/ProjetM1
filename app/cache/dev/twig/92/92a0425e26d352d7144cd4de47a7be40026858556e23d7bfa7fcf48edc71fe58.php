<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_902645f051ce711d48d656ec52abcedebec34bc0a95177a0c131139e2d80c4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56147e65f0f5d773f42457a78ce3a2b5911f61310add63338ebf40080b4b9ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56147e65f0f5d773f42457a78ce3a2b5911f61310add63338ebf40080b4b9ec6->enter($__internal_56147e65f0f5d773f42457a78ce3a2b5911f61310add63338ebf40080b4b9ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56147e65f0f5d773f42457a78ce3a2b5911f61310add63338ebf40080b4b9ec6->leave($__internal_56147e65f0f5d773f42457a78ce3a2b5911f61310add63338ebf40080b4b9ec6_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_56174bbd2ef167fb539e33cf62148f7c6020e5e648c5d2521a40ac6c250bddd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56174bbd2ef167fb539e33cf62148f7c6020e5e648c5d2521a40ac6c250bddd2->enter($__internal_56174bbd2ef167fb539e33cf62148f7c6020e5e648c5d2521a40ac6c250bddd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_56174bbd2ef167fb539e33cf62148f7c6020e5e648c5d2521a40ac6c250bddd2->leave($__internal_56174bbd2ef167fb539e33cf62148f7c6020e5e648c5d2521a40ac6c250bddd2_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcb450b3af9714f645bdb51566153290ef800597e9a99ef7ef31bfed12fed12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb450b3af9714f645bdb51566153290ef800597e9a99ef7ef31bfed12fed12b->enter($__internal_dcb450b3af9714f645bdb51566153290ef800597e9a99ef7ef31bfed12fed12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_dcb450b3af9714f645bdb51566153290ef800597e9a99ef7ef31bfed12fed12b->leave($__internal_dcb450b3af9714f645bdb51566153290ef800597e9a99ef7ef31bfed12fed12b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}


{% block content %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}

", "UserBundle:Default:index.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}

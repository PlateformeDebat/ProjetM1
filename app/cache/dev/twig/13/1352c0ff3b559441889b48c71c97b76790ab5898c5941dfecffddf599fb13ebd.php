<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dbb3e4e9289b11c0ee6767c2c681a784755e0e72048a8419130d021169095773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_616e71d00f4997b7d977fd9207c84c1f45a40f0315b30642bbb695fc089275ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616e71d00f4997b7d977fd9207c84c1f45a40f0315b30642bbb695fc089275ee->enter($__internal_616e71d00f4997b7d977fd9207c84c1f45a40f0315b30642bbb695fc089275ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_616e71d00f4997b7d977fd9207c84c1f45a40f0315b30642bbb695fc089275ee->leave($__internal_616e71d00f4997b7d977fd9207c84c1f45a40f0315b30642bbb695fc089275ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12d0a8a0cb7307d9dacf2adbf8f3f20909c0b81ffc594d1df67a416f9a910ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d0a8a0cb7307d9dacf2adbf8f3f20909c0b81ffc594d1df67a416f9a910ba0->enter($__internal_12d0a8a0cb7307d9dacf2adbf8f3f20909c0b81ffc594d1df67a416f9a910ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12d0a8a0cb7307d9dacf2adbf8f3f20909c0b81ffc594d1df67a416f9a910ba0->leave($__internal_12d0a8a0cb7307d9dacf2adbf8f3f20909c0b81ffc594d1df67a416f9a910ba0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_158214c18b06f330b2d1a261f5651b56d4e095ea7b3c26f362ffef0d2f481a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158214c18b06f330b2d1a261f5651b56d4e095ea7b3c26f362ffef0d2f481a1b->enter($__internal_158214c18b06f330b2d1a261f5651b56d4e095ea7b3c26f362ffef0d2f481a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_158214c18b06f330b2d1a261f5651b56d4e095ea7b3c26f362ffef0d2f481a1b->leave($__internal_158214c18b06f330b2d1a261f5651b56d4e095ea7b3c26f362ffef0d2f481a1b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b6735a1b08077bfbdfdeb223dc14d6d3fc8adb074ad2a9a06c6a95f33d511a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6735a1b08077bfbdfdeb223dc14d6d3fc8adb074ad2a9a06c6a95f33d511a3->enter($__internal_9b6735a1b08077bfbdfdeb223dc14d6d3fc8adb074ad2a9a06c6a95f33d511a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b6735a1b08077bfbdfdeb223dc14d6d3fc8adb074ad2a9a06c6a95f33d511a3->leave($__internal_9b6735a1b08077bfbdfdeb223dc14d6d3fc8adb074ad2a9a06c6a95f33d511a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

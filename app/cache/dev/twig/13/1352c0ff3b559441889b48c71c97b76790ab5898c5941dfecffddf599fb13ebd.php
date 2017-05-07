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
        $__internal_a3df4f069e13b700782c85c3ba026c0f3d49d810b896cf96c3b3f4dd03d2a815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3df4f069e13b700782c85c3ba026c0f3d49d810b896cf96c3b3f4dd03d2a815->enter($__internal_a3df4f069e13b700782c85c3ba026c0f3d49d810b896cf96c3b3f4dd03d2a815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3df4f069e13b700782c85c3ba026c0f3d49d810b896cf96c3b3f4dd03d2a815->leave($__internal_a3df4f069e13b700782c85c3ba026c0f3d49d810b896cf96c3b3f4dd03d2a815_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe4a7902794cfc868dfc92251884bdaf6bf0b136e34972c61b0c34bb9d2b46a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4a7902794cfc868dfc92251884bdaf6bf0b136e34972c61b0c34bb9d2b46a1->enter($__internal_fe4a7902794cfc868dfc92251884bdaf6bf0b136e34972c61b0c34bb9d2b46a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe4a7902794cfc868dfc92251884bdaf6bf0b136e34972c61b0c34bb9d2b46a1->leave($__internal_fe4a7902794cfc868dfc92251884bdaf6bf0b136e34972c61b0c34bb9d2b46a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77e999ca4a5507307a810583f69894dd9a7197832c987fb4e7c0e7194fe562da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e999ca4a5507307a810583f69894dd9a7197832c987fb4e7c0e7194fe562da->enter($__internal_77e999ca4a5507307a810583f69894dd9a7197832c987fb4e7c0e7194fe562da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_77e999ca4a5507307a810583f69894dd9a7197832c987fb4e7c0e7194fe562da->leave($__internal_77e999ca4a5507307a810583f69894dd9a7197832c987fb4e7c0e7194fe562da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ad2813ffd525ce9486dab430734b665305168027f6593bd2e642e8aca8e4df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad2813ffd525ce9486dab430734b665305168027f6593bd2e642e8aca8e4df5->enter($__internal_2ad2813ffd525ce9486dab430734b665305168027f6593bd2e642e8aca8e4df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2ad2813ffd525ce9486dab430734b665305168027f6593bd2e642e8aca8e4df5->leave($__internal_2ad2813ffd525ce9486dab430734b665305168027f6593bd2e642e8aca8e4df5_prof);

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

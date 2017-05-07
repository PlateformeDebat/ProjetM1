<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4af58770dad3a2cb2420984eecfb2884394b6fe3b4fd2197715843d0bcebdba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_382eb6459650f3fcb28267e1f664497a49b6912e91d0b8a051bcc59bd44fe528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382eb6459650f3fcb28267e1f664497a49b6912e91d0b8a051bcc59bd44fe528->enter($__internal_382eb6459650f3fcb28267e1f664497a49b6912e91d0b8a051bcc59bd44fe528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382eb6459650f3fcb28267e1f664497a49b6912e91d0b8a051bcc59bd44fe528->leave($__internal_382eb6459650f3fcb28267e1f664497a49b6912e91d0b8a051bcc59bd44fe528_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b47e8563ddf4a0f3b678fb4e8cc79f657f5bf5acd2fba06b7368a0d4806f199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b47e8563ddf4a0f3b678fb4e8cc79f657f5bf5acd2fba06b7368a0d4806f199->enter($__internal_2b47e8563ddf4a0f3b678fb4e8cc79f657f5bf5acd2fba06b7368a0d4806f199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b47e8563ddf4a0f3b678fb4e8cc79f657f5bf5acd2fba06b7368a0d4806f199->leave($__internal_2b47e8563ddf4a0f3b678fb4e8cc79f657f5bf5acd2fba06b7368a0d4806f199_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78310e61f9d88808ed82ecc365e698aa633736197010fc08cfe3f9db43f99339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78310e61f9d88808ed82ecc365e698aa633736197010fc08cfe3f9db43f99339->enter($__internal_78310e61f9d88808ed82ecc365e698aa633736197010fc08cfe3f9db43f99339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_78310e61f9d88808ed82ecc365e698aa633736197010fc08cfe3f9db43f99339->leave($__internal_78310e61f9d88808ed82ecc365e698aa633736197010fc08cfe3f9db43f99339_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7d7f45c7647cf908f26c3c2bd4fdab0f1d71ab5993e07dd1f4c050a8610ac9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d7f45c7647cf908f26c3c2bd4fdab0f1d71ab5993e07dd1f4c050a8610ac9c->enter($__internal_b7d7f45c7647cf908f26c3c2bd4fdab0f1d71ab5993e07dd1f4c050a8610ac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b7d7f45c7647cf908f26c3c2bd4fdab0f1d71ab5993e07dd1f4c050a8610ac9c->leave($__internal_b7d7f45c7647cf908f26c3c2bd4fdab0f1d71ab5993e07dd1f4c050a8610ac9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

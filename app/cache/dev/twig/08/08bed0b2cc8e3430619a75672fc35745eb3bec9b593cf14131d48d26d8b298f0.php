<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e1bc4b742e92c6b9eaa8f7dba824d0922af60592ccf0f3206260ad07c31505ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_104540a4fa5eb5405367ca287d0d9ab07fc145babc83283ff775b14460cebf9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104540a4fa5eb5405367ca287d0d9ab07fc145babc83283ff775b14460cebf9f->enter($__internal_104540a4fa5eb5405367ca287d0d9ab07fc145babc83283ff775b14460cebf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_104540a4fa5eb5405367ca287d0d9ab07fc145babc83283ff775b14460cebf9f->leave($__internal_104540a4fa5eb5405367ca287d0d9ab07fc145babc83283ff775b14460cebf9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4e776c96110302a0b03a7db437499405423d3ead21c1091998c42e540175e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e776c96110302a0b03a7db437499405423d3ead21c1091998c42e540175e65->enter($__internal_b4e776c96110302a0b03a7db437499405423d3ead21c1091998c42e540175e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b4e776c96110302a0b03a7db437499405423d3ead21c1091998c42e540175e65->leave($__internal_b4e776c96110302a0b03a7db437499405423d3ead21c1091998c42e540175e65_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1647adaa26e3bbc29d86375f6ea52a77661d45946ba18a36d45206e2a4c07b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1647adaa26e3bbc29d86375f6ea52a77661d45946ba18a36d45206e2a4c07b8->enter($__internal_f1647adaa26e3bbc29d86375f6ea52a77661d45946ba18a36d45206e2a4c07b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f1647adaa26e3bbc29d86375f6ea52a77661d45946ba18a36d45206e2a4c07b8->leave($__internal_f1647adaa26e3bbc29d86375f6ea52a77661d45946ba18a36d45206e2a4c07b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

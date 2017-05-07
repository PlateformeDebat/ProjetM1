<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ccfd738fbbe140711d0c2b8ec6d407739ee24f3153bd2d643d5945cfa853bd71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3156c76e8d11a640e9633d6bf12f19935828e39937da8e5c4da1868d53fd6e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3156c76e8d11a640e9633d6bf12f19935828e39937da8e5c4da1868d53fd6e98->enter($__internal_3156c76e8d11a640e9633d6bf12f19935828e39937da8e5c4da1868d53fd6e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3156c76e8d11a640e9633d6bf12f19935828e39937da8e5c4da1868d53fd6e98->leave($__internal_3156c76e8d11a640e9633d6bf12f19935828e39937da8e5c4da1868d53fd6e98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94a64da7957e7adc71325d8fdb65f44625a4441ee0e9ef3873aa0901e9593f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a64da7957e7adc71325d8fdb65f44625a4441ee0e9ef3873aa0901e9593f43->enter($__internal_94a64da7957e7adc71325d8fdb65f44625a4441ee0e9ef3873aa0901e9593f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_94a64da7957e7adc71325d8fdb65f44625a4441ee0e9ef3873aa0901e9593f43->leave($__internal_94a64da7957e7adc71325d8fdb65f44625a4441ee0e9ef3873aa0901e9593f43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0b4df2d2ef2ced941642303bfa91b25576e1aa1ff11b4ba82b369fe862d6c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b4df2d2ef2ced941642303bfa91b25576e1aa1ff11b4ba82b369fe862d6c90->enter($__internal_e0b4df2d2ef2ced941642303bfa91b25576e1aa1ff11b4ba82b369fe862d6c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e0b4df2d2ef2ced941642303bfa91b25576e1aa1ff11b4ba82b369fe862d6c90->leave($__internal_e0b4df2d2ef2ced941642303bfa91b25576e1aa1ff11b4ba82b369fe862d6c90_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_300dd5bad4ee7516f073c6e17bcae96dcfaee131638383793101339f5dfd1e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300dd5bad4ee7516f073c6e17bcae96dcfaee131638383793101339f5dfd1e8d->enter($__internal_300dd5bad4ee7516f073c6e17bcae96dcfaee131638383793101339f5dfd1e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new Twig_Error_Runtime('Variable "version" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
";
        
        $__internal_300dd5bad4ee7516f073c6e17bcae96dcfaee131638383793101339f5dfd1e8d->leave($__internal_300dd5bad4ee7516f073c6e17bcae96dcfaee131638383793101339f5dfd1e8d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_24a0225a87033c880befd865be9e7c163fee4d0e6b14857875b8173d3a636f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a0225a87033c880befd865be9e7c163fee4d0e6b14857875b8173d3a636f6a->enter($__internal_24a0225a87033c880befd865be9e7c163fee4d0e6b14857875b8173d3a636f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_24a0225a87033c880befd865be9e7c163fee4d0e6b14857875b8173d3a636f6a->leave($__internal_24a0225a87033c880befd865be9e7c163fee4d0e6b14857875b8173d3a636f6a_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/var/www/html/Projet/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}

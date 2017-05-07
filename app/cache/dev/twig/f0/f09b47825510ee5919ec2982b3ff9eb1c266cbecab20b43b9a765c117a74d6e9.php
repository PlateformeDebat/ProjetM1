<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ba068a539c6f2ae695f1c49b9f99af365a44b3feacc5faa90228499bed418da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c58dc4908b6e56ab7c8e65550d1beab9b72389392f97562eaea2ebd2403851c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58dc4908b6e56ab7c8e65550d1beab9b72389392f97562eaea2ebd2403851c3->enter($__internal_c58dc4908b6e56ab7c8e65550d1beab9b72389392f97562eaea2ebd2403851c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58dc4908b6e56ab7c8e65550d1beab9b72389392f97562eaea2ebd2403851c3->leave($__internal_c58dc4908b6e56ab7c8e65550d1beab9b72389392f97562eaea2ebd2403851c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4dd4ed641bdeb0d664e1739b34bc7e48c7bd2e92e20e9fcf2ecc5781292f16f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd4ed641bdeb0d664e1739b34bc7e48c7bd2e92e20e9fcf2ecc5781292f16f1->enter($__internal_4dd4ed641bdeb0d664e1739b34bc7e48c7bd2e92e20e9fcf2ecc5781292f16f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4dd4ed641bdeb0d664e1739b34bc7e48c7bd2e92e20e9fcf2ecc5781292f16f1->leave($__internal_4dd4ed641bdeb0d664e1739b34bc7e48c7bd2e92e20e9fcf2ecc5781292f16f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9d6a5e736d2830b383570afc7536294263106e1ab889a3ce7684e504f4f447a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d6a5e736d2830b383570afc7536294263106e1ab889a3ce7684e504f4f447a->enter($__internal_c9d6a5e736d2830b383570afc7536294263106e1ab889a3ce7684e504f4f447a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9d6a5e736d2830b383570afc7536294263106e1ab889a3ce7684e504f4f447a->leave($__internal_c9d6a5e736d2830b383570afc7536294263106e1ab889a3ce7684e504f4f447a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce21a7b54a057dbe2409f67f7e848bcd4be0ff56e4018221c70850f4d050c104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce21a7b54a057dbe2409f67f7e848bcd4be0ff56e4018221c70850f4d050c104->enter($__internal_ce21a7b54a057dbe2409f67f7e848bcd4be0ff56e4018221c70850f4d050c104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ce21a7b54a057dbe2409f67f7e848bcd4be0ff56e4018221c70850f4d050c104->leave($__internal_ce21a7b54a057dbe2409f67f7e848bcd4be0ff56e4018221c70850f4d050c104_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

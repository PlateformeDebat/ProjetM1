<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_692c8dce045034536d2accf4b8fd5eb2acd01c994aa29c740c9c2c61d7bbc201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_8160b57271e224124704220d67f2251b1f5fe42e516a60347fdfac6310b2f085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8160b57271e224124704220d67f2251b1f5fe42e516a60347fdfac6310b2f085->enter($__internal_8160b57271e224124704220d67f2251b1f5fe42e516a60347fdfac6310b2f085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8160b57271e224124704220d67f2251b1f5fe42e516a60347fdfac6310b2f085->leave($__internal_8160b57271e224124704220d67f2251b1f5fe42e516a60347fdfac6310b2f085_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_313ac54f0c8a80c204dfe580c8df6cf836c0d99f1ecc115b04eeb91478f3cb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313ac54f0c8a80c204dfe580c8df6cf836c0d99f1ecc115b04eeb91478f3cb34->enter($__internal_313ac54f0c8a80c204dfe580c8df6cf836c0d99f1ecc115b04eeb91478f3cb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_313ac54f0c8a80c204dfe580c8df6cf836c0d99f1ecc115b04eeb91478f3cb34->leave($__internal_313ac54f0c8a80c204dfe580c8df6cf836c0d99f1ecc115b04eeb91478f3cb34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37c0fd80d3923fcedd20f3a5a703e6f7e894ae3198eaf26eb925abad6b986e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c0fd80d3923fcedd20f3a5a703e6f7e894ae3198eaf26eb925abad6b986e5a->enter($__internal_37c0fd80d3923fcedd20f3a5a703e6f7e894ae3198eaf26eb925abad6b986e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37c0fd80d3923fcedd20f3a5a703e6f7e894ae3198eaf26eb925abad6b986e5a->leave($__internal_37c0fd80d3923fcedd20f3a5a703e6f7e894ae3198eaf26eb925abad6b986e5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c06eb7bd2c9446aba4b3d37d36886faf335d44731b7b266222e43d52400239e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c06eb7bd2c9446aba4b3d37d36886faf335d44731b7b266222e43d52400239e->enter($__internal_3c06eb7bd2c9446aba4b3d37d36886faf335d44731b7b266222e43d52400239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3c06eb7bd2c9446aba4b3d37d36886faf335d44731b7b266222e43d52400239e->leave($__internal_3c06eb7bd2c9446aba4b3d37d36886faf335d44731b7b266222e43d52400239e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

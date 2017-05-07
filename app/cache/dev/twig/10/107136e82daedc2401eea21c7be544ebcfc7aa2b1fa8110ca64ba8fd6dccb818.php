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
        $__internal_679727ba952fbd2c9021252411bcb0b3f91094a0b4445bfec8cccb6c768dbe22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679727ba952fbd2c9021252411bcb0b3f91094a0b4445bfec8cccb6c768dbe22->enter($__internal_679727ba952fbd2c9021252411bcb0b3f91094a0b4445bfec8cccb6c768dbe22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_679727ba952fbd2c9021252411bcb0b3f91094a0b4445bfec8cccb6c768dbe22->leave($__internal_679727ba952fbd2c9021252411bcb0b3f91094a0b4445bfec8cccb6c768dbe22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79ec47a653c9b740ba5b9f4ae68f131d49b22d1e48d95a90f328f196c5f2896e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ec47a653c9b740ba5b9f4ae68f131d49b22d1e48d95a90f328f196c5f2896e->enter($__internal_79ec47a653c9b740ba5b9f4ae68f131d49b22d1e48d95a90f328f196c5f2896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79ec47a653c9b740ba5b9f4ae68f131d49b22d1e48d95a90f328f196c5f2896e->leave($__internal_79ec47a653c9b740ba5b9f4ae68f131d49b22d1e48d95a90f328f196c5f2896e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b9c749c11bfd98e80a567bd1cd758a192ee3c8eba69fbdbce01febcbd36a58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9c749c11bfd98e80a567bd1cd758a192ee3c8eba69fbdbce01febcbd36a58b->enter($__internal_3b9c749c11bfd98e80a567bd1cd758a192ee3c8eba69fbdbce01febcbd36a58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b9c749c11bfd98e80a567bd1cd758a192ee3c8eba69fbdbce01febcbd36a58b->leave($__internal_3b9c749c11bfd98e80a567bd1cd758a192ee3c8eba69fbdbce01febcbd36a58b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd6dbd2ccbb431f78282c64c8527f7888e6cacdc7f71215bea172da8d9dad3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6dbd2ccbb431f78282c64c8527f7888e6cacdc7f71215bea172da8d9dad3bd->enter($__internal_cd6dbd2ccbb431f78282c64c8527f7888e6cacdc7f71215bea172da8d9dad3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cd6dbd2ccbb431f78282c64c8527f7888e6cacdc7f71215bea172da8d9dad3bd->leave($__internal_cd6dbd2ccbb431f78282c64c8527f7888e6cacdc7f71215bea172da8d9dad3bd_prof);

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

<?php

/* base.html.twig */
class __TwigTemplate_f1159e266b151b76c6c75602fca4257ab92b3d27b6e8adc54cfd970118bca4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_805c37c37ae723c791ac8d36fc6c7500b7403383165b1de460d6b5a1785f0261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805c37c37ae723c791ac8d36fc6c7500b7403383165b1de460d6b5a1785f0261->enter($__internal_805c37c37ae723c791ac8d36fc6c7500b7403383165b1de460d6b5a1785f0261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_805c37c37ae723c791ac8d36fc6c7500b7403383165b1de460d6b5a1785f0261->leave($__internal_805c37c37ae723c791ac8d36fc6c7500b7403383165b1de460d6b5a1785f0261_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeee90824dc86b42ea6f2c78af2a7c93b48cb072bec860b3dcc3b07d18b003c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeee90824dc86b42ea6f2c78af2a7c93b48cb072bec860b3dcc3b07d18b003c0->enter($__internal_aeee90824dc86b42ea6f2c78af2a7c93b48cb072bec860b3dcc3b07d18b003c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aeee90824dc86b42ea6f2c78af2a7c93b48cb072bec860b3dcc3b07d18b003c0->leave($__internal_aeee90824dc86b42ea6f2c78af2a7c93b48cb072bec860b3dcc3b07d18b003c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cfaf24c1ce7c76ec30ce4da59a3ac4a0a4e2c795fcaa1ae3882adc3f3338c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfaf24c1ce7c76ec30ce4da59a3ac4a0a4e2c795fcaa1ae3882adc3f3338c40->enter($__internal_4cfaf24c1ce7c76ec30ce4da59a3ac4a0a4e2c795fcaa1ae3882adc3f3338c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4cfaf24c1ce7c76ec30ce4da59a3ac4a0a4e2c795fcaa1ae3882adc3f3338c40->leave($__internal_4cfaf24c1ce7c76ec30ce4da59a3ac4a0a4e2c795fcaa1ae3882adc3f3338c40_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8baf66c2415999296a11d5d09f308334fd9f6d786f4d56aa360d15d01390e36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8baf66c2415999296a11d5d09f308334fd9f6d786f4d56aa360d15d01390e36a->enter($__internal_8baf66c2415999296a11d5d09f308334fd9f6d786f4d56aa360d15d01390e36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8baf66c2415999296a11d5d09f308334fd9f6d786f4d56aa360d15d01390e36a->leave($__internal_8baf66c2415999296a11d5d09f308334fd9f6d786f4d56aa360d15d01390e36a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d7433f24bacdc8f507170dfa684da22247e492e7dc24eae9f2ecc296c60576a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7433f24bacdc8f507170dfa684da22247e492e7dc24eae9f2ecc296c60576a->enter($__internal_7d7433f24bacdc8f507170dfa684da22247e492e7dc24eae9f2ecc296c60576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d7433f24bacdc8f507170dfa684da22247e492e7dc24eae9f2ecc296c60576a->leave($__internal_7d7433f24bacdc8f507170dfa684da22247e492e7dc24eae9f2ecc296c60576a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Projet/app/Resources/views/base.html.twig");
    }
}

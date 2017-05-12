<?php

/* DebatBundle:Home:home_grid.html.twig */
class __TwigTemplate_e5c1b05c61a4cd1655a1c64c554f0685a31e436317834fd33e2057a8746dee5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "DebatBundle:Home:home_grid.html.twig", 1);
        $this->blocks = array(
            'debat_bundle' => array($this, 'block_debat_bundle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a602962f2598198e552693557b6e979e9c64fa6f5bd775b4a91bb6a3f6eb3df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a602962f2598198e552693557b6e979e9c64fa6f5bd775b4a91bb6a3f6eb3df4->enter($__internal_a602962f2598198e552693557b6e979e9c64fa6f5bd775b4a91bb6a3f6eb3df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Home:home_grid.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a602962f2598198e552693557b6e979e9c64fa6f5bd775b4a91bb6a3f6eb3df4->leave($__internal_a602962f2598198e552693557b6e979e9c64fa6f5bd775b4a91bb6a3f6eb3df4_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_9622e258bb1bd237df8b33cebb0e87dd18bb78aaae90357d3abd61efc36a4541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9622e258bb1bd237df8b33cebb0e87dd18bb78aaae90357d3abd61efc36a4541->enter($__internal_9622e258bb1bd237df8b33cebb0e87dd18bb78aaae90357d3abd61efc36a4541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "    <!-- controlleur OK, renvoie un tableau de 6 débats au hasard -->


    <div class=\"container\">
        <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new Twig_Error_Runtime('Variable "tableau" does not exist.', 9, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["debat"]) {
            // line 10
            echo "            <div class=\"col-sm-6 col-md-4 div_grid\">
                <div class=\"text-center div_grid_in\">
                    <p style=\"font-weight: bold; font-size: 1.2em;\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getTitre", array(), "method"));
            echo "</p>
                    <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getQuestion", array(), "method"));
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
    </div>



";
        
        $__internal_9622e258bb1bd237df8b33cebb0e87dd18bb78aaae90357d3abd61efc36a4541->leave($__internal_9622e258bb1bd237df8b33cebb0e87dd18bb78aaae90357d3abd61efc36a4541_prof);

    }

    public function getTemplateName()
    {
        return "DebatBundle:Home:home_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  59 => 13,  55 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}
    <!-- controlleur OK, renvoie un tableau de 6 débats au hasard -->


    <div class=\"container\">
        <div class=\"row\">
        {% for debat in tableau %}
            <div class=\"col-sm-6 col-md-4 div_grid\">
                <div class=\"text-center div_grid_in\">
                    <p style=\"font-weight: bold; font-size: 1.2em;\">{{ debat.getTitre()|e }}</p>
                    <p>{{ debat.getQuestion()|e }}</p>
                </div>
            </div>
        {% endfor %}
        </div>
    </div>



{% endblock debat_bundle %}", "DebatBundle:Home:home_grid.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Home/home_grid.html.twig");
    }
}

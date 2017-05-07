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
        $__internal_222ff0387511604e2997302fae9f92a72b79b762f06f541091354643157ef4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222ff0387511604e2997302fae9f92a72b79b762f06f541091354643157ef4de->enter($__internal_222ff0387511604e2997302fae9f92a72b79b762f06f541091354643157ef4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DebatBundle:Home:home_grid.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222ff0387511604e2997302fae9f92a72b79b762f06f541091354643157ef4de->leave($__internal_222ff0387511604e2997302fae9f92a72b79b762f06f541091354643157ef4de_prof);

    }

    // line 3
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_9c1c385fac34f19ebf642f8dad07f322bb5f83ef842662f64ebad16c74516cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1c385fac34f19ebf642f8dad07f322bb5f83ef842662f64ebad16c74516cf1->enter($__internal_9c1c385fac34f19ebf642f8dad07f322bb5f83ef842662f64ebad16c74516cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        // line 4
        echo "    <!-- controlleur OK, renvoie un tableau de 6 débats au hasard -->

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new Twig_Error_Runtime('Variable "tableau" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["debat"]) {
            // line 7
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["debat"], "getId", array(), "method"));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        
        $__internal_9c1c385fac34f19ebf642f8dad07f322bb5f83ef842662f64ebad16c74516cf1->leave($__internal_9c1c385fac34f19ebf642f8dad07f322bb5f83ef842662f64ebad16c74516cf1_prof);

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
        return array (  57 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block debat_bundle %}
    <!-- controlleur OK, renvoie un tableau de 6 débats au hasard -->

    {% for debat in tableau %}
        <li>{{ debat.getId()|e }}</li>
    {% endfor %}

{% endblock debat_bundle %}", "DebatBundle:Home:home_grid.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Home/home_grid.html.twig");
    }
}

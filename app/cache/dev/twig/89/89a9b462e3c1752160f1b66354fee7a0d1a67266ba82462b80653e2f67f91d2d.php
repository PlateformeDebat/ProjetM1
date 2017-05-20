<?php

/* /var/www/html/Projet/src/DebatBundle/Resources/views/Debat/arguments.html.twig */
class __TwigTemplate_9a877566d84d146bc78073d6e22c75a9e63bd199ad8d4476e9345b3acf3dd197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30df9a50e5159abce156553474c8fb3c31910279d38d733acf53a4412f235899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30df9a50e5159abce156553474c8fb3c31910279d38d733acf53a4412f235899->enter($__internal_30df9a50e5159abce156553474c8fb3c31910279d38d733acf53a4412f235899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/arguments.html.twig"));

        // line 1
        echo "Helo

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arguments"]) || array_key_exists("arguments", $context) ? $context["arguments"] : (function () { throw new Twig_Error_Runtime('Variable "arguments" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["argument"]) {
            // line 4
            echo "

    ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["argument"], "getId", array(), "method"));
            echo "
    ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["argument"], "getIdEmetteur", array(), "method"));
            echo "
    ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["argument"], "getContenu", array(), "method"));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['argument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_30df9a50e5159abce156553474c8fb3c31910279d38d733acf53a4412f235899->leave($__internal_30df9a50e5159abce156553474c8fb3c31910279d38d733acf53a4412f235899_prof);

    }

    public function getTemplateName()
    {
        return "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/arguments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 7,  34 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Helo

{% for argument in arguments %}


    {{ argument.getId()|e }}
    {{ argument.getIdEmetteur()|e }}
    {{ argument.getContenu()|e }}

{% endfor %}", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/arguments.html.twig", "/var/www/html/Projet/src/DebatBundle/Resources/views/Debat/arguments.html.twig");
    }
}

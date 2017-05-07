<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_dd331ade00c623313b3747d32fed7a2f934b41a7281445f9fe326f56a12f52d9 extends Twig_Template
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
        $__internal_06c25ae9143ba31f114fc62476f0e156a081f1c83ca89f0eeab6a5bd0a0afeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c25ae9143ba31f114fc62476f0e156a081f1c83ca89f0eeab6a5bd0a0afeb9->enter($__internal_06c25ae9143ba31f114fc62476f0e156a081f1c83ca89f0eeab6a5bd0a0afeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_06c25ae9143ba31f114fc62476f0e156a081f1c83ca89f0eeab6a5bd0a0afeb9->leave($__internal_06c25ae9143ba31f114fc62476f0e156a081f1c83ca89f0eeab6a5bd0a0afeb9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

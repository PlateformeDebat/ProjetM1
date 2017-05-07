<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_09b716d5a48acbd83d8979e4839cec02f0a8d0a0c8f6ffada103f59451c9c9de extends Twig_Template
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
        $__internal_40639e86ed95cef769e1fdb791c42e2b7c40762c8da9c730cce075f61649dca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40639e86ed95cef769e1fdb791c42e2b7c40762c8da9c730cce075f61649dca0->enter($__internal_40639e86ed95cef769e1fdb791c42e2b7c40762c8da9c730cce075f61649dca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_40639e86ed95cef769e1fdb791c42e2b7c40762c8da9c730cce075f61649dca0->leave($__internal_40639e86ed95cef769e1fdb791c42e2b7c40762c8da9c730cce075f61649dca0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

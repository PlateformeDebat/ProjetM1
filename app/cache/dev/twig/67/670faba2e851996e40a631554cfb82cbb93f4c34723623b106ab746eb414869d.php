<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_eccc0a728a21709681af9672b29188de1e310c07ba6b0ae158a4c51f9ee7a5a4 extends Twig_Template
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
        $__internal_e392e761e07241caee6280afab436fdcbf2d5f011ada2144f5b68aed5400fb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e392e761e07241caee6280afab436fdcbf2d5f011ada2144f5b68aed5400fb20->enter($__internal_e392e761e07241caee6280afab436fdcbf2d5f011ada2144f5b68aed5400fb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e392e761e07241caee6280afab436fdcbf2d5f011ada2144f5b68aed5400fb20->leave($__internal_e392e761e07241caee6280afab436fdcbf2d5f011ada2144f5b68aed5400fb20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

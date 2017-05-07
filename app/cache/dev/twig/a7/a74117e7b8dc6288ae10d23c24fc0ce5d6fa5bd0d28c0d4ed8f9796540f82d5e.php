<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1cde21aefe3c2a7298327b1c9dd6dc789b7ea3bc8885ae1d7f9a1a59bb80d77a extends Twig_Template
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
        $__internal_148551664cfdf0fe5b35816f94729f5d4dd969a255d204f698eca35a92fcaad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148551664cfdf0fe5b35816f94729f5d4dd969a255d204f698eca35a92fcaad8->enter($__internal_148551664cfdf0fe5b35816f94729f5d4dd969a255d204f698eca35a92fcaad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_148551664cfdf0fe5b35816f94729f5d4dd969a255d204f698eca35a92fcaad8->leave($__internal_148551664cfdf0fe5b35816f94729f5d4dd969a255d204f698eca35a92fcaad8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_02f012b716a31f905a8fc6034058b73643ddc80b6e65ddc5965453e333909a00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f4a5695a93a1f1d36e106a7cfc633d5c6ea852b398688aaaca71d2cbf0f15ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4a5695a93a1f1d36e106a7cfc633d5c6ea852b398688aaaca71d2cbf0f15ae->enter($__internal_6f4a5695a93a1f1d36e106a7cfc633d5c6ea852b398688aaaca71d2cbf0f15ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6f4a5695a93a1f1d36e106a7cfc633d5c6ea852b398688aaaca71d2cbf0f15ae->leave($__internal_6f4a5695a93a1f1d36e106a7cfc633d5c6ea852b398688aaaca71d2cbf0f15ae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6d60d2c4a42de5ebdd4123b7357d89ad439473238f009999afad8835f2e6238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d60d2c4a42de5ebdd4123b7357d89ad439473238f009999afad8835f2e6238->enter($__internal_d6d60d2c4a42de5ebdd4123b7357d89ad439473238f009999afad8835f2e6238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d6d60d2c4a42de5ebdd4123b7357d89ad439473238f009999afad8835f2e6238->leave($__internal_d6d60d2c4a42de5ebdd4123b7357d89ad439473238f009999afad8835f2e6238_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

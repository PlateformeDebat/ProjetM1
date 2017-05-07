<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_c03500cc34f270e51bdec87dd501d9bcfb9a869420b72f7a00f39b364b9ef915 extends Twig_Template
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
        $__internal_9bc4916147fa460c58b5cdcf17dbe8c17c2f518481846f30d39a8599b69a856f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc4916147fa460c58b5cdcf17dbe8c17c2f518481846f30d39a8599b69a856f->enter($__internal_9bc4916147fa460c58b5cdcf17dbe8c17c2f518481846f30d39a8599b69a856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9bc4916147fa460c58b5cdcf17dbe8c17c2f518481846f30d39a8599b69a856f->leave($__internal_9bc4916147fa460c58b5cdcf17dbe8c17c2f518481846f30d39a8599b69a856f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

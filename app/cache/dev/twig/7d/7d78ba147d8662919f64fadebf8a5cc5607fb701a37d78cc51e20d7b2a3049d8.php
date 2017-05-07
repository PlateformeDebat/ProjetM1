<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6ee2c4557ebd3c72d293e4bb6f8490ed0dafb0107c58f9e99cf8fb9c5f4a6f36 extends Twig_Template
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
        $__internal_d3c7e4179d52e26dd38c7d8a39dccdcf9f49bcfe8ff988e0e05c0a63292132ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c7e4179d52e26dd38c7d8a39dccdcf9f49bcfe8ff988e0e05c0a63292132ab->enter($__internal_d3c7e4179d52e26dd38c7d8a39dccdcf9f49bcfe8ff988e0e05c0a63292132ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d3c7e4179d52e26dd38c7d8a39dccdcf9f49bcfe8ff988e0e05c0a63292132ab->leave($__internal_d3c7e4179d52e26dd38c7d8a39dccdcf9f49bcfe8ff988e0e05c0a63292132ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

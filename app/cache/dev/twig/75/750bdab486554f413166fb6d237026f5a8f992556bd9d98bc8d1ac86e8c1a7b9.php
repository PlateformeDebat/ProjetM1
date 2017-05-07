<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dbada6e522c87e08d2b8dda7b33aeda9c9d9c02c7daa304191de6d8249b14f5a extends Twig_Template
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
        $__internal_6b1c78657fbbae99d5270dfeb8f7dee12f4f37ce8a26ea3c9eef3530de8d3d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1c78657fbbae99d5270dfeb8f7dee12f4f37ce8a26ea3c9eef3530de8d3d1a->enter($__internal_6b1c78657fbbae99d5270dfeb8f7dee12f4f37ce8a26ea3c9eef3530de8d3d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6b1c78657fbbae99d5270dfeb8f7dee12f4f37ce8a26ea3c9eef3530de8d3d1a->leave($__internal_6b1c78657fbbae99d5270dfeb8f7dee12f4f37ce8a26ea3c9eef3530de8d3d1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0e9be637b4467b0e916a84a5450983af5e5ce71742c25a188bef1c12a01d51e8 extends Twig_Template
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
        $__internal_0f76b495dfcb7e38cae59fcdd1cf05b76b8d5e9e2a9223ab49182a4a6ca74aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f76b495dfcb7e38cae59fcdd1cf05b76b8d5e9e2a9223ab49182a4a6ca74aef->enter($__internal_0f76b495dfcb7e38cae59fcdd1cf05b76b8d5e9e2a9223ab49182a4a6ca74aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0f76b495dfcb7e38cae59fcdd1cf05b76b8d5e9e2a9223ab49182a4a6ca74aef->leave($__internal_0f76b495dfcb7e38cae59fcdd1cf05b76b8d5e9e2a9223ab49182a4a6ca74aef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9fbee75a3381b082913073f0bbece531078ca493f470e0d5e718d4c1a03ffc18 extends Twig_Template
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
        $__internal_305167a8398e7e0baa4cc02a0f2f442a387cc6237941519891d16848fb7b4b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305167a8398e7e0baa4cc02a0f2f442a387cc6237941519891d16848fb7b4b41->enter($__internal_305167a8398e7e0baa4cc02a0f2f442a387cc6237941519891d16848fb7b4b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_305167a8398e7e0baa4cc02a0f2f442a387cc6237941519891d16848fb7b4b41->leave($__internal_305167a8398e7e0baa4cc02a0f2f442a387cc6237941519891d16848fb7b4b41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

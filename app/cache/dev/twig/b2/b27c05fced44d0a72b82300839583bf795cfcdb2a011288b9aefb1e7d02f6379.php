<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ee318c09287ffc46c9010aec4bad2b8c6f7d30b7c47f523089bdac23543be1f3 extends Twig_Template
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
        $__internal_43c87d7dee2b0b833a0ad52af4104ecab358f6f941cfbe920f740a7e49ae1277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c87d7dee2b0b833a0ad52af4104ecab358f6f941cfbe920f740a7e49ae1277->enter($__internal_43c87d7dee2b0b833a0ad52af4104ecab358f6f941cfbe920f740a7e49ae1277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_43c87d7dee2b0b833a0ad52af4104ecab358f6f941cfbe920f740a7e49ae1277->leave($__internal_43c87d7dee2b0b833a0ad52af4104ecab358f6f941cfbe920f740a7e49ae1277_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e91b4bbaab558cd72a8c8532b34cb579f4c8d4ea64bece06d171bd6b285f29a4 extends Twig_Template
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
        $__internal_e576ed46e666776105d39c3a797d9854e63a9b1ff8baabcd18f7f56ba8d0a4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e576ed46e666776105d39c3a797d9854e63a9b1ff8baabcd18f7f56ba8d0a4cd->enter($__internal_e576ed46e666776105d39c3a797d9854e63a9b1ff8baabcd18f7f56ba8d0a4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e576ed46e666776105d39c3a797d9854e63a9b1ff8baabcd18f7f56ba8d0a4cd->leave($__internal_e576ed46e666776105d39c3a797d9854e63a9b1ff8baabcd18f7f56ba8d0a4cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

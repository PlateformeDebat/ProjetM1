<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c75d2c4b6bf4de8d60f0f19a0bfb2a778deea92d1fea39f462251202830adbbf extends Twig_Template
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
        $__internal_c066305c1aef00ef8026f4dbf454126974c8bbc23e02bb1aaf71d517ccc4908d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c066305c1aef00ef8026f4dbf454126974c8bbc23e02bb1aaf71d517ccc4908d->enter($__internal_c066305c1aef00ef8026f4dbf454126974c8bbc23e02bb1aaf71d517ccc4908d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c066305c1aef00ef8026f4dbf454126974c8bbc23e02bb1aaf71d517ccc4908d->leave($__internal_c066305c1aef00ef8026f4dbf454126974c8bbc23e02bb1aaf71d517ccc4908d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2646728af1c7c843d76d46ffcb59423f20173a51d8618a253f908cd860622036 extends Twig_Template
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
        $__internal_46a951c0a9f0b2362f27ec8e8e40d86233e500292196fdbff9d814ff4813cb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a951c0a9f0b2362f27ec8e8e40d86233e500292196fdbff9d814ff4813cb1d->enter($__internal_46a951c0a9f0b2362f27ec8e8e40d86233e500292196fdbff9d814ff4813cb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_46a951c0a9f0b2362f27ec8e8e40d86233e500292196fdbff9d814ff4813cb1d->leave($__internal_46a951c0a9f0b2362f27ec8e8e40d86233e500292196fdbff9d814ff4813cb1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

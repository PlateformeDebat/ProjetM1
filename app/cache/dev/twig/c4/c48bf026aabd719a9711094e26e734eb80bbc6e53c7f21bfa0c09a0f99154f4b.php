<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_03dd88c1d48317e205cf95a9b9e84d6e24ec1b7f31683e09e7e4b1b497326170 extends Twig_Template
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
        $__internal_71b86056e903158bc51f7e179ef6659e43726c1755853914057607a763576645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b86056e903158bc51f7e179ef6659e43726c1755853914057607a763576645->enter($__internal_71b86056e903158bc51f7e179ef6659e43726c1755853914057607a763576645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_71b86056e903158bc51f7e179ef6659e43726c1755853914057607a763576645->leave($__internal_71b86056e903158bc51f7e179ef6659e43726c1755853914057607a763576645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

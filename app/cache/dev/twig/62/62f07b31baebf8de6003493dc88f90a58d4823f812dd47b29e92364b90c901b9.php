<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1b4a95fa9bf4837be38066b8e95a49216132ac4589cff059ab536b49affc26d4 extends Twig_Template
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
        $__internal_497ed656d45a935985fae6e8362eaefeabb61db54bc04a60c05b44e645f50f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497ed656d45a935985fae6e8362eaefeabb61db54bc04a60c05b44e645f50f91->enter($__internal_497ed656d45a935985fae6e8362eaefeabb61db54bc04a60c05b44e645f50f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_497ed656d45a935985fae6e8362eaefeabb61db54bc04a60c05b44e645f50f91->leave($__internal_497ed656d45a935985fae6e8362eaefeabb61db54bc04a60c05b44e645f50f91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

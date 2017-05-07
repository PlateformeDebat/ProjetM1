<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_275f04e1b0e8dcf7518654230b4c3943797e7f717c8cb50365777ed137a27eac extends Twig_Template
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
        $__internal_cf9d0593aa4590f19c7082279db556f28c4c66d2f7e96dd89feb9aea5d318f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9d0593aa4590f19c7082279db556f28c4c66d2f7e96dd89feb9aea5d318f45->enter($__internal_cf9d0593aa4590f19c7082279db556f28c4c66d2f7e96dd89feb9aea5d318f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cf9d0593aa4590f19c7082279db556f28c4c66d2f7e96dd89feb9aea5d318f45->leave($__internal_cf9d0593aa4590f19c7082279db556f28c4c66d2f7e96dd89feb9aea5d318f45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

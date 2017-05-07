<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4ed512db0af14d40a2a66621423803167d46ae47e8604df4331ffb72e2bf55be extends Twig_Template
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
        $__internal_f454c76af3802f5dc756946a6cc0831df4298d532db2fcb0faaffccdbdf71313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f454c76af3802f5dc756946a6cc0831df4298d532db2fcb0faaffccdbdf71313->enter($__internal_f454c76af3802f5dc756946a6cc0831df4298d532db2fcb0faaffccdbdf71313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f454c76af3802f5dc756946a6cc0831df4298d532db2fcb0faaffccdbdf71313->leave($__internal_f454c76af3802f5dc756946a6cc0831df4298d532db2fcb0faaffccdbdf71313_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2094de83b1adadfc67e0dcd36da769fbdcd7d4edecd01fd0f9e73b181c065c20 extends Twig_Template
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
        $__internal_fd75cf8cc60ca0ba98d4de746402ee33778022084dd01297f37644dfca8bf1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd75cf8cc60ca0ba98d4de746402ee33778022084dd01297f37644dfca8bf1f9->enter($__internal_fd75cf8cc60ca0ba98d4de746402ee33778022084dd01297f37644dfca8bf1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fd75cf8cc60ca0ba98d4de746402ee33778022084dd01297f37644dfca8bf1f9->leave($__internal_fd75cf8cc60ca0ba98d4de746402ee33778022084dd01297f37644dfca8bf1f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

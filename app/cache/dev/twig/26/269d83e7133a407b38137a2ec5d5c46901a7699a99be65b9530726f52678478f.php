<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_de2c8c74d4a6969d22e97e7df7193e62e96a040f3239abb98dd1589e6cac85fd extends Twig_Template
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
        $__internal_3968e9cedc165864b223c082dae42107be8291aa5f97d2feb08c5bf125941195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3968e9cedc165864b223c082dae42107be8291aa5f97d2feb08c5bf125941195->enter($__internal_3968e9cedc165864b223c082dae42107be8291aa5f97d2feb08c5bf125941195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3968e9cedc165864b223c082dae42107be8291aa5f97d2feb08c5bf125941195->leave($__internal_3968e9cedc165864b223c082dae42107be8291aa5f97d2feb08c5bf125941195_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

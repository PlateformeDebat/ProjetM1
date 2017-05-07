<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fc045fb8d0a8484534a1bc719b0dfdccab58840518dccdb717fb6431c7f8e926 extends Twig_Template
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
        $__internal_0054c884724a44158b18c75a7fe546631ae9720d2cf7f95d5257e06ff650a904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0054c884724a44158b18c75a7fe546631ae9720d2cf7f95d5257e06ff650a904->enter($__internal_0054c884724a44158b18c75a7fe546631ae9720d2cf7f95d5257e06ff650a904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0054c884724a44158b18c75a7fe546631ae9720d2cf7f95d5257e06ff650a904->leave($__internal_0054c884724a44158b18c75a7fe546631ae9720d2cf7f95d5257e06ff650a904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

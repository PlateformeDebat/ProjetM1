<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a1d7de7f8d174238e5b7787c7fce2d893d7ba3d8a41eb87f3683fc54b4b77bad extends Twig_Template
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
        $__internal_fc6e5b1b23fd9d038051100a38789887064047b19e6c20903c314bc641fab44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6e5b1b23fd9d038051100a38789887064047b19e6c20903c314bc641fab44e->enter($__internal_fc6e5b1b23fd9d038051100a38789887064047b19e6c20903c314bc641fab44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fc6e5b1b23fd9d038051100a38789887064047b19e6c20903c314bc641fab44e->leave($__internal_fc6e5b1b23fd9d038051100a38789887064047b19e6c20903c314bc641fab44e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

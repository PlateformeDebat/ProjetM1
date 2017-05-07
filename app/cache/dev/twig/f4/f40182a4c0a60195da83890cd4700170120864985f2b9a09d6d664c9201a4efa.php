<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fc391c3de2f1b7ad09d8fa6ae40bdbfe41608ceabbbec3996cdba2c0ecd3d91a extends Twig_Template
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
        $__internal_624f37d421dc7c3326b83c739af165a74868cd648a808ab5c0b0fb2ccb59995f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624f37d421dc7c3326b83c739af165a74868cd648a808ab5c0b0fb2ccb59995f->enter($__internal_624f37d421dc7c3326b83c739af165a74868cd648a808ab5c0b0fb2ccb59995f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_624f37d421dc7c3326b83c739af165a74868cd648a808ab5c0b0fb2ccb59995f->leave($__internal_624f37d421dc7c3326b83c739af165a74868cd648a808ab5c0b0fb2ccb59995f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

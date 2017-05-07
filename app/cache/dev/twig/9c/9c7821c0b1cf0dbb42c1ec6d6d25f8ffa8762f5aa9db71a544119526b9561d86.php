<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8d23bab1e8673f40ad44e5a1b30e259ae8d8dfe0cc055364260a1119a48a3ad6 extends Twig_Template
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
        $__internal_4fd8188ee8630fa8337115e90eb65a50d9e271fbdd3a226c6bf36eec471b08c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd8188ee8630fa8337115e90eb65a50d9e271fbdd3a226c6bf36eec471b08c0->enter($__internal_4fd8188ee8630fa8337115e90eb65a50d9e271fbdd3a226c6bf36eec471b08c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4fd8188ee8630fa8337115e90eb65a50d9e271fbdd3a226c6bf36eec471b08c0->leave($__internal_4fd8188ee8630fa8337115e90eb65a50d9e271fbdd3a226c6bf36eec471b08c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

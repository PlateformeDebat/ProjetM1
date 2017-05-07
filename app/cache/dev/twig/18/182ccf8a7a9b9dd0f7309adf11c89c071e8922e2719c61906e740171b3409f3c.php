<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9652cab53248d35791ee929901e44aa8a51623a151a6e9a62025ba074c154c81 extends Twig_Template
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
        $__internal_85bfdef3475e3e0cbf592b29b3f1dffb16c936adc15fe2d616adefa99da26455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bfdef3475e3e0cbf592b29b3f1dffb16c936adc15fe2d616adefa99da26455->enter($__internal_85bfdef3475e3e0cbf592b29b3f1dffb16c936adc15fe2d616adefa99da26455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_85bfdef3475e3e0cbf592b29b3f1dffb16c936adc15fe2d616adefa99da26455->leave($__internal_85bfdef3475e3e0cbf592b29b3f1dffb16c936adc15fe2d616adefa99da26455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

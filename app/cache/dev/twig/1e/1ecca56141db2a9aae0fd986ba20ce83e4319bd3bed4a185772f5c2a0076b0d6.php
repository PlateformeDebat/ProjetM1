<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a6608eaad8cb2d11786b2c4a82f6b97c1997794a66e8e993bb09e7fe91914d28 extends Twig_Template
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
        $__internal_9f1d66ee4c3e87475cbc3194a6ac45848627b7d5f39aeefa55202e17a07a8868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1d66ee4c3e87475cbc3194a6ac45848627b7d5f39aeefa55202e17a07a8868->enter($__internal_9f1d66ee4c3e87475cbc3194a6ac45848627b7d5f39aeefa55202e17a07a8868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9f1d66ee4c3e87475cbc3194a6ac45848627b7d5f39aeefa55202e17a07a8868->leave($__internal_9f1d66ee4c3e87475cbc3194a6ac45848627b7d5f39aeefa55202e17a07a8868_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

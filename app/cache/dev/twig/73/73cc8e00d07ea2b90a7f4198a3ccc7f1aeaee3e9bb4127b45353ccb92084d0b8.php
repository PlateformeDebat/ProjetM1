<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_88cefff5cc2e00ce7555f26f8c7f9fb3dcb8a80a9a648b984324e7d6437c6e66 extends Twig_Template
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
        $__internal_7ffc3986443c9fd5a0e341a3415224099131233944ac2aec4e5925548c0a63ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffc3986443c9fd5a0e341a3415224099131233944ac2aec4e5925548c0a63ca->enter($__internal_7ffc3986443c9fd5a0e341a3415224099131233944ac2aec4e5925548c0a63ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7ffc3986443c9fd5a0e341a3415224099131233944ac2aec4e5925548c0a63ca->leave($__internal_7ffc3986443c9fd5a0e341a3415224099131233944ac2aec4e5925548c0a63ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

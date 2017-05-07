<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c400d7388b6f48475f15f3165f80ed279bef3c109baa963d7cd8c15dcb69b0e9 extends Twig_Template
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
        $__internal_b3a5e854774ca42c0b1ac8df9413830bdb6b916117c5523f4894cc42b38ff533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a5e854774ca42c0b1ac8df9413830bdb6b916117c5523f4894cc42b38ff533->enter($__internal_b3a5e854774ca42c0b1ac8df9413830bdb6b916117c5523f4894cc42b38ff533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b3a5e854774ca42c0b1ac8df9413830bdb6b916117c5523f4894cc42b38ff533->leave($__internal_b3a5e854774ca42c0b1ac8df9413830bdb6b916117c5523f4894cc42b38ff533_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

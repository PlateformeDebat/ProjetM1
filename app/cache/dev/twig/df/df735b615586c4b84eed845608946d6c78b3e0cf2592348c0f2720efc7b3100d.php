<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_265dc096cde91320c898badf7916ecf6cb6bcd0ce75caabc8e9306138bd653ba extends Twig_Template
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
        $__internal_179619fafb4a820bd283e94f7681c69ae41aac772409b2dc3241831373cef851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179619fafb4a820bd283e94f7681c69ae41aac772409b2dc3241831373cef851->enter($__internal_179619fafb4a820bd283e94f7681c69ae41aac772409b2dc3241831373cef851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_179619fafb4a820bd283e94f7681c69ae41aac772409b2dc3241831373cef851->leave($__internal_179619fafb4a820bd283e94f7681c69ae41aac772409b2dc3241831373cef851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

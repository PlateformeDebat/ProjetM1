<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_362407d75a27b632c1f444f6d2dd1352b54921298595e11376d183eef69ab0fc extends Twig_Template
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
        $__internal_3875a9921e22d3031d5015e6592bf88b3b245e787e2db2d9cf66b88d1c7b4aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3875a9921e22d3031d5015e6592bf88b3b245e787e2db2d9cf66b88d1c7b4aab->enter($__internal_3875a9921e22d3031d5015e6592bf88b3b245e787e2db2d9cf66b88d1c7b4aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3875a9921e22d3031d5015e6592bf88b3b245e787e2db2d9cf66b88d1c7b4aab->leave($__internal_3875a9921e22d3031d5015e6592bf88b3b245e787e2db2d9cf66b88d1c7b4aab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

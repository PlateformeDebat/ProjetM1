<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_604606efeb99ff529d896f68699a0237fb5fdbe82e62f908ad777164aaa5e7aa extends Twig_Template
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
        $__internal_5b36766ebcb940974ac4ad9859d61c1116284fed83c72e77591919c514f2278e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b36766ebcb940974ac4ad9859d61c1116284fed83c72e77591919c514f2278e->enter($__internal_5b36766ebcb940974ac4ad9859d61c1116284fed83c72e77591919c514f2278e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5b36766ebcb940974ac4ad9859d61c1116284fed83c72e77591919c514f2278e->leave($__internal_5b36766ebcb940974ac4ad9859d61c1116284fed83c72e77591919c514f2278e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

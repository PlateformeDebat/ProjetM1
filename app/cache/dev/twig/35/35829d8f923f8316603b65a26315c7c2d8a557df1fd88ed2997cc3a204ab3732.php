<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7df9f09f292fbd9e804666346f69350186748721bddcc3baf9143f82cf2eb29f extends Twig_Template
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
        $__internal_97e0a155efad0cb80c6b0a4830a3f4ab23eece94337f12473007034cb345bfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e0a155efad0cb80c6b0a4830a3f4ab23eece94337f12473007034cb345bfcc->enter($__internal_97e0a155efad0cb80c6b0a4830a3f4ab23eece94337f12473007034cb345bfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_97e0a155efad0cb80c6b0a4830a3f4ab23eece94337f12473007034cb345bfcc->leave($__internal_97e0a155efad0cb80c6b0a4830a3f4ab23eece94337f12473007034cb345bfcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

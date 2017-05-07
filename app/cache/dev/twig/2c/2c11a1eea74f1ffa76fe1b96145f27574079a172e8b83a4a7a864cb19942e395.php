<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dcafc67f81abc7170fdeb8ed681419e170baa2c2cccf38ca3f069c88623a635d extends Twig_Template
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
        $__internal_f55dc0e7489df1823d08dc2b5d6b3c1ecae5e353213b78cab4068035c18c6e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55dc0e7489df1823d08dc2b5d6b3c1ecae5e353213b78cab4068035c18c6e99->enter($__internal_f55dc0e7489df1823d08dc2b5d6b3c1ecae5e353213b78cab4068035c18c6e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f55dc0e7489df1823d08dc2b5d6b3c1ecae5e353213b78cab4068035c18c6e99->leave($__internal_f55dc0e7489df1823d08dc2b5d6b3c1ecae5e353213b78cab4068035c18c6e99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

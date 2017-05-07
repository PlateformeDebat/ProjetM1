<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_adf6efe680c58cfc5e02d38fdc3028d93fb582b9d171349fbb3aa484c8eafc9a extends Twig_Template
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
        $__internal_ef5959be2a1e9a8c9db0137a3811dd486aea88dd4dbc66ed40926814adf39b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5959be2a1e9a8c9db0137a3811dd486aea88dd4dbc66ed40926814adf39b51->enter($__internal_ef5959be2a1e9a8c9db0137a3811dd486aea88dd4dbc66ed40926814adf39b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ef5959be2a1e9a8c9db0137a3811dd486aea88dd4dbc66ed40926814adf39b51->leave($__internal_ef5959be2a1e9a8c9db0137a3811dd486aea88dd4dbc66ed40926814adf39b51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/Projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}

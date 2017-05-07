<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_55194a506af3dd742f41dcd80484c93d25a20da181a83bfb42bfd9efc8f8db01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0360fc3eda32e0cda3cf38499d3711e6879050e1bceab16cfe87089124e62a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0360fc3eda32e0cda3cf38499d3711e6879050e1bceab16cfe87089124e62a4->enter($__internal_b0360fc3eda32e0cda3cf38499d3711e6879050e1bceab16cfe87089124e62a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b0360fc3eda32e0cda3cf38499d3711e6879050e1bceab16cfe87089124e62a4->leave($__internal_b0360fc3eda32e0cda3cf38499d3711e6879050e1bceab16cfe87089124e62a4_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_97165c2c6bf25281844909a099ad94eb747160140fb51a9a2b753ec83cd51884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97165c2c6bf25281844909a099ad94eb747160140fb51a9a2b753ec83cd51884->enter($__internal_97165c2c6bf25281844909a099ad94eb747160140fb51a9a2b753ec83cd51884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 3, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_97165c2c6bf25281844909a099ad94eb747160140fb51a9a2b753ec83cd51884->leave($__internal_97165c2c6bf25281844909a099ad94eb747160140fb51a9a2b753ec83cd51884_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6b6858058cd8d7cbb5e1ab3a3c5e28715bb361d64208da76744750e165cfddb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6858058cd8d7cbb5e1ab3a3c5e28715bb361d64208da76744750e165cfddb6->enter($__internal_6b6858058cd8d7cbb5e1ab3a3c5e28715bb361d64208da76744750e165cfddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 8, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_6b6858058cd8d7cbb5e1ab3a3c5e28715bb361d64208da76744750e165cfddb6->leave($__internal_6b6858058cd8d7cbb5e1ab3a3c5e28715bb361d64208da76744750e165cfddb6_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_776f2d2b0f35a3c821906008fb6971003c69d82a511db7f7334d62d656d55ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776f2d2b0f35a3c821906008fb6971003c69d82a511db7f7334d62d656d55ef6->enter($__internal_776f2d2b0f35a3c821906008fb6971003c69d82a511db7f7334d62d656d55ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_776f2d2b0f35a3c821906008fb6971003c69d82a511db7f7334d62d656d55ef6->leave($__internal_776f2d2b0f35a3c821906008fb6971003c69d82a511db7f7334d62d656d55ef6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}

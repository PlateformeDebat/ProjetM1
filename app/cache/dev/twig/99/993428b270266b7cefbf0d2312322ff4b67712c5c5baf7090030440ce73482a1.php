<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_631cbc3b81a2be7ac99bb143eca0358924a6fca49dd831bc90bdcfaba8d261b3 extends Twig_Template
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
        $__internal_cd5bf4058f315a7feb1aac1e2cceb06020cd05e37546cee3b882c4c6bed21c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5bf4058f315a7feb1aac1e2cceb06020cd05e37546cee3b882c4c6bed21c5a->enter($__internal_cd5bf4058f315a7feb1aac1e2cceb06020cd05e37546cee3b882c4c6bed21c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cd5bf4058f315a7feb1aac1e2cceb06020cd05e37546cee3b882c4c6bed21c5a->leave($__internal_cd5bf4058f315a7feb1aac1e2cceb06020cd05e37546cee3b882c4c6bed21c5a_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f11113cd72daba864902a51ec1ab18d04049c04dbac1c69626605b0224a935d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11113cd72daba864902a51ec1ab18d04049c04dbac1c69626605b0224a935d2->enter($__internal_f11113cd72daba864902a51ec1ab18d04049c04dbac1c69626605b0224a935d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 3, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 3, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_f11113cd72daba864902a51ec1ab18d04049c04dbac1c69626605b0224a935d2->leave($__internal_f11113cd72daba864902a51ec1ab18d04049c04dbac1c69626605b0224a935d2_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_11acdb20d7b4797d30a3e8a3f3bf038ed888fc919c5d0109757fb1e496624d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11acdb20d7b4797d30a3e8a3f3bf038ed888fc919c5d0109757fb1e496624d64->enter($__internal_11acdb20d7b4797d30a3e8a3f3bf038ed888fc919c5d0109757fb1e496624d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 8, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_11acdb20d7b4797d30a3e8a3f3bf038ed888fc919c5d0109757fb1e496624d64->leave($__internal_11acdb20d7b4797d30a3e8a3f3bf038ed888fc919c5d0109757fb1e496624d64_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2e1c468a9daf5dee9e34a81e67fcf9343ed5c42b54bc500aae698434c9aa0eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1c468a9daf5dee9e34a81e67fcf9343ed5c42b54bc500aae698434c9aa0eb8->enter($__internal_2e1c468a9daf5dee9e34a81e67fcf9343ed5c42b54bc500aae698434c9aa0eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2e1c468a9daf5dee9e34a81e67fcf9343ed5c42b54bc500aae698434c9aa0eb8->leave($__internal_2e1c468a9daf5dee9e34a81e67fcf9343ed5c42b54bc500aae698434c9aa0eb8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}

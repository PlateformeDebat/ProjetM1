<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_d511d5a1aa4b9c2c9b1e331c35c5f663cba2a06c1380f805b84d90bd113b8c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4236b5fec3909d3b41c0dffd910cabed7155cd59c41f54e04990e67b85409027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4236b5fec3909d3b41c0dffd910cabed7155cd59c41f54e04990e67b85409027->enter($__internal_4236b5fec3909d3b41c0dffd910cabed7155cd59c41f54e04990e67b85409027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4236b5fec3909d3b41c0dffd910cabed7155cd59c41f54e04990e67b85409027->leave($__internal_4236b5fec3909d3b41c0dffd910cabed7155cd59c41f54e04990e67b85409027_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb77ab0d94c4ae5c906f3a504adefbbd74db8e46ce475757ba32935c8d5c6326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb77ab0d94c4ae5c906f3a504adefbbd74db8e46ce475757ba32935c8d5c6326->enter($__internal_fb77ab0d94c4ae5c906f3a504adefbbd74db8e46ce475757ba32935c8d5c6326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 5, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_fb77ab0d94c4ae5c906f3a504adefbbd74db8e46ce475757ba32935c8d5c6326->leave($__internal_fb77ab0d94c4ae5c906f3a504adefbbd74db8e46ce475757ba32935c8d5c6326_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/var/www/html/Projet/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}

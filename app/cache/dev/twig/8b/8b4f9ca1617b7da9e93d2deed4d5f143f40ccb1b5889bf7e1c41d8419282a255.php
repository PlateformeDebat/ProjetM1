<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_91ada8d90a7928902b325054e6a7b32ad52a6b520c94323b86135fedcd66834b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d46c3e14da1d63a488c9faec3795825320f8a57f591e1ee017a5ed3054730e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46c3e14da1d63a488c9faec3795825320f8a57f591e1ee017a5ed3054730e56->enter($__internal_d46c3e14da1d63a488c9faec3795825320f8a57f591e1ee017a5ed3054730e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46c3e14da1d63a488c9faec3795825320f8a57f591e1ee017a5ed3054730e56->leave($__internal_d46c3e14da1d63a488c9faec3795825320f8a57f591e1ee017a5ed3054730e56_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2005ff5fe66ada8602bcd5502c96ecb68773f446c4adf5d6ccfe4e1ed535853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2005ff5fe66ada8602bcd5502c96ecb68773f446c4adf5d6ccfe4e1ed535853->enter($__internal_f2005ff5fe66ada8602bcd5502c96ecb68773f446c4adf5d6ccfe4e1ed535853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "<div class=\"main-login main-center\">

    <!DOCTYPE html>
    <h2>Create account</h2>

    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "username", array()), 'widget');
        echo "<br/>
            </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"email\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-at fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "email", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"plainPassword_first\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"plainPassword_second\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'rest');
        echo "

    <div class=\"form-group \">
        <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</div>

";
        
        $__internal_f2005ff5fe66ada8602bcd5502c96ecb68773f446c4adf5d6ccfe4e1ed535853->leave($__internal_f2005ff5fe66ada8602bcd5502c96ecb68773f446c4adf5d6ccfe4e1ed535853_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 51,  114 => 48,  106 => 43,  99 => 39,  90 => 33,  83 => 29,  74 => 23,  67 => 19,  59 => 14,  53 => 11,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}
{% block fos_user_content %}
<div class=\"main-login main-center\">

    <!DOCTYPE html>
    <h2>Create account</h2>

    {{ form_start(form) }}

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"username\">{{ 'Username'|trans({}, 'FOSUserBundle') }}</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.username) }}<br/>
            </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"email\">{{ 'Email'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-at fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.email) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"plainPassword_first\">{{ 'Password'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.plainPassword.first) }}<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"plainPassword_second\">{{ 'Confirm password'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.plainPassword.second) }}<br/>
            </div>
        </div>
    </div>

    {{ form_rest(form) }}

    <div class=\"form-group \">
        <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Create'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</div>

{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}

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
            'co' => array($this, 'block_co'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_178ad350e84a197e532483104954b70e9c8ac3d311b645bf9b0873f3292c4640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178ad350e84a197e532483104954b70e9c8ac3d311b645bf9b0873f3292c4640->enter($__internal_178ad350e84a197e532483104954b70e9c8ac3d311b645bf9b0873f3292c4640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_178ad350e84a197e532483104954b70e9c8ac3d311b645bf9b0873f3292c4640->leave($__internal_178ad350e84a197e532483104954b70e9c8ac3d311b645bf9b0873f3292c4640_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_710a1e050ad7e60c144ed3c981f2c8878ff30ca445f3c8a491b0d66a896f5a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710a1e050ad7e60c144ed3c981f2c8878ff30ca445f3c8a491b0d66a896f5a11->enter($__internal_710a1e050ad7e60c144ed3c981f2c8878ff30ca445f3c8a491b0d66a896f5a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "
    <!DOCTYPE html>

    ";
        // line 6
        $this->displayBlock('co', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "username", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"email\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-at fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "email", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"plainPassword_first\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"plainPassword_second\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa\" aria-hidden=\"true\"></i></span>
                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'widget');
        echo "<br/>
            </div>
        </div>
    </div>

    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'rest');
        echo "

    <div class=\"form-group \">
        <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

";
        
        $__internal_710a1e050ad7e60c144ed3c981f2c8878ff30ca445f3c8a491b0d66a896f5a11->leave($__internal_710a1e050ad7e60c144ed3c981f2c8878ff30ca445f3c8a491b0d66a896f5a11_prof);

    }

    // line 6
    public function block_co($context, array $blocks = array())
    {
        $__internal_44dc384e05d0319796595fbf7c19cdc48eb83c1c87bfeed91c27ae624e1c3ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dc384e05d0319796595fbf7c19cdc48eb83c1c87bfeed91c27ae624e1c3ce6->enter($__internal_44dc384e05d0319796595fbf7c19cdc48eb83c1c87bfeed91c27ae624e1c3ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "co"));

        echo "<h5>Create account</h5>";
        
        $__internal_44dc384e05d0319796595fbf7c19cdc48eb83c1c87bfeed91c27ae624e1c3ce6->leave($__internal_44dc384e05d0319796595fbf7c19cdc48eb83c1c87bfeed91c27ae624e1c3ce6_prof);

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
        return array (  137 => 6,  126 => 53,  120 => 50,  112 => 45,  105 => 41,  96 => 35,  89 => 31,  80 => 25,  73 => 21,  64 => 15,  57 => 11,  51 => 8,  48 => 7,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}
{% block fos_user_content %}

    <!DOCTYPE html>

    {% block co %}<h5>Create account</h5>{% endblock %}

    {{ form_start(form) }}

    <div class=\"form-group\">
        <label class=\"cols-sm-2 control-label\" for=\"username\">{{ 'Username'|trans({}, 'FOSUserBundle') }}</label>
        <div class=\"cols-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
                {{ form_widget(form.username) }}<br/>
            </div>
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

{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Projet/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
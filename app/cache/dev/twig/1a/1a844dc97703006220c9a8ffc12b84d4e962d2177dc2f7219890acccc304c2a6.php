<?php

/* base.html.twig */
class __TwigTemplate_6da5dcd9d5ae960cdcfc1157a69193551c0ceed86a4a04fbb918a1600ce4ad6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'user_bundle' => array($this, 'block_user_bundle'),
            'debat_bundle' => array($this, 'block_debat_bundle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edf483f5b4c5a10457a8c3f9e087367331df5c4fdf1e416444eb57ec8612e70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf483f5b4c5a10457a8c3f9e087367331df5c4fdf1e416444eb57ec8612e70b->enter($__internal_edf483f5b4c5a10457a8c3f9e087367331df5c4fdf1e416444eb57ec8612e70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('user_bundle', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('debat_bundle', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_edf483f5b4c5a10457a8c3f9e087367331df5c4fdf1e416444eb57ec8612e70b->leave($__internal_edf483f5b4c5a10457a8c3f9e087367331df5c4fdf1e416444eb57ec8612e70b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a22f5b0ecf759389fd8b7e5a2fc4efed813db2c5153c0a10725087082524883d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22f5b0ecf759389fd8b7e5a2fc4efed813db2c5153c0a10725087082524883d->enter($__internal_a22f5b0ecf759389fd8b7e5a2fc4efed813db2c5153c0a10725087082524883d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a22f5b0ecf759389fd8b7e5a2fc4efed813db2c5153c0a10725087082524883d->leave($__internal_a22f5b0ecf759389fd8b7e5a2fc4efed813db2c5153c0a10725087082524883d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57b6413decc9a3d37e0d2e96555e6cbf56aa68dc5a2f7423d89fd9e050547b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b6413decc9a3d37e0d2e96555e6cbf56aa68dc5a2f7423d89fd9e050547b5c->enter($__internal_57b6413decc9a3d37e0d2e96555e6cbf56aa68dc5a2f7423d89fd9e050547b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57b6413decc9a3d37e0d2e96555e6cbf56aa68dc5a2f7423d89fd9e050547b5c->leave($__internal_57b6413decc9a3d37e0d2e96555e6cbf56aa68dc5a2f7423d89fd9e050547b5c_prof);

    }

    // line 10
    public function block_user_bundle($context, array $blocks = array())
    {
        $__internal_e234c735c6e669c5c2a9269b071f0e508a822af6a747f509bab30f3519835a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e234c735c6e669c5c2a9269b071f0e508a822af6a747f509bab30f3519835a29->enter($__internal_e234c735c6e669c5c2a9269b071f0e508a822af6a747f509bab30f3519835a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_bundle"));

        
        $__internal_e234c735c6e669c5c2a9269b071f0e508a822af6a747f509bab30f3519835a29->leave($__internal_e234c735c6e669c5c2a9269b071f0e508a822af6a747f509bab30f3519835a29_prof);

    }

    // line 11
    public function block_debat_bundle($context, array $blocks = array())
    {
        $__internal_2fb00d1ad388cae9df1588c0d51f740727e452721e77dc505976c7d48f13dd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb00d1ad388cae9df1588c0d51f740727e452721e77dc505976c7d48f13dd8f->enter($__internal_2fb00d1ad388cae9df1588c0d51f740727e452721e77dc505976c7d48f13dd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "debat_bundle"));

        
        $__internal_2fb00d1ad388cae9df1588c0d51f740727e452721e77dc505976c7d48f13dd8f->leave($__internal_2fb00d1ad388cae9df1588c0d51f740727e452721e77dc505976c7d48f13dd8f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block user_bundle %}{% endblock %}
        {% block debat_bundle %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Projet/app/Resources/views/base.html.twig");
    }
}

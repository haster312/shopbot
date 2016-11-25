<?php

/* base.html.twig */
class __TwigTemplate_244aea183d53454ce690bc644dc395b1c2cf5a9f8d79e75fc4b08870b766e9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c28936b8de6093b6be37e921bd70f5ba033d96cd7453f260e65f87d1bab40631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28936b8de6093b6be37e921bd70f5ba033d96cd7453f260e65f87d1bab40631->enter($__internal_c28936b8de6093b6be37e921bd70f5ba033d96cd7453f260e65f87d1bab40631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c28936b8de6093b6be37e921bd70f5ba033d96cd7453f260e65f87d1bab40631->leave($__internal_c28936b8de6093b6be37e921bd70f5ba033d96cd7453f260e65f87d1bab40631_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2833ca1e95bd0bf8a0d47f07df7ee6d889ccba7365e7804a3b16b8af24000205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2833ca1e95bd0bf8a0d47f07df7ee6d889ccba7365e7804a3b16b8af24000205->enter($__internal_2833ca1e95bd0bf8a0d47f07df7ee6d889ccba7365e7804a3b16b8af24000205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2833ca1e95bd0bf8a0d47f07df7ee6d889ccba7365e7804a3b16b8af24000205->leave($__internal_2833ca1e95bd0bf8a0d47f07df7ee6d889ccba7365e7804a3b16b8af24000205_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4033249d66906463af0032a0c5d955920be3e33bb2049b1859516b9a5d4e255c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4033249d66906463af0032a0c5d955920be3e33bb2049b1859516b9a5d4e255c->enter($__internal_4033249d66906463af0032a0c5d955920be3e33bb2049b1859516b9a5d4e255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4033249d66906463af0032a0c5d955920be3e33bb2049b1859516b9a5d4e255c->leave($__internal_4033249d66906463af0032a0c5d955920be3e33bb2049b1859516b9a5d4e255c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ad55bb5282ed51bb2378a9688a161818601cf2800890a1e3c7e9593d3621c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad55bb5282ed51bb2378a9688a161818601cf2800890a1e3c7e9593d3621c84->enter($__internal_8ad55bb5282ed51bb2378a9688a161818601cf2800890a1e3c7e9593d3621c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ad55bb5282ed51bb2378a9688a161818601cf2800890a1e3c7e9593d3621c84->leave($__internal_8ad55bb5282ed51bb2378a9688a161818601cf2800890a1e3c7e9593d3621c84_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfdc5240619e1c235eb606a2d4ce54b5a2c5e8f454c883bca002e40fba546585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdc5240619e1c235eb606a2d4ce54b5a2c5e8f454c883bca002e40fba546585->enter($__internal_dfdc5240619e1c235eb606a2d4ce54b5a2c5e8f454c883bca002e40fba546585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dfdc5240619e1c235eb606a2d4ce54b5a2c5e8f454c883bca002e40fba546585->leave($__internal_dfdc5240619e1c235eb606a2d4ce54b5a2c5e8f454c883bca002e40fba546585_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\herokuAPP\\ebizbot\\app\\Resources\\views\\base.html.twig");
    }
}

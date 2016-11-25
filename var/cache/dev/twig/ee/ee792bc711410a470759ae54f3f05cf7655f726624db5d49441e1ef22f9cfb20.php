<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c120c299bdd706415cbee24b443e4c514810d4e8c674bb30d2d263b8c3a4d717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dea9c7b623a5be685fbc243bd74bee8f7a24921d891c0ede6eb1d51349fd54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dea9c7b623a5be685fbc243bd74bee8f7a24921d891c0ede6eb1d51349fd54b->enter($__internal_2dea9c7b623a5be685fbc243bd74bee8f7a24921d891c0ede6eb1d51349fd54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dea9c7b623a5be685fbc243bd74bee8f7a24921d891c0ede6eb1d51349fd54b->leave($__internal_2dea9c7b623a5be685fbc243bd74bee8f7a24921d891c0ede6eb1d51349fd54b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61903620ff07c18a95b5eab7d3d5978ee816bdcece692bcdeb321b50c2bd09fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61903620ff07c18a95b5eab7d3d5978ee816bdcece692bcdeb321b50c2bd09fd->enter($__internal_61903620ff07c18a95b5eab7d3d5978ee816bdcece692bcdeb321b50c2bd09fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_61903620ff07c18a95b5eab7d3d5978ee816bdcece692bcdeb321b50c2bd09fd->leave($__internal_61903620ff07c18a95b5eab7d3d5978ee816bdcece692bcdeb321b50c2bd09fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cc15d1d67fe4f7ef0340a6ed78f14f877719d385ae42bcb5aa1b5dbc66b6aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc15d1d67fe4f7ef0340a6ed78f14f877719d385ae42bcb5aa1b5dbc66b6aab->enter($__internal_8cc15d1d67fe4f7ef0340a6ed78f14f877719d385ae42bcb5aa1b5dbc66b6aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8cc15d1d67fe4f7ef0340a6ed78f14f877719d385ae42bcb5aa1b5dbc66b6aab->leave($__internal_8cc15d1d67fe4f7ef0340a6ed78f14f877719d385ae42bcb5aa1b5dbc66b6aab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_626e52f4ae97a96a64b31a0fe349b0f4081fcf7a0d7d3eb444b2f53ac517d6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626e52f4ae97a96a64b31a0fe349b0f4081fcf7a0d7d3eb444b2f53ac517d6fd->enter($__internal_626e52f4ae97a96a64b31a0fe349b0f4081fcf7a0d7d3eb444b2f53ac517d6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_626e52f4ae97a96a64b31a0fe349b0f4081fcf7a0d7d3eb444b2f53ac517d6fd->leave($__internal_626e52f4ae97a96a64b31a0fe349b0f4081fcf7a0d7d3eb444b2f53ac517d6fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

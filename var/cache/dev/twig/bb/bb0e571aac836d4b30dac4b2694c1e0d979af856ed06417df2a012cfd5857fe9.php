<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_270efbe0e9ae95ad6aa8ce5a21a2dca7bfdbe80d3346c1f308636c465e6ff500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_673c329a9f3c850f17286ed93a5453d1a90599abcb10b4b8013cd81e56d983fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673c329a9f3c850f17286ed93a5453d1a90599abcb10b4b8013cd81e56d983fc->enter($__internal_673c329a9f3c850f17286ed93a5453d1a90599abcb10b4b8013cd81e56d983fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673c329a9f3c850f17286ed93a5453d1a90599abcb10b4b8013cd81e56d983fc->leave($__internal_673c329a9f3c850f17286ed93a5453d1a90599abcb10b4b8013cd81e56d983fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad269b7a73930434be98ccbb5ff4c6c06154a08640856f2bea268c7c53a2bc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad269b7a73930434be98ccbb5ff4c6c06154a08640856f2bea268c7c53a2bc8d->enter($__internal_ad269b7a73930434be98ccbb5ff4c6c06154a08640856f2bea268c7c53a2bc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ad269b7a73930434be98ccbb5ff4c6c06154a08640856f2bea268c7c53a2bc8d->leave($__internal_ad269b7a73930434be98ccbb5ff4c6c06154a08640856f2bea268c7c53a2bc8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a2e6031d3d1af225e30a732a52eb36b13ea2b1b089ab2411c0514ac2959eb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2e6031d3d1af225e30a732a52eb36b13ea2b1b089ab2411c0514ac2959eb17->enter($__internal_2a2e6031d3d1af225e30a732a52eb36b13ea2b1b089ab2411c0514ac2959eb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2a2e6031d3d1af225e30a732a52eb36b13ea2b1b089ab2411c0514ac2959eb17->leave($__internal_2a2e6031d3d1af225e30a732a52eb36b13ea2b1b089ab2411c0514ac2959eb17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

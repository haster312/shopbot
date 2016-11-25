<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_46bf86416af03f182d15e03cc4e3f932afb1c09a63bd0391f70c7f6b478d4848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_8a746a3427211373ede5c4b7aadbbe8123e0dcb4239a406a202bbfd6d6f9f8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a746a3427211373ede5c4b7aadbbe8123e0dcb4239a406a202bbfd6d6f9f8b7->enter($__internal_8a746a3427211373ede5c4b7aadbbe8123e0dcb4239a406a202bbfd6d6f9f8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a746a3427211373ede5c4b7aadbbe8123e0dcb4239a406a202bbfd6d6f9f8b7->leave($__internal_8a746a3427211373ede5c4b7aadbbe8123e0dcb4239a406a202bbfd6d6f9f8b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b50b5446b181b48c320eb5125a8db305bf03ba967bf1d1e15e4f4e877d2cc36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50b5446b181b48c320eb5125a8db305bf03ba967bf1d1e15e4f4e877d2cc36b->enter($__internal_b50b5446b181b48c320eb5125a8db305bf03ba967bf1d1e15e4f4e877d2cc36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b50b5446b181b48c320eb5125a8db305bf03ba967bf1d1e15e4f4e877d2cc36b->leave($__internal_b50b5446b181b48c320eb5125a8db305bf03ba967bf1d1e15e4f4e877d2cc36b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa85e14c0b6f320bee1b6b225a36109939cda2c7b97a86ce66828050c258645d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa85e14c0b6f320bee1b6b225a36109939cda2c7b97a86ce66828050c258645d->enter($__internal_aa85e14c0b6f320bee1b6b225a36109939cda2c7b97a86ce66828050c258645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa85e14c0b6f320bee1b6b225a36109939cda2c7b97a86ce66828050c258645d->leave($__internal_aa85e14c0b6f320bee1b6b225a36109939cda2c7b97a86ce66828050c258645d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

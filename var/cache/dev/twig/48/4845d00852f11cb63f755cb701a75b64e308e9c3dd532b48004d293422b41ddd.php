<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7ce8d2bf73d3019b4f8971850f18f362e8fcabcd1ce45efef4a849c51d34c579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16474f9f35ce542a0e4920f95a4d17a7b614b9fa99242d6fbcf9408b16c1e5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16474f9f35ce542a0e4920f95a4d17a7b614b9fa99242d6fbcf9408b16c1e5e7->enter($__internal_16474f9f35ce542a0e4920f95a4d17a7b614b9fa99242d6fbcf9408b16c1e5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16474f9f35ce542a0e4920f95a4d17a7b614b9fa99242d6fbcf9408b16c1e5e7->leave($__internal_16474f9f35ce542a0e4920f95a4d17a7b614b9fa99242d6fbcf9408b16c1e5e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_485053d8d14dba423eea29ae5f59044109bef7d8207c8189b2e023bfedfebb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485053d8d14dba423eea29ae5f59044109bef7d8207c8189b2e023bfedfebb6f->enter($__internal_485053d8d14dba423eea29ae5f59044109bef7d8207c8189b2e023bfedfebb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_485053d8d14dba423eea29ae5f59044109bef7d8207c8189b2e023bfedfebb6f->leave($__internal_485053d8d14dba423eea29ae5f59044109bef7d8207c8189b2e023bfedfebb6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc3b805cdbe09ab53b0cb88bf1b55060d5904c50f8153565671d5e94b134e715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3b805cdbe09ab53b0cb88bf1b55060d5904c50f8153565671d5e94b134e715->enter($__internal_cc3b805cdbe09ab53b0cb88bf1b55060d5904c50f8153565671d5e94b134e715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc3b805cdbe09ab53b0cb88bf1b55060d5904c50f8153565671d5e94b134e715->leave($__internal_cc3b805cdbe09ab53b0cb88bf1b55060d5904c50f8153565671d5e94b134e715_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ec7fca587bd43a17793930e5314e74576a3177fb22e160cdf8a4b856861df01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec7fca587bd43a17793930e5314e74576a3177fb22e160cdf8a4b856861df01->enter($__internal_8ec7fca587bd43a17793930e5314e74576a3177fb22e160cdf8a4b856861df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ec7fca587bd43a17793930e5314e74576a3177fb22e160cdf8a4b856861df01->leave($__internal_8ec7fca587bd43a17793930e5314e74576a3177fb22e160cdf8a4b856861df01_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_220d0703e0c4140e6f19ecaf232a02140a82e5116217d01e498fa40f9b808ac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3032ac480b16e1dbc6f6ef683530d451cab01205d2b66536ad33596965bd0877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3032ac480b16e1dbc6f6ef683530d451cab01205d2b66536ad33596965bd0877->enter($__internal_3032ac480b16e1dbc6f6ef683530d451cab01205d2b66536ad33596965bd0877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3032ac480b16e1dbc6f6ef683530d451cab01205d2b66536ad33596965bd0877->leave($__internal_3032ac480b16e1dbc6f6ef683530d451cab01205d2b66536ad33596965bd0877_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ce305b3860dcbfee602b80cb270dc71a44e9a6a0c3c36b42cdfc1bba211770f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce305b3860dcbfee602b80cb270dc71a44e9a6a0c3c36b42cdfc1bba211770f->enter($__internal_2ce305b3860dcbfee602b80cb270dc71a44e9a6a0c3c36b42cdfc1bba211770f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ce305b3860dcbfee602b80cb270dc71a44e9a6a0c3c36b42cdfc1bba211770f->leave($__internal_2ce305b3860dcbfee602b80cb270dc71a44e9a6a0c3c36b42cdfc1bba211770f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_129229a54ebea47f5465799a723b40c54e739c98d086a4d76ca102a0ab00daf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129229a54ebea47f5465799a723b40c54e739c98d086a4d76ca102a0ab00daf2->enter($__internal_129229a54ebea47f5465799a723b40c54e739c98d086a4d76ca102a0ab00daf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_129229a54ebea47f5465799a723b40c54e739c98d086a4d76ca102a0ab00daf2->leave($__internal_129229a54ebea47f5465799a723b40c54e739c98d086a4d76ca102a0ab00daf2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_786cdacc2c14e118a4f76ddd229d5f57d2fe1ea13ca59bd0ecf03343b203edaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786cdacc2c14e118a4f76ddd229d5f57d2fe1ea13ca59bd0ecf03343b203edaa->enter($__internal_786cdacc2c14e118a4f76ddd229d5f57d2fe1ea13ca59bd0ecf03343b203edaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_786cdacc2c14e118a4f76ddd229d5f57d2fe1ea13ca59bd0ecf03343b203edaa->leave($__internal_786cdacc2c14e118a4f76ddd229d5f57d2fe1ea13ca59bd0ecf03343b203edaa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

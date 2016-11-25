<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3c38bd2adf90be8275dc4abe30f79ea73d5f3db3456cb806ba2a5f37ee707a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc8b92f22a7a6c9c484a6392b6d6ea5a27a687530fbf2b38e829949240193470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8b92f22a7a6c9c484a6392b6d6ea5a27a687530fbf2b38e829949240193470->enter($__internal_dc8b92f22a7a6c9c484a6392b6d6ea5a27a687530fbf2b38e829949240193470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_dc8b92f22a7a6c9c484a6392b6d6ea5a27a687530fbf2b38e829949240193470->leave($__internal_dc8b92f22a7a6c9c484a6392b6d6ea5a27a687530fbf2b38e829949240193470_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

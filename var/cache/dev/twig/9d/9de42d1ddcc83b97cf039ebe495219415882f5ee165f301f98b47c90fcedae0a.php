<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_21032e2d0d41d5f41edc1b419fbdf046ccd78258696cdb6e1e7927eee14d83e0 extends Twig_Template
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
        $__internal_1e8abbb881c6a34c68f06380fd4207fefc2e552c9db0506670cf0033202b33c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8abbb881c6a34c68f06380fd4207fefc2e552c9db0506670cf0033202b33c2->enter($__internal_1e8abbb881c6a34c68f06380fd4207fefc2e552c9db0506670cf0033202b33c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1e8abbb881c6a34c68f06380fd4207fefc2e552c9db0506670cf0033202b33c2->leave($__internal_1e8abbb881c6a34c68f06380fd4207fefc2e552c9db0506670cf0033202b33c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5f3550aca143105f447befd0b25cd580290f6dcaf07d20e175dee78cd78fb0d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd3c9095cf3fed84da32a55952b5704749b6bbf165b8bb2e82975231fb0bb0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3c9095cf3fed84da32a55952b5704749b6bbf165b8bb2e82975231fb0bb0d9->enter($__internal_bd3c9095cf3fed84da32a55952b5704749b6bbf165b8bb2e82975231fb0bb0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bd3c9095cf3fed84da32a55952b5704749b6bbf165b8bb2e82975231fb0bb0d9->leave($__internal_bd3c9095cf3fed84da32a55952b5704749b6bbf165b8bb2e82975231fb0bb0d9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7aaa8830fc13058b77309a0f865efea4dccc8cdb929185e4ce2f9f79e4b63441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaa8830fc13058b77309a0f865efea4dccc8cdb929185e4ce2f9f79e4b63441->enter($__internal_7aaa8830fc13058b77309a0f865efea4dccc8cdb929185e4ce2f9f79e4b63441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7aaa8830fc13058b77309a0f865efea4dccc8cdb929185e4ce2f9f79e4b63441->leave($__internal_7aaa8830fc13058b77309a0f865efea4dccc8cdb929185e4ce2f9f79e4b63441_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

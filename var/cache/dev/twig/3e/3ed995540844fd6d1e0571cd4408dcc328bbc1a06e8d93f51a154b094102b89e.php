<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_09dba52c1a6c22a37ad2c22f20343880e6be03ff21eeb4f267a2dfd40bfda2dc extends Twig_Template
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
        $__internal_0ac68229e71a348327f49d3244494fecf72aceed68554fa567fc30985d38eb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac68229e71a348327f49d3244494fecf72aceed68554fa567fc30985d38eb0d->enter($__internal_0ac68229e71a348327f49d3244494fecf72aceed68554fa567fc30985d38eb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0ac68229e71a348327f49d3244494fecf72aceed68554fa567fc30985d38eb0d->leave($__internal_0ac68229e71a348327f49d3244494fecf72aceed68554fa567fc30985d38eb0d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_28dd1bb16fea87089ddc45e9e8bf1f33162c206372eaf37b2731b0659fb14ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28dd1bb16fea87089ddc45e9e8bf1f33162c206372eaf37b2731b0659fb14ade->enter($__internal_28dd1bb16fea87089ddc45e9e8bf1f33162c206372eaf37b2731b0659fb14ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_28dd1bb16fea87089ddc45e9e8bf1f33162c206372eaf37b2731b0659fb14ade->leave($__internal_28dd1bb16fea87089ddc45e9e8bf1f33162c206372eaf37b2731b0659fb14ade_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

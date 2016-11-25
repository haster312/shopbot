<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ff1f38262d6be089f190ba29e85949966a8fd0e5b9711af3e67b7a238bbc0f66 extends Twig_Template
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
        $__internal_4f89c4027535c0116a25c77916a4f9c8e7b3388a09402b8ea9571a58870624e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f89c4027535c0116a25c77916a4f9c8e7b3388a09402b8ea9571a58870624e2->enter($__internal_4f89c4027535c0116a25c77916a4f9c8e7b3388a09402b8ea9571a58870624e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4f89c4027535c0116a25c77916a4f9c8e7b3388a09402b8ea9571a58870624e2->leave($__internal_4f89c4027535c0116a25c77916a4f9c8e7b3388a09402b8ea9571a58870624e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

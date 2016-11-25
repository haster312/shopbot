<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_322dbaca59ed99d11ce31810b18862922a420758dee90b23eb4c027029d8724a extends Twig_Template
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
        $__internal_120fc10a7f33a5611a7a5618dfc76a4f2511dca0c6c513191270ac63eb377c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120fc10a7f33a5611a7a5618dfc76a4f2511dca0c6c513191270ac63eb377c76->enter($__internal_120fc10a7f33a5611a7a5618dfc76a4f2511dca0c6c513191270ac63eb377c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_120fc10a7f33a5611a7a5618dfc76a4f2511dca0c6c513191270ac63eb377c76->leave($__internal_120fc10a7f33a5611a7a5618dfc76a4f2511dca0c6c513191270ac63eb377c76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

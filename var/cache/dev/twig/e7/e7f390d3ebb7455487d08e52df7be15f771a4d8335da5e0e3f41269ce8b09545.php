<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_63984cd2fe48921b07b043bf25ab72a732c76b36d0df1442811fb8acdba4b0f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7ab2d1e04888623676b33d85a9e8cb9de716e3b50d1595a9138266298825c031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab2d1e04888623676b33d85a9e8cb9de716e3b50d1595a9138266298825c031->enter($__internal_7ab2d1e04888623676b33d85a9e8cb9de716e3b50d1595a9138266298825c031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ab2d1e04888623676b33d85a9e8cb9de716e3b50d1595a9138266298825c031->leave($__internal_7ab2d1e04888623676b33d85a9e8cb9de716e3b50d1595a9138266298825c031_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24af546a674e9177fde1fe108dd44af853c9d0ba6306e86b98d8df45bd7508ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24af546a674e9177fde1fe108dd44af853c9d0ba6306e86b98d8df45bd7508ee->enter($__internal_24af546a674e9177fde1fe108dd44af853c9d0ba6306e86b98d8df45bd7508ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24af546a674e9177fde1fe108dd44af853c9d0ba6306e86b98d8df45bd7508ee->leave($__internal_24af546a674e9177fde1fe108dd44af853c9d0ba6306e86b98d8df45bd7508ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24b20e538aadf94bae84966accae32593556afa5166e85a6dab9aa882f8b5c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b20e538aadf94bae84966accae32593556afa5166e85a6dab9aa882f8b5c3d->enter($__internal_24b20e538aadf94bae84966accae32593556afa5166e85a6dab9aa882f8b5c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_24b20e538aadf94bae84966accae32593556afa5166e85a6dab9aa882f8b5c3d->leave($__internal_24b20e538aadf94bae84966accae32593556afa5166e85a6dab9aa882f8b5c3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_709231809284d86d1c4bafee282ec140a55a7a3728265e54070d4f17deabc57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709231809284d86d1c4bafee282ec140a55a7a3728265e54070d4f17deabc57a->enter($__internal_709231809284d86d1c4bafee282ec140a55a7a3728265e54070d4f17deabc57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_709231809284d86d1c4bafee282ec140a55a7a3728265e54070d4f17deabc57a->leave($__internal_709231809284d86d1c4bafee282ec140a55a7a3728265e54070d4f17deabc57a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

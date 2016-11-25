<?php

/* ::base.html.twig */
class __TwigTemplate_0bcf389a24e1b35345e733e0d1829002c946d3373006172e1d5f254cedc0fc33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dd83756c6f94014d10d6eae60df3cabdbd7baabf66e1805cb38429f1734a05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd83756c6f94014d10d6eae60df3cabdbd7baabf66e1805cb38429f1734a05a->enter($__internal_1dd83756c6f94014d10d6eae60df3cabdbd7baabf66e1805cb38429f1734a05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1dd83756c6f94014d10d6eae60df3cabdbd7baabf66e1805cb38429f1734a05a->leave($__internal_1dd83756c6f94014d10d6eae60df3cabdbd7baabf66e1805cb38429f1734a05a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd0c2dd7c74f8d20685f56d98e7f63a1aecd3d346b8ae89017ce5e83f8e7b236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0c2dd7c74f8d20685f56d98e7f63a1aecd3d346b8ae89017ce5e83f8e7b236->enter($__internal_dd0c2dd7c74f8d20685f56d98e7f63a1aecd3d346b8ae89017ce5e83f8e7b236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd0c2dd7c74f8d20685f56d98e7f63a1aecd3d346b8ae89017ce5e83f8e7b236->leave($__internal_dd0c2dd7c74f8d20685f56d98e7f63a1aecd3d346b8ae89017ce5e83f8e7b236_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97e33d6a0452323f8ed54654f3f62ac74e768bf745b65d4238734afecf4e447c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e33d6a0452323f8ed54654f3f62ac74e768bf745b65d4238734afecf4e447c->enter($__internal_97e33d6a0452323f8ed54654f3f62ac74e768bf745b65d4238734afecf4e447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_97e33d6a0452323f8ed54654f3f62ac74e768bf745b65d4238734afecf4e447c->leave($__internal_97e33d6a0452323f8ed54654f3f62ac74e768bf745b65d4238734afecf4e447c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5d96566a9e85c0d4a02938757d92052c2111c16950f2e86e02c9fb54f1f1e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d96566a9e85c0d4a02938757d92052c2111c16950f2e86e02c9fb54f1f1e41->enter($__internal_d5d96566a9e85c0d4a02938757d92052c2111c16950f2e86e02c9fb54f1f1e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d5d96566a9e85c0d4a02938757d92052c2111c16950f2e86e02c9fb54f1f1e41->leave($__internal_d5d96566a9e85c0d4a02938757d92052c2111c16950f2e86e02c9fb54f1f1e41_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5ad3ec956e9cf2a53603a0ad209085fffb5024d337154b51961a3801d8a0d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ad3ec956e9cf2a53603a0ad209085fffb5024d337154b51961a3801d8a0d6a->enter($__internal_f5ad3ec956e9cf2a53603a0ad209085fffb5024d337154b51961a3801d8a0d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f5ad3ec956e9cf2a53603a0ad209085fffb5024d337154b51961a3801d8a0d6a->leave($__internal_f5ad3ec956e9cf2a53603a0ad209085fffb5024d337154b51961a3801d8a0d6a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\herokuAPP\\ebizbot\\app/Resources\\views/base.html.twig");
    }
}

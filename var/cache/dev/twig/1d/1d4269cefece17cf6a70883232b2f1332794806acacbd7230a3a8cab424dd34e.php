<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5f9f013309352d7d51cfebc08807eb29136a2b9e023003595e6582b29c03e725 extends Twig_Template
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
        $__internal_338dc99f8f7f593098ef002d12d1133c66c37bffc64ee79e280b739bc896d2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338dc99f8f7f593098ef002d12d1133c66c37bffc64ee79e280b739bc896d2f2->enter($__internal_338dc99f8f7f593098ef002d12d1133c66c37bffc64ee79e280b739bc896d2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_338dc99f8f7f593098ef002d12d1133c66c37bffc64ee79e280b739bc896d2f2->leave($__internal_338dc99f8f7f593098ef002d12d1133c66c37bffc64ee79e280b739bc896d2f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}

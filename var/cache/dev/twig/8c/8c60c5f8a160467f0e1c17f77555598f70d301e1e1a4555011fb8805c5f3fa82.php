<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_69343dae8f1fb98300ae6b54118147d8a69c358eaa95a11d2cfa14431779fbd8 extends Twig_Template
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
        $__internal_40096bcc42edf3105b42c70246e3dc2bad7f87d3684d631691fe59258a7f102b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40096bcc42edf3105b42c70246e3dc2bad7f87d3684d631691fe59258a7f102b->enter($__internal_40096bcc42edf3105b42c70246e3dc2bad7f87d3684d631691fe59258a7f102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_40096bcc42edf3105b42c70246e3dc2bad7f87d3684d631691fe59258a7f102b->leave($__internal_40096bcc42edf3105b42c70246e3dc2bad7f87d3684d631691fe59258a7f102b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
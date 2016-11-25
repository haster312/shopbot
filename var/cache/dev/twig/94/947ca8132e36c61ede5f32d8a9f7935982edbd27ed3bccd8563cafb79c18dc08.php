<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_171889784a53a90d67a2476f984df3c13478ac6dfe97daac05fa770be0b5be04 extends Twig_Template
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
        $__internal_a906f4a2d5217290fcdd8bc7bc236ee98d654cd2d9a0c36dc8d3d97ffd0e1077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a906f4a2d5217290fcdd8bc7bc236ee98d654cd2d9a0c36dc8d3d97ffd0e1077->enter($__internal_a906f4a2d5217290fcdd8bc7bc236ee98d654cd2d9a0c36dc8d3d97ffd0e1077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a906f4a2d5217290fcdd8bc7bc236ee98d654cd2d9a0c36dc8d3d97ffd0e1077->leave($__internal_a906f4a2d5217290fcdd8bc7bc236ee98d654cd2d9a0c36dc8d3d97ffd0e1077_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}

<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b29a7916d4051f577c8dfb1a1b946b5f3aa8ad5f3a76bb6ba76648df5bd56498 extends Twig_Template
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
        $__internal_9dabef9fe1edd90718ee7909ab94566e4166065473b2a6e1c41d775c6ebac1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dabef9fe1edd90718ee7909ab94566e4166065473b2a6e1c41d775c6ebac1a2->enter($__internal_9dabef9fe1edd90718ee7909ab94566e4166065473b2a6e1c41d775c6ebac1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9dabef9fe1edd90718ee7909ab94566e4166065473b2a6e1c41d775c6ebac1a2->leave($__internal_9dabef9fe1edd90718ee7909ab94566e4166065473b2a6e1c41d775c6ebac1a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

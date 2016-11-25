<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_abdfd4500c6d7123b450a6024d2a53beb4c33888e94a794aa4c7ad8f678f0346 extends Twig_Template
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
        $__internal_b45f25949a0be174fb0f8c91377984ea2f1aa7cf49d0868f18c6b674e8d504e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45f25949a0be174fb0f8c91377984ea2f1aa7cf49d0868f18c6b674e8d504e3->enter($__internal_b45f25949a0be174fb0f8c91377984ea2f1aa7cf49d0868f18c6b674e8d504e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b45f25949a0be174fb0f8c91377984ea2f1aa7cf49d0868f18c6b674e8d504e3->leave($__internal_b45f25949a0be174fb0f8c91377984ea2f1aa7cf49d0868f18c6b674e8d504e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}

<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_083e7be40980f9bca47763dc842d3e81505bb5465aa82a9958e2a876fb10377b extends Twig_Template
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
        $__internal_e3a15a1adb02b4c2c95a1d2d134b27c9aeef6a10b722c88f7c8066dd2f7425b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a15a1adb02b4c2c95a1d2d134b27c9aeef6a10b722c88f7c8066dd2f7425b0->enter($__internal_e3a15a1adb02b4c2c95a1d2d134b27c9aeef6a10b722c88f7c8066dd2f7425b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e3a15a1adb02b4c2c95a1d2d134b27c9aeef6a10b722c88f7c8066dd2f7425b0->leave($__internal_e3a15a1adb02b4c2c95a1d2d134b27c9aeef6a10b722c88f7c8066dd2f7425b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

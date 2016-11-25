<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_24737a43162a3ea5e871e836d04318aa1b3c43521594b2b2eafbf1aa5ef882ee extends Twig_Template
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
        $__internal_0512591260b547b511a4dbfa7ee76ade3e0e7820289f00e7b5e88cc9facc3ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0512591260b547b511a4dbfa7ee76ade3e0e7820289f00e7b5e88cc9facc3ba1->enter($__internal_0512591260b547b511a4dbfa7ee76ade3e0e7820289f00e7b5e88cc9facc3ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0512591260b547b511a4dbfa7ee76ade3e0e7820289f00e7b5e88cc9facc3ba1->leave($__internal_0512591260b547b511a4dbfa7ee76ade3e0e7820289f00e7b5e88cc9facc3ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

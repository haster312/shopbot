<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a95a0bee277dd0d3b789f3a77ab52e0a09ed5d7988c3729e4c3bb14a22ca134f extends Twig_Template
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
        $__internal_f1da760f4e2a54a5d75ad2a4d947643e3cd858326663b435e539d7448d60c1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1da760f4e2a54a5d75ad2a4d947643e3cd858326663b435e539d7448d60c1cd->enter($__internal_f1da760f4e2a54a5d75ad2a4d947643e3cd858326663b435e539d7448d60c1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f1da760f4e2a54a5d75ad2a4d947643e3cd858326663b435e539d7448d60c1cd->leave($__internal_f1da760f4e2a54a5d75ad2a4d947643e3cd858326663b435e539d7448d60c1cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

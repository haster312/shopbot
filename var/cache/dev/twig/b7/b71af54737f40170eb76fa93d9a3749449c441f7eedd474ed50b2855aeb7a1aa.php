<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8df3f08baf1b93faf40b14d0a1b92ba7fde1f7210aa8d161721cef210b5c4097 extends Twig_Template
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
        $__internal_62a8c058aaae10d08e87988a9b4cbc02ab29a55f6aa3e097da9c4bd901f56ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a8c058aaae10d08e87988a9b4cbc02ab29a55f6aa3e097da9c4bd901f56ba3->enter($__internal_62a8c058aaae10d08e87988a9b4cbc02ab29a55f6aa3e097da9c4bd901f56ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_62a8c058aaae10d08e87988a9b4cbc02ab29a55f6aa3e097da9c4bd901f56ba3->leave($__internal_62a8c058aaae10d08e87988a9b4cbc02ab29a55f6aa3e097da9c4bd901f56ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

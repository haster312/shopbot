<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7fcb09704cd3a17c842e93b7ba81e57e9f3b39f6d0a540e01063232ecf152a50 extends Twig_Template
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
        $__internal_ed41e56b3ca9025d23f7dd5ca4b074370dff32b88774feda19c3fe3a0a1f6c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed41e56b3ca9025d23f7dd5ca4b074370dff32b88774feda19c3fe3a0a1f6c6a->enter($__internal_ed41e56b3ca9025d23f7dd5ca4b074370dff32b88774feda19c3fe3a0a1f6c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ed41e56b3ca9025d23f7dd5ca4b074370dff32b88774feda19c3fe3a0a1f6c6a->leave($__internal_ed41e56b3ca9025d23f7dd5ca4b074370dff32b88774feda19c3fe3a0a1f6c6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\herokuAPP\\ebizbot\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

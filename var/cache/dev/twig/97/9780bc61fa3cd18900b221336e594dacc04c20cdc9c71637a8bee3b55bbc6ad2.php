<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e432fa73a058f70d30e9978766f6e9408635326f35acf1010844c97d20c7465e extends Twig_Template
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
        $__internal_d392feab48974530eef591b2024b8514dbedf8a7636a0449853ae3ed226a2de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d392feab48974530eef591b2024b8514dbedf8a7636a0449853ae3ed226a2de5->enter($__internal_d392feab48974530eef591b2024b8514dbedf8a7636a0449853ae3ed226a2de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_36ca507c5588f131b84db7625a75e1387b672ce0843c5d09b7f16cca4e6e4aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ca507c5588f131b84db7625a75e1387b672ce0843c5d09b7f16cca4e6e4aa1->enter($__internal_36ca507c5588f131b84db7625a75e1387b672ce0843c5d09b7f16cca4e6e4aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d392feab48974530eef591b2024b8514dbedf8a7636a0449853ae3ed226a2de5->leave($__internal_d392feab48974530eef591b2024b8514dbedf8a7636a0449853ae3ed226a2de5_prof);

        
        $__internal_36ca507c5588f131b84db7625a75e1387b672ce0843c5d09b7f16cca4e6e4aa1->leave($__internal_36ca507c5588f131b84db7625a75e1387b672ce0843c5d09b7f16cca4e6e4aa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

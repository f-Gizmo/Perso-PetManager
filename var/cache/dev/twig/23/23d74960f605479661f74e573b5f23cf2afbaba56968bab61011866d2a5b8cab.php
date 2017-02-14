<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f8d837562761f99e567bcf8958a6c7f32e26a7929e143cf261520b2ead9a6c3b extends Twig_Template
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
        $__internal_c0649c861635117ee9ebfef3b28b390d737481903bf6b88ab4d99f26348a383e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0649c861635117ee9ebfef3b28b390d737481903bf6b88ab4d99f26348a383e->enter($__internal_c0649c861635117ee9ebfef3b28b390d737481903bf6b88ab4d99f26348a383e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3497c7e8e8de1780e5bd0ec93868183ee34e855517b5a4153b2bf4aec8b1d777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3497c7e8e8de1780e5bd0ec93868183ee34e855517b5a4153b2bf4aec8b1d777->enter($__internal_3497c7e8e8de1780e5bd0ec93868183ee34e855517b5a4153b2bf4aec8b1d777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c0649c861635117ee9ebfef3b28b390d737481903bf6b88ab4d99f26348a383e->leave($__internal_c0649c861635117ee9ebfef3b28b390d737481903bf6b88ab4d99f26348a383e_prof);

        
        $__internal_3497c7e8e8de1780e5bd0ec93868183ee34e855517b5a4153b2bf4aec8b1d777->leave($__internal_3497c7e8e8de1780e5bd0ec93868183ee34e855517b5a4153b2bf4aec8b1d777_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3dd3fcec98b9598adbbda2902b15ece9856c667421bac9f24eff70e939156bf extends Twig_Template
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
        $__internal_9a18826fb6548587a7a9ac66bcee8c4fb14bd78acbfd7fa518da98211aa7f77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a18826fb6548587a7a9ac66bcee8c4fb14bd78acbfd7fa518da98211aa7f77a->enter($__internal_9a18826fb6548587a7a9ac66bcee8c4fb14bd78acbfd7fa518da98211aa7f77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_19bb46fe9e96f71c454db3763c2a1bc6df440a13d5f669112797091c925618ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bb46fe9e96f71c454db3763c2a1bc6df440a13d5f669112797091c925618ba->enter($__internal_19bb46fe9e96f71c454db3763c2a1bc6df440a13d5f669112797091c925618ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9a18826fb6548587a7a9ac66bcee8c4fb14bd78acbfd7fa518da98211aa7f77a->leave($__internal_9a18826fb6548587a7a9ac66bcee8c4fb14bd78acbfd7fa518da98211aa7f77a_prof);

        
        $__internal_19bb46fe9e96f71c454db3763c2a1bc6df440a13d5f669112797091c925618ba->leave($__internal_19bb46fe9e96f71c454db3763c2a1bc6df440a13d5f669112797091c925618ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

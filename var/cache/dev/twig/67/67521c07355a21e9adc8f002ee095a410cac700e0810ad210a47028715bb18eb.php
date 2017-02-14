<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0b2e340029cc87b1c12b1220a336951822d49ce04d09d92fdb3a875c8bbc0834 extends Twig_Template
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
        $__internal_1c58f9dab29dbc280fb9d54e5679818cbb096aaede1d0f4a3a561ff6b9811fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c58f9dab29dbc280fb9d54e5679818cbb096aaede1d0f4a3a561ff6b9811fe2->enter($__internal_1c58f9dab29dbc280fb9d54e5679818cbb096aaede1d0f4a3a561ff6b9811fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5757257f24716c8516830c1f62451ee79b988207c6d6654fff1a0cd11fcef220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5757257f24716c8516830c1f62451ee79b988207c6d6654fff1a0cd11fcef220->enter($__internal_5757257f24716c8516830c1f62451ee79b988207c6d6654fff1a0cd11fcef220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1c58f9dab29dbc280fb9d54e5679818cbb096aaede1d0f4a3a561ff6b9811fe2->leave($__internal_1c58f9dab29dbc280fb9d54e5679818cbb096aaede1d0f4a3a561ff6b9811fe2_prof);

        
        $__internal_5757257f24716c8516830c1f62451ee79b988207c6d6654fff1a0cd11fcef220->leave($__internal_5757257f24716c8516830c1f62451ee79b988207c6d6654fff1a0cd11fcef220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

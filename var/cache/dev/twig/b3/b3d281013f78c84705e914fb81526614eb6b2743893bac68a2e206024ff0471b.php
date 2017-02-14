<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_739da95cb7243c55bb5700a0789afe60c231595ac5e49ca421abbcdc3a0cd681 extends Twig_Template
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
        $__internal_194e4686d7d45b713ef5202cba2f0b7faacb8c2cd265e5f0e78ee1a46881b985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194e4686d7d45b713ef5202cba2f0b7faacb8c2cd265e5f0e78ee1a46881b985->enter($__internal_194e4686d7d45b713ef5202cba2f0b7faacb8c2cd265e5f0e78ee1a46881b985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_095154ce77c206794da9806a600d645d7707248fbe972ecaed55206222d851b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095154ce77c206794da9806a600d645d7707248fbe972ecaed55206222d851b9->enter($__internal_095154ce77c206794da9806a600d645d7707248fbe972ecaed55206222d851b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_194e4686d7d45b713ef5202cba2f0b7faacb8c2cd265e5f0e78ee1a46881b985->leave($__internal_194e4686d7d45b713ef5202cba2f0b7faacb8c2cd265e5f0e78ee1a46881b985_prof);

        
        $__internal_095154ce77c206794da9806a600d645d7707248fbe972ecaed55206222d851b9->leave($__internal_095154ce77c206794da9806a600d645d7707248fbe972ecaed55206222d851b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}

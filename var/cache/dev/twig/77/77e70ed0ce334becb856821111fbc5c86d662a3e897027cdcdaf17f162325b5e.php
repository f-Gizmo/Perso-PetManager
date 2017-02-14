<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba06bfa98ee853a1a747b17506774099e14f6edcf9c831b8415133f93f46ac9d extends Twig_Template
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
        $__internal_1d98f19c54774ea5b9e2f866e1b69f5121639660b8b2e0e763015a43231903af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d98f19c54774ea5b9e2f866e1b69f5121639660b8b2e0e763015a43231903af->enter($__internal_1d98f19c54774ea5b9e2f866e1b69f5121639660b8b2e0e763015a43231903af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f44709b1036c976446f759fa492d8cb7d46ae33f363774f8e6db9c4c652611b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44709b1036c976446f759fa492d8cb7d46ae33f363774f8e6db9c4c652611b0->enter($__internal_f44709b1036c976446f759fa492d8cb7d46ae33f363774f8e6db9c4c652611b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1d98f19c54774ea5b9e2f866e1b69f5121639660b8b2e0e763015a43231903af->leave($__internal_1d98f19c54774ea5b9e2f866e1b69f5121639660b8b2e0e763015a43231903af_prof);

        
        $__internal_f44709b1036c976446f759fa492d8cb7d46ae33f363774f8e6db9c4c652611b0->leave($__internal_f44709b1036c976446f759fa492d8cb7d46ae33f363774f8e6db9c4c652611b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

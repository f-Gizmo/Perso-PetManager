<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c4bd20018e0fbad59f3b7de5d1f00ccec1b0d56d952fd169bf466198bb251fef extends Twig_Template
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
        $__internal_d021b43247b260bc266f9b6b16d7be6be1ebdc091b250695337519055e34800b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d021b43247b260bc266f9b6b16d7be6be1ebdc091b250695337519055e34800b->enter($__internal_d021b43247b260bc266f9b6b16d7be6be1ebdc091b250695337519055e34800b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_235bef70c13d74ecfaa22c06e92a4ef51e0c33f0a4160cfe12acc974408cc371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235bef70c13d74ecfaa22c06e92a4ef51e0c33f0a4160cfe12acc974408cc371->enter($__internal_235bef70c13d74ecfaa22c06e92a4ef51e0c33f0a4160cfe12acc974408cc371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d021b43247b260bc266f9b6b16d7be6be1ebdc091b250695337519055e34800b->leave($__internal_d021b43247b260bc266f9b6b16d7be6be1ebdc091b250695337519055e34800b_prof);

        
        $__internal_235bef70c13d74ecfaa22c06e92a4ef51e0c33f0a4160cfe12acc974408cc371->leave($__internal_235bef70c13d74ecfaa22c06e92a4ef51e0c33f0a4160cfe12acc974408cc371_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

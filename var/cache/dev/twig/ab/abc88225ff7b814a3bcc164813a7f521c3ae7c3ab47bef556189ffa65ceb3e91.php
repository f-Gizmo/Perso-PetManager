<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f678339ef624e0a41259bde234ed5b2a1c12f9e1b385bfb0965c06697d63feda extends Twig_Template
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
        $__internal_2adc42117bc5b9bcb87ebcab6136c5f12f9e83771b20c1ab52ce4e0ad693265a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adc42117bc5b9bcb87ebcab6136c5f12f9e83771b20c1ab52ce4e0ad693265a->enter($__internal_2adc42117bc5b9bcb87ebcab6136c5f12f9e83771b20c1ab52ce4e0ad693265a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d154aa73a295140c35464526515b3fe83809fbd4f61ccafb450e440ee44d3ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d154aa73a295140c35464526515b3fe83809fbd4f61ccafb450e440ee44d3ff5->enter($__internal_d154aa73a295140c35464526515b3fe83809fbd4f61ccafb450e440ee44d3ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2adc42117bc5b9bcb87ebcab6136c5f12f9e83771b20c1ab52ce4e0ad693265a->leave($__internal_2adc42117bc5b9bcb87ebcab6136c5f12f9e83771b20c1ab52ce4e0ad693265a_prof);

        
        $__internal_d154aa73a295140c35464526515b3fe83809fbd4f61ccafb450e440ee44d3ff5->leave($__internal_d154aa73a295140c35464526515b3fe83809fbd4f61ccafb450e440ee44d3ff5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

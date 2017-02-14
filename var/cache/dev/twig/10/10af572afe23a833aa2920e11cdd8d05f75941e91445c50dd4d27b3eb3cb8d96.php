<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_60e4c89623cceb6bbce80753f52f6abb881e1fb7a88d35ada90c333489a8b02f extends Twig_Template
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
        $__internal_bcd568ccf59e695ee4694154cf6fa559c6fc2e16d6f439be5c7305b31726e867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd568ccf59e695ee4694154cf6fa559c6fc2e16d6f439be5c7305b31726e867->enter($__internal_bcd568ccf59e695ee4694154cf6fa559c6fc2e16d6f439be5c7305b31726e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e3f9adf1bc0efc1f0c54f5d8c4a8332253d236358b33b056232385b333904327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f9adf1bc0efc1f0c54f5d8c4a8332253d236358b33b056232385b333904327->enter($__internal_e3f9adf1bc0efc1f0c54f5d8c4a8332253d236358b33b056232385b333904327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bcd568ccf59e695ee4694154cf6fa559c6fc2e16d6f439be5c7305b31726e867->leave($__internal_bcd568ccf59e695ee4694154cf6fa559c6fc2e16d6f439be5c7305b31726e867_prof);

        
        $__internal_e3f9adf1bc0efc1f0c54f5d8c4a8332253d236358b33b056232385b333904327->leave($__internal_e3f9adf1bc0efc1f0c54f5d8c4a8332253d236358b33b056232385b333904327_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7705f5f16ae20cf321cf838896f6a640eec275c13d7f0c049caaef631ce3e3a7 extends Twig_Template
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
        $__internal_e6abc045c7eaffea5cc3b2e68173146d3b2a935c8badfa306cc2c983f4ae5e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6abc045c7eaffea5cc3b2e68173146d3b2a935c8badfa306cc2c983f4ae5e9e->enter($__internal_e6abc045c7eaffea5cc3b2e68173146d3b2a935c8badfa306cc2c983f4ae5e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8a13e72c7e693c3dae6d4ff2911bb945a88edc371adb5ad29b368aa386f9f77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a13e72c7e693c3dae6d4ff2911bb945a88edc371adb5ad29b368aa386f9f77a->enter($__internal_8a13e72c7e693c3dae6d4ff2911bb945a88edc371adb5ad29b368aa386f9f77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e6abc045c7eaffea5cc3b2e68173146d3b2a935c8badfa306cc2c983f4ae5e9e->leave($__internal_e6abc045c7eaffea5cc3b2e68173146d3b2a935c8badfa306cc2c983f4ae5e9e_prof);

        
        $__internal_8a13e72c7e693c3dae6d4ff2911bb945a88edc371adb5ad29b368aa386f9f77a->leave($__internal_8a13e72c7e693c3dae6d4ff2911bb945a88edc371adb5ad29b368aa386f9f77a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

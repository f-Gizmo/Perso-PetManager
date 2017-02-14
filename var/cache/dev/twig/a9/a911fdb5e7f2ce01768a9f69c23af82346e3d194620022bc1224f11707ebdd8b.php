<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_415876f28c6976afeeafd4d95df761ed734111edaf97d99dc57201d43754a38c extends Twig_Template
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
        $__internal_e4e9c24e8e119b15c03c0cc1ea739a8a91a72b0e454c372349e0d3a6dd9712ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e9c24e8e119b15c03c0cc1ea739a8a91a72b0e454c372349e0d3a6dd9712ba->enter($__internal_e4e9c24e8e119b15c03c0cc1ea739a8a91a72b0e454c372349e0d3a6dd9712ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_dae2aa93d7cad2dba13dcf9cf8909e60c592d02a7250685bb406ff917acfb22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae2aa93d7cad2dba13dcf9cf8909e60c592d02a7250685bb406ff917acfb22e->enter($__internal_dae2aa93d7cad2dba13dcf9cf8909e60c592d02a7250685bb406ff917acfb22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e4e9c24e8e119b15c03c0cc1ea739a8a91a72b0e454c372349e0d3a6dd9712ba->leave($__internal_e4e9c24e8e119b15c03c0cc1ea739a8a91a72b0e454c372349e0d3a6dd9712ba_prof);

        
        $__internal_dae2aa93d7cad2dba13dcf9cf8909e60c592d02a7250685bb406ff917acfb22e->leave($__internal_dae2aa93d7cad2dba13dcf9cf8909e60c592d02a7250685bb406ff917acfb22e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

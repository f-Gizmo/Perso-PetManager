<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_43155966c45df880a914bea0e34fee9b9926202925b729a7a23e24bf8e15c10a extends Twig_Template
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
        $__internal_fe380c845784eec1fef10d0b0161919f9d4d87cfecd186c67c3dd5a534834617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe380c845784eec1fef10d0b0161919f9d4d87cfecd186c67c3dd5a534834617->enter($__internal_fe380c845784eec1fef10d0b0161919f9d4d87cfecd186c67c3dd5a534834617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fcd35433ead3c68b2be2714d5b2b3c42a66b516377066a8b4e6fdde4d77a69b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd35433ead3c68b2be2714d5b2b3c42a66b516377066a8b4e6fdde4d77a69b1->enter($__internal_fcd35433ead3c68b2be2714d5b2b3c42a66b516377066a8b4e6fdde4d77a69b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fe380c845784eec1fef10d0b0161919f9d4d87cfecd186c67c3dd5a534834617->leave($__internal_fe380c845784eec1fef10d0b0161919f9d4d87cfecd186c67c3dd5a534834617_prof);

        
        $__internal_fcd35433ead3c68b2be2714d5b2b3c42a66b516377066a8b4e6fdde4d77a69b1->leave($__internal_fcd35433ead3c68b2be2714d5b2b3c42a66b516377066a8b4e6fdde4d77a69b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

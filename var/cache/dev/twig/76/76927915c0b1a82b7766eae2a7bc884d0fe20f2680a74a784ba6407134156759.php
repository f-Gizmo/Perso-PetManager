<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cb5cd4d8d267c9457af6ab3bf5e5fc99cb03bf69306ba2d6d801ef58f77f26ba extends Twig_Template
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
        $__internal_2092f8230b56176457680b1eca4eb7ab5a26f5b16e42f27ff4b9fce051e16c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2092f8230b56176457680b1eca4eb7ab5a26f5b16e42f27ff4b9fce051e16c9e->enter($__internal_2092f8230b56176457680b1eca4eb7ab5a26f5b16e42f27ff4b9fce051e16c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_28ce4b9d42c36878bb433e8932deefa65b351153b13e22a7d93493c98496a1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ce4b9d42c36878bb433e8932deefa65b351153b13e22a7d93493c98496a1aa->enter($__internal_28ce4b9d42c36878bb433e8932deefa65b351153b13e22a7d93493c98496a1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2092f8230b56176457680b1eca4eb7ab5a26f5b16e42f27ff4b9fce051e16c9e->leave($__internal_2092f8230b56176457680b1eca4eb7ab5a26f5b16e42f27ff4b9fce051e16c9e_prof);

        
        $__internal_28ce4b9d42c36878bb433e8932deefa65b351153b13e22a7d93493c98496a1aa->leave($__internal_28ce4b9d42c36878bb433e8932deefa65b351153b13e22a7d93493c98496a1aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}

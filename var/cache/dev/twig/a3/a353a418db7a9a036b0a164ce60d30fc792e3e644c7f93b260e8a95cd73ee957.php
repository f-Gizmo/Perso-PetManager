<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dac9ff7ddf7198b493c34af17936e9afbb8864a3abc7b78b7530e7bb051c0f28 extends Twig_Template
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
        $__internal_f4b76d121da9e3b2e4a692184ad9758251530b5a687726f3139cd643ee528bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b76d121da9e3b2e4a692184ad9758251530b5a687726f3139cd643ee528bbb->enter($__internal_f4b76d121da9e3b2e4a692184ad9758251530b5a687726f3139cd643ee528bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1d2cb729fbc137db17538fad13efc2d55ec62817c3e00ffcad445d5c15d6b4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2cb729fbc137db17538fad13efc2d55ec62817c3e00ffcad445d5c15d6b4e2->enter($__internal_1d2cb729fbc137db17538fad13efc2d55ec62817c3e00ffcad445d5c15d6b4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f4b76d121da9e3b2e4a692184ad9758251530b5a687726f3139cd643ee528bbb->leave($__internal_f4b76d121da9e3b2e4a692184ad9758251530b5a687726f3139cd643ee528bbb_prof);

        
        $__internal_1d2cb729fbc137db17538fad13efc2d55ec62817c3e00ffcad445d5c15d6b4e2->leave($__internal_1d2cb729fbc137db17538fad13efc2d55ec62817c3e00ffcad445d5c15d6b4e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

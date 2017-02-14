<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_09fc8e13e42cf9abfa6a9f76380ef410e9ee5e646039ee6664a535ce91bcc86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fc8e13e42cf9abfa6a9f76380ef410e9ee5e646039ee6664a535ce91bcc86a->enter($__internal_09fc8e13e42cf9abfa6a9f76380ef410e9ee5e646039ee6664a535ce91bcc86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3a805a53b435993b863e7e8068f0eb94cba79428189dce9395714faf8c0c3aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a805a53b435993b863e7e8068f0eb94cba79428189dce9395714faf8c0c3aed->enter($__internal_3a805a53b435993b863e7e8068f0eb94cba79428189dce9395714faf8c0c3aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_09fc8e13e42cf9abfa6a9f76380ef410e9ee5e646039ee6664a535ce91bcc86a->leave($__internal_09fc8e13e42cf9abfa6a9f76380ef410e9ee5e646039ee6664a535ce91bcc86a_prof);

        
        $__internal_3a805a53b435993b863e7e8068f0eb94cba79428189dce9395714faf8c0c3aed->leave($__internal_3a805a53b435993b863e7e8068f0eb94cba79428189dce9395714faf8c0c3aed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

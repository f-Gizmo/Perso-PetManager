<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f36809a933f07499a17a19595c53b10aa963ae08aa007722828a211328d0e041 extends Twig_Template
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
        $__internal_a3e7b088fc92839db729d54b47f9886b24a8db766e3f62288ff3d06e2a10829c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e7b088fc92839db729d54b47f9886b24a8db766e3f62288ff3d06e2a10829c->enter($__internal_a3e7b088fc92839db729d54b47f9886b24a8db766e3f62288ff3d06e2a10829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f8ce78ddf200daaf8b348c6104aa19f87ac32d3b321f1f3ba46b0424f9127c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ce78ddf200daaf8b348c6104aa19f87ac32d3b321f1f3ba46b0424f9127c03->enter($__internal_f8ce78ddf200daaf8b348c6104aa19f87ac32d3b321f1f3ba46b0424f9127c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a3e7b088fc92839db729d54b47f9886b24a8db766e3f62288ff3d06e2a10829c->leave($__internal_a3e7b088fc92839db729d54b47f9886b24a8db766e3f62288ff3d06e2a10829c_prof);

        
        $__internal_f8ce78ddf200daaf8b348c6104aa19f87ac32d3b321f1f3ba46b0424f9127c03->leave($__internal_f8ce78ddf200daaf8b348c6104aa19f87ac32d3b321f1f3ba46b0424f9127c03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

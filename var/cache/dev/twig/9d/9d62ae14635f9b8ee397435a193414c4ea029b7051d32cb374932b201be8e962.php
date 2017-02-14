<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_54afc722913edc0b9b10153ad5d267b89b6f693962210995e8e8f65daac51f3a extends Twig_Template
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
        $__internal_c04c8a97986e8b12bdac0ffa5a7717f464fae592b79e1ea3973ac170eddb9388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04c8a97986e8b12bdac0ffa5a7717f464fae592b79e1ea3973ac170eddb9388->enter($__internal_c04c8a97986e8b12bdac0ffa5a7717f464fae592b79e1ea3973ac170eddb9388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ff2f7f099342b53b6696fb23029ce792f2f48b68db8488b23dd5718796934065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2f7f099342b53b6696fb23029ce792f2f48b68db8488b23dd5718796934065->enter($__internal_ff2f7f099342b53b6696fb23029ce792f2f48b68db8488b23dd5718796934065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c04c8a97986e8b12bdac0ffa5a7717f464fae592b79e1ea3973ac170eddb9388->leave($__internal_c04c8a97986e8b12bdac0ffa5a7717f464fae592b79e1ea3973ac170eddb9388_prof);

        
        $__internal_ff2f7f099342b53b6696fb23029ce792f2f48b68db8488b23dd5718796934065->leave($__internal_ff2f7f099342b53b6696fb23029ce792f2f48b68db8488b23dd5718796934065_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

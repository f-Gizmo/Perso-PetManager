<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e7540d81a0e2a51f719f2be6c96bcbe60caad8cc1a0ee074d0b04f979bd7d8cb extends Twig_Template
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
        $__internal_d4f42481e294a2341562676d0b574c603a9b1eaeeca5d4da3aa8de57c294ed01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f42481e294a2341562676d0b574c603a9b1eaeeca5d4da3aa8de57c294ed01->enter($__internal_d4f42481e294a2341562676d0b574c603a9b1eaeeca5d4da3aa8de57c294ed01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_6af277287f3ff47eeb277bc9e433dfd1c41cf7a305150d223ca69e89086f132e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af277287f3ff47eeb277bc9e433dfd1c41cf7a305150d223ca69e89086f132e->enter($__internal_6af277287f3ff47eeb277bc9e433dfd1c41cf7a305150d223ca69e89086f132e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d4f42481e294a2341562676d0b574c603a9b1eaeeca5d4da3aa8de57c294ed01->leave($__internal_d4f42481e294a2341562676d0b574c603a9b1eaeeca5d4da3aa8de57c294ed01_prof);

        
        $__internal_6af277287f3ff47eeb277bc9e433dfd1c41cf7a305150d223ca69e89086f132e->leave($__internal_6af277287f3ff47eeb277bc9e433dfd1c41cf7a305150d223ca69e89086f132e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

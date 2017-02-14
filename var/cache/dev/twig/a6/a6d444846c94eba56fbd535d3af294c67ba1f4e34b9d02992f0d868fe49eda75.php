<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cae05033129e673a718ad8a132b696a28ca361b1697bd930631eb9b76a21ddd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e9e5f4f8240b4b290c875185481b0b4f3be474a0d8f13a137b6a2ad6cd6449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e9e5f4f8240b4b290c875185481b0b4f3be474a0d8f13a137b6a2ad6cd6449->enter($__internal_80e9e5f4f8240b4b290c875185481b0b4f3be474a0d8f13a137b6a2ad6cd6449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a74c87b7ef4ad603dc9b39eb747d1294b3c2a67c674a9a19bc8cedbbed8d3d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74c87b7ef4ad603dc9b39eb747d1294b3c2a67c674a9a19bc8cedbbed8d3d1a->enter($__internal_a74c87b7ef4ad603dc9b39eb747d1294b3c2a67c674a9a19bc8cedbbed8d3d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_80e9e5f4f8240b4b290c875185481b0b4f3be474a0d8f13a137b6a2ad6cd6449->leave($__internal_80e9e5f4f8240b4b290c875185481b0b4f3be474a0d8f13a137b6a2ad6cd6449_prof);

        
        $__internal_a74c87b7ef4ad603dc9b39eb747d1294b3c2a67c674a9a19bc8cedbbed8d3d1a->leave($__internal_a74c87b7ef4ad603dc9b39eb747d1294b3c2a67c674a9a19bc8cedbbed8d3d1a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2cdc3a3d1ef89174fceb48def3511548622cab0b48d49a9bcc2d71a70b0ffa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cdc3a3d1ef89174fceb48def3511548622cab0b48d49a9bcc2d71a70b0ffa0->enter($__internal_a2cdc3a3d1ef89174fceb48def3511548622cab0b48d49a9bcc2d71a70b0ffa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48a80c026ddb4da91f023e554a9f9f332beb8e65f4c9f12b4d8f70a095717943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a80c026ddb4da91f023e554a9f9f332beb8e65f4c9f12b4d8f70a095717943->enter($__internal_48a80c026ddb4da91f023e554a9f9f332beb8e65f4c9f12b4d8f70a095717943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_48a80c026ddb4da91f023e554a9f9f332beb8e65f4c9f12b4d8f70a095717943->leave($__internal_48a80c026ddb4da91f023e554a9f9f332beb8e65f4c9f12b4d8f70a095717943_prof);

        
        $__internal_a2cdc3a3d1ef89174fceb48def3511548622cab0b48d49a9bcc2d71a70b0ffa0->leave($__internal_a2cdc3a3d1ef89174fceb48def3511548622cab0b48d49a9bcc2d71a70b0ffa0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

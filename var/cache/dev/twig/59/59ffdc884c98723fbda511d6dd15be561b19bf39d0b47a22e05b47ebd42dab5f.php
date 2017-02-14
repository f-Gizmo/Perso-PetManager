<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_66e8bae2ef0bd2c2153a91118f4d3f9ab9780394776fc2a701e2dabe733a3f1a extends Twig_Template
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
        $__internal_9917e1e2a25edc2933820a62c9a9fddaf55ae6e5d2fd6cdc6d584a7f95d606dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9917e1e2a25edc2933820a62c9a9fddaf55ae6e5d2fd6cdc6d584a7f95d606dc->enter($__internal_9917e1e2a25edc2933820a62c9a9fddaf55ae6e5d2fd6cdc6d584a7f95d606dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9d0b6f2922a80af8fce6ebfc08204fefde62082e5d1a5be6f94d8fc3938ca084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0b6f2922a80af8fce6ebfc08204fefde62082e5d1a5be6f94d8fc3938ca084->enter($__internal_9d0b6f2922a80af8fce6ebfc08204fefde62082e5d1a5be6f94d8fc3938ca084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9917e1e2a25edc2933820a62c9a9fddaf55ae6e5d2fd6cdc6d584a7f95d606dc->leave($__internal_9917e1e2a25edc2933820a62c9a9fddaf55ae6e5d2fd6cdc6d584a7f95d606dc_prof);

        
        $__internal_9d0b6f2922a80af8fce6ebfc08204fefde62082e5d1a5be6f94d8fc3938ca084->leave($__internal_9d0b6f2922a80af8fce6ebfc08204fefde62082e5d1a5be6f94d8fc3938ca084_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a469cbe455fccf7af47ea57bad82d5cf8996c08f260189d18288fd9dc340e260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a469cbe455fccf7af47ea57bad82d5cf8996c08f260189d18288fd9dc340e260->enter($__internal_a469cbe455fccf7af47ea57bad82d5cf8996c08f260189d18288fd9dc340e260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6631209595783d722e2dfe8e63ad2ae43acb7cccffbda01920047891110a4056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6631209595783d722e2dfe8e63ad2ae43acb7cccffbda01920047891110a4056->enter($__internal_6631209595783d722e2dfe8e63ad2ae43acb7cccffbda01920047891110a4056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6631209595783d722e2dfe8e63ad2ae43acb7cccffbda01920047891110a4056->leave($__internal_6631209595783d722e2dfe8e63ad2ae43acb7cccffbda01920047891110a4056_prof);

        
        $__internal_a469cbe455fccf7af47ea57bad82d5cf8996c08f260189d18288fd9dc340e260->leave($__internal_a469cbe455fccf7af47ea57bad82d5cf8996c08f260189d18288fd9dc340e260_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

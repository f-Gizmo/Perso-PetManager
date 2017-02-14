<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bd10c2abe5b5e1b13993b0591b40fba4991f810e60d1e52175abd1e7d94b5f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d3947183a9e1f5ba01c07fb019b9add1f5e1dfc3f748073d56993c7a24a7b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3947183a9e1f5ba01c07fb019b9add1f5e1dfc3f748073d56993c7a24a7b9e->enter($__internal_4d3947183a9e1f5ba01c07fb019b9add1f5e1dfc3f748073d56993c7a24a7b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e6c828a8c796d8d48f306a66028e72b11e36077929e657546fa99174b46c8fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c828a8c796d8d48f306a66028e72b11e36077929e657546fa99174b46c8fef->enter($__internal_e6c828a8c796d8d48f306a66028e72b11e36077929e657546fa99174b46c8fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3947183a9e1f5ba01c07fb019b9add1f5e1dfc3f748073d56993c7a24a7b9e->leave($__internal_4d3947183a9e1f5ba01c07fb019b9add1f5e1dfc3f748073d56993c7a24a7b9e_prof);

        
        $__internal_e6c828a8c796d8d48f306a66028e72b11e36077929e657546fa99174b46c8fef->leave($__internal_e6c828a8c796d8d48f306a66028e72b11e36077929e657546fa99174b46c8fef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08170f6e43542385b1a0dab82ee2abdfb35b507a299f504f16da146b39dd5e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08170f6e43542385b1a0dab82ee2abdfb35b507a299f504f16da146b39dd5e17->enter($__internal_08170f6e43542385b1a0dab82ee2abdfb35b507a299f504f16da146b39dd5e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be9a51536f4db5bd43d4a1442317ca720fa0fd3b1126251151e5a1449c39d4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9a51536f4db5bd43d4a1442317ca720fa0fd3b1126251151e5a1449c39d4b0->enter($__internal_be9a51536f4db5bd43d4a1442317ca720fa0fd3b1126251151e5a1449c39d4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_be9a51536f4db5bd43d4a1442317ca720fa0fd3b1126251151e5a1449c39d4b0->leave($__internal_be9a51536f4db5bd43d4a1442317ca720fa0fd3b1126251151e5a1449c39d4b0_prof);

        
        $__internal_08170f6e43542385b1a0dab82ee2abdfb35b507a299f504f16da146b39dd5e17->leave($__internal_08170f6e43542385b1a0dab82ee2abdfb35b507a299f504f16da146b39dd5e17_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a2056b034fce445ada0dba6a225426c2c8187bc7c0fee9580f113c99c5b364a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2056b034fce445ada0dba6a225426c2c8187bc7c0fee9580f113c99c5b364a->enter($__internal_3a2056b034fce445ada0dba6a225426c2c8187bc7c0fee9580f113c99c5b364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cf45d4805fb09508ebe043f9a309d9d6545bee013581336185b3da492f2f46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf45d4805fb09508ebe043f9a309d9d6545bee013581336185b3da492f2f46f->enter($__internal_9cf45d4805fb09508ebe043f9a309d9d6545bee013581336185b3da492f2f46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_9cf45d4805fb09508ebe043f9a309d9d6545bee013581336185b3da492f2f46f->leave($__internal_9cf45d4805fb09508ebe043f9a309d9d6545bee013581336185b3da492f2f46f_prof);

        
        $__internal_3a2056b034fce445ada0dba6a225426c2c8187bc7c0fee9580f113c99c5b364a->leave($__internal_3a2056b034fce445ada0dba6a225426c2c8187bc7c0fee9580f113c99c5b364a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

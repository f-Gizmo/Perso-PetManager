<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9cf4ecfd74a1037bf1f0d06394a435916895ee5ce6b501033ff54a9c01b03044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eecf8f79d0b90ded6e84e3169e30ad0e7563f4bd883cb7b1e38e649e89eb1b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecf8f79d0b90ded6e84e3169e30ad0e7563f4bd883cb7b1e38e649e89eb1b3a->enter($__internal_eecf8f79d0b90ded6e84e3169e30ad0e7563f4bd883cb7b1e38e649e89eb1b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_279125707588683919d8608b50f8d4b15f0600af10f928f8de0dabe26dc23cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279125707588683919d8608b50f8d4b15f0600af10f928f8de0dabe26dc23cd3->enter($__internal_279125707588683919d8608b50f8d4b15f0600af10f928f8de0dabe26dc23cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecf8f79d0b90ded6e84e3169e30ad0e7563f4bd883cb7b1e38e649e89eb1b3a->leave($__internal_eecf8f79d0b90ded6e84e3169e30ad0e7563f4bd883cb7b1e38e649e89eb1b3a_prof);

        
        $__internal_279125707588683919d8608b50f8d4b15f0600af10f928f8de0dabe26dc23cd3->leave($__internal_279125707588683919d8608b50f8d4b15f0600af10f928f8de0dabe26dc23cd3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5d1ec1b02394e42f42e890013749e1292eeb59a208d26dc8070c8419a6e5321a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1ec1b02394e42f42e890013749e1292eeb59a208d26dc8070c8419a6e5321a->enter($__internal_5d1ec1b02394e42f42e890013749e1292eeb59a208d26dc8070c8419a6e5321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1dae6b362d2354358cb2ffa39ad9a01aea93779178d2f90515f2ee0ac9457e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dae6b362d2354358cb2ffa39ad9a01aea93779178d2f90515f2ee0ac9457e5a->enter($__internal_1dae6b362d2354358cb2ffa39ad9a01aea93779178d2f90515f2ee0ac9457e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1dae6b362d2354358cb2ffa39ad9a01aea93779178d2f90515f2ee0ac9457e5a->leave($__internal_1dae6b362d2354358cb2ffa39ad9a01aea93779178d2f90515f2ee0ac9457e5a_prof);

        
        $__internal_5d1ec1b02394e42f42e890013749e1292eeb59a208d26dc8070c8419a6e5321a->leave($__internal_5d1ec1b02394e42f42e890013749e1292eeb59a208d26dc8070c8419a6e5321a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8657843e85c1d0a7980ec43f1756c1073bb1d61ca1c1ca01a73e438f405369d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8657843e85c1d0a7980ec43f1756c1073bb1d61ca1c1ca01a73e438f405369d6->enter($__internal_8657843e85c1d0a7980ec43f1756c1073bb1d61ca1c1ca01a73e438f405369d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ffcee3e2e2cdc05a219ce89e5a90bb3bfa0b750ae12ed092d9d1d7571aaa6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffcee3e2e2cdc05a219ce89e5a90bb3bfa0b750ae12ed092d9d1d7571aaa6e9->enter($__internal_6ffcee3e2e2cdc05a219ce89e5a90bb3bfa0b750ae12ed092d9d1d7571aaa6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6ffcee3e2e2cdc05a219ce89e5a90bb3bfa0b750ae12ed092d9d1d7571aaa6e9->leave($__internal_6ffcee3e2e2cdc05a219ce89e5a90bb3bfa0b750ae12ed092d9d1d7571aaa6e9_prof);

        
        $__internal_8657843e85c1d0a7980ec43f1756c1073bb1d61ca1c1ca01a73e438f405369d6->leave($__internal_8657843e85c1d0a7980ec43f1756c1073bb1d61ca1c1ca01a73e438f405369d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

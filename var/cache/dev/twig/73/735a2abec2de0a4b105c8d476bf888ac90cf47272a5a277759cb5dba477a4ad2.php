<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_17c5cdf1c0d665c42a758eb9df8aeb1a047e9429f2f285c16d81c9c9ee531f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_fc6cfced5bfe7edc17cb74d5bc03749a072b75a5dd04795ebf7c27bc38939aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6cfced5bfe7edc17cb74d5bc03749a072b75a5dd04795ebf7c27bc38939aff->enter($__internal_fc6cfced5bfe7edc17cb74d5bc03749a072b75a5dd04795ebf7c27bc38939aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_86271fea4c4068775b662711c36d698810dca6aca5f7ae17c2bc91a053666649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86271fea4c4068775b662711c36d698810dca6aca5f7ae17c2bc91a053666649->enter($__internal_86271fea4c4068775b662711c36d698810dca6aca5f7ae17c2bc91a053666649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc6cfced5bfe7edc17cb74d5bc03749a072b75a5dd04795ebf7c27bc38939aff->leave($__internal_fc6cfced5bfe7edc17cb74d5bc03749a072b75a5dd04795ebf7c27bc38939aff_prof);

        
        $__internal_86271fea4c4068775b662711c36d698810dca6aca5f7ae17c2bc91a053666649->leave($__internal_86271fea4c4068775b662711c36d698810dca6aca5f7ae17c2bc91a053666649_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_797405bfbeb0aecd25baceb60745034ae9d82f22d93fd2309ba314056f9d72ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797405bfbeb0aecd25baceb60745034ae9d82f22d93fd2309ba314056f9d72ab->enter($__internal_797405bfbeb0aecd25baceb60745034ae9d82f22d93fd2309ba314056f9d72ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_67893240b32d0f374be7ad049ce2650148b779f310dbc67afb8afdbe0466f4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67893240b32d0f374be7ad049ce2650148b779f310dbc67afb8afdbe0466f4aa->enter($__internal_67893240b32d0f374be7ad049ce2650148b779f310dbc67afb8afdbe0466f4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_67893240b32d0f374be7ad049ce2650148b779f310dbc67afb8afdbe0466f4aa->leave($__internal_67893240b32d0f374be7ad049ce2650148b779f310dbc67afb8afdbe0466f4aa_prof);

        
        $__internal_797405bfbeb0aecd25baceb60745034ae9d82f22d93fd2309ba314056f9d72ab->leave($__internal_797405bfbeb0aecd25baceb60745034ae9d82f22d93fd2309ba314056f9d72ab_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad895fe634524b9cf4a58cf0cd228e8d80744612a854fdf8bef29ff8d080c860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad895fe634524b9cf4a58cf0cd228e8d80744612a854fdf8bef29ff8d080c860->enter($__internal_ad895fe634524b9cf4a58cf0cd228e8d80744612a854fdf8bef29ff8d080c860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa28be146f308b59a8663d05d0e226b0671907e86e74178ab9739bfde3396606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa28be146f308b59a8663d05d0e226b0671907e86e74178ab9739bfde3396606->enter($__internal_fa28be146f308b59a8663d05d0e226b0671907e86e74178ab9739bfde3396606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fa28be146f308b59a8663d05d0e226b0671907e86e74178ab9739bfde3396606->leave($__internal_fa28be146f308b59a8663d05d0e226b0671907e86e74178ab9739bfde3396606_prof);

        
        $__internal_ad895fe634524b9cf4a58cf0cd228e8d80744612a854fdf8bef29ff8d080c860->leave($__internal_ad895fe634524b9cf4a58cf0cd228e8d80744612a854fdf8bef29ff8d080c860_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eead566be21e5a1f4cf6fef4744ff7e2341152406359e9ebc9763e34ca91c81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afcfcc9a5f7ccf819a77850045c1d332395371562f63f8574e8d1ade8a4f485c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afcfcc9a5f7ccf819a77850045c1d332395371562f63f8574e8d1ade8a4f485c->enter($__internal_afcfcc9a5f7ccf819a77850045c1d332395371562f63f8574e8d1ade8a4f485c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a924f059494ad0c7b87ae6cc03dd109e8aae2ae608ca52e84ca2bb904a8205e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a924f059494ad0c7b87ae6cc03dd109e8aae2ae608ca52e84ca2bb904a8205e7->enter($__internal_a924f059494ad0c7b87ae6cc03dd109e8aae2ae608ca52e84ca2bb904a8205e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afcfcc9a5f7ccf819a77850045c1d332395371562f63f8574e8d1ade8a4f485c->leave($__internal_afcfcc9a5f7ccf819a77850045c1d332395371562f63f8574e8d1ade8a4f485c_prof);

        
        $__internal_a924f059494ad0c7b87ae6cc03dd109e8aae2ae608ca52e84ca2bb904a8205e7->leave($__internal_a924f059494ad0c7b87ae6cc03dd109e8aae2ae608ca52e84ca2bb904a8205e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea9dc679ea3cc0769c3a52f3edb76e236b7f817726c32ef7aa05d9ce82a76dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9dc679ea3cc0769c3a52f3edb76e236b7f817726c32ef7aa05d9ce82a76dcb->enter($__internal_ea9dc679ea3cc0769c3a52f3edb76e236b7f817726c32ef7aa05d9ce82a76dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7fe3dcf073015dff5994143a4dd3ed7b807a2d6fff324c7d2cdf27985db7be3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe3dcf073015dff5994143a4dd3ed7b807a2d6fff324c7d2cdf27985db7be3b->enter($__internal_7fe3dcf073015dff5994143a4dd3ed7b807a2d6fff324c7d2cdf27985db7be3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7fe3dcf073015dff5994143a4dd3ed7b807a2d6fff324c7d2cdf27985db7be3b->leave($__internal_7fe3dcf073015dff5994143a4dd3ed7b807a2d6fff324c7d2cdf27985db7be3b_prof);

        
        $__internal_ea9dc679ea3cc0769c3a52f3edb76e236b7f817726c32ef7aa05d9ce82a76dcb->leave($__internal_ea9dc679ea3cc0769c3a52f3edb76e236b7f817726c32ef7aa05d9ce82a76dcb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0a6c6b583b5f5473aea4fe581d19518b84172173e00ce257423ec3cf95c45ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a6c6b583b5f5473aea4fe581d19518b84172173e00ce257423ec3cf95c45ef->enter($__internal_a0a6c6b583b5f5473aea4fe581d19518b84172173e00ce257423ec3cf95c45ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7e902557dadaa6b662f4d40de02da9b64d36939c865350b428d5756b4ab7951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e902557dadaa6b662f4d40de02da9b64d36939c865350b428d5756b4ab7951->enter($__internal_c7e902557dadaa6b662f4d40de02da9b64d36939c865350b428d5756b4ab7951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c7e902557dadaa6b662f4d40de02da9b64d36939c865350b428d5756b4ab7951->leave($__internal_c7e902557dadaa6b662f4d40de02da9b64d36939c865350b428d5756b4ab7951_prof);

        
        $__internal_a0a6c6b583b5f5473aea4fe581d19518b84172173e00ce257423ec3cf95c45ef->leave($__internal_a0a6c6b583b5f5473aea4fe581d19518b84172173e00ce257423ec3cf95c45ef_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a630e7f36defbd4e6de6abee038308596218ae92f0421acfcfbd47da693c3c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a630e7f36defbd4e6de6abee038308596218ae92f0421acfcfbd47da693c3c06->enter($__internal_a630e7f36defbd4e6de6abee038308596218ae92f0421acfcfbd47da693c3c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edc98d40c7443bc3f1daf4e7eb730ae56615fa2c2936ba38178b63f541288ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc98d40c7443bc3f1daf4e7eb730ae56615fa2c2936ba38178b63f541288ba6->enter($__internal_edc98d40c7443bc3f1daf4e7eb730ae56615fa2c2936ba38178b63f541288ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_edc98d40c7443bc3f1daf4e7eb730ae56615fa2c2936ba38178b63f541288ba6->leave($__internal_edc98d40c7443bc3f1daf4e7eb730ae56615fa2c2936ba38178b63f541288ba6_prof);

        
        $__internal_a630e7f36defbd4e6de6abee038308596218ae92f0421acfcfbd47da693c3c06->leave($__internal_a630e7f36defbd4e6de6abee038308596218ae92f0421acfcfbd47da693c3c06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

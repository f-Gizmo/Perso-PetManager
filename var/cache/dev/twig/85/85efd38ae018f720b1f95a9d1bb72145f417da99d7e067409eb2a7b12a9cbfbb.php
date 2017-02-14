<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54bede8d25740bf2748913733190288ffaff91cd97a63bd4aec2585517a65e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_12e21c6d11ec464a8426ba052d5eaa12dcd45c999b3cafab75b5fc63cf3b5751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e21c6d11ec464a8426ba052d5eaa12dcd45c999b3cafab75b5fc63cf3b5751->enter($__internal_12e21c6d11ec464a8426ba052d5eaa12dcd45c999b3cafab75b5fc63cf3b5751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_0af53229547c63f55ad26446ab9507040267dc75151075e2218a7a07ce9cbb2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af53229547c63f55ad26446ab9507040267dc75151075e2218a7a07ce9cbb2d->enter($__internal_0af53229547c63f55ad26446ab9507040267dc75151075e2218a7a07ce9cbb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e21c6d11ec464a8426ba052d5eaa12dcd45c999b3cafab75b5fc63cf3b5751->leave($__internal_12e21c6d11ec464a8426ba052d5eaa12dcd45c999b3cafab75b5fc63cf3b5751_prof);

        
        $__internal_0af53229547c63f55ad26446ab9507040267dc75151075e2218a7a07ce9cbb2d->leave($__internal_0af53229547c63f55ad26446ab9507040267dc75151075e2218a7a07ce9cbb2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b031826efaac6adfd220e19e75b3d9e5674e8a9dfffb6e511cd041dba7d727dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b031826efaac6adfd220e19e75b3d9e5674e8a9dfffb6e511cd041dba7d727dc->enter($__internal_b031826efaac6adfd220e19e75b3d9e5674e8a9dfffb6e511cd041dba7d727dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfb62be0b06a0dd2203c1739c5090a9ae7f9bd8c0f4509b6de76fb28a741518c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb62be0b06a0dd2203c1739c5090a9ae7f9bd8c0f4509b6de76fb28a741518c->enter($__internal_cfb62be0b06a0dd2203c1739c5090a9ae7f9bd8c0f4509b6de76fb28a741518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cfb62be0b06a0dd2203c1739c5090a9ae7f9bd8c0f4509b6de76fb28a741518c->leave($__internal_cfb62be0b06a0dd2203c1739c5090a9ae7f9bd8c0f4509b6de76fb28a741518c_prof);

        
        $__internal_b031826efaac6adfd220e19e75b3d9e5674e8a9dfffb6e511cd041dba7d727dc->leave($__internal_b031826efaac6adfd220e19e75b3d9e5674e8a9dfffb6e511cd041dba7d727dc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b91d6501d9d3e53d2e44eaf5f2822b2a65f03b1d410a148b4ee7126754e624b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b91d6501d9d3e53d2e44eaf5f2822b2a65f03b1d410a148b4ee7126754e624b->enter($__internal_4b91d6501d9d3e53d2e44eaf5f2822b2a65f03b1d410a148b4ee7126754e624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_308c42347626c1357ff4a0e070d156ba60f5db1ed07861a1b060160d5996a5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308c42347626c1357ff4a0e070d156ba60f5db1ed07861a1b060160d5996a5a4->enter($__internal_308c42347626c1357ff4a0e070d156ba60f5db1ed07861a1b060160d5996a5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_308c42347626c1357ff4a0e070d156ba60f5db1ed07861a1b060160d5996a5a4->leave($__internal_308c42347626c1357ff4a0e070d156ba60f5db1ed07861a1b060160d5996a5a4_prof);

        
        $__internal_4b91d6501d9d3e53d2e44eaf5f2822b2a65f03b1d410a148b4ee7126754e624b->leave($__internal_4b91d6501d9d3e53d2e44eaf5f2822b2a65f03b1d410a148b4ee7126754e624b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d192ec5a8dc59eb43fd617ff4f6049c3938a6ade894a455b52430f020b33cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d192ec5a8dc59eb43fd617ff4f6049c3938a6ade894a455b52430f020b33cda->enter($__internal_4d192ec5a8dc59eb43fd617ff4f6049c3938a6ade894a455b52430f020b33cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c71a9cd126ca3458ef2d6aec166b298322af3bd45d4980adef4302c228db67d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71a9cd126ca3458ef2d6aec166b298322af3bd45d4980adef4302c228db67d9->enter($__internal_c71a9cd126ca3458ef2d6aec166b298322af3bd45d4980adef4302c228db67d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c71a9cd126ca3458ef2d6aec166b298322af3bd45d4980adef4302c228db67d9->leave($__internal_c71a9cd126ca3458ef2d6aec166b298322af3bd45d4980adef4302c228db67d9_prof);

        
        $__internal_4d192ec5a8dc59eb43fd617ff4f6049c3938a6ade894a455b52430f020b33cda->leave($__internal_4d192ec5a8dc59eb43fd617ff4f6049c3938a6ade894a455b52430f020b33cda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

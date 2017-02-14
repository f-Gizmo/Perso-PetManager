<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5f40736bf8191373bcae91d8ced9c0bde76cd8c067731c9662de141e0e1871de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ef71403a73f7056c9997b41fbef247d2581cca4b4f3794a61baf2cebc29a6472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef71403a73f7056c9997b41fbef247d2581cca4b4f3794a61baf2cebc29a6472->enter($__internal_ef71403a73f7056c9997b41fbef247d2581cca4b4f3794a61baf2cebc29a6472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_45af5d2b0f0770bb3a8925b9f5974a8faa34b3ece4b807ed1d7c04de25b4d91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45af5d2b0f0770bb3a8925b9f5974a8faa34b3ece4b807ed1d7c04de25b4d91c->enter($__internal_45af5d2b0f0770bb3a8925b9f5974a8faa34b3ece4b807ed1d7c04de25b4d91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef71403a73f7056c9997b41fbef247d2581cca4b4f3794a61baf2cebc29a6472->leave($__internal_ef71403a73f7056c9997b41fbef247d2581cca4b4f3794a61baf2cebc29a6472_prof);

        
        $__internal_45af5d2b0f0770bb3a8925b9f5974a8faa34b3ece4b807ed1d7c04de25b4d91c->leave($__internal_45af5d2b0f0770bb3a8925b9f5974a8faa34b3ece4b807ed1d7c04de25b4d91c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbe4c185d17fffa39f9028ccb7cae7591a821616779607b20f1de4b31e1d24ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe4c185d17fffa39f9028ccb7cae7591a821616779607b20f1de4b31e1d24ed->enter($__internal_bbe4c185d17fffa39f9028ccb7cae7591a821616779607b20f1de4b31e1d24ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db44ae9240d61661461f0618d90485276077aa72fd088d9f1ec05e89b637aedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db44ae9240d61661461f0618d90485276077aa72fd088d9f1ec05e89b637aedb->enter($__internal_db44ae9240d61661461f0618d90485276077aa72fd088d9f1ec05e89b637aedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_db44ae9240d61661461f0618d90485276077aa72fd088d9f1ec05e89b637aedb->leave($__internal_db44ae9240d61661461f0618d90485276077aa72fd088d9f1ec05e89b637aedb_prof);

        
        $__internal_bbe4c185d17fffa39f9028ccb7cae7591a821616779607b20f1de4b31e1d24ed->leave($__internal_bbe4c185d17fffa39f9028ccb7cae7591a821616779607b20f1de4b31e1d24ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f85b1c210f9d883d9dbbd4fe90ac8b0ce9797d845e3872b047fcae4c7c785a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85b1c210f9d883d9dbbd4fe90ac8b0ce9797d845e3872b047fcae4c7c785a73->enter($__internal_f85b1c210f9d883d9dbbd4fe90ac8b0ce9797d845e3872b047fcae4c7c785a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_921c83afc0dea872abd5b05c6c66d98b7fb571982afd8eb0aedeb10381f01f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921c83afc0dea872abd5b05c6c66d98b7fb571982afd8eb0aedeb10381f01f19->enter($__internal_921c83afc0dea872abd5b05c6c66d98b7fb571982afd8eb0aedeb10381f01f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_921c83afc0dea872abd5b05c6c66d98b7fb571982afd8eb0aedeb10381f01f19->leave($__internal_921c83afc0dea872abd5b05c6c66d98b7fb571982afd8eb0aedeb10381f01f19_prof);

        
        $__internal_f85b1c210f9d883d9dbbd4fe90ac8b0ce9797d845e3872b047fcae4c7c785a73->leave($__internal_f85b1c210f9d883d9dbbd4fe90ac8b0ce9797d845e3872b047fcae4c7c785a73_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

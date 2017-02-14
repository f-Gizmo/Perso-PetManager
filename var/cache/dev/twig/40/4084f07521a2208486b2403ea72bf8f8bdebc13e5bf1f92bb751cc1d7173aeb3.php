<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4605bf05efe8f32a08493f79fd99b767097142122862dfe55af220441a895efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_79cbf95ec149580f6c99708c89f3f7ab049e86a031f5d2724f0ee6bb9391c5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cbf95ec149580f6c99708c89f3f7ab049e86a031f5d2724f0ee6bb9391c5b6->enter($__internal_79cbf95ec149580f6c99708c89f3f7ab049e86a031f5d2724f0ee6bb9391c5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_06502f96505a3fa012fd6b6975b5e48edeed3381b1a9871860d368bf9f9b0c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06502f96505a3fa012fd6b6975b5e48edeed3381b1a9871860d368bf9f9b0c83->enter($__internal_06502f96505a3fa012fd6b6975b5e48edeed3381b1a9871860d368bf9f9b0c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79cbf95ec149580f6c99708c89f3f7ab049e86a031f5d2724f0ee6bb9391c5b6->leave($__internal_79cbf95ec149580f6c99708c89f3f7ab049e86a031f5d2724f0ee6bb9391c5b6_prof);

        
        $__internal_06502f96505a3fa012fd6b6975b5e48edeed3381b1a9871860d368bf9f9b0c83->leave($__internal_06502f96505a3fa012fd6b6975b5e48edeed3381b1a9871860d368bf9f9b0c83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ae98f860e4b83491d954208a2c67af0c844763ab8b9fc1dcb5fee596c0f9b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae98f860e4b83491d954208a2c67af0c844763ab8b9fc1dcb5fee596c0f9b04->enter($__internal_1ae98f860e4b83491d954208a2c67af0c844763ab8b9fc1dcb5fee596c0f9b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d093e0046a5d060cb7212b732a2ef9745517727d0f697538da9309d8b16b22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d093e0046a5d060cb7212b732a2ef9745517727d0f697538da9309d8b16b22c->enter($__internal_0d093e0046a5d060cb7212b732a2ef9745517727d0f697538da9309d8b16b22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0d093e0046a5d060cb7212b732a2ef9745517727d0f697538da9309d8b16b22c->leave($__internal_0d093e0046a5d060cb7212b732a2ef9745517727d0f697538da9309d8b16b22c_prof);

        
        $__internal_1ae98f860e4b83491d954208a2c67af0c844763ab8b9fc1dcb5fee596c0f9b04->leave($__internal_1ae98f860e4b83491d954208a2c67af0c844763ab8b9fc1dcb5fee596c0f9b04_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa620a232415d8772ebbd416f53d8e3069a42fb89deafa20ab2043327158c015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa620a232415d8772ebbd416f53d8e3069a42fb89deafa20ab2043327158c015->enter($__internal_fa620a232415d8772ebbd416f53d8e3069a42fb89deafa20ab2043327158c015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3a106d74fa8cefa4b1f99a362b99f0ea92eb3f82c6800fa2649984c32cc4341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a106d74fa8cefa4b1f99a362b99f0ea92eb3f82c6800fa2649984c32cc4341->enter($__internal_b3a106d74fa8cefa4b1f99a362b99f0ea92eb3f82c6800fa2649984c32cc4341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3a106d74fa8cefa4b1f99a362b99f0ea92eb3f82c6800fa2649984c32cc4341->leave($__internal_b3a106d74fa8cefa4b1f99a362b99f0ea92eb3f82c6800fa2649984c32cc4341_prof);

        
        $__internal_fa620a232415d8772ebbd416f53d8e3069a42fb89deafa20ab2043327158c015->leave($__internal_fa620a232415d8772ebbd416f53d8e3069a42fb89deafa20ab2043327158c015_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

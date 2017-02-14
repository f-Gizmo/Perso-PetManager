<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5145ff72f6a3e76e148ff39b58ac40e49140d53b1948a05da82a690f8b1e8636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8777c49d579a019a1d21f80764fa6e7ea4649537f92ab777152a33300a647df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8777c49d579a019a1d21f80764fa6e7ea4649537f92ab777152a33300a647df0->enter($__internal_8777c49d579a019a1d21f80764fa6e7ea4649537f92ab777152a33300a647df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8bb352a785560b652a25f4a9587ab799e61e00b9de73c60ac95a513d03db4b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb352a785560b652a25f4a9587ab799e61e00b9de73c60ac95a513d03db4b21->enter($__internal_8bb352a785560b652a25f4a9587ab799e61e00b9de73c60ac95a513d03db4b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8777c49d579a019a1d21f80764fa6e7ea4649537f92ab777152a33300a647df0->leave($__internal_8777c49d579a019a1d21f80764fa6e7ea4649537f92ab777152a33300a647df0_prof);

        
        $__internal_8bb352a785560b652a25f4a9587ab799e61e00b9de73c60ac95a513d03db4b21->leave($__internal_8bb352a785560b652a25f4a9587ab799e61e00b9de73c60ac95a513d03db4b21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a1b0f1423139cb969dcb17f9786fa584f3bc7a8899eefa6a0f34503ad56ce46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1b0f1423139cb969dcb17f9786fa584f3bc7a8899eefa6a0f34503ad56ce46->enter($__internal_4a1b0f1423139cb969dcb17f9786fa584f3bc7a8899eefa6a0f34503ad56ce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_157978f3e77c218c179d8242604d129e9744addc504a1858848113e286541785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157978f3e77c218c179d8242604d129e9744addc504a1858848113e286541785->enter($__internal_157978f3e77c218c179d8242604d129e9744addc504a1858848113e286541785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_157978f3e77c218c179d8242604d129e9744addc504a1858848113e286541785->leave($__internal_157978f3e77c218c179d8242604d129e9744addc504a1858848113e286541785_prof);

        
        $__internal_4a1b0f1423139cb969dcb17f9786fa584f3bc7a8899eefa6a0f34503ad56ce46->leave($__internal_4a1b0f1423139cb969dcb17f9786fa584f3bc7a8899eefa6a0f34503ad56ce46_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14b7cd390468e9bf5c77975b5db835d5ee1e0d2ce1124686ceb784c823c7e9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b7cd390468e9bf5c77975b5db835d5ee1e0d2ce1124686ceb784c823c7e9b4->enter($__internal_14b7cd390468e9bf5c77975b5db835d5ee1e0d2ce1124686ceb784c823c7e9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eaf2a3e4be6b3a66b249cbaa556fd99edb95ed263106cc8c6bf678c728b25bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf2a3e4be6b3a66b249cbaa556fd99edb95ed263106cc8c6bf678c728b25bbf->enter($__internal_eaf2a3e4be6b3a66b249cbaa556fd99edb95ed263106cc8c6bf678c728b25bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_eaf2a3e4be6b3a66b249cbaa556fd99edb95ed263106cc8c6bf678c728b25bbf->leave($__internal_eaf2a3e4be6b3a66b249cbaa556fd99edb95ed263106cc8c6bf678c728b25bbf_prof);

        
        $__internal_14b7cd390468e9bf5c77975b5db835d5ee1e0d2ce1124686ceb784c823c7e9b4->leave($__internal_14b7cd390468e9bf5c77975b5db835d5ee1e0d2ce1124686ceb784c823c7e9b4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_353fbe4288d046cfb760ca7489e5d3147d1e151c777e664f88338158cabbb59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353fbe4288d046cfb760ca7489e5d3147d1e151c777e664f88338158cabbb59d->enter($__internal_353fbe4288d046cfb760ca7489e5d3147d1e151c777e664f88338158cabbb59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7311e874180d6e3d304721e50107d576260b1d9515323436fc7231f1c08d4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7311e874180d6e3d304721e50107d576260b1d9515323436fc7231f1c08d4fb->enter($__internal_c7311e874180d6e3d304721e50107d576260b1d9515323436fc7231f1c08d4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c7311e874180d6e3d304721e50107d576260b1d9515323436fc7231f1c08d4fb->leave($__internal_c7311e874180d6e3d304721e50107d576260b1d9515323436fc7231f1c08d4fb_prof);

        
        $__internal_353fbe4288d046cfb760ca7489e5d3147d1e151c777e664f88338158cabbb59d->leave($__internal_353fbe4288d046cfb760ca7489e5d3147d1e151c777e664f88338158cabbb59d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

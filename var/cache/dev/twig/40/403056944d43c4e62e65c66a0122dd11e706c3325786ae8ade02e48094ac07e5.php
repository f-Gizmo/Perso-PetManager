<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_64b97a14fa8f925359299c8ef25fbe392acb137030014c423276e5d132e256df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b97a14fa8f925359299c8ef25fbe392acb137030014c423276e5d132e256df->enter($__internal_64b97a14fa8f925359299c8ef25fbe392acb137030014c423276e5d132e256df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_92d8e11ff9e8f52bd4d6aa6170cb7cf978a149caa04df02c2f38c63dbbeca98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d8e11ff9e8f52bd4d6aa6170cb7cf978a149caa04df02c2f38c63dbbeca98f->enter($__internal_92d8e11ff9e8f52bd4d6aa6170cb7cf978a149caa04df02c2f38c63dbbeca98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b97a14fa8f925359299c8ef25fbe392acb137030014c423276e5d132e256df->leave($__internal_64b97a14fa8f925359299c8ef25fbe392acb137030014c423276e5d132e256df_prof);

        
        $__internal_92d8e11ff9e8f52bd4d6aa6170cb7cf978a149caa04df02c2f38c63dbbeca98f->leave($__internal_92d8e11ff9e8f52bd4d6aa6170cb7cf978a149caa04df02c2f38c63dbbeca98f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4160fe9d4c339ef50392d18f3e89d8583720153eab7ad0dce9a65021f5354e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4160fe9d4c339ef50392d18f3e89d8583720153eab7ad0dce9a65021f5354e2->enter($__internal_b4160fe9d4c339ef50392d18f3e89d8583720153eab7ad0dce9a65021f5354e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8464c4ca6e0a8f4262e77174f2bcb0e18b88ff1299ee9a5d7005ee4f523162d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8464c4ca6e0a8f4262e77174f2bcb0e18b88ff1299ee9a5d7005ee4f523162d5->enter($__internal_8464c4ca6e0a8f4262e77174f2bcb0e18b88ff1299ee9a5d7005ee4f523162d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8464c4ca6e0a8f4262e77174f2bcb0e18b88ff1299ee9a5d7005ee4f523162d5->leave($__internal_8464c4ca6e0a8f4262e77174f2bcb0e18b88ff1299ee9a5d7005ee4f523162d5_prof);

        
        $__internal_b4160fe9d4c339ef50392d18f3e89d8583720153eab7ad0dce9a65021f5354e2->leave($__internal_b4160fe9d4c339ef50392d18f3e89d8583720153eab7ad0dce9a65021f5354e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67fc6951489796fbccb9d4a2482eadae62e22bd7c553aedcc8288d69a266c9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fc6951489796fbccb9d4a2482eadae62e22bd7c553aedcc8288d69a266c9da->enter($__internal_67fc6951489796fbccb9d4a2482eadae62e22bd7c553aedcc8288d69a266c9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68350b9f3a3d773f91639c00aceea4a0602a5aa1c8b85a93362ca66045481762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68350b9f3a3d773f91639c00aceea4a0602a5aa1c8b85a93362ca66045481762->enter($__internal_68350b9f3a3d773f91639c00aceea4a0602a5aa1c8b85a93362ca66045481762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_68350b9f3a3d773f91639c00aceea4a0602a5aa1c8b85a93362ca66045481762->leave($__internal_68350b9f3a3d773f91639c00aceea4a0602a5aa1c8b85a93362ca66045481762_prof);

        
        $__internal_67fc6951489796fbccb9d4a2482eadae62e22bd7c553aedcc8288d69a266c9da->leave($__internal_67fc6951489796fbccb9d4a2482eadae62e22bd7c553aedcc8288d69a266c9da_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0c33560816d764683fcd803ee894ca4b8f6d2ce4137fba40fdde10caaac8c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c33560816d764683fcd803ee894ca4b8f6d2ce4137fba40fdde10caaac8c02->enter($__internal_d0c33560816d764683fcd803ee894ca4b8f6d2ce4137fba40fdde10caaac8c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea0412d740296907b3842e4251f6e0703e7cba6e330a0e8f50a172305268034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0412d740296907b3842e4251f6e0703e7cba6e330a0e8f50a172305268034b->enter($__internal_ea0412d740296907b3842e4251f6e0703e7cba6e330a0e8f50a172305268034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ea0412d740296907b3842e4251f6e0703e7cba6e330a0e8f50a172305268034b->leave($__internal_ea0412d740296907b3842e4251f6e0703e7cba6e330a0e8f50a172305268034b_prof);

        
        $__internal_d0c33560816d764683fcd803ee894ca4b8f6d2ce4137fba40fdde10caaac8c02->leave($__internal_d0c33560816d764683fcd803ee894ca4b8f6d2ce4137fba40fdde10caaac8c02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

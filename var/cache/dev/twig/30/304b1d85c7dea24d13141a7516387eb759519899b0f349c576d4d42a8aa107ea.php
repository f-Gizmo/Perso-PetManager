<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4e60a21b9f9abb1c8179ac1ee78bb1d1e6bcfe8114974a74ab2d5e0a66993d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_08ed7f31063d20bd75547ab55ea70efb53207bc71d2f90a99886d858fc1f1149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ed7f31063d20bd75547ab55ea70efb53207bc71d2f90a99886d858fc1f1149->enter($__internal_08ed7f31063d20bd75547ab55ea70efb53207bc71d2f90a99886d858fc1f1149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0b76ef2a76d28c6617be5c729c048612ec183630eda853215c4806b47ee6d3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b76ef2a76d28c6617be5c729c048612ec183630eda853215c4806b47ee6d3aa->enter($__internal_0b76ef2a76d28c6617be5c729c048612ec183630eda853215c4806b47ee6d3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ed7f31063d20bd75547ab55ea70efb53207bc71d2f90a99886d858fc1f1149->leave($__internal_08ed7f31063d20bd75547ab55ea70efb53207bc71d2f90a99886d858fc1f1149_prof);

        
        $__internal_0b76ef2a76d28c6617be5c729c048612ec183630eda853215c4806b47ee6d3aa->leave($__internal_0b76ef2a76d28c6617be5c729c048612ec183630eda853215c4806b47ee6d3aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0c2a26987cbfb38af481d871cbf7be114ec1e244cd1135c5be714057bc16ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c2a26987cbfb38af481d871cbf7be114ec1e244cd1135c5be714057bc16ff2->enter($__internal_a0c2a26987cbfb38af481d871cbf7be114ec1e244cd1135c5be714057bc16ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe0f8605b9f551ad1214cb754a93a05ed01a3ae319448316e02aa83383394b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0f8605b9f551ad1214cb754a93a05ed01a3ae319448316e02aa83383394b1c->enter($__internal_fe0f8605b9f551ad1214cb754a93a05ed01a3ae319448316e02aa83383394b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe0f8605b9f551ad1214cb754a93a05ed01a3ae319448316e02aa83383394b1c->leave($__internal_fe0f8605b9f551ad1214cb754a93a05ed01a3ae319448316e02aa83383394b1c_prof);

        
        $__internal_a0c2a26987cbfb38af481d871cbf7be114ec1e244cd1135c5be714057bc16ff2->leave($__internal_a0c2a26987cbfb38af481d871cbf7be114ec1e244cd1135c5be714057bc16ff2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1412e89e4e463d81bdc724b05bad1e75a288f5db5da5727ad024054cb0dd8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1412e89e4e463d81bdc724b05bad1e75a288f5db5da5727ad024054cb0dd8e4->enter($__internal_d1412e89e4e463d81bdc724b05bad1e75a288f5db5da5727ad024054cb0dd8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b74837568c74f729f935e7a609e16f985b7f9a52c4bc468fae75347fb0913dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74837568c74f729f935e7a609e16f985b7f9a52c4bc468fae75347fb0913dcb->enter($__internal_b74837568c74f729f935e7a609e16f985b7f9a52c4bc468fae75347fb0913dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b74837568c74f729f935e7a609e16f985b7f9a52c4bc468fae75347fb0913dcb->leave($__internal_b74837568c74f729f935e7a609e16f985b7f9a52c4bc468fae75347fb0913dcb_prof);

        
        $__internal_d1412e89e4e463d81bdc724b05bad1e75a288f5db5da5727ad024054cb0dd8e4->leave($__internal_d1412e89e4e463d81bdc724b05bad1e75a288f5db5da5727ad024054cb0dd8e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc0ed93496a7dff6c38f0860a8590d3331f7b5c1238fefd72cf72b594850da4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0ed93496a7dff6c38f0860a8590d3331f7b5c1238fefd72cf72b594850da4a->enter($__internal_fc0ed93496a7dff6c38f0860a8590d3331f7b5c1238fefd72cf72b594850da4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05ee329e33e2e663bd2c725e49538659d903086be4b2bf3c15b3524b84afba12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ee329e33e2e663bd2c725e49538659d903086be4b2bf3c15b3524b84afba12->enter($__internal_05ee329e33e2e663bd2c725e49538659d903086be4b2bf3c15b3524b84afba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05ee329e33e2e663bd2c725e49538659d903086be4b2bf3c15b3524b84afba12->leave($__internal_05ee329e33e2e663bd2c725e49538659d903086be4b2bf3c15b3524b84afba12_prof);

        
        $__internal_fc0ed93496a7dff6c38f0860a8590d3331f7b5c1238fefd72cf72b594850da4a->leave($__internal_fc0ed93496a7dff6c38f0860a8590d3331f7b5c1238fefd72cf72b594850da4a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

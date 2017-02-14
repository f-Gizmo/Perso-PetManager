<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_01bdf98f7922f7ce7ce45ccb7c2982355636e1c01e687be1f4f78b120dee77f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bdf98f7922f7ce7ce45ccb7c2982355636e1c01e687be1f4f78b120dee77f9->enter($__internal_01bdf98f7922f7ce7ce45ccb7c2982355636e1c01e687be1f4f78b120dee77f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cbb8a39efe330d763e03b4a3270a27d46b6a9d02cf3fa94ba867b9396e8a4034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb8a39efe330d763e03b4a3270a27d46b6a9d02cf3fa94ba867b9396e8a4034->enter($__internal_cbb8a39efe330d763e03b4a3270a27d46b6a9d02cf3fa94ba867b9396e8a4034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01bdf98f7922f7ce7ce45ccb7c2982355636e1c01e687be1f4f78b120dee77f9->leave($__internal_01bdf98f7922f7ce7ce45ccb7c2982355636e1c01e687be1f4f78b120dee77f9_prof);

        
        $__internal_cbb8a39efe330d763e03b4a3270a27d46b6a9d02cf3fa94ba867b9396e8a4034->leave($__internal_cbb8a39efe330d763e03b4a3270a27d46b6a9d02cf3fa94ba867b9396e8a4034_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7926306193396c4f84b40b470964853ae34b005203ceb2b39a3bf689151ac131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7926306193396c4f84b40b470964853ae34b005203ceb2b39a3bf689151ac131->enter($__internal_7926306193396c4f84b40b470964853ae34b005203ceb2b39a3bf689151ac131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_14d5dc48c5b21cf55bde84c5e9dae6c35941bcf3f30af0e689a88aa090b2d09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d5dc48c5b21cf55bde84c5e9dae6c35941bcf3f30af0e689a88aa090b2d09c->enter($__internal_14d5dc48c5b21cf55bde84c5e9dae6c35941bcf3f30af0e689a88aa090b2d09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_14d5dc48c5b21cf55bde84c5e9dae6c35941bcf3f30af0e689a88aa090b2d09c->leave($__internal_14d5dc48c5b21cf55bde84c5e9dae6c35941bcf3f30af0e689a88aa090b2d09c_prof);

        
        $__internal_7926306193396c4f84b40b470964853ae34b005203ceb2b39a3bf689151ac131->leave($__internal_7926306193396c4f84b40b470964853ae34b005203ceb2b39a3bf689151ac131_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c5aff0ed23056536af60a4d8d30d38c06ac181afec3e77cb68f89f00f1441b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5aff0ed23056536af60a4d8d30d38c06ac181afec3e77cb68f89f00f1441b1->enter($__internal_2c5aff0ed23056536af60a4d8d30d38c06ac181afec3e77cb68f89f00f1441b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9693df914b937a14e112106d4833e13ea76d8cd7169c8f85029f6970ef4f6de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9693df914b937a14e112106d4833e13ea76d8cd7169c8f85029f6970ef4f6de8->enter($__internal_9693df914b937a14e112106d4833e13ea76d8cd7169c8f85029f6970ef4f6de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9693df914b937a14e112106d4833e13ea76d8cd7169c8f85029f6970ef4f6de8->leave($__internal_9693df914b937a14e112106d4833e13ea76d8cd7169c8f85029f6970ef4f6de8_prof);

        
        $__internal_2c5aff0ed23056536af60a4d8d30d38c06ac181afec3e77cb68f89f00f1441b1->leave($__internal_2c5aff0ed23056536af60a4d8d30d38c06ac181afec3e77cb68f89f00f1441b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f73eb5a8988fc3900c0a4fd4de8cf9ccdac83076ac642892af41d50dc6dcd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f73eb5a8988fc3900c0a4fd4de8cf9ccdac83076ac642892af41d50dc6dcd0f->enter($__internal_8f73eb5a8988fc3900c0a4fd4de8cf9ccdac83076ac642892af41d50dc6dcd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ba775de52cc50ee104ef735c45958cdbd927efac2bf287e6fdd18b5d2e44e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba775de52cc50ee104ef735c45958cdbd927efac2bf287e6fdd18b5d2e44e1f->enter($__internal_6ba775de52cc50ee104ef735c45958cdbd927efac2bf287e6fdd18b5d2e44e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ba775de52cc50ee104ef735c45958cdbd927efac2bf287e6fdd18b5d2e44e1f->leave($__internal_6ba775de52cc50ee104ef735c45958cdbd927efac2bf287e6fdd18b5d2e44e1f_prof);

        
        $__internal_8f73eb5a8988fc3900c0a4fd4de8cf9ccdac83076ac642892af41d50dc6dcd0f->leave($__internal_8f73eb5a8988fc3900c0a4fd4de8cf9ccdac83076ac642892af41d50dc6dcd0f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

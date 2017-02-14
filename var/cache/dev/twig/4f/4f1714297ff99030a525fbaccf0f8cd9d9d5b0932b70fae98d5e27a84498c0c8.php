<?php

/* FGPetManagerBundle:Default:index.html.twig */
class __TwigTemplate_4711fd8723580478b1f364e3a10d1e9239a678ec67195a3bfa61a444d522ff2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FGPetManagerBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'petmanager_title' => array($this, 'block_petmanager_title'),
            'petmanager_body' => array($this, 'block_petmanager_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fdb867e54859cf655ef4eb497cd9e317b1f238dcd889a101ae3ee83a5709791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fdb867e54859cf655ef4eb497cd9e317b1f238dcd889a101ae3ee83a5709791->enter($__internal_7fdb867e54859cf655ef4eb497cd9e317b1f238dcd889a101ae3ee83a5709791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:index.html.twig"));

        $__internal_a97040c0783fe8724493c0e77a7925e8297d2bd5efd5ce9e2135e81612bdc449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97040c0783fe8724493c0e77a7925e8297d2bd5efd5ce9e2135e81612bdc449->enter($__internal_a97040c0783fe8724493c0e77a7925e8297d2bd5efd5ce9e2135e81612bdc449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fdb867e54859cf655ef4eb497cd9e317b1f238dcd889a101ae3ee83a5709791->leave($__internal_7fdb867e54859cf655ef4eb497cd9e317b1f238dcd889a101ae3ee83a5709791_prof);

        
        $__internal_a97040c0783fe8724493c0e77a7925e8297d2bd5efd5ce9e2135e81612bdc449->leave($__internal_a97040c0783fe8724493c0e77a7925e8297d2bd5efd5ce9e2135e81612bdc449_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33e31a5e0335ec26ab7a8e68ed0630bb035abef26e36bdfee6d114279321e6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e31a5e0335ec26ab7a8e68ed0630bb035abef26e36bdfee6d114279321e6f1->enter($__internal_33e31a5e0335ec26ab7a8e68ed0630bb035abef26e36bdfee6d114279321e6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d4cf2d8333c7e48741f26d9510b13b1f22ee2a1d41490566c87245abaa77448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4cf2d8333c7e48741f26d9510b13b1f22ee2a1d41490566c87245abaa77448->enter($__internal_7d4cf2d8333c7e48741f26d9510b13b1f22ee2a1d41490566c87245abaa77448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index des mascottes";
        
        $__internal_7d4cf2d8333c7e48741f26d9510b13b1f22ee2a1d41490566c87245abaa77448->leave($__internal_7d4cf2d8333c7e48741f26d9510b13b1f22ee2a1d41490566c87245abaa77448_prof);

        
        $__internal_33e31a5e0335ec26ab7a8e68ed0630bb035abef26e36bdfee6d114279321e6f1->leave($__internal_33e31a5e0335ec26ab7a8e68ed0630bb035abef26e36bdfee6d114279321e6f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a408145a5900096d985829213f5d6838247faa130eb889184949230fafbdcfa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a408145a5900096d985829213f5d6838247faa130eb889184949230fafbdcfa1->enter($__internal_a408145a5900096d985829213f5d6838247faa130eb889184949230fafbdcfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcb5c7a8a31915527a6d3cb7368b26c6cc5cdaacba2c4580497639f49b5096b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb5c7a8a31915527a6d3cb7368b26c6cc5cdaacba2c4580497639f49b5096b3->enter($__internal_fcb5c7a8a31915527a6d3cb7368b26c6cc5cdaacba2c4580497639f49b5096b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t\t";
        $this->displayBlock('petmanager_title', $context, $blocks);
        // line 7
        echo "\t\t\t";
        $this->displayBlock('petmanager_body', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_fcb5c7a8a31915527a6d3cb7368b26c6cc5cdaacba2c4580497639f49b5096b3->leave($__internal_fcb5c7a8a31915527a6d3cb7368b26c6cc5cdaacba2c4580497639f49b5096b3_prof);

        
        $__internal_a408145a5900096d985829213f5d6838247faa130eb889184949230fafbdcfa1->leave($__internal_a408145a5900096d985829213f5d6838247faa130eb889184949230fafbdcfa1_prof);

    }

    // line 6
    public function block_petmanager_title($context, array $blocks = array())
    {
        $__internal_e5fe9522f98a8ace58f16ee00668375ce1cf15b0e0222ee06552dd4c2fe9b785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fe9522f98a8ace58f16ee00668375ce1cf15b0e0222ee06552dd4c2fe9b785->enter($__internal_e5fe9522f98a8ace58f16ee00668375ce1cf15b0e0222ee06552dd4c2fe9b785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        $__internal_9f002d6b18a1edfe1eb476f5898ec5d4c5cde37aadeb7ff7dd3132ab83a7bb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f002d6b18a1edfe1eb476f5898ec5d4c5cde37aadeb7ff7dd3132ab83a7bb74->enter($__internal_9f002d6b18a1edfe1eb476f5898ec5d4c5cde37aadeb7ff7dd3132ab83a7bb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        echo "<h1> Index des mascottes </h1>";
        
        $__internal_9f002d6b18a1edfe1eb476f5898ec5d4c5cde37aadeb7ff7dd3132ab83a7bb74->leave($__internal_9f002d6b18a1edfe1eb476f5898ec5d4c5cde37aadeb7ff7dd3132ab83a7bb74_prof);

        
        $__internal_e5fe9522f98a8ace58f16ee00668375ce1cf15b0e0222ee06552dd4c2fe9b785->leave($__internal_e5fe9522f98a8ace58f16ee00668375ce1cf15b0e0222ee06552dd4c2fe9b785_prof);

    }

    // line 7
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_69f0e5f6e57e0b94a3ab4859b7d5b3eb65f4f15f694b4b51660c17dae774b915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f0e5f6e57e0b94a3ab4859b7d5b3eb65f4f15f694b4b51660c17dae774b915->enter($__internal_69f0e5f6e57e0b94a3ab4859b7d5b3eb65f4f15f694b4b51660c17dae774b915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_4f52374f987152d1714c03befa787ab84ddd578d64c84bcb2a88c06966c84099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f52374f987152d1714c03befa787ab84ddd578d64c84bcb2a88c06966c84099->enter($__internal_4f52374f987152d1714c03befa787ab84ddd578d64c84bcb2a88c06966c84099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        // line 8
        echo "\t\t\t\t
\t\t\t";
        
        $__internal_4f52374f987152d1714c03befa787ab84ddd578d64c84bcb2a88c06966c84099->leave($__internal_4f52374f987152d1714c03befa787ab84ddd578d64c84bcb2a88c06966c84099_prof);

        
        $__internal_69f0e5f6e57e0b94a3ab4859b7d5b3eb65f4f15f694b4b51660c17dae774b915->leave($__internal_69f0e5f6e57e0b94a3ab4859b7d5b3eb65f4f15f694b4b51660c17dae774b915_prof);

    }

    public function getTemplateName()
    {
        return "FGPetManagerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 8,  105 => 7,  87 => 6,  76 => 10,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}Index des mascottes{% endblock %}

{% block body %}
\t\t{% block petmanager_title %}<h1> Index des mascottes </h1>{% endblock %}
\t\t\t{% block petmanager_body %}
\t\t\t\t
\t\t\t{% endblock %}

{% endblock %}", "FGPetManagerBundle:Default:index.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle/Resources/views/Default/index.html.twig");
    }
}

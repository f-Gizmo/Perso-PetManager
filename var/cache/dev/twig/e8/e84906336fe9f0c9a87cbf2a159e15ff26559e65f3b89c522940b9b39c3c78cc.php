<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e54ba81b6c17b07d0428a0daedfd35ab467be4baff09be38a39e83aa2f7d3736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ea985a79efd9090732b6e35d3dd918a47b34e8cb3fcafa9ea439c1e51580b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea985a79efd9090732b6e35d3dd918a47b34e8cb3fcafa9ea439c1e51580b51->enter($__internal_3ea985a79efd9090732b6e35d3dd918a47b34e8cb3fcafa9ea439c1e51580b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_fe8027658656d3a8c75b9abfa90a215a3d8e18c48816fd84cf814a8cb8512765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8027658656d3a8c75b9abfa90a215a3d8e18c48816fd84cf814a8cb8512765->enter($__internal_fe8027658656d3a8c75b9abfa90a215a3d8e18c48816fd84cf814a8cb8512765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3ea985a79efd9090732b6e35d3dd918a47b34e8cb3fcafa9ea439c1e51580b51->leave($__internal_3ea985a79efd9090732b6e35d3dd918a47b34e8cb3fcafa9ea439c1e51580b51_prof);

        
        $__internal_fe8027658656d3a8c75b9abfa90a215a3d8e18c48816fd84cf814a8cb8512765->leave($__internal_fe8027658656d3a8c75b9abfa90a215a3d8e18c48816fd84cf814a8cb8512765_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

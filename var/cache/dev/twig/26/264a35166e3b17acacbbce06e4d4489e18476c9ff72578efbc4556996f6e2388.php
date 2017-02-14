<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_3f48c6c940bb8f0567bcfd028bd31985df1c656c600e5b12ac11d792101de412 extends Twig_Template
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
        $__internal_442724e74383d3d90e9d2a2e4205cea4a3ea9d85268a024fa69536591952e35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442724e74383d3d90e9d2a2e4205cea4a3ea9d85268a024fa69536591952e35f->enter($__internal_442724e74383d3d90e9d2a2e4205cea4a3ea9d85268a024fa69536591952e35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_86a17b654aedd49917d32822b50fba8a3edb5acc6ce8a3bfbf0fbbaa223680de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a17b654aedd49917d32822b50fba8a3edb5acc6ce8a3bfbf0fbbaa223680de->enter($__internal_86a17b654aedd49917d32822b50fba8a3edb5acc6ce8a3bfbf0fbbaa223680de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_442724e74383d3d90e9d2a2e4205cea4a3ea9d85268a024fa69536591952e35f->leave($__internal_442724e74383d3d90e9d2a2e4205cea4a3ea9d85268a024fa69536591952e35f_prof);

        
        $__internal_86a17b654aedd49917d32822b50fba8a3edb5acc6ce8a3bfbf0fbbaa223680de->leave($__internal_86a17b654aedd49917d32822b50fba8a3edb5acc6ce8a3bfbf0fbbaa223680de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

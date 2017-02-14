<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_27dfc0357f4a86ef8dd9df905b055f309b691c61cae3b23e342a366881a19fbb extends Twig_Template
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
        $__internal_de71c9cfa6c2adab82f09721708b68093dd7eb29b68b6aa9452495a7f986ef74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de71c9cfa6c2adab82f09721708b68093dd7eb29b68b6aa9452495a7f986ef74->enter($__internal_de71c9cfa6c2adab82f09721708b68093dd7eb29b68b6aa9452495a7f986ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_ddf3890c74c825daafa56a0dd20aedc080faafd32f5aae88d354b32181076353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf3890c74c825daafa56a0dd20aedc080faafd32f5aae88d354b32181076353->enter($__internal_ddf3890c74c825daafa56a0dd20aedc080faafd32f5aae88d354b32181076353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_de71c9cfa6c2adab82f09721708b68093dd7eb29b68b6aa9452495a7f986ef74->leave($__internal_de71c9cfa6c2adab82f09721708b68093dd7eb29b68b6aa9452495a7f986ef74_prof);

        
        $__internal_ddf3890c74c825daafa56a0dd20aedc080faafd32f5aae88d354b32181076353->leave($__internal_ddf3890c74c825daafa56a0dd20aedc080faafd32f5aae88d354b32181076353_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

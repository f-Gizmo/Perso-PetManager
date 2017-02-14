<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3c45e061129a3653ab749d926862102f15aee4f46db2177fe640462604ef6a47 extends Twig_Template
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
        $__internal_510fe717842d11315b56e448f8a1772fa520dd543d935e01fa54f67437d52f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510fe717842d11315b56e448f8a1772fa520dd543d935e01fa54f67437d52f90->enter($__internal_510fe717842d11315b56e448f8a1772fa520dd543d935e01fa54f67437d52f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6b372a222bd8da7ac7d4e050b4dc7db5390eae479fe0f4b46d4ce7646f7cdd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b372a222bd8da7ac7d4e050b4dc7db5390eae479fe0f4b46d4ce7646f7cdd14->enter($__internal_6b372a222bd8da7ac7d4e050b4dc7db5390eae479fe0f4b46d4ce7646f7cdd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_510fe717842d11315b56e448f8a1772fa520dd543d935e01fa54f67437d52f90->leave($__internal_510fe717842d11315b56e448f8a1772fa520dd543d935e01fa54f67437d52f90_prof);

        
        $__internal_6b372a222bd8da7ac7d4e050b4dc7db5390eae479fe0f4b46d4ce7646f7cdd14->leave($__internal_6b372a222bd8da7ac7d4e050b4dc7db5390eae479fe0f4b46d4ce7646f7cdd14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

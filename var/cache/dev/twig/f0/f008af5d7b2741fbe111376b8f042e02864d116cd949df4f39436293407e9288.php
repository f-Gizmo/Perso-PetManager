<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d1620b0add2ff514f6b7199facb9af3ee9dd63c3d79346b2cbda402fa4054c8a extends Twig_Template
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
        $__internal_17dff5abf9906fef6ee7679bd4b6c15945212f89a1add41f60977c182c719e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dff5abf9906fef6ee7679bd4b6c15945212f89a1add41f60977c182c719e2a->enter($__internal_17dff5abf9906fef6ee7679bd4b6c15945212f89a1add41f60977c182c719e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_deb4c475e7953ce764645b99a839c606e846d5ec7343f5e3a4dc3d4441a49b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb4c475e7953ce764645b99a839c606e846d5ec7343f5e3a4dc3d4441a49b1c->enter($__internal_deb4c475e7953ce764645b99a839c606e846d5ec7343f5e3a4dc3d4441a49b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_17dff5abf9906fef6ee7679bd4b6c15945212f89a1add41f60977c182c719e2a->leave($__internal_17dff5abf9906fef6ee7679bd4b6c15945212f89a1add41f60977c182c719e2a_prof);

        
        $__internal_deb4c475e7953ce764645b99a839c606e846d5ec7343f5e3a4dc3d4441a49b1c->leave($__internal_deb4c475e7953ce764645b99a839c606e846d5ec7343f5e3a4dc3d4441a49b1c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

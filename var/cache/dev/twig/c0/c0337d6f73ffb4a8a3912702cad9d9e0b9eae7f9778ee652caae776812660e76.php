<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_78f67a704d2b325701142713a2600289ce56704a3e17e9ef90af7e128d948e90 extends Twig_Template
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
        $__internal_b003de1267b167b71675c47fe3f0885082061c5883f0bd761ff1ba71fa8cecbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b003de1267b167b71675c47fe3f0885082061c5883f0bd761ff1ba71fa8cecbd->enter($__internal_b003de1267b167b71675c47fe3f0885082061c5883f0bd761ff1ba71fa8cecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_83fc66183d41a3edf4703ac1efe1689f952881f14bb5858c1297602d67ca3af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fc66183d41a3edf4703ac1efe1689f952881f14bb5858c1297602d67ca3af1->enter($__internal_83fc66183d41a3edf4703ac1efe1689f952881f14bb5858c1297602d67ca3af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_b003de1267b167b71675c47fe3f0885082061c5883f0bd761ff1ba71fa8cecbd->leave($__internal_b003de1267b167b71675c47fe3f0885082061c5883f0bd761ff1ba71fa8cecbd_prof);

        
        $__internal_83fc66183d41a3edf4703ac1efe1689f952881f14bb5858c1297602d67ca3af1->leave($__internal_83fc66183d41a3edf4703ac1efe1689f952881f14bb5858c1297602d67ca3af1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

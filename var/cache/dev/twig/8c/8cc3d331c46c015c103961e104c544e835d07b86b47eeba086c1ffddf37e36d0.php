<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_aadbda5a2aef4a0d4a973094e529760ff7888d9f9bb3840ed653c0ce734aa7a9 extends Twig_Template
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
        $__internal_f351526f2af2d6d9095455e25ca8284668bbd427bdf4ab1cf9bdf088706faa3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f351526f2af2d6d9095455e25ca8284668bbd427bdf4ab1cf9bdf088706faa3c->enter($__internal_f351526f2af2d6d9095455e25ca8284668bbd427bdf4ab1cf9bdf088706faa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_112e2559ac5e665b21883e634453c3f9cea8c16f2aa2cbd1a6b312086fde0db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112e2559ac5e665b21883e634453c3f9cea8c16f2aa2cbd1a6b312086fde0db0->enter($__internal_112e2559ac5e665b21883e634453c3f9cea8c16f2aa2cbd1a6b312086fde0db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f351526f2af2d6d9095455e25ca8284668bbd427bdf4ab1cf9bdf088706faa3c->leave($__internal_f351526f2af2d6d9095455e25ca8284668bbd427bdf4ab1cf9bdf088706faa3c_prof);

        
        $__internal_112e2559ac5e665b21883e634453c3f9cea8c16f2aa2cbd1a6b312086fde0db0->leave($__internal_112e2559ac5e665b21883e634453c3f9cea8c16f2aa2cbd1a6b312086fde0db0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}

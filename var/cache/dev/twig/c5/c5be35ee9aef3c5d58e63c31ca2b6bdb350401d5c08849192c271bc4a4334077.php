<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2e89820d082dacb7436a4f5257153955b82787f5da4deb67f71b751e6bae902c extends Twig_Template
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
        $__internal_9774750b1c39034be6b539f8122749b618b3a8d1775456456092528c3ee975e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9774750b1c39034be6b539f8122749b618b3a8d1775456456092528c3ee975e8->enter($__internal_9774750b1c39034be6b539f8122749b618b3a8d1775456456092528c3ee975e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_01b015b95f66f08f86d97d282901c0fb60d1409b731141a3a9ecbacfd2e88e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b015b95f66f08f86d97d282901c0fb60d1409b731141a3a9ecbacfd2e88e57->enter($__internal_01b015b95f66f08f86d97d282901c0fb60d1409b731141a3a9ecbacfd2e88e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9774750b1c39034be6b539f8122749b618b3a8d1775456456092528c3ee975e8->leave($__internal_9774750b1c39034be6b539f8122749b618b3a8d1775456456092528c3ee975e8_prof);

        
        $__internal_01b015b95f66f08f86d97d282901c0fb60d1409b731141a3a9ecbacfd2e88e57->leave($__internal_01b015b95f66f08f86d97d282901c0fb60d1409b731141a3a9ecbacfd2e88e57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

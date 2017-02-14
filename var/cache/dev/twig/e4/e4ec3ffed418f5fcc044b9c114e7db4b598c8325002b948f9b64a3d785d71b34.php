<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_42cff5b1d618a1f1a99ec0c2e1b3fc3d1e8c18aec7b7fd311830e102a1bfeeba extends Twig_Template
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
        $__internal_ea9e7872dfa3445d5e167606abee6bc71ed9c436e87a8b56a26fa75cf2f91f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9e7872dfa3445d5e167606abee6bc71ed9c436e87a8b56a26fa75cf2f91f6d->enter($__internal_ea9e7872dfa3445d5e167606abee6bc71ed9c436e87a8b56a26fa75cf2f91f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f711346fbbb89ab4719d20ff3088c9a5c500ee49d1ab6daa5a8672d9ff589399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f711346fbbb89ab4719d20ff3088c9a5c500ee49d1ab6daa5a8672d9ff589399->enter($__internal_f711346fbbb89ab4719d20ff3088c9a5c500ee49d1ab6daa5a8672d9ff589399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ea9e7872dfa3445d5e167606abee6bc71ed9c436e87a8b56a26fa75cf2f91f6d->leave($__internal_ea9e7872dfa3445d5e167606abee6bc71ed9c436e87a8b56a26fa75cf2f91f6d_prof);

        
        $__internal_f711346fbbb89ab4719d20ff3088c9a5c500ee49d1ab6daa5a8672d9ff589399->leave($__internal_f711346fbbb89ab4719d20ff3088c9a5c500ee49d1ab6daa5a8672d9ff589399_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

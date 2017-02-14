<?php

/* FGPetManagerBundle:Default:addMascotteType.html.twig */
class __TwigTemplate_87cb76d11b7b886311047ca970f65ac843b2cc50e6557633e804a0c282413f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGPetManagerBundle:Default:index.html.twig", "FGPetManagerBundle:Default:addMascotteType.html.twig", 1);
        $this->blocks = array(
            'petmanager_title' => array($this, 'block_petmanager_title'),
            'petmanager_body' => array($this, 'block_petmanager_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FGPetManagerBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06a1cfb7f4a2c9ef3b1e8b59640c65b11c9777d75c0d1fd54d42b6e84be05bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a1cfb7f4a2c9ef3b1e8b59640c65b11c9777d75c0d1fd54d42b6e84be05bac->enter($__internal_06a1cfb7f4a2c9ef3b1e8b59640c65b11c9777d75c0d1fd54d42b6e84be05bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:addMascotteType.html.twig"));

        $__internal_273447f23fedc653a929a2e9e1a221ebc1b050d23c98bbbf0d9b56574357d8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273447f23fedc653a929a2e9e1a221ebc1b050d23c98bbbf0d9b56574357d8fd->enter($__internal_273447f23fedc653a929a2e9e1a221ebc1b050d23c98bbbf0d9b56574357d8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:addMascotteType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06a1cfb7f4a2c9ef3b1e8b59640c65b11c9777d75c0d1fd54d42b6e84be05bac->leave($__internal_06a1cfb7f4a2c9ef3b1e8b59640c65b11c9777d75c0d1fd54d42b6e84be05bac_prof);

        
        $__internal_273447f23fedc653a929a2e9e1a221ebc1b050d23c98bbbf0d9b56574357d8fd->leave($__internal_273447f23fedc653a929a2e9e1a221ebc1b050d23c98bbbf0d9b56574357d8fd_prof);

    }

    // line 2
    public function block_petmanager_title($context, array $blocks = array())
    {
        $__internal_dbd9a5311847b5b187cc7b920359ba825dc769eb333b242d62c1201271fb03e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd9a5311847b5b187cc7b920359ba825dc769eb333b242d62c1201271fb03e1->enter($__internal_dbd9a5311847b5b187cc7b920359ba825dc769eb333b242d62c1201271fb03e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        $__internal_e7cf0be6f2ecc55dcabddd1fafe180c809d39b48b09530bd5ac744d3f4cd17e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cf0be6f2ecc55dcabddd1fafe180c809d39b48b09530bd5ac744d3f4cd17e5->enter($__internal_e7cf0be6f2ecc55dcabddd1fafe180c809d39b48b09530bd5ac744d3f4cd17e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        // line 3
        echo "\t\t<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
";
        
        $__internal_e7cf0be6f2ecc55dcabddd1fafe180c809d39b48b09530bd5ac744d3f4cd17e5->leave($__internal_e7cf0be6f2ecc55dcabddd1fafe180c809d39b48b09530bd5ac744d3f4cd17e5_prof);

        
        $__internal_dbd9a5311847b5b187cc7b920359ba825dc769eb333b242d62c1201271fb03e1->leave($__internal_dbd9a5311847b5b187cc7b920359ba825dc769eb333b242d62c1201271fb03e1_prof);

    }

    // line 5
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_ef3ad24654e211bec40aad0127616ce2662b7d8f1a86a52088052cb65de92465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3ad24654e211bec40aad0127616ce2662b7d8f1a86a52088052cb65de92465->enter($__internal_ef3ad24654e211bec40aad0127616ce2662b7d8f1a86a52088052cb65de92465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_9c25ae09e8ea9f80051c6879f9829cca7a0b554d87367e47bf8d2ba060ce390f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c25ae09e8ea9f80051c6879f9829cca7a0b554d87367e47bf8d2ba060ce390f->enter($__internal_9c25ae09e8ea9f80051c6879f9829cca7a0b554d87367e47bf8d2ba060ce390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        // line 6
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "validation"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["FlashMessage"]) {
            // line 7
            echo "\t\t<div class=\"well\"><p>\t";
            echo twig_escape_filter($this->env, $context["FlashMessage"], "html", null, true);
            echo "</p></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FlashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
\t";
        // line 10
        if (array_key_exists("form", $context)) {
            echo " ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        }
        
        $__internal_9c25ae09e8ea9f80051c6879f9829cca7a0b554d87367e47bf8d2ba060ce390f->leave($__internal_9c25ae09e8ea9f80051c6879f9829cca7a0b554d87367e47bf8d2ba060ce390f_prof);

        
        $__internal_ef3ad24654e211bec40aad0127616ce2662b7d8f1a86a52088052cb65de92465->leave($__internal_ef3ad24654e211bec40aad0127616ce2662b7d8f1a86a52088052cb65de92465_prof);

    }

    public function getTemplateName()
    {
        return "FGPetManagerBundle:Default:addMascotteType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  86 => 9,  77 => 7,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FGPetManagerBundle:Default:index.html.twig\" %}
{% block petmanager_title %}
\t\t<h1>{{title}}</h1>
{% endblock %}
{% block petmanager_body %}
\t{% for FlashMessage in app.session.flashbag.get('validation') %}
\t\t<div class=\"well\"><p>\t{{FlashMessage}}</p></div>
\t{% endfor %}

\t{% if form is defined %} {{form(form)}}{% endif %}
{% endblock %}", "FGPetManagerBundle:Default:addMascotteType.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle\\Resources\\views\\Default\\addMascotteType.html.twig");
    }
}

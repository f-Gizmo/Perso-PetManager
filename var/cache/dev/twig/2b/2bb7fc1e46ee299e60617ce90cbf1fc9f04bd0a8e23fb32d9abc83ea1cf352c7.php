<?php

/* FGPetManagerBundle:Default:addMascotte.html.twig */
class __TwigTemplate_25a5dcae59079d6a8e9440348000dd9af3539880218c4ccbd2c9ac63c360f32c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGPetManagerBundle:Default:index.html.twig", "FGPetManagerBundle:Default:addMascotte.html.twig", 1);
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
        $__internal_5cbff1ccdab16660b9145efc76e9952637b70680c48f6e549e284252d336f092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbff1ccdab16660b9145efc76e9952637b70680c48f6e549e284252d336f092->enter($__internal_5cbff1ccdab16660b9145efc76e9952637b70680c48f6e549e284252d336f092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:addMascotte.html.twig"));

        $__internal_aef7736ba49fb7a44b08ba6b9c0521c57e3613f6654e508e9e525bf0178bfe85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef7736ba49fb7a44b08ba6b9c0521c57e3613f6654e508e9e525bf0178bfe85->enter($__internal_aef7736ba49fb7a44b08ba6b9c0521c57e3613f6654e508e9e525bf0178bfe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:addMascotte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cbff1ccdab16660b9145efc76e9952637b70680c48f6e549e284252d336f092->leave($__internal_5cbff1ccdab16660b9145efc76e9952637b70680c48f6e549e284252d336f092_prof);

        
        $__internal_aef7736ba49fb7a44b08ba6b9c0521c57e3613f6654e508e9e525bf0178bfe85->leave($__internal_aef7736ba49fb7a44b08ba6b9c0521c57e3613f6654e508e9e525bf0178bfe85_prof);

    }

    // line 2
    public function block_petmanager_title($context, array $blocks = array())
    {
        $__internal_c619377bf239b43a12c513f5da5b410621095689eab8db4ed76cf8b8aeb46f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c619377bf239b43a12c513f5da5b410621095689eab8db4ed76cf8b8aeb46f20->enter($__internal_c619377bf239b43a12c513f5da5b410621095689eab8db4ed76cf8b8aeb46f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        $__internal_9d4cabd6a1bd18fc60a39683c6cd9a663442fa44b3685c27e6a5ef6bbbc1e491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4cabd6a1bd18fc60a39683c6cd9a663442fa44b3685c27e6a5ef6bbbc1e491->enter($__internal_9d4cabd6a1bd18fc60a39683c6cd9a663442fa44b3685c27e6a5ef6bbbc1e491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        // line 3
        echo "\t\t<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
";
        
        $__internal_9d4cabd6a1bd18fc60a39683c6cd9a663442fa44b3685c27e6a5ef6bbbc1e491->leave($__internal_9d4cabd6a1bd18fc60a39683c6cd9a663442fa44b3685c27e6a5ef6bbbc1e491_prof);

        
        $__internal_c619377bf239b43a12c513f5da5b410621095689eab8db4ed76cf8b8aeb46f20->leave($__internal_c619377bf239b43a12c513f5da5b410621095689eab8db4ed76cf8b8aeb46f20_prof);

    }

    // line 5
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_17e647c6e1cbb0e3d09050c47d499eaad1076ea3099dc7c12154b4c7d2bbf806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e647c6e1cbb0e3d09050c47d499eaad1076ea3099dc7c12154b4c7d2bbf806->enter($__internal_17e647c6e1cbb0e3d09050c47d499eaad1076ea3099dc7c12154b4c7d2bbf806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_7ea4bcc443832afa1c8082a9331de5b08c4ba53312ff2d50031f9ed31947de29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea4bcc443832afa1c8082a9331de5b08c4ba53312ff2d50031f9ed31947de29->enter($__internal_7ea4bcc443832afa1c8082a9331de5b08c4ba53312ff2d50031f9ed31947de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

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
        
        $__internal_7ea4bcc443832afa1c8082a9331de5b08c4ba53312ff2d50031f9ed31947de29->leave($__internal_7ea4bcc443832afa1c8082a9331de5b08c4ba53312ff2d50031f9ed31947de29_prof);

        
        $__internal_17e647c6e1cbb0e3d09050c47d499eaad1076ea3099dc7c12154b4c7d2bbf806->leave($__internal_17e647c6e1cbb0e3d09050c47d499eaad1076ea3099dc7c12154b4c7d2bbf806_prof);

    }

    public function getTemplateName()
    {
        return "FGPetManagerBundle:Default:addMascotte.html.twig";
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
{% endblock %}", "FGPetManagerBundle:Default:addMascotte.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle/Resources/views/Default/addMascotte.html.twig");
    }
}

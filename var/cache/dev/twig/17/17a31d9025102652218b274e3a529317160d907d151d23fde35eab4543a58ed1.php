<?php

/* FGPetManagerBundle:default:addMascotte.html.twig */
class __TwigTemplate_cc5b9d547887d758dc298e98c3336d30d35a53b81b2fa3fc4a0bdfd52f44df0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGPetManagerBundle:Default:index.html.twig", "FGPetManagerBundle:default:addMascotte.html.twig", 1);
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
        $__internal_e5486be7ff68133ba5bce880b842abddb4a0a6ffb98122ee34c82512c212f19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5486be7ff68133ba5bce880b842abddb4a0a6ffb98122ee34c82512c212f19a->enter($__internal_e5486be7ff68133ba5bce880b842abddb4a0a6ffb98122ee34c82512c212f19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:default:addMascotte.html.twig"));

        $__internal_195cf53edc4e51b236ff2823682f042eebe1a150df87419cc5ddf97742de50ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195cf53edc4e51b236ff2823682f042eebe1a150df87419cc5ddf97742de50ff->enter($__internal_195cf53edc4e51b236ff2823682f042eebe1a150df87419cc5ddf97742de50ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:default:addMascotte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5486be7ff68133ba5bce880b842abddb4a0a6ffb98122ee34c82512c212f19a->leave($__internal_e5486be7ff68133ba5bce880b842abddb4a0a6ffb98122ee34c82512c212f19a_prof);

        
        $__internal_195cf53edc4e51b236ff2823682f042eebe1a150df87419cc5ddf97742de50ff->leave($__internal_195cf53edc4e51b236ff2823682f042eebe1a150df87419cc5ddf97742de50ff_prof);

    }

    // line 2
    public function block_petmanager_title($context, array $blocks = array())
    {
        $__internal_70c15d53e2cab071fb385b5090e651f7def6d65ea891b6461052765bcf4007dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c15d53e2cab071fb385b5090e651f7def6d65ea891b6461052765bcf4007dd->enter($__internal_70c15d53e2cab071fb385b5090e651f7def6d65ea891b6461052765bcf4007dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        $__internal_d0a583f71a487fd192fb512964cf7d92e6892644c7f270521bca4283eccef0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a583f71a487fd192fb512964cf7d92e6892644c7f270521bca4283eccef0ad->enter($__internal_d0a583f71a487fd192fb512964cf7d92e6892644c7f270521bca4283eccef0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        // line 3
        echo "\t\t<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
";
        
        $__internal_d0a583f71a487fd192fb512964cf7d92e6892644c7f270521bca4283eccef0ad->leave($__internal_d0a583f71a487fd192fb512964cf7d92e6892644c7f270521bca4283eccef0ad_prof);

        
        $__internal_70c15d53e2cab071fb385b5090e651f7def6d65ea891b6461052765bcf4007dd->leave($__internal_70c15d53e2cab071fb385b5090e651f7def6d65ea891b6461052765bcf4007dd_prof);

    }

    // line 5
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_bc3378ecfd3af1438777f77e853c800459731085590650a5aedd455254a4d688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3378ecfd3af1438777f77e853c800459731085590650a5aedd455254a4d688->enter($__internal_bc3378ecfd3af1438777f77e853c800459731085590650a5aedd455254a4d688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_e3155963face0a8f1f624fd00250f407c0c5eba824896c3753e78ba3992b34a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3155963face0a8f1f624fd00250f407c0c5eba824896c3753e78ba3992b34a8->enter($__internal_e3155963face0a8f1f624fd00250f407c0c5eba824896c3753e78ba3992b34a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

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
        
        $__internal_e3155963face0a8f1f624fd00250f407c0c5eba824896c3753e78ba3992b34a8->leave($__internal_e3155963face0a8f1f624fd00250f407c0c5eba824896c3753e78ba3992b34a8_prof);

        
        $__internal_bc3378ecfd3af1438777f77e853c800459731085590650a5aedd455254a4d688->leave($__internal_bc3378ecfd3af1438777f77e853c800459731085590650a5aedd455254a4d688_prof);

    }

    public function getTemplateName()
    {
        return "FGPetManagerBundle:default:addMascotte.html.twig";
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
{% endblock %}", "FGPetManagerBundle:default:addMascotte.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle/Resources/views/default/addMascotte.html.twig");
    }
}

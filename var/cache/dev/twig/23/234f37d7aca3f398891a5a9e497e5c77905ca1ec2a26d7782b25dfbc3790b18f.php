<?php

/* FGPetManagerBundle:Default:addMascotteType.html.twig */
class __TwigTemplate_28f462a2a9dcbb4728059e78733c832ffb0ed11aac11b194516980e772802306 extends Twig_Template
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
        $__internal_49d0669b7a36240f00bd153e67082b85a21aa96064bfbe3d0cc977ed0cd83a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d0669b7a36240f00bd153e67082b85a21aa96064bfbe3d0cc977ed0cd83a85->enter($__internal_49d0669b7a36240f00bd153e67082b85a21aa96064bfbe3d0cc977ed0cd83a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:addMascotteType.html.twig"));

        $__internal_642b8170761cb2854d866ee824450444c097465aa235030fa96bd72a6f5f6171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642b8170761cb2854d866ee824450444c097465aa235030fa96bd72a6f5f6171->enter($__internal_642b8170761cb2854d866ee824450444c097465aa235030fa96bd72a6f5f6171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:addMascotteType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d0669b7a36240f00bd153e67082b85a21aa96064bfbe3d0cc977ed0cd83a85->leave($__internal_49d0669b7a36240f00bd153e67082b85a21aa96064bfbe3d0cc977ed0cd83a85_prof);

        
        $__internal_642b8170761cb2854d866ee824450444c097465aa235030fa96bd72a6f5f6171->leave($__internal_642b8170761cb2854d866ee824450444c097465aa235030fa96bd72a6f5f6171_prof);

    }

    // line 2
    public function block_petmanager_title($context, array $blocks = array())
    {
        $__internal_05ac5b0c5788840bbe4bdbb94db881fdd6882f12a8a22ba52756b115c8f78dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ac5b0c5788840bbe4bdbb94db881fdd6882f12a8a22ba52756b115c8f78dbd->enter($__internal_05ac5b0c5788840bbe4bdbb94db881fdd6882f12a8a22ba52756b115c8f78dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        $__internal_f70ba653703c909533b5dc97c21ca7e2e37ed175c825e666efdccc18acf5e60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70ba653703c909533b5dc97c21ca7e2e37ed175c825e666efdccc18acf5e60e->enter($__internal_f70ba653703c909533b5dc97c21ca7e2e37ed175c825e666efdccc18acf5e60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        // line 3
        echo "\t\t<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
";
        
        $__internal_f70ba653703c909533b5dc97c21ca7e2e37ed175c825e666efdccc18acf5e60e->leave($__internal_f70ba653703c909533b5dc97c21ca7e2e37ed175c825e666efdccc18acf5e60e_prof);

        
        $__internal_05ac5b0c5788840bbe4bdbb94db881fdd6882f12a8a22ba52756b115c8f78dbd->leave($__internal_05ac5b0c5788840bbe4bdbb94db881fdd6882f12a8a22ba52756b115c8f78dbd_prof);

    }

    // line 5
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_ddc9aa1029a4ee9a194cb4dc54a2e7f89ed14e31776b2250c8bc7e0b79833db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc9aa1029a4ee9a194cb4dc54a2e7f89ed14e31776b2250c8bc7e0b79833db3->enter($__internal_ddc9aa1029a4ee9a194cb4dc54a2e7f89ed14e31776b2250c8bc7e0b79833db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_785a5c98f3be034a87c61f50ba820ed0f09741c72937ae98f80bf17b6bc73c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785a5c98f3be034a87c61f50ba820ed0f09741c72937ae98f80bf17b6bc73c3c->enter($__internal_785a5c98f3be034a87c61f50ba820ed0f09741c72937ae98f80bf17b6bc73c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

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
        
        $__internal_785a5c98f3be034a87c61f50ba820ed0f09741c72937ae98f80bf17b6bc73c3c->leave($__internal_785a5c98f3be034a87c61f50ba820ed0f09741c72937ae98f80bf17b6bc73c3c_prof);

        
        $__internal_ddc9aa1029a4ee9a194cb4dc54a2e7f89ed14e31776b2250c8bc7e0b79833db3->leave($__internal_ddc9aa1029a4ee9a194cb4dc54a2e7f89ed14e31776b2250c8bc7e0b79833db3_prof);

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
{% endblock %}", "FGPetManagerBundle:Default:addMascotteType.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle/Resources/views/Default/addMascotteType.html.twig");
    }
}

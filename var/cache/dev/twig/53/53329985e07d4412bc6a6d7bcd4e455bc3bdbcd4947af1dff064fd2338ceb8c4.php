<?php

/* @FGPetManager/Default/addMascotte.html.twig */
class __TwigTemplate_ea87469b926a20c58c7934fed8e8c5af5b5b0681704039fa82e16341d7d77d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGPetManagerBundle:Default:index.html.twig", "@FGPetManager/Default/addMascotte.html.twig", 1);
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
        $__internal_4732f957c85b9d53e9db1d76d275a7196821b13d42c307c3bc73718bc7cb9e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4732f957c85b9d53e9db1d76d275a7196821b13d42c307c3bc73718bc7cb9e7d->enter($__internal_4732f957c85b9d53e9db1d76d275a7196821b13d42c307c3bc73718bc7cb9e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGPetManager/Default/addMascotte.html.twig"));

        $__internal_a3fa68f14b8aa7ebfa740e8e898783c068e275b6bcf228cd5e5a3e5ed9ac6d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fa68f14b8aa7ebfa740e8e898783c068e275b6bcf228cd5e5a3e5ed9ac6d3f->enter($__internal_a3fa68f14b8aa7ebfa740e8e898783c068e275b6bcf228cd5e5a3e5ed9ac6d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGPetManager/Default/addMascotte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4732f957c85b9d53e9db1d76d275a7196821b13d42c307c3bc73718bc7cb9e7d->leave($__internal_4732f957c85b9d53e9db1d76d275a7196821b13d42c307c3bc73718bc7cb9e7d_prof);

        
        $__internal_a3fa68f14b8aa7ebfa740e8e898783c068e275b6bcf228cd5e5a3e5ed9ac6d3f->leave($__internal_a3fa68f14b8aa7ebfa740e8e898783c068e275b6bcf228cd5e5a3e5ed9ac6d3f_prof);

    }

    // line 2
    public function block_petmanager_title($context, array $blocks = array())
    {
        $__internal_0b426e8b45af031711419e6bf9578efcf7e2e630ad6c38398e2cb8ebbca37378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b426e8b45af031711419e6bf9578efcf7e2e630ad6c38398e2cb8ebbca37378->enter($__internal_0b426e8b45af031711419e6bf9578efcf7e2e630ad6c38398e2cb8ebbca37378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        $__internal_93817afb37f476f5bf89f52d0d8f7a9ebf73758e9804e223d116a34f3aa7f025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93817afb37f476f5bf89f52d0d8f7a9ebf73758e9804e223d116a34f3aa7f025->enter($__internal_93817afb37f476f5bf89f52d0d8f7a9ebf73758e9804e223d116a34f3aa7f025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        // line 3
        echo "\t\t<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
";
        
        $__internal_93817afb37f476f5bf89f52d0d8f7a9ebf73758e9804e223d116a34f3aa7f025->leave($__internal_93817afb37f476f5bf89f52d0d8f7a9ebf73758e9804e223d116a34f3aa7f025_prof);

        
        $__internal_0b426e8b45af031711419e6bf9578efcf7e2e630ad6c38398e2cb8ebbca37378->leave($__internal_0b426e8b45af031711419e6bf9578efcf7e2e630ad6c38398e2cb8ebbca37378_prof);

    }

    // line 5
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_68710d16dcf2a4f2f9e79d68be7aa34f02a0795714e60dfc2285af49bcc19abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68710d16dcf2a4f2f9e79d68be7aa34f02a0795714e60dfc2285af49bcc19abb->enter($__internal_68710d16dcf2a4f2f9e79d68be7aa34f02a0795714e60dfc2285af49bcc19abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_891187aefa16452c432aaeeab693be7783f5e2d2a0b63e58fad0363e1c230f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891187aefa16452c432aaeeab693be7783f5e2d2a0b63e58fad0363e1c230f64->enter($__internal_891187aefa16452c432aaeeab693be7783f5e2d2a0b63e58fad0363e1c230f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

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
        
        $__internal_891187aefa16452c432aaeeab693be7783f5e2d2a0b63e58fad0363e1c230f64->leave($__internal_891187aefa16452c432aaeeab693be7783f5e2d2a0b63e58fad0363e1c230f64_prof);

        
        $__internal_68710d16dcf2a4f2f9e79d68be7aa34f02a0795714e60dfc2285af49bcc19abb->leave($__internal_68710d16dcf2a4f2f9e79d68be7aa34f02a0795714e60dfc2285af49bcc19abb_prof);

    }

    public function getTemplateName()
    {
        return "@FGPetManager/Default/addMascotte.html.twig";
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
{% endblock %}", "@FGPetManager/Default/addMascotte.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle\\Resources\\views\\Default\\addMascotte.html.twig");
    }
}

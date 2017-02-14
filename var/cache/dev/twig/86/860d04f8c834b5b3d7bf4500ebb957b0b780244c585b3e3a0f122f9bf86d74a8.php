<?php

/* @FGPetManager/Default/view.html.twig */
class __TwigTemplate_717adb86f2e8b2a6158cb34bc119b04c812916d1f7a1ebc50dced8c8624659c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@FGPetManager/Default/view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'petmanager_body' => array($this, 'block_petmanager_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_686e0b3beff739d9a607e7363ee3cb7ddf067c986451dfa5cf6174127ba90881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686e0b3beff739d9a607e7363ee3cb7ddf067c986451dfa5cf6174127ba90881->enter($__internal_686e0b3beff739d9a607e7363ee3cb7ddf067c986451dfa5cf6174127ba90881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGPetManager/Default/view.html.twig"));

        $__internal_e5a01c68f1672d2a644983e9778a415b9fbed1ac1213ba52eb08869401a456dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a01c68f1672d2a644983e9778a415b9fbed1ac1213ba52eb08869401a456dc->enter($__internal_e5a01c68f1672d2a644983e9778a415b9fbed1ac1213ba52eb08869401a456dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGPetManager/Default/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686e0b3beff739d9a607e7363ee3cb7ddf067c986451dfa5cf6174127ba90881->leave($__internal_686e0b3beff739d9a607e7363ee3cb7ddf067c986451dfa5cf6174127ba90881_prof);

        
        $__internal_e5a01c68f1672d2a644983e9778a415b9fbed1ac1213ba52eb08869401a456dc->leave($__internal_e5a01c68f1672d2a644983e9778a415b9fbed1ac1213ba52eb08869401a456dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45fae7a2d228a6c2963015a6828f5fc3aaf00d77115662f4f05917e36be99556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fae7a2d228a6c2963015a6828f5fc3aaf00d77115662f4f05917e36be99556->enter($__internal_45fae7a2d228a6c2963015a6828f5fc3aaf00d77115662f4f05917e36be99556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6067043e25a3803706456d11079eb21e6115e0300d777bcce5b0747b3b6068d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6067043e25a3803706456d11079eb21e6115e0300d777bcce5b0747b3b6068d0->enter($__internal_6067043e25a3803706456d11079eb21e6115e0300d777bcce5b0747b3b6068d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mascotte - ";
        echo twig_escape_filter($this->env, ($context["basename"] ?? $this->getContext($context, "basename")), "html", null, true);
        
        $__internal_6067043e25a3803706456d11079eb21e6115e0300d777bcce5b0747b3b6068d0->leave($__internal_6067043e25a3803706456d11079eb21e6115e0300d777bcce5b0747b3b6068d0_prof);

        
        $__internal_45fae7a2d228a6c2963015a6828f5fc3aaf00d77115662f4f05917e36be99556->leave($__internal_45fae7a2d228a6c2963015a6828f5fc3aaf00d77115662f4f05917e36be99556_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_601a9d3fe8d5ee2f8289293adcb7c9181413538475fa71d2b6ed97dc0a0911aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601a9d3fe8d5ee2f8289293adcb7c9181413538475fa71d2b6ed97dc0a0911aa->enter($__internal_601a9d3fe8d5ee2f8289293adcb7c9181413538475fa71d2b6ed97dc0a0911aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c8baff2a77d5582e6b3bfa52f7fbddcff195e248dbcd7ddbc8fead7b015a5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8baff2a77d5582e6b3bfa52f7fbddcff195e248dbcd7ddbc8fead7b015a5ab->enter($__internal_5c8baff2a77d5582e6b3bfa52f7fbddcff195e248dbcd7ddbc8fead7b015a5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t\t<h1> ";
        echo twig_escape_filter($this->env, ($context["basename"] ?? $this->getContext($context, "basename")), "html", null, true);
        echo " </h1>
\t\t\t\t


\t\t\t";
        // line 10
        $this->displayBlock('petmanager_body', $context, $blocks);
        // line 13
        echo "
";
        
        $__internal_5c8baff2a77d5582e6b3bfa52f7fbddcff195e248dbcd7ddbc8fead7b015a5ab->leave($__internal_5c8baff2a77d5582e6b3bfa52f7fbddcff195e248dbcd7ddbc8fead7b015a5ab_prof);

        
        $__internal_601a9d3fe8d5ee2f8289293adcb7c9181413538475fa71d2b6ed97dc0a0911aa->leave($__internal_601a9d3fe8d5ee2f8289293adcb7c9181413538475fa71d2b6ed97dc0a0911aa_prof);

    }

    // line 10
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_3725069ef1ec3bced2963a3d81b5729686ac98aec02fa6a487770de6c08ca8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3725069ef1ec3bced2963a3d81b5729686ac98aec02fa6a487770de6c08ca8ed->enter($__internal_3725069ef1ec3bced2963a3d81b5729686ac98aec02fa6a487770de6c08ca8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_12008fd9cbc28514d079034827d42744938e8eb7fc9dd88dedbfeef5d6cb2727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12008fd9cbc28514d079034827d42744938e8eb7fc9dd88dedbfeef5d6cb2727->enter($__internal_12008fd9cbc28514d079034827d42744938e8eb7fc9dd88dedbfeef5d6cb2727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        // line 11
        echo "\t\t\t\t
\t\t\t";
        
        $__internal_12008fd9cbc28514d079034827d42744938e8eb7fc9dd88dedbfeef5d6cb2727->leave($__internal_12008fd9cbc28514d079034827d42744938e8eb7fc9dd88dedbfeef5d6cb2727_prof);

        
        $__internal_3725069ef1ec3bced2963a3d81b5729686ac98aec02fa6a487770de6c08ca8ed->leave($__internal_3725069ef1ec3bced2963a3d81b5729686ac98aec02fa6a487770de6c08ca8ed_prof);

    }

    public function getTemplateName()
    {
        return "@FGPetManager/Default/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 11,  91 => 10,  80 => 13,  78 => 10,  70 => 6,  61 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}Mascotte - {{basename}}{% endblock %}

{% block body %}
\t\t<h1> {{basename}} </h1>
\t\t\t\t


\t\t\t{% block petmanager_body %}
\t\t\t\t
\t\t\t{% endblock %}

{% endblock %}", "@FGPetManager/Default/view.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle\\Resources\\views\\Default\\view.html.twig");
    }
}

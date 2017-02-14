<?php

/* FGPetManagerBundle:Default:view.html.twig */
class __TwigTemplate_614b6769300bc2bf1f755fed5c7f4d667aa3e3c2c4c1611c0f7cb9e9b10977e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FGPetManagerBundle:Default:view.html.twig", 1);
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
        $__internal_c15655be78e3a461770e9f612153a2318b1693c89e3ca6042f4a4688a5303251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15655be78e3a461770e9f612153a2318b1693c89e3ca6042f4a4688a5303251->enter($__internal_c15655be78e3a461770e9f612153a2318b1693c89e3ca6042f4a4688a5303251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:view.html.twig"));

        $__internal_fac28c6a76090b971c61d2e76937b153462c1996c349916e0f154a0c5a1a4de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac28c6a76090b971c61d2e76937b153462c1996c349916e0f154a0c5a1a4de4->enter($__internal_fac28c6a76090b971c61d2e76937b153462c1996c349916e0f154a0c5a1a4de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15655be78e3a461770e9f612153a2318b1693c89e3ca6042f4a4688a5303251->leave($__internal_c15655be78e3a461770e9f612153a2318b1693c89e3ca6042f4a4688a5303251_prof);

        
        $__internal_fac28c6a76090b971c61d2e76937b153462c1996c349916e0f154a0c5a1a4de4->leave($__internal_fac28c6a76090b971c61d2e76937b153462c1996c349916e0f154a0c5a1a4de4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcb3f9ad047fe1f02f69f7228450e57c5784dd081a5f645e8d87c73095aab34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb3f9ad047fe1f02f69f7228450e57c5784dd081a5f645e8d87c73095aab34c->enter($__internal_dcb3f9ad047fe1f02f69f7228450e57c5784dd081a5f645e8d87c73095aab34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58b6b90aafa033fc96db270ab42e0ae16e194197822ecf9567fd9434bf71438b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b6b90aafa033fc96db270ab42e0ae16e194197822ecf9567fd9434bf71438b->enter($__internal_58b6b90aafa033fc96db270ab42e0ae16e194197822ecf9567fd9434bf71438b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mascotte - ";
        echo twig_escape_filter($this->env, ($context["basename"] ?? $this->getContext($context, "basename")), "html", null, true);
        
        $__internal_58b6b90aafa033fc96db270ab42e0ae16e194197822ecf9567fd9434bf71438b->leave($__internal_58b6b90aafa033fc96db270ab42e0ae16e194197822ecf9567fd9434bf71438b_prof);

        
        $__internal_dcb3f9ad047fe1f02f69f7228450e57c5784dd081a5f645e8d87c73095aab34c->leave($__internal_dcb3f9ad047fe1f02f69f7228450e57c5784dd081a5f645e8d87c73095aab34c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e5094aabc01a56f64e0f6e421508d9ad49caf458d53c50c4c605df1d7cccda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e5094aabc01a56f64e0f6e421508d9ad49caf458d53c50c4c605df1d7cccda->enter($__internal_67e5094aabc01a56f64e0f6e421508d9ad49caf458d53c50c4c605df1d7cccda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccb269328c721835dc3ad07214a589762d62b851a161f282985470be23e2cae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb269328c721835dc3ad07214a589762d62b851a161f282985470be23e2cae5->enter($__internal_ccb269328c721835dc3ad07214a589762d62b851a161f282985470be23e2cae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccb269328c721835dc3ad07214a589762d62b851a161f282985470be23e2cae5->leave($__internal_ccb269328c721835dc3ad07214a589762d62b851a161f282985470be23e2cae5_prof);

        
        $__internal_67e5094aabc01a56f64e0f6e421508d9ad49caf458d53c50c4c605df1d7cccda->leave($__internal_67e5094aabc01a56f64e0f6e421508d9ad49caf458d53c50c4c605df1d7cccda_prof);

    }

    // line 10
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_ee00e43d05d646ecf29dfbfb338dfe508fcb9a4209ef387bfe57eab413c54d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee00e43d05d646ecf29dfbfb338dfe508fcb9a4209ef387bfe57eab413c54d00->enter($__internal_ee00e43d05d646ecf29dfbfb338dfe508fcb9a4209ef387bfe57eab413c54d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_3fb9e2cb022235406a09eafb0a7ff5744e86840897ce881269ed159e8b306988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb9e2cb022235406a09eafb0a7ff5744e86840897ce881269ed159e8b306988->enter($__internal_3fb9e2cb022235406a09eafb0a7ff5744e86840897ce881269ed159e8b306988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        // line 11
        echo "\t\t\t\t
\t\t\t";
        
        $__internal_3fb9e2cb022235406a09eafb0a7ff5744e86840897ce881269ed159e8b306988->leave($__internal_3fb9e2cb022235406a09eafb0a7ff5744e86840897ce881269ed159e8b306988_prof);

        
        $__internal_ee00e43d05d646ecf29dfbfb338dfe508fcb9a4209ef387bfe57eab413c54d00->leave($__internal_ee00e43d05d646ecf29dfbfb338dfe508fcb9a4209ef387bfe57eab413c54d00_prof);

    }

    public function getTemplateName()
    {
        return "FGPetManagerBundle:Default:view.html.twig";
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

{% endblock %}", "FGPetManagerBundle:Default:view.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle/Resources/views/Default/view.html.twig");
    }
}

<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_821fe71f6b611b36aeb9f4dc4bf6e1b91656da10c9e3660b6a02316e0bcfca30 extends Twig_Template
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
        $__internal_f086d4d398e48a7e5bcfaa7fde2bc7a72ef3552a60cd4f34e6e038a439c7b18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f086d4d398e48a7e5bcfaa7fde2bc7a72ef3552a60cd4f34e6e038a439c7b18e->enter($__internal_f086d4d398e48a7e5bcfaa7fde2bc7a72ef3552a60cd4f34e6e038a439c7b18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ffbb7e7cb0e6e8a6e67bdf39b47650ebed3aec03eefd677bc7d74c5ba1fcd0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbb7e7cb0e6e8a6e67bdf39b47650ebed3aec03eefd677bc7d74c5ba1fcd0b9->enter($__internal_ffbb7e7cb0e6e8a6e67bdf39b47650ebed3aec03eefd677bc7d74c5ba1fcd0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f086d4d398e48a7e5bcfaa7fde2bc7a72ef3552a60cd4f34e6e038a439c7b18e->leave($__internal_f086d4d398e48a7e5bcfaa7fde2bc7a72ef3552a60cd4f34e6e038a439c7b18e_prof);

        
        $__internal_ffbb7e7cb0e6e8a6e67bdf39b47650ebed3aec03eefd677bc7d74c5ba1fcd0b9->leave($__internal_ffbb7e7cb0e6e8a6e67bdf39b47650ebed3aec03eefd677bc7d74c5ba1fcd0b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

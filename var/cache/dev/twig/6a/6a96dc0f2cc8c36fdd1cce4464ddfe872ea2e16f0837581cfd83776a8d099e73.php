<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_133c100e45592e23d99a4c315bb0d2b7361fbfb09a8c923bdf732d987973e451 extends Twig_Template
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
        $__internal_89e896c31e8274d57408e4544dfb66196d3711a6cdf8e54ed5637a12aabd4859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e896c31e8274d57408e4544dfb66196d3711a6cdf8e54ed5637a12aabd4859->enter($__internal_89e896c31e8274d57408e4544dfb66196d3711a6cdf8e54ed5637a12aabd4859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_212193743e1a6d5400263de4dae39e762138e07b50a0bc1ea037f6f2122e4694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212193743e1a6d5400263de4dae39e762138e07b50a0bc1ea037f6f2122e4694->enter($__internal_212193743e1a6d5400263de4dae39e762138e07b50a0bc1ea037f6f2122e4694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_89e896c31e8274d57408e4544dfb66196d3711a6cdf8e54ed5637a12aabd4859->leave($__internal_89e896c31e8274d57408e4544dfb66196d3711a6cdf8e54ed5637a12aabd4859_prof);

        
        $__internal_212193743e1a6d5400263de4dae39e762138e07b50a0bc1ea037f6f2122e4694->leave($__internal_212193743e1a6d5400263de4dae39e762138e07b50a0bc1ea037f6f2122e4694_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}

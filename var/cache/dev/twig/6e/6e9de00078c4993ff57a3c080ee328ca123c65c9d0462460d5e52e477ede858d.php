<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c6b29fdb34b2ae741a02c62ef09a0660ef07dc2dc26ca52bccb62100c7d7df5b extends Twig_Template
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
        $__internal_35b7060e8cc1930db4fdfc63116f39ac94524ec886e4f158cefd616d6489a6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b7060e8cc1930db4fdfc63116f39ac94524ec886e4f158cefd616d6489a6f6->enter($__internal_35b7060e8cc1930db4fdfc63116f39ac94524ec886e4f158cefd616d6489a6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1ef1859ba9521b5b5857d3c6cf614aa812939a823edb0168943b67d311a65486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef1859ba9521b5b5857d3c6cf614aa812939a823edb0168943b67d311a65486->enter($__internal_1ef1859ba9521b5b5857d3c6cf614aa812939a823edb0168943b67d311a65486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_35b7060e8cc1930db4fdfc63116f39ac94524ec886e4f158cefd616d6489a6f6->leave($__internal_35b7060e8cc1930db4fdfc63116f39ac94524ec886e4f158cefd616d6489a6f6_prof);

        
        $__internal_1ef1859ba9521b5b5857d3c6cf614aa812939a823edb0168943b67d311a65486->leave($__internal_1ef1859ba9521b5b5857d3c6cf614aa812939a823edb0168943b67d311a65486_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}

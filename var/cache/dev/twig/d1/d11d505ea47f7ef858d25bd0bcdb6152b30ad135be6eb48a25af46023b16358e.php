<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dece533eae3a867b80852feeb852d1e792806433d3124856faabc9498796bf79 extends Twig_Template
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
        $__internal_64171d40a7d8f2be9749baa54abd49382139aae2bc60fc942e7a79abbd3afb45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64171d40a7d8f2be9749baa54abd49382139aae2bc60fc942e7a79abbd3afb45->enter($__internal_64171d40a7d8f2be9749baa54abd49382139aae2bc60fc942e7a79abbd3afb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8fdb0a74bfb6fdab4acd1098e7f02eaec446ff6e75e9e536b0d6a28005995597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdb0a74bfb6fdab4acd1098e7f02eaec446ff6e75e9e536b0d6a28005995597->enter($__internal_8fdb0a74bfb6fdab4acd1098e7f02eaec446ff6e75e9e536b0d6a28005995597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_64171d40a7d8f2be9749baa54abd49382139aae2bc60fc942e7a79abbd3afb45->leave($__internal_64171d40a7d8f2be9749baa54abd49382139aae2bc60fc942e7a79abbd3afb45_prof);

        
        $__internal_8fdb0a74bfb6fdab4acd1098e7f02eaec446ff6e75e9e536b0d6a28005995597->leave($__internal_8fdb0a74bfb6fdab4acd1098e7f02eaec446ff6e75e9e536b0d6a28005995597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

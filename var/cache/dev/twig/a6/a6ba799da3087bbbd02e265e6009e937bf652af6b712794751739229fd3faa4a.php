<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1ed83546a1edf4d3ec876e659bb94ef614f3c83aba763ca9e506bac27e40f94 extends Twig_Template
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
        $__internal_8431482e15dac03371b4dd4143a4046ed9165e38fc659b7a1b8341fb37a52661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8431482e15dac03371b4dd4143a4046ed9165e38fc659b7a1b8341fb37a52661->enter($__internal_8431482e15dac03371b4dd4143a4046ed9165e38fc659b7a1b8341fb37a52661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_790aef3f9bc5092b17057c08e0d1e6e17c48c2724a4d153a03224a94fb093c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790aef3f9bc5092b17057c08e0d1e6e17c48c2724a4d153a03224a94fb093c4b->enter($__internal_790aef3f9bc5092b17057c08e0d1e6e17c48c2724a4d153a03224a94fb093c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8431482e15dac03371b4dd4143a4046ed9165e38fc659b7a1b8341fb37a52661->leave($__internal_8431482e15dac03371b4dd4143a4046ed9165e38fc659b7a1b8341fb37a52661_prof);

        
        $__internal_790aef3f9bc5092b17057c08e0d1e6e17c48c2724a4d153a03224a94fb093c4b->leave($__internal_790aef3f9bc5092b17057c08e0d1e6e17c48c2724a4d153a03224a94fb093c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_24079ab91f6fc05b0786c44f0732f4460ad51d3629e8245f249e9cd450444fb4 extends Twig_Template
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
        $__internal_469c889dd939acca99eeabd755d1bb3f8fffde0138c3dd2eff07e34f5c199825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469c889dd939acca99eeabd755d1bb3f8fffde0138c3dd2eff07e34f5c199825->enter($__internal_469c889dd939acca99eeabd755d1bb3f8fffde0138c3dd2eff07e34f5c199825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1f71688aa93b571631a9e65d144142fbac626c4e36d16b090ebab7cc63ba216b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f71688aa93b571631a9e65d144142fbac626c4e36d16b090ebab7cc63ba216b->enter($__internal_1f71688aa93b571631a9e65d144142fbac626c4e36d16b090ebab7cc63ba216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_469c889dd939acca99eeabd755d1bb3f8fffde0138c3dd2eff07e34f5c199825->leave($__internal_469c889dd939acca99eeabd755d1bb3f8fffde0138c3dd2eff07e34f5c199825_prof);

        
        $__internal_1f71688aa93b571631a9e65d144142fbac626c4e36d16b090ebab7cc63ba216b->leave($__internal_1f71688aa93b571631a9e65d144142fbac626c4e36d16b090ebab7cc63ba216b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

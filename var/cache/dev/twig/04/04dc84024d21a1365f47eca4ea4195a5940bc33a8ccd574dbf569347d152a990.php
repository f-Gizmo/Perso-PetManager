<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0468f05df4181cc993fdbbb1cec4990b280077f600dc89689db138ed15838f93 extends Twig_Template
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
        $__internal_5aee0dd29e711dc90b692e8c40e18e8c9e78a6cdf1e311535e9eb7f28b70e58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aee0dd29e711dc90b692e8c40e18e8c9e78a6cdf1e311535e9eb7f28b70e58a->enter($__internal_5aee0dd29e711dc90b692e8c40e18e8c9e78a6cdf1e311535e9eb7f28b70e58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7ae666c45c8cb5db04cbdd0d8c9ff9fd891d6465bc8547acb766586c2a79032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae666c45c8cb5db04cbdd0d8c9ff9fd891d6465bc8547acb766586c2a79032f->enter($__internal_7ae666c45c8cb5db04cbdd0d8c9ff9fd891d6465bc8547acb766586c2a79032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5aee0dd29e711dc90b692e8c40e18e8c9e78a6cdf1e311535e9eb7f28b70e58a->leave($__internal_5aee0dd29e711dc90b692e8c40e18e8c9e78a6cdf1e311535e9eb7f28b70e58a_prof);

        
        $__internal_7ae666c45c8cb5db04cbdd0d8c9ff9fd891d6465bc8547acb766586c2a79032f->leave($__internal_7ae666c45c8cb5db04cbdd0d8c9ff9fd891d6465bc8547acb766586c2a79032f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

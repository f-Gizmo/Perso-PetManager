<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_249942dc1bd6a1fa3960de53da2e6bf496c8faf802bdcd909d0f5790bcd286db extends Twig_Template
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
        $__internal_7f94acff66d53e0a2ea08d5e3dcd584c2bd19b758ac45e49f9fd973612f7436b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f94acff66d53e0a2ea08d5e3dcd584c2bd19b758ac45e49f9fd973612f7436b->enter($__internal_7f94acff66d53e0a2ea08d5e3dcd584c2bd19b758ac45e49f9fd973612f7436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8032630bec59db587a944c2e33ffcaf3862c9b3ac6152cb5407cbe3a2d518b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8032630bec59db587a944c2e33ffcaf3862c9b3ac6152cb5407cbe3a2d518b63->enter($__internal_8032630bec59db587a944c2e33ffcaf3862c9b3ac6152cb5407cbe3a2d518b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7f94acff66d53e0a2ea08d5e3dcd584c2bd19b758ac45e49f9fd973612f7436b->leave($__internal_7f94acff66d53e0a2ea08d5e3dcd584c2bd19b758ac45e49f9fd973612f7436b_prof);

        
        $__internal_8032630bec59db587a944c2e33ffcaf3862c9b3ac6152cb5407cbe3a2d518b63->leave($__internal_8032630bec59db587a944c2e33ffcaf3862c9b3ac6152cb5407cbe3a2d518b63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

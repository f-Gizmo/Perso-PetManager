<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd6bde29c12e4a2fad6dc1d6352473d5a801a0fc30fd61fb769919c8608a3c95 extends Twig_Template
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
        $__internal_283d31d0edbc1d819a98ceed7040235979d27c9b76a453f21d473563f34d3723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283d31d0edbc1d819a98ceed7040235979d27c9b76a453f21d473563f34d3723->enter($__internal_283d31d0edbc1d819a98ceed7040235979d27c9b76a453f21d473563f34d3723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9cbce3c712105433d22cf29176219a29db951e629a60b3dfa6af2b4eb2c908ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbce3c712105433d22cf29176219a29db951e629a60b3dfa6af2b4eb2c908ec->enter($__internal_9cbce3c712105433d22cf29176219a29db951e629a60b3dfa6af2b4eb2c908ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_283d31d0edbc1d819a98ceed7040235979d27c9b76a453f21d473563f34d3723->leave($__internal_283d31d0edbc1d819a98ceed7040235979d27c9b76a453f21d473563f34d3723_prof);

        
        $__internal_9cbce3c712105433d22cf29176219a29db951e629a60b3dfa6af2b4eb2c908ec->leave($__internal_9cbce3c712105433d22cf29176219a29db951e629a60b3dfa6af2b4eb2c908ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

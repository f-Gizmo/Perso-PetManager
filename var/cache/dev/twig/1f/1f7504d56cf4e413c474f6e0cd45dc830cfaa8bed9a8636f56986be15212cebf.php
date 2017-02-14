<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_79e42e6a4309996e822064f3b5df71e72a20d83c3e2b90f2e6c581430e7f3900 extends Twig_Template
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
        $__internal_f7f813251a66292ad3a00d5aa4e33fe697b03a1bb30fa12ac2ca123ac9da5758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f813251a66292ad3a00d5aa4e33fe697b03a1bb30fa12ac2ca123ac9da5758->enter($__internal_f7f813251a66292ad3a00d5aa4e33fe697b03a1bb30fa12ac2ca123ac9da5758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e5e75437d8fdaf9a02e2a2454c73274cd2a6d83319a484955594c14c915e4d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e75437d8fdaf9a02e2a2454c73274cd2a6d83319a484955594c14c915e4d2b->enter($__internal_e5e75437d8fdaf9a02e2a2454c73274cd2a6d83319a484955594c14c915e4d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f7f813251a66292ad3a00d5aa4e33fe697b03a1bb30fa12ac2ca123ac9da5758->leave($__internal_f7f813251a66292ad3a00d5aa4e33fe697b03a1bb30fa12ac2ca123ac9da5758_prof);

        
        $__internal_e5e75437d8fdaf9a02e2a2454c73274cd2a6d83319a484955594c14c915e4d2b->leave($__internal_e5e75437d8fdaf9a02e2a2454c73274cd2a6d83319a484955594c14c915e4d2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

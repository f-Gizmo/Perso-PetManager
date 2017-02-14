<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b581664d64389c0756095ac766011c0f162e181e80e7e37a7984e965b4d5132b extends Twig_Template
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
        $__internal_7952d6bced76c5f86c91f00c3d17feb7bb203237990cfd8f5948d7df6d8c9755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7952d6bced76c5f86c91f00c3d17feb7bb203237990cfd8f5948d7df6d8c9755->enter($__internal_7952d6bced76c5f86c91f00c3d17feb7bb203237990cfd8f5948d7df6d8c9755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_193f1a2e496c802fa99d48b2cb5ce13590a44834597a8c402da3c4da34672183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193f1a2e496c802fa99d48b2cb5ce13590a44834597a8c402da3c4da34672183->enter($__internal_193f1a2e496c802fa99d48b2cb5ce13590a44834597a8c402da3c4da34672183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7952d6bced76c5f86c91f00c3d17feb7bb203237990cfd8f5948d7df6d8c9755->leave($__internal_7952d6bced76c5f86c91f00c3d17feb7bb203237990cfd8f5948d7df6d8c9755_prof);

        
        $__internal_193f1a2e496c802fa99d48b2cb5ce13590a44834597a8c402da3c4da34672183->leave($__internal_193f1a2e496c802fa99d48b2cb5ce13590a44834597a8c402da3c4da34672183_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}

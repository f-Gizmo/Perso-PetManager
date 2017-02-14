<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_54a401c09d8ea77c280ac987856b5d9d29383e87b33a18e4aed09b720cf07d61 extends Twig_Template
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
        $__internal_e529e8aa6856210853c68bd06e906ad28cb2397c76d9eb1c0b4e44ce60a495cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e529e8aa6856210853c68bd06e906ad28cb2397c76d9eb1c0b4e44ce60a495cf->enter($__internal_e529e8aa6856210853c68bd06e906ad28cb2397c76d9eb1c0b4e44ce60a495cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5fe4971c23a9567e991845beb5881fd35888e1e32c699f63092cad001465f602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe4971c23a9567e991845beb5881fd35888e1e32c699f63092cad001465f602->enter($__internal_5fe4971c23a9567e991845beb5881fd35888e1e32c699f63092cad001465f602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e529e8aa6856210853c68bd06e906ad28cb2397c76d9eb1c0b4e44ce60a495cf->leave($__internal_e529e8aa6856210853c68bd06e906ad28cb2397c76d9eb1c0b4e44ce60a495cf_prof);

        
        $__internal_5fe4971c23a9567e991845beb5881fd35888e1e32c699f63092cad001465f602->leave($__internal_5fe4971c23a9567e991845beb5881fd35888e1e32c699f63092cad001465f602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

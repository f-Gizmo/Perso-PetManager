<?php

/* FGPetManagerBundle:Default:index.html.twig */
class __TwigTemplate_dbbcb3c84317b2664bbbc81366f60144ed0366e1da6d51b2227dd85250152c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FGPetManagerBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'petmanager_title' => array($this, 'block_petmanager_title'),
            'petmanager_body' => array($this, 'block_petmanager_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eac653d59bcbaae25b70bd44dd50f54fe48a4a3bf217e4d95b4cc8093be490e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eac653d59bcbaae25b70bd44dd50f54fe48a4a3bf217e4d95b4cc8093be490e->enter($__internal_5eac653d59bcbaae25b70bd44dd50f54fe48a4a3bf217e4d95b4cc8093be490e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:index.html.twig"));

        $__internal_676174a02340ca631bb336c0d7bd73b15341c2d445100cbbf849ed9366a77b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676174a02340ca631bb336c0d7bd73b15341c2d445100cbbf849ed9366a77b58->enter($__internal_676174a02340ca631bb336c0d7bd73b15341c2d445100cbbf849ed9366a77b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGPetManagerBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eac653d59bcbaae25b70bd44dd50f54fe48a4a3bf217e4d95b4cc8093be490e->leave($__internal_5eac653d59bcbaae25b70bd44dd50f54fe48a4a3bf217e4d95b4cc8093be490e_prof);

        
        $__internal_676174a02340ca631bb336c0d7bd73b15341c2d445100cbbf849ed9366a77b58->leave($__internal_676174a02340ca631bb336c0d7bd73b15341c2d445100cbbf849ed9366a77b58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57f46b5e358b49da624589a9e69793d287954e4389054be88b98101e92e8429f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f46b5e358b49da624589a9e69793d287954e4389054be88b98101e92e8429f->enter($__internal_57f46b5e358b49da624589a9e69793d287954e4389054be88b98101e92e8429f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93835c8dff67b3f6fe4d22fdd3aac44211d6c5d4fa00b9c16d3cbf2bd31b877b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93835c8dff67b3f6fe4d22fdd3aac44211d6c5d4fa00b9c16d3cbf2bd31b877b->enter($__internal_93835c8dff67b3f6fe4d22fdd3aac44211d6c5d4fa00b9c16d3cbf2bd31b877b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index des mascottes";
        
        $__internal_93835c8dff67b3f6fe4d22fdd3aac44211d6c5d4fa00b9c16d3cbf2bd31b877b->leave($__internal_93835c8dff67b3f6fe4d22fdd3aac44211d6c5d4fa00b9c16d3cbf2bd31b877b_prof);

        
        $__internal_57f46b5e358b49da624589a9e69793d287954e4389054be88b98101e92e8429f->leave($__internal_57f46b5e358b49da624589a9e69793d287954e4389054be88b98101e92e8429f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cd3f2da8968e9d01e7f3c55dac9f0926783ee1c03fb75b3e9ef82066759628c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd3f2da8968e9d01e7f3c55dac9f0926783ee1c03fb75b3e9ef82066759628c->enter($__internal_7cd3f2da8968e9d01e7f3c55dac9f0926783ee1c03fb75b3e9ef82066759628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_295e19c5662c601e23a05b2d7b64451c2ddd5742b1b7505ce522784dc46a4cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295e19c5662c601e23a05b2d7b64451c2ddd5742b1b7505ce522784dc46a4cff->enter($__internal_295e19c5662c601e23a05b2d7b64451c2ddd5742b1b7505ce522784dc46a4cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t\t";
        $this->displayBlock('petmanager_title', $context, $blocks);
        // line 7
        echo "\t\t\t";
        $this->displayBlock('petmanager_body', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_295e19c5662c601e23a05b2d7b64451c2ddd5742b1b7505ce522784dc46a4cff->leave($__internal_295e19c5662c601e23a05b2d7b64451c2ddd5742b1b7505ce522784dc46a4cff_prof);

        
        $__internal_7cd3f2da8968e9d01e7f3c55dac9f0926783ee1c03fb75b3e9ef82066759628c->leave($__internal_7cd3f2da8968e9d01e7f3c55dac9f0926783ee1c03fb75b3e9ef82066759628c_prof);

    }

    // line 6
    public function block_petmanager_title($context, array $blocks = array())
    {
        $__internal_729259537c783d09ac972e4e24b8d6f9d7dd1aa641c4258f8962e7184960ede0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729259537c783d09ac972e4e24b8d6f9d7dd1aa641c4258f8962e7184960ede0->enter($__internal_729259537c783d09ac972e4e24b8d6f9d7dd1aa641c4258f8962e7184960ede0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        $__internal_262419049493aa22b9a56b622bf84a4d60ee9ecb4c485753a9cabe1b411fa219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262419049493aa22b9a56b622bf84a4d60ee9ecb4c485753a9cabe1b411fa219->enter($__internal_262419049493aa22b9a56b622bf84a4d60ee9ecb4c485753a9cabe1b411fa219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_title"));

        echo "<h1> Index des mascottes </h1>";
        
        $__internal_262419049493aa22b9a56b622bf84a4d60ee9ecb4c485753a9cabe1b411fa219->leave($__internal_262419049493aa22b9a56b622bf84a4d60ee9ecb4c485753a9cabe1b411fa219_prof);

        
        $__internal_729259537c783d09ac972e4e24b8d6f9d7dd1aa641c4258f8962e7184960ede0->leave($__internal_729259537c783d09ac972e4e24b8d6f9d7dd1aa641c4258f8962e7184960ede0_prof);

    }

    // line 7
    public function block_petmanager_body($context, array $blocks = array())
    {
        $__internal_a8d2339527e4edc9cace4480bed4ac38e00424bcf92762887f8d3ff25335c4da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d2339527e4edc9cace4480bed4ac38e00424bcf92762887f8d3ff25335c4da->enter($__internal_a8d2339527e4edc9cace4480bed4ac38e00424bcf92762887f8d3ff25335c4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        $__internal_dd9cf9075ff233345f76d72965bdf34012881c2aebe597ea39448a52ecd9abb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9cf9075ff233345f76d72965bdf34012881c2aebe597ea39448a52ecd9abb9->enter($__internal_dd9cf9075ff233345f76d72965bdf34012881c2aebe597ea39448a52ecd9abb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "petmanager_body"));

        // line 8
        echo "\t\t\t\t
\t\t\t";
        
        $__internal_dd9cf9075ff233345f76d72965bdf34012881c2aebe597ea39448a52ecd9abb9->leave($__internal_dd9cf9075ff233345f76d72965bdf34012881c2aebe597ea39448a52ecd9abb9_prof);

        
        $__internal_a8d2339527e4edc9cace4480bed4ac38e00424bcf92762887f8d3ff25335c4da->leave($__internal_a8d2339527e4edc9cace4480bed4ac38e00424bcf92762887f8d3ff25335c4da_prof);

    }

    public function getTemplateName()
    {
        return "FGPetManagerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 8,  105 => 7,  87 => 6,  76 => 10,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}Index des mascottes{% endblock %}

{% block body %}
\t\t{% block petmanager_title %}<h1> Index des mascottes </h1>{% endblock %}
\t\t\t{% block petmanager_body %}
\t\t\t\t
\t\t\t{% endblock %}

{% endblock %}", "FGPetManagerBundle:Default:index.html.twig", "D:\\wamp\\www\\petManager\\src\\FG\\PetManagerBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

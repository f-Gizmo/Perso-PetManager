<?php

/* ::layout.html.twig */
class __TwigTemplate_45b14e86faff2b0e7142e0aa1edf9ffd81bdf31a10db7ce2fe13b2666ca90193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7f8a1baf9839ca077bd1cb4d8df614f49c0d476496499499d2108a9dbe5f35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f8a1baf9839ca077bd1cb4d8df614f49c0d476496499499d2108a9dbe5f35d->enter($__internal_c7f8a1baf9839ca077bd1cb4d8df614f49c0d476496499499d2108a9dbe5f35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_b4093edf48d842f9cce88415ac9d9fce79899491001703efc2c0309360ace6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4093edf48d842f9cce88415ac9d9fce79899491001703efc2c0309360ace6b0->enter($__internal_b4093edf48d842f9cce88415ac9d9fce79899491001703efc2c0309360ace6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Gestionnaire de Mascotte</h1>
      <p>
        Ce projet est propulsé par Symfony.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Retour au cour »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fg_pet_manager_homepage");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fg_pet_manager_add");
        echo "\">Ajouter une Mascotte</a></li>
        </ul>

       
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>Gizmo  ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </footer>
  </div>

  ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>";
        
        $__internal_c7f8a1baf9839ca077bd1cb4d8df614f49c0d476496499499d2108a9dbe5f35d->leave($__internal_c7f8a1baf9839ca077bd1cb4d8df614f49c0d476496499499d2108a9dbe5f35d_prof);

        
        $__internal_b4093edf48d842f9cce88415ac9d9fce79899491001703efc2c0309360ace6b0->leave($__internal_b4093edf48d842f9cce88415ac9d9fce79899491001703efc2c0309360ace6b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab9f0532ff0ace48b0bc61d8f81df0137553abfbc28896c7c851e633dee341ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9f0532ff0ace48b0bc61d8f81df0137553abfbc28896c7c851e633dee341ef->enter($__internal_ab9f0532ff0ace48b0bc61d8f81df0137553abfbc28896c7c851e633dee341ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab36831bdeceac0464d8a46727ae37cae100e0c02df0d035ada6606454143f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab36831bdeceac0464d8a46727ae37cae100e0c02df0d035ada6606454143f4e->enter($__internal_ab36831bdeceac0464d8a46727ae37cae100e0c02df0d035ada6606454143f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestionnaire de Mascotte";
        
        $__internal_ab36831bdeceac0464d8a46727ae37cae100e0c02df0d035ada6606454143f4e->leave($__internal_ab36831bdeceac0464d8a46727ae37cae100e0c02df0d035ada6606454143f4e_prof);

        
        $__internal_ab9f0532ff0ace48b0bc61d8f81df0137553abfbc28896c7c851e633dee341ef->leave($__internal_ab9f0532ff0ace48b0bc61d8f81df0137553abfbc28896c7c851e633dee341ef_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ec266282fc43487aa0180f520b5fc1bc3bad7e1728973ef29a2df0c7be859f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec266282fc43487aa0180f520b5fc1bc3bad7e1728973ef29a2df0c7be859f8->enter($__internal_9ec266282fc43487aa0180f520b5fc1bc3bad7e1728973ef29a2df0c7be859f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_27a0dbaf5bb0c5e08e8facc451635401c8a8e0a52cb34055c60e4dd6d713e0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a0dbaf5bb0c5e08e8facc451635401c8a8e0a52cb34055c60e4dd6d713e0ef->enter($__internal_27a0dbaf5bb0c5e08e8facc451635401c8a8e0a52cb34055c60e4dd6d713e0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_27a0dbaf5bb0c5e08e8facc451635401c8a8e0a52cb34055c60e4dd6d713e0ef->leave($__internal_27a0dbaf5bb0c5e08e8facc451635401c8a8e0a52cb34055c60e4dd6d713e0ef_prof);

        
        $__internal_9ec266282fc43487aa0180f520b5fc1bc3bad7e1728973ef29a2df0c7be859f8->leave($__internal_9ec266282fc43487aa0180f520b5fc1bc3bad7e1728973ef29a2df0c7be859f8_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_eba50fbd9457d5549a5a99c85075aa45f5cffdb1183c158866c552bd75c3d097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba50fbd9457d5549a5a99c85075aa45f5cffdb1183c158866c552bd75c3d097->enter($__internal_eba50fbd9457d5549a5a99c85075aa45f5cffdb1183c158866c552bd75c3d097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cc9b5ea720efe53efe3b4c9e11b3cb06a40a9bfb7afebd76786ff030c429223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc9b5ea720efe53efe3b4c9e11b3cb06a40a9bfb7afebd76786ff030c429223->enter($__internal_7cc9b5ea720efe53efe3b4c9e11b3cb06a40a9bfb7afebd76786ff030c429223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "        ";
        
        $__internal_7cc9b5ea720efe53efe3b4c9e11b3cb06a40a9bfb7afebd76786ff030c429223->leave($__internal_7cc9b5ea720efe53efe3b4c9e11b3cb06a40a9bfb7afebd76786ff030c429223_prof);

        
        $__internal_eba50fbd9457d5549a5a99c85075aa45f5cffdb1183c158866c552bd75c3d097->leave($__internal_eba50fbd9457d5549a5a99c85075aa45f5cffdb1183c158866c552bd75c3d097_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_364b1a0e9bab21b4c5d18aaaffa14919b2bdc5b3a10d9d9bb83c6d83881b101e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364b1a0e9bab21b4c5d18aaaffa14919b2bdc5b3a10d9d9bb83c6d83881b101e->enter($__internal_364b1a0e9bab21b4c5d18aaaffa14919b2bdc5b3a10d9d9bb83c6d83881b101e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_11df30a6ce7d18e00a2427f4ac01c766aefa929d075314ed03cd0c6f854fde57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11df30a6ce7d18e00a2427f4ac01c766aefa929d075314ed03cd0c6f854fde57->enter($__internal_11df30a6ce7d18e00a2427f4ac01c766aefa929d075314ed03cd0c6f854fde57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        // line 54
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_11df30a6ce7d18e00a2427f4ac01c766aefa929d075314ed03cd0c6f854fde57->leave($__internal_11df30a6ce7d18e00a2427f4ac01c766aefa929d075314ed03cd0c6f854fde57_prof);

        
        $__internal_364b1a0e9bab21b4c5d18aaaffa14919b2bdc5b3a10d9d9bb83c6d83881b101e->leave($__internal_364b1a0e9bab21b4c5d18aaaffa14919b2bdc5b3a10d9d9bb83c6d83881b101e_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 54,  178 => 53,  169 => 52,  159 => 41,  150 => 40,  139 => 11,  137 => 10,  128 => 9,  110 => 7,  98 => 57,  96 => 52,  89 => 48,  81 => 42,  79 => 40,  70 => 34,  66 => 33,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}Gestionnaire de Mascotte{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Gestionnaire de Mascotte</h1>
      <p>
        Ce projet est propulsé par Symfony.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Retour au cour »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('fg_pet_manager_homepage') }}\">Accueil</a></li>
          <li><a href=\"{{ path('fg_pet_manager_add') }}\">Ajouter une Mascotte</a></li>
        </ul>

       
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>Gizmo  {{ 'now'|date('Y') }}</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "::layout.html.twig", "D:\\wamp\\www\\petManager\\app/Resources\\views/layout.html.twig");
    }
}

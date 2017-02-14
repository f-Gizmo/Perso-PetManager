<?php

/* ::layout.html.twig */
class __TwigTemplate_9d3795304f1cdb30e95ac2ecf1d3757412429c85a9749b2f8e29bfa97120c13a extends Twig_Template
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
        $__internal_70a0c867fa715eef9aa05a9c20a13861b5c97455ff0f6bf4d451c2f0b0e048df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a0c867fa715eef9aa05a9c20a13861b5c97455ff0f6bf4d451c2f0b0e048df->enter($__internal_70a0c867fa715eef9aa05a9c20a13861b5c97455ff0f6bf4d451c2f0b0e048df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_0e1b0576ea6432e0945f9e9123d05dc85a6ecdbb043e82e9ed6404ffd1939b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1b0576ea6432e0945f9e9123d05dc85a6ecdbb043e82e9ed6404ffd1939b44->enter($__internal_0e1b0576ea6432e0945f9e9123d05dc85a6ecdbb043e82e9ed6404ffd1939b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_70a0c867fa715eef9aa05a9c20a13861b5c97455ff0f6bf4d451c2f0b0e048df->leave($__internal_70a0c867fa715eef9aa05a9c20a13861b5c97455ff0f6bf4d451c2f0b0e048df_prof);

        
        $__internal_0e1b0576ea6432e0945f9e9123d05dc85a6ecdbb043e82e9ed6404ffd1939b44->leave($__internal_0e1b0576ea6432e0945f9e9123d05dc85a6ecdbb043e82e9ed6404ffd1939b44_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_beeb6d1cea80d73ef81401d0c2d77c058dbeddd851e91b1680a01270572cb45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beeb6d1cea80d73ef81401d0c2d77c058dbeddd851e91b1680a01270572cb45a->enter($__internal_beeb6d1cea80d73ef81401d0c2d77c058dbeddd851e91b1680a01270572cb45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef078aa834c3a27d9f9d7a4bbf4391f4c97b5e3b7a5373042cb2adb79e5aaa6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef078aa834c3a27d9f9d7a4bbf4391f4c97b5e3b7a5373042cb2adb79e5aaa6e->enter($__internal_ef078aa834c3a27d9f9d7a4bbf4391f4c97b5e3b7a5373042cb2adb79e5aaa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestionnaire de Mascotte";
        
        $__internal_ef078aa834c3a27d9f9d7a4bbf4391f4c97b5e3b7a5373042cb2adb79e5aaa6e->leave($__internal_ef078aa834c3a27d9f9d7a4bbf4391f4c97b5e3b7a5373042cb2adb79e5aaa6e_prof);

        
        $__internal_beeb6d1cea80d73ef81401d0c2d77c058dbeddd851e91b1680a01270572cb45a->leave($__internal_beeb6d1cea80d73ef81401d0c2d77c058dbeddd851e91b1680a01270572cb45a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5dcc53c2c12d8278b1eff6e70c01c8309d294d54ce42a9b6a1d7bb462ab59c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcc53c2c12d8278b1eff6e70c01c8309d294d54ce42a9b6a1d7bb462ab59c2b->enter($__internal_5dcc53c2c12d8278b1eff6e70c01c8309d294d54ce42a9b6a1d7bb462ab59c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ad04753b94be5c9188ebc6516450698376f7febdbf699b5655624e53fd8e4f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad04753b94be5c9188ebc6516450698376f7febdbf699b5655624e53fd8e4f4d->enter($__internal_ad04753b94be5c9188ebc6516450698376f7febdbf699b5655624e53fd8e4f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_ad04753b94be5c9188ebc6516450698376f7febdbf699b5655624e53fd8e4f4d->leave($__internal_ad04753b94be5c9188ebc6516450698376f7febdbf699b5655624e53fd8e4f4d_prof);

        
        $__internal_5dcc53c2c12d8278b1eff6e70c01c8309d294d54ce42a9b6a1d7bb462ab59c2b->leave($__internal_5dcc53c2c12d8278b1eff6e70c01c8309d294d54ce42a9b6a1d7bb462ab59c2b_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_820568d1d71874e3f2354103ddf510881e21f6ee261d0b7195735945249ae99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820568d1d71874e3f2354103ddf510881e21f6ee261d0b7195735945249ae99d->enter($__internal_820568d1d71874e3f2354103ddf510881e21f6ee261d0b7195735945249ae99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f5c4dc595a92021cc257553bbecde08f4637091a72ca5c186b5bc72e2dae4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5c4dc595a92021cc257553bbecde08f4637091a72ca5c186b5bc72e2dae4ce->enter($__internal_9f5c4dc595a92021cc257553bbecde08f4637091a72ca5c186b5bc72e2dae4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "        ";
        
        $__internal_9f5c4dc595a92021cc257553bbecde08f4637091a72ca5c186b5bc72e2dae4ce->leave($__internal_9f5c4dc595a92021cc257553bbecde08f4637091a72ca5c186b5bc72e2dae4ce_prof);

        
        $__internal_820568d1d71874e3f2354103ddf510881e21f6ee261d0b7195735945249ae99d->leave($__internal_820568d1d71874e3f2354103ddf510881e21f6ee261d0b7195735945249ae99d_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4393ea372b8f7624688cf5e26fc60fd386774b0791e7f4b92ab61a77d2609d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4393ea372b8f7624688cf5e26fc60fd386774b0791e7f4b92ab61a77d2609d5->enter($__internal_c4393ea372b8f7624688cf5e26fc60fd386774b0791e7f4b92ab61a77d2609d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef6c00668eb08042150307814fda677a6b11cad7397d999dccd84949cffcedb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6c00668eb08042150307814fda677a6b11cad7397d999dccd84949cffcedb4->enter($__internal_ef6c00668eb08042150307814fda677a6b11cad7397d999dccd84949cffcedb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        // line 54
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_ef6c00668eb08042150307814fda677a6b11cad7397d999dccd84949cffcedb4->leave($__internal_ef6c00668eb08042150307814fda677a6b11cad7397d999dccd84949cffcedb4_prof);

        
        $__internal_c4393ea372b8f7624688cf5e26fc60fd386774b0791e7f4b92ab61a77d2609d5->leave($__internal_c4393ea372b8f7624688cf5e26fc60fd386774b0791e7f4b92ab61a77d2609d5_prof);

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
</html>", "::layout.html.twig", "D:\\wamp\\www\\petManager\\app\\Resources\\views\\layout.html.twig");
    }
}

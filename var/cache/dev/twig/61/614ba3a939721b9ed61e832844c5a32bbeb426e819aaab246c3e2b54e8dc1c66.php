<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b21231e6301c780dde803eb01bd64390fe525469229a318b4d570da8329cf0bf extends Twig_Template
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
        $__internal_32cd61bbae6756bb5bf237251c11083f47487ec49cb9549bc99a8c6068559727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cd61bbae6756bb5bf237251c11083f47487ec49cb9549bc99a8c6068559727->enter($__internal_32cd61bbae6756bb5bf237251c11083f47487ec49cb9549bc99a8c6068559727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_efc2f410b3d028c46e0e762fe84ce23ed71fea0a5c41d3c4135c5c96a97346ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc2f410b3d028c46e0e762fe84ce23ed71fea0a5c41d3c4135c5c96a97346ba->enter($__internal_efc2f410b3d028c46e0e762fe84ce23ed71fea0a5c41d3c4135c5c96a97346ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_32cd61bbae6756bb5bf237251c11083f47487ec49cb9549bc99a8c6068559727->leave($__internal_32cd61bbae6756bb5bf237251c11083f47487ec49cb9549bc99a8c6068559727_prof);

        
        $__internal_efc2f410b3d028c46e0e762fe84ce23ed71fea0a5c41d3c4135c5c96a97346ba->leave($__internal_efc2f410b3d028c46e0e762fe84ce23ed71fea0a5c41d3c4135c5c96a97346ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "D:\\wamp\\www\\petManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

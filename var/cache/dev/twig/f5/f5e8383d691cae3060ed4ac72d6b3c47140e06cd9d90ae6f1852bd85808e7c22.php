<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6151f47f378a9b3ced4d2e20416c87bcc012b13dd4fc7bd88a98115889d513e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d44aa8ec0c24d52117d6a5d1337d2a074c2d4caf2a401136a8da2b80c9f65fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44aa8ec0c24d52117d6a5d1337d2a074c2d4caf2a401136a8da2b80c9f65fb5->enter($__internal_d44aa8ec0c24d52117d6a5d1337d2a074c2d4caf2a401136a8da2b80c9f65fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d44aa8ec0c24d52117d6a5d1337d2a074c2d4caf2a401136a8da2b80c9f65fb5->leave($__internal_d44aa8ec0c24d52117d6a5d1337d2a074c2d4caf2a401136a8da2b80c9f65fb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca12c2008500c794a84538534b8f793746fbd82a083e33d531294643745acad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca12c2008500c794a84538534b8f793746fbd82a083e33d531294643745acad9->enter($__internal_ca12c2008500c794a84538534b8f793746fbd82a083e33d531294643745acad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca12c2008500c794a84538534b8f793746fbd82a083e33d531294643745acad9->leave($__internal_ca12c2008500c794a84538534b8f793746fbd82a083e33d531294643745acad9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e62107248cb7724c9e792137ac2e173f71f2a1ccba5c8b48518016b297dcac0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62107248cb7724c9e792137ac2e173f71f2a1ccba5c8b48518016b297dcac0d->enter($__internal_e62107248cb7724c9e792137ac2e173f71f2a1ccba5c8b48518016b297dcac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e62107248cb7724c9e792137ac2e173f71f2a1ccba5c8b48518016b297dcac0d->leave($__internal_e62107248cb7724c9e792137ac2e173f71f2a1ccba5c8b48518016b297dcac0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21cb243a3637b23ef9b9b99fa828a08837ccaf414107b926fa9bad5b8c753c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cb243a3637b23ef9b9b99fa828a08837ccaf414107b926fa9bad5b8c753c6a->enter($__internal_21cb243a3637b23ef9b9b99fa828a08837ccaf414107b926fa9bad5b8c753c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_21cb243a3637b23ef9b9b99fa828a08837ccaf414107b926fa9bad5b8c753c6a->leave($__internal_21cb243a3637b23ef9b9b99fa828a08837ccaf414107b926fa9bad5b8c753c6a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

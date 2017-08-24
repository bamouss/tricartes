<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5807204a6c954bca42d019e0668b990ac564e8a89bb7ccf8ebbeee116462cf70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8ea84e7be7ea226cafc1aa6df45071db1dd731b179e1125c2d1be707157ce5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ea84e7be7ea226cafc1aa6df45071db1dd731b179e1125c2d1be707157ce5c->enter($__internal_b8ea84e7be7ea226cafc1aa6df45071db1dd731b179e1125c2d1be707157ce5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ea84e7be7ea226cafc1aa6df45071db1dd731b179e1125c2d1be707157ce5c->leave($__internal_b8ea84e7be7ea226cafc1aa6df45071db1dd731b179e1125c2d1be707157ce5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7646c1f414ee69ea0c2375a2716ab5931e21e9865b4688866acef56a636963d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7646c1f414ee69ea0c2375a2716ab5931e21e9865b4688866acef56a636963d5->enter($__internal_7646c1f414ee69ea0c2375a2716ab5931e21e9865b4688866acef56a636963d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7646c1f414ee69ea0c2375a2716ab5931e21e9865b4688866acef56a636963d5->leave($__internal_7646c1f414ee69ea0c2375a2716ab5931e21e9865b4688866acef56a636963d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c08d28ccf1ea61e54392513627b85c8b6000005436219f72f15b7fe1b3127a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08d28ccf1ea61e54392513627b85c8b6000005436219f72f15b7fe1b3127a06->enter($__internal_c08d28ccf1ea61e54392513627b85c8b6000005436219f72f15b7fe1b3127a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c08d28ccf1ea61e54392513627b85c8b6000005436219f72f15b7fe1b3127a06->leave($__internal_c08d28ccf1ea61e54392513627b85c8b6000005436219f72f15b7fe1b3127a06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc9c2d9b7c984ae069003e63c5a097f6fb3304b557f39c14ebdf372a950b8d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9c2d9b7c984ae069003e63c5a097f6fb3304b557f39c14ebdf372a950b8d49->enter($__internal_fc9c2d9b7c984ae069003e63c5a097f6fb3304b557f39c14ebdf372a950b8d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fc9c2d9b7c984ae069003e63c5a097f6fb3304b557f39c14ebdf372a950b8d49->leave($__internal_fc9c2d9b7c984ae069003e63c5a097f6fb3304b557f39c14ebdf372a950b8d49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

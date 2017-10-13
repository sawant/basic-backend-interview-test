<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ac061642df80e0eb0189fe2369c0e2b82e24216fc995dedb695fce361fabcb49 extends Twig_Template
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
        $__internal_238a734f4c0630d65c7065646c0099cbf500f4a2b18678d8cd1866fd4764357f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238a734f4c0630d65c7065646c0099cbf500f4a2b18678d8cd1866fd4764357f->enter($__internal_238a734f4c0630d65c7065646c0099cbf500f4a2b18678d8cd1866fd4764357f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b9c2cec168aafb2c521fe73b99604d4d00232f3be810dcabf04b154b4ee241bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c2cec168aafb2c521fe73b99604d4d00232f3be810dcabf04b154b4ee241bf->enter($__internal_b9c2cec168aafb2c521fe73b99604d4d00232f3be810dcabf04b154b4ee241bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_238a734f4c0630d65c7065646c0099cbf500f4a2b18678d8cd1866fd4764357f->leave($__internal_238a734f4c0630d65c7065646c0099cbf500f4a2b18678d8cd1866fd4764357f_prof);

        
        $__internal_b9c2cec168aafb2c521fe73b99604d4d00232f3be810dcabf04b154b4ee241bf->leave($__internal_b9c2cec168aafb2c521fe73b99604d4d00232f3be810dcabf04b154b4ee241bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_338b1ad985927ad89a3dd999d0d676e798658adcf5c9aba32c7d3ef7ac44074a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338b1ad985927ad89a3dd999d0d676e798658adcf5c9aba32c7d3ef7ac44074a->enter($__internal_338b1ad985927ad89a3dd999d0d676e798658adcf5c9aba32c7d3ef7ac44074a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8328ad5c62db035f692ab9c9d82270aa84c9d726f2101565cb836fd22efcca1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8328ad5c62db035f692ab9c9d82270aa84c9d726f2101565cb836fd22efcca1b->enter($__internal_8328ad5c62db035f692ab9c9d82270aa84c9d726f2101565cb836fd22efcca1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8328ad5c62db035f692ab9c9d82270aa84c9d726f2101565cb836fd22efcca1b->leave($__internal_8328ad5c62db035f692ab9c9d82270aa84c9d726f2101565cb836fd22efcca1b_prof);

        
        $__internal_338b1ad985927ad89a3dd999d0d676e798658adcf5c9aba32c7d3ef7ac44074a->leave($__internal_338b1ad985927ad89a3dd999d0d676e798658adcf5c9aba32c7d3ef7ac44074a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c62dcf4d792fc5ab92d4f5199fbf38476b1443f722652062972b5e75d3d0dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c62dcf4d792fc5ab92d4f5199fbf38476b1443f722652062972b5e75d3d0dff->enter($__internal_6c62dcf4d792fc5ab92d4f5199fbf38476b1443f722652062972b5e75d3d0dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_83b36c05fc7ccd92aeeafa1c14dfc9dd9ed3f1c5897103662221cfdf21248fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b36c05fc7ccd92aeeafa1c14dfc9dd9ed3f1c5897103662221cfdf21248fdd->enter($__internal_83b36c05fc7ccd92aeeafa1c14dfc9dd9ed3f1c5897103662221cfdf21248fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_83b36c05fc7ccd92aeeafa1c14dfc9dd9ed3f1c5897103662221cfdf21248fdd->leave($__internal_83b36c05fc7ccd92aeeafa1c14dfc9dd9ed3f1c5897103662221cfdf21248fdd_prof);

        
        $__internal_6c62dcf4d792fc5ab92d4f5199fbf38476b1443f722652062972b5e75d3d0dff->leave($__internal_6c62dcf4d792fc5ab92d4f5199fbf38476b1443f722652062972b5e75d3d0dff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62c43ac54316f59726b5c1b97b9783d614e4b8644f3df42b257acaa8c192c86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c43ac54316f59726b5c1b97b9783d614e4b8644f3df42b257acaa8c192c86c->enter($__internal_62c43ac54316f59726b5c1b97b9783d614e4b8644f3df42b257acaa8c192c86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f4c3d14b16d6abec3b599794b05386acdc2b67cfe770c93668ee163b030f451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4c3d14b16d6abec3b599794b05386acdc2b67cfe770c93668ee163b030f451->enter($__internal_9f4c3d14b16d6abec3b599794b05386acdc2b67cfe770c93668ee163b030f451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f4c3d14b16d6abec3b599794b05386acdc2b67cfe770c93668ee163b030f451->leave($__internal_9f4c3d14b16d6abec3b599794b05386acdc2b67cfe770c93668ee163b030f451_prof);

        
        $__internal_62c43ac54316f59726b5c1b97b9783d614e4b8644f3df42b257acaa8c192c86c->leave($__internal_62c43ac54316f59726b5c1b97b9783d614e4b8644f3df42b257acaa8c192c86c_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/mcmakler/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
